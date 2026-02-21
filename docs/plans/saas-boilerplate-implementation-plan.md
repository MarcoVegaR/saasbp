# SaaS Boilerplate — Implementation Plan (Index)

Plan for building a generic, reusable SaaS boilerplate on Laravel 12 + Inertia 2 + React 19 + PostgreSQL with multi-tenancy, RBAC, scaffolding generator, full observability, MkDocs documentation, and a Windsurf Skills + AGENTS.md developer-experience ecosystem — ready for Laravel Cloud.

> **Estructura de archivos:** Este archivo contiene la arquitectura global, guardrails y el índice de fases.
> Cada fase tiene su propio archivo: `phase-0.md` … `phase-15.md`.

---

## Key Technical Decisions

| Area | Decision | Rationale |
|---|---|---|
| Starter | `laravel new` with official React+Inertia+TS starter kit | Ships Inertia 2, React 19, TypeScript, Tailwind 4, shadcn/ui out of the box |
| Tenancy | `stancl/tenancy` v3 (single-DB mode) | Best-in-class subdomain/domain routing + lifecycle hooks; BelongsToTenant trait for data scoping |
| Admin | Filament v3 on central domain only | Avoids conflict with stancl tenant bootstrapping on tenant subdomains |
| Auth | Laravel starter kit + `pragmarx/google2fa-laravel` (MFA as feature-flagged) | Standard + battle-tested TOTP; guarded by `FEATURES_MFA=false` env flag until ready |
| Testing | Pest | First-class Laravel support, expressive syntax, faster to write; all feature tests in `tests/Feature/` |
| Queue driver | Redis (Laravel Cloud KV store) | Recommended for Cloud; also used for cache/sessions |
| Session strategy | Redis + cookie domain `.tuempresa.com` for subdomains; one-time signed token flow for custom domains | Best balance of security and UX for multi-subdomain SSO |
| Audit | `spatie/laravel-activitylog` | Covers both model auditing and business events; easy to query |
| i18n frontend | Laravel `lang/` files as source of truth → shared via `HandleInertiaRequests::share` as `$page.props.trans` + `useTrans()` hook + TS key-type generation script | No extra package; standard Inertia pattern; fully typed on frontend |

---

## Architecture Overview

```
app.tuempresa.com        ← Central domain (registration, tenant creation, Filament admin)
{tenant}.tuempresa.com   ← Tenant subdomains (stancl domains table: no dots)
{custom-domain.com}      ← Custom domains  (stancl domains table: with dots)
```

Routes (Option B — consistent throughout):
- `routes/web.php`      ← Thin entry point; requires **only** `central.php` — never `tenant.php`
- `routes/central.php`  ← All central routes; **always wrapped in `Route::domain()`** scoped to central hosts
- `routes/tenant.php`   ← Loaded **exclusively** by `TenancyServiceProvider::mapTenantRoutes()`; never required from `web.php`
- `routes/api.php`      ← API (rare; tenant-aware)

> **Why:** if `web.php` also requires `tenant.php`, routes register twice — flaky tests and unpredictable middleware precedence.

Request lifecycle (tenant routes):
```
Request → PreventAccessFromCentralDomains → InitializeTenancyByDomainOrSubdomain → Auth → RBAC Gate (setPermissionsTeamId) → Controller → Service → Model (BelongsToTenant global scope)
```

Folder conventions:
```
app/
  Central/          ← Models/Services that live on central domain
  Tenant/           ← Per-module tenant-scoped code
    {Module}/
      Models/
      Services/
      Repositories/  ← optional
      Http/
        Controllers/
        Requests/
        Policies/
  Support/           ← Shared traits, interfaces, helpers
resources/js/
  Pages/             ← Inertia pages (Central/ and Tenant/ subdirs)
  Components/        ← Shared UI components (base DataTable, Form, etc.)
  Layouts/
```

---

## Guiding Principles

Encoded in `app/AGENTS.md` and the `tenancy-guardrails` skill; enforced by tests and PHPStan.

