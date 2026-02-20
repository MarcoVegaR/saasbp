# Phase 1 — Multi-tenancy Foundation

**Status:** 🔄 Next

## Goal
Enforce a verified central/tenant boundary: correct single-DB config, route loading, domain setup, middleware contract, and data isolation proven by tests.

---

## ⚠️ Critical: Single-DB mode must be explicitly enforced

`stancl/tenancy` defaults to **multi-DB mode**. If you don't disable the DB bootstrapper and the DB-creation jobs, the package will try to create databases, change connections, and run migrations per tenant — even when you think you're in single-DB mode.

**These two changes are non-negotiable before any tenant is created:**

### 1. Disable `DatabaseTenancyBootstrapper` in `config/tenancy.php`

```php
// config/tenancy.php
'bootstrappers' => [
    // Stancl\Tenancy\Bootstrappers\DatabaseTenancyBootstrapper::class, ← DISABLED (single-DB)
    Stancl\Tenancy\Bootstrappers\CacheTenancyBootstrapper::class,
    Stancl\Tenancy\Bootstrappers\FilesystemTenancyBootstrapper::class,
    Stancl\Tenancy\Bootstrappers\QueueTenancyBootstrapper::class,
],
```

### 2. Remove DB-creation jobs from `TenancyServiceProvider` event listeners

```php
// app/Providers/TenancyServiceProvider.php
Events\TenantCreated::class => [
    // Remove CreateDatabase, MigrateDatabase, SeedDatabase jobs — single-DB mode
    // JobPipeline::make([...])->send(...)->toListener(),
],
Events\TenantDeleted::class => [
    // Remove DeleteDatabase job — single-DB mode
    // JobPipeline::make([...])->send(...)->toListener(),
],
```

---

## Tenant model shape (exact, for single-DB + domains)

```php
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Database\Concerns\HasDomains; // ← required

class Tenant extends BaseTenant
{
    use HasDomains; // required for domain/subdomain identification

    // Do not add HasDatabase or implement TenantWithDatabase.
    // Those activate multi-DB mode.

    protected $fillable = ['id', 'name', 'slug', 'plan', 'status', 'settings'];

    protected $casts = ['settings' => 'array'];
}
```

`domains` table: managed by stancl. Subdomain rows: no dot (`tenant1`). Custom domain rows: with dot (`acme.test`).

---

## Route loading — single source of truth

| File | Who loads it | How |
|---|---|---|
| `routes/central.php` | `bootstrap/app.php` | `Route::domain(config('saas.central_host'))` |
| `routes/tenant.php` | `TenancyServiceProvider::mapTenantRoutes()` | Automatic |

**`routes/web.php` MUST NOT require `routes/tenant.php`.**

```php
// routes/web.php — thin entry point
require __DIR__ . '/central.php'; // ← only this
```

```php
// app/Providers/TenancyServiceProvider.php — mapTenantRoutes()
Route::middleware([
    'web',
    PreventAccessFromCentralDomains::class,         // ← BEFORE initializer (see middleware order)
    InitializeTenancyByDomainOrSubdomain::class,
])->group(base_path('routes/tenant.php'));
```

---

## Avoid `env()` in route files — use `config()` instead

In production with `php artisan config:cache`, `env()` calls outside `config/` files return `null`. Route files run after config is cached, so `env('APP_DOMAIN')` in a route definition will silently break.

**Deliverable: `config/saas.php`**

```php
// config/saas.php
return [
    'app_domain'   => env('APP_DOMAIN', 'localhost'),
    'central_host' => 'app.' . env('APP_DOMAIN', 'localhost'),
];
```

**Use in routes:**

```php
// routes/central.php
Route::domain(config('saas.central_host'))->group(function () {
    // central routes here
});
```

**Use in TenancyServiceProvider for redirect:**

```php
return redirect('https://' . $tenant->slug . '.' . config('saas.app_domain'));
```

---

## Middleware order (hardened)

**Canonical stack on tenant routes:**

```
web → PreventAccessFromCentralDomains → InitializeTenancyByDomainOrSubdomain → Authenticate → TenantPermissionMiddleware → EnsureEmailIsVerified
```

> **Why `PreventAccessFromCentralDomains` first:** if the initializer runs first and sees a central-domain request, it throws 500 "Tenant could not be identified" before any aborting middleware can intervene. First position → returns 403/404 immediately.

> **Deviation from official docs order:** the stancl docs show the initializer before `PreventAccessFromCentralDomains`. We intentionally differ. Our guardrail tests (`CentralRoutesAccessibleTest`) define the expected behavior; if they pass, the order is correct for our setup.

> **Middleware priority edge case:** there are community reports where stancl/tenancy or the Kernel overrides the declared array order via a priority map. If `CentralRoutesAccessibleTest` returns 500 despite correct array order, explicitly set middleware priority in `TenancyServiceProvider` or `bootstrap/app.php`. The test is the detector — do not work around it another way.

---

## Local dev domain standard

| Role | Host |
|---|---|
| Central app | `app.localhost` |
| Tenant (subdomain) | `{tenant}.localhost` |
| Custom domain (test) | `acme.test` (RFC 6761 reserved — safe for local/CI) |
| Base domain | `localhost` (in `APP_DOMAIN`) |