- **Single Responsibility** — Controllers are thin (delegate to Services); Services own business logic; Repositories are optional and data-access only.
- **Authorization-first** — Every state-changing action must pass through a Policy or Gate before executing. No authorization in Services or Models.
- **Tenant-safety by default** — Every Eloquent model that is tenant-scoped uses `BelongsToTenant`. No raw query or scope may bypass `tenant_id` filtering. Verified by `TenantIsolationTest` in every module.
- **Convention over configuration** — All modules follow the same folder structure (`Tenant/{Module}/...`). The scaffold generator enforces this; deviating requires a documented reason.

---

## Cross-cutting Guardrails (Global)

These rules apply across all phases. Violations are caught by CI, PHPStan, or dedicated guardrail tests.

### 1. Middleware order on tenant routes (required)
```
web → PreventAccessFromCentralDomains → InitializeTenancyByDomainOrSubdomain → Authenticate → TenantPermissionMiddleware → EnsureEmailIsVerified → [route-specific]
```

> **Why `PreventAccessFromCentralDomains` first:** if the initializer runs first and sees a central-domain request, it throws 500 "Tenant could not be identified" before any aborting middleware can intervene. Running the check first returns 403 immediately.

### 2. Central routes MUST NEVER initialize tenancy
`routes/central.php` excludes all tenancy middleware AND its routes are **always wrapped in `Route::domain()`** scoped to central hosts, so they cannot be matched on tenant hosts.

`tenancy.central_domains` in `config/tenancy.php` must list:
- **Dev:** `['127.0.0.1', 'localhost', 'app.localhost']`
- **Prod:** `['tuempresa.com', 'app.tuempresa.com']`  ← must include the base domain so stancl can identify `{tenant}.tuempresa.com` as a subdomain of a central domain.

Test: `CentralRoutesAccessibleTest`.

### 3. Every tenant-scoped model MUST use `BelongsToTenant`
No raw query bypasses `tenant_id`. Test: `TenantIsolationTest` per module.

### 4. RBAC team context MUST be set before any Policy/Gate evaluation
`TenantPermissionMiddleware` owns this; controllers never call `setPermissionsTeamId` directly.

### 5. `setPermissionsTeamId` + permission cache clear MUST happen on every switch-tenant
Use `app(PermissionRegistrar::class)->forgetCachedPermissions()`. Test: `TenantSwitchRbacTest`.

### 6. Logging/PII policy
Never log passwords, tokens, TOTP secrets, card data. Always include `correlation_id` and `tenant_id` via `Laravel\Context`. Nightwatch captures Context automatically.

### 7. Environment profiles
**Local dev profile (default):** `SESSION_DRIVER=file`, `CACHE_STORE=file`, `QUEUE_CONNECTION=database`, `FILESYSTEM_DISK=local`.

**Cloud profile (must set for production/Laravel Cloud):** `SESSION_DRIVER=redis`, `CACHE_STORE=redis`, `QUEUE_CONNECTION=redis`, `FILESYSTEM_DISK=s3`. Never write persistent data to `storage/app` in Cloud.

`APP_DOMAIN` convention: `APP_DOMAIN=localhost` for dev; `APP_DOMAIN=tuempresa.com` for prod. The central host is `app.${APP_DOMAIN}`.

**Mandatory guardrail tests (must pass at all times):**
- `TenantIsolationTest` — cross-tenant read/write is impossible
- `CentralRoutesAccessibleTest` — central routes never trigger tenancy
- `TenantSwitchRbacTest` — permission context fully resets on switch
- `TeamContextAlwaysSetTest` — every tenant request has `setPermissionsTeamId` called

---

## Phases & Milestones

| Phase | Name | File | Status |
|---|---|---|---|
| 0 | Project scaffolding & packages | [phase-0.md](phase-0.md) | ✅ Done |
| 1 | Multi-tenancy foundation | [phase-1.md](phase-1.md) | ✅ Done |
| 2 | Auth & account | [phase-2.md](phase-2.md) | ⏳ |
| 3 | Tenants & memberships | [phase-3.md](phase-3.md) | ⏳ |
| 4 | RBAC (Spatie teams) | [phase-4.md](phase-4.md) | ⏳ |
| 5 | Audit & activity log | [phase-5.md](phase-5.md) | ⏳ |
| 6 | Notifications | [phase-6.md](phase-6.md) | ⏳ |
| 7 | Jobs & queues | [phase-7.md](phase-7.md) | ⏳ |
| 8 | Observability (Nightwatch) | [phase-8.md](phase-8.md) | ⏳ |
| 9 | UI base components | [phase-9.md](phase-9.md) | ⏳ |
| 10 | Filament admin panel | [phase-10.md](phase-10.md) | ⏳ |
| 11 | Scaffold generator (`make:saas-module`) | [phase-11.md](phase-11.md) | ⏳ |
| 12 | i18n (ES/EN) | [phase-12.md](phase-12.md) | ⏳ |
| 13 | Quality & CI hardening | [phase-13.md](phase-13.md) | ⏳ |
| 14 | MkDocs documentation site | [phase-14.md](phase-14.md) | ⏳ |
| 15 | Windsurf skills + AGENTS.md ecosystem | [phase-15.md](phase-15.md) | ⏳ |

---

## Dependency Map

```
Phase 0 → Phase 1 → Phase 2 → Phase 3 → Phase 4
                                              ↓
Phase 9 → Phase 11 ←──────────────────── Phase 4
    ↓                    ↓
Phase 10           Phase 5 → Phase 6 → Phase 7 → Phase 8
                                                      ↓
                         Phase 12 → Phase 13 → Phase 14 → Phase 15
```

---

## Estimated Effort

| Phase | Size | | Phase | Size |
|---|---|---|---|---|
| 0 | S ✅ | | 8 | S |
| 1 | L | | 9 | L |
| 2 | M | | 10 | M |
| 3 | M | | 11 | L |
| 4 | M | | 12 | S |
| 5 | S | | 13 | S |
| 6 | S | | 14 | M |
| 7 | S | | 15 | M |

---

## Resolved Decisions

| # | Question | Resolution |
|---|---|---|
| 1 | stancl/tenancy mode | stancl/tenancy v3 single-DB + BelongsToTenant — confirmed |
| 2 | MFA depth | Scaffold only: tables + `FEATURES_MFA` flag + placeholder UI |
| 3 | Domain placeholder | `APP_DOMAIN` env var throughout; `tuempresa.com` is docs-only example |
| 4 | Billing skeleton | `subscriptions` table + `BillingAdapterInterface` + `StripeBillingAdapter` stub |
| 5 | Filament version | Filament v3 (latest stable) |

---

## User-provided recommendations incorporated