**Happy path:** Chrome/Firefox — `*.localhost` subdomains resolve natively. `app.localhost` → central; `tenant1.localhost` → tenant.

**Dev server must listen on the correct host.** `php artisan serve` defaults to `127.0.0.1` — it will NOT serve `app.localhost`. Use:
```bash
php artisan serve --host=app.localhost
```
or use Valet/Herd which handle wildcard subdomains automatically. `127.0.0.1` alone will not serve central routes correctly when they are scoped with `Route::domain('app.localhost')`.

**Fallback for Safari/WebKit/restricted resolvers:** Valet/Herd or dnsmasq (`address=/.localhost/127.0.0.1`). For CI: use `HTTP_HOST` header override in Pest — no DNS needed.

> **Do not use `.com` domains in tests** (e.g. `acme.com`). They may collide with real external DNS. Use `.test` (RFC 6761 reserved) or `.localhost`.

---

## `central_domains` configuration

> **Rule:** `config/tenancy.php` is a config file — use `env()` directly here, never `config('saas.*')`. Calling `config()` inside a config file is unreliable during the bootstrap phase. `config/saas.php` is for providers and routes, not for sibling config files.

```php
// config/tenancy.php
'central_domains' => [
    // Local dev — literal values; safe for all environments
    '127.0.0.1',
    'localhost',
    'app.localhost',

    // Production — use env() directly (NOT config('saas.*')):
    // env('APP_DOMAIN', 'tuempresa.com'),           // BASE domain — required
    // 'app.' . env('APP_DOMAIN', 'tuempresa.com'),  // central app host
    //
    // IMPORTANT: include the base domain, not only the app. subdomain.
    // Without it, stancl cannot identify tenant.tuempresa.com as a subdomain.
],
```

---

## Deliverables

1. `config/saas.php` — `app_domain`, `central_host`; all route/redirect code uses `config()` not `env()`
2. `config/tenancy.php` — `DatabaseTenancyBootstrapper` disabled; `central_domains` set; identification middleware to `InitializeTenancyByDomainOrSubdomain`
3. `app/Providers/TenancyServiceProvider.php` — DB-creation jobs removed; `mapTenantRoutes()` uses hardened middleware order
4. `routes/central.php` — all routes inside `Route::domain(config('saas.central_host'))`
5. `routes/web.php` — requires only `central.php`
6. `routes/tenant.php` — loaded exclusively by `TenancyServiceProvider`
7. `App\Models\Tenant` — extends `BaseTenant`, uses `HasDomains`; no multi-DB traits
8. Tenants migration — `id`, `name`, `slug`, `plan`, `status`, `settings(jsonb)`, timestamps
9. `BelongsToTenant` trait — global scope guarded by `if (!tenancy()->initialized) return;`; `creating` event auto-sets `tenant_id` when tenancy is initialized; `updating` event guards against `tenant_id` mutation (immutable once set)
10. `CurrentTenant` singleton — `app/Support/Tenancy/CurrentTenant.php`
11. `App\Models\TenantNote` — fixture model + migration (`tenant_notes` with `tenant_id`) + factory
12. `AGENTS.md` (root) — stack overview, commit conventions, CI commands
13. `app/AGENTS.md` — tenancy guardrails, PII policy, BelongsToTenant requirement
14. `.windsurf/skills/tenancy-guardrails/SKILL.md` — checklist for tenant data isolation
15. `.env` + `.env.example` — `APP_DOMAIN=localhost`

---

## Tasks

1. `php artisan tenancy:install` — publishes config, migrations, provider.
2. Create `config/saas.php` with `app_domain` and `central_host` keys.
3. Edit `config/tenancy.php`: disable `DatabaseTenancyBootstrapper`; set `central_domains`; set identification middleware.
4. Edit `TenancyServiceProvider`: remove DB job pipelines; update `mapTenantRoutes()` with hardened middleware order.
5. Create `App\Models\Tenant`: `HasDomains` only; no multi-DB traits.
6. Update tenants migration: `id`, `name`, `slug`, `plan`, `status`, `settings(jsonb)`, timestamps.
7. Create `BelongsToTenant` trait with `tenancy()->initialized` guard.
8. Create `CurrentTenant` singleton.
9. Create `routes/central.php` with `Route::domain(config('saas.central_host'))` wrapping; update `routes/web.php`.
10. Create `TenantNote` model + migration + factory.
11. Write 5 mandatory tests.
12. Write `AGENTS.md` (root) + `app/AGENTS.md` + `.windsurf/skills/tenancy-guardrails/SKILL.md`.
13. Run `make ci` and fix regressions.

---

## Mandatory tests (5 total)

### `CentralRoutesAccessibleTest`
- `app.localhost` → central routes return 200.
- Request from `app.localhost` to a tenant-only route → **status 403 or 404, never 500**.
- Also assert: `tenancy()->initialized === false` after the request (tenancy was never started).
- If this test returns 500, check middleware priority (see middleware order section above).

### `SingleDbModeTest`
- `Queue::fake()` or `Bus::fake()`; create a tenant via `Tenant::create([...])`.
- Assert `CreateDatabase`, `MigrateDatabase`, `SeedDatabase` are **not dispatched** (job-level contract).
- DB-effect assertions (defense in depth — catch bootstrapper leaks even without a queue):
  - `DB::connection()->getDatabaseName()` is identical before and after tenant creation.
  - `DB::getDefaultConnection()` does not change.
  - Optional: register a `DB::listen()` listener and assert no `CREATE DATABASE` SQL was issued.
- This turns the single-DB rule into a verified contract at both the job and DB driver level.

### `SubdomainResolutionTest`
- `Host: tenant1.localhost` → correct tenant initialized (`tenancy()->tenant->slug === 'tenant1'`).

### `CustomDomainResolutionTest`
- Create domain row with dot (`acme.test`); request with `Host: acme.test` → correct tenant initialized.
- Uses `.test` TLD (RFC 6761 reserved) — safe for local/CI, no DNS collision.
- Verifies `InitializeTenancyByDomainOrSubdomain` handles both subdomain and custom domain formats.

### `TenantIsolationTest`
- **Read isolation:** `TenantNote` created under tenant A is NOT visible when querying under tenant B.
- **Write isolation:** creating a `TenantNote` under tenant A auto-sets `tenant_id` — no manual assignment needed (validates `BelongsToTenant` `creating` hook).
- **Central-context safety:** creating a note with no tenancy initialized does NOT crash — validates guard in both scope and `creating` hook.

---

## Minimal AGENTS.md bootstrapped in Phase 1

These three files unlock AI guardrails from the first PR. Full ecosystem (10 skills + all AGENTS.md files) is completed in Phase 15.

**`AGENTS.md` (root):**
- Stack: Laravel 12 + Inertia 2 + React 19 + stancl/tenancy v3 single-DB
- Commit convention: `type(scope): message`
- Canonical CI command: `make ci`

**`app/AGENTS.md`:**
- Every tenant-scoped model must use `BelongsToTenant` — no exceptions
- Scope guard: `if (!tenancy()->initialized) return;`
- Never log passwords, tokens, TOTP secrets
- PHPStan level 6 must pass

**`.windsurf/skills/tenancy-guardrails/SKILL.md`:**
- Checklist: `BelongsToTenant` present → scope guard present → `TenantIsolationTest` exists → no raw queries bypass `tenant_id`
- Phase 15 expands this with resources/ examples

---

## Secondary models guardrail (awareness — not Phase 1 implementation)

`BelongsToTenant` correctly scopes "primary" tenant models. For **secondary models** (e.g. `Comment` → `Post` → tenant), direct `Comment::all()` may not filter by tenant. stancl documents `BelongsToPrimaryModel` for this.

> **Rule for Phase 1+:** never query secondary models directly without an explicit `whereHas`/join through the primary model. Documented in `app/AGENTS.md`. Implement `BelongsToPrimaryModel` in relevant module phases.

---

## Acceptance

`make ci` green. No 500 "Tenant could not be identified" from any domain. All 5 mandatory tests pass. `SingleDbModeTest` confirms no DB-creation jobs fire on `TenantCreated`.

## Verification

```bash
php artisan migrate:fresh
php artisan test --filter CentralRoutes
php artisan test --filter SingleDbMode
php artisan test --filter SubdomainResolution
php artisan test --filter CustomDomain
php artisan test --filter TenantIsolation
make ci
```

---

## Risks & mitigations

| Risk | Mitigation |
|---|---|
| `DatabaseTenancyBootstrapper` still active → multi-DB behavior | Explicitly disabled in config; `TenantCreated` listener has no DB jobs |
| `HasDatabase`/`TenantWithDatabase` on Tenant model → activates multi-DB | Tenant model spec: only `HasDomains`; no other multi-DB traits imported |
| Double-loaded `tenant.php` → flaky tests | `web.php` requires ONLY `central.php`; `TenancyServiceProvider` owns tenant route loading |
| "Tenant could not be identified" 500 from central domain | `PreventAccessFromCentralDomains` before initializer; `CentralRoutesAccessibleTest` catches any regression |
| Middleware priority override by stancl/Kernel | Documented; if 500 appears, fix priority in provider; test catches it |
| `env()` in route files → null after `config:cache` | `config/saas.php` isolates env reads; routes use `config()` only |
| `acme.com` test domain → real DNS collision | Tests use `acme.test` (RFC 6761 reserved) |
| `*.localhost` fails on Safari/WebKit | Documented fallbacks: Valet/dnsmasq/hosts; CI uses header override |
| `central_domains` missing base domain in prod | Both base domain AND `app.` subdomain required; `SubdomainResolutionTest` catches misconfiguration |
| `BelongsToTenant` fires before tenancy initialized (Filament) | Guard: `if (!tenancy()->initialized) return;` |

---

## Rollback

Remove stancl `TenancyServiceProvider` from `bootstrap/app.php`; revert `routes/web.php`; drop `tenant_notes`, `domains`, `tenants` migrations; remove `config/saas.php`.