1. Use `app(PermissionRegistrar::class)->forgetCachedPermissions()` (Spatie's documented API — not `clearPermissionsCache()`).
2. If `InitializeTenancyByDomainOrSubdomain` is custom, document it explicitly.
3. Keep middleware order consistent between guardrails and implementation.
4. Align i18n strategy: decide flat vs. namespaced map and document it before Phase 12 (see [phase-12.md](phase-12.md)).

---

## Change Log

- Added **Cross-cutting Guardrails** section with explicit middleware order, central-routes-never-initialize-tenancy rule, and 4 mandatory guardrail tests.
- Fixed **i18n frontend decision** — standard Laravel `lang/` → Inertia shared props → `useTrans()` hook + TS key-type generation.
- **Tenancy: stancl domains table** — removed `custom_domain` column from tenants; single `InitializeTenancyByDomainOrSubdomain` middleware.
- **Routes: Option B** — `web.php` thin entry; `central.php` routes wrapped in `Route::domain()`.
- **Spatie team context** — `setPermissionsTeamId` + `forgetCachedPermissions()` on every switch; `TenantPermissionMiddleware` sets context automatically.
- **Hardened OTT SSO security** — token stored hashed SHA-256, TTL 90s, atomic consumption via `lockForUpdate`.
- **Observability: Laravel\Context** — replaced custom `TenantContextMiddleware` with native `Laravel\Context` API.
- **Horizon marked optional** — installed + documented but not required for basic Cloud operation.
- **Phase Playbooks** (Phases 0–15) — each phase has Objective, Deliverables, Steps, Verification, Risks, Rollback.
- **BelongsToTenant guard** — scope checks `tenancy()->initialized` before filtering.
- **SESSION_DOMAIN** — derived programmatically in `config/session.php`; not relying on `${VAR}` expansion.
- **`central_domains` for prod** — must include base domain `tuempresa.com` AND `app.tuempresa.com` so stancl can identify tenant subdomains correctly.
- **`CACHE_STORE` corrected** — replaced `CACHE_DRIVER` with `CACHE_STORE` (Laravel 11/12 standard in `config/cache.php`).
- **Spatie cache reset corrected** — replaced `clearPermissionsCache()` with `forgetCachedPermissions()` throughout.
- **`routes/central.php` domain scoping** — made `Route::domain()` wrapping a non-negotiable rule, not just a recommendation.
- **i18n export corrected** — clarified `trans('namespace')` (returns full array) vs `__('namespace.key')` (returns string); defined flat-map vs nested approach in phase-12.md.
- **Phase 0 real-world outcomes** — PostgreSQL port 5434, no-Redis local defaults, PHPStan memory limit, `npm run build` required before Pest in CI.
- **Phase 1 adjusted** — `app.localhost` + `{tenant}.localhost` local dev standard; `PreventAccessFromCentralDomains` non-optional.
- **Plan split into per-phase files** — main file is now the global index; each phase has its own `phase-N.md`.
- **Phase 1 hardened (single-DB explicit)** — `DatabaseTenancyBootstrapper` must be disabled; `CreateDatabase`/`MigrateDatabase`/`SeedDatabase` jobs removed from `TenantCreated`; `DeleteDatabase` from `TenantDeleted`. Without this the package silently activates multi-DB mode.
- **Tenant model shape locked** — extends `BaseTenant`, uses `HasDomains`, explicitly does NOT use `TenantWithDatabase`/`HasDatabase`.
- **Route loading ambiguity resolved** — `routes/web.php` requires ONLY `central.php`; `routes/tenant.php` loaded exclusively by `TenancyServiceProvider::mapTenantRoutes()`. Double-loading causes flaky tests.
- **Middleware order corrected** — `PreventAccessFromCentralDomains` now runs BEFORE `InitializeTenancyByDomainOrSubdomain` in all tenant route stacks; prevents 500 "Tenant could not be identified" from central domains.
- **`CustomDomainResolutionTest` added** — tests that a domain row with a dot (`acme.test`) is correctly resolved; validates custom domain support from Phase 1.
- **Secondary models guardrail documented** — `BelongsToPrimaryModel` awareness added; rule: never query secondary models directly without joining through primary.
- **`env()` banned in route files** — `config/saas.php` added as Phase 1 deliverable; all route/redirect code uses `config('saas.*')` to survive `php artisan config:cache`.
- **`.test` TLD for custom domain tests** — replaced `acme.com` with `acme.test` (RFC 6761 reserved); prevents real DNS collisions in local/CI.
- **Middleware priority edge case documented** — `CentralRoutesAccessibleTest` is the detector; if 500 appears despite correct array order, fix via explicit priority in `TenancyServiceProvider`.
- **Minimal AGENTS.md bootstrapped in Phase 1** — root `AGENTS.md`, `app/AGENTS.md`, and `tenancy-guardrails` skill added as Phase 1 deliverables; full ecosystem remains Phase 15.

---

## Notes

This is the single canonical implementation plan for the saasbp repository. All plan changes must be made here and versioned with git. Do not maintain external plan files.
