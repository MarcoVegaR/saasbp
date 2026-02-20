# Phase 8 — Observability (Nightwatch)

## Goal
All critical events instrumented; structured logs with tenant context and correlation IDs.

## Tasks
- `laravel/nightwatch` install + config for Laravel Cloud.
- `CorrelationIdMiddleware`: generates/reads `X-Correlation-ID` header; calls `Context::add('correlation_id', ...)`.
- Use `Laravel\Context` (native, Laravel 11+): `Context::add('tenant_id', ...)`, `Context::add('tenant_slug', ...)` — Nightwatch reads Context automatically.
- Instrument via listeners: slow queries (>500ms via `DB::listen`), `JobFailed`, `Login/Logout`, `NotificationSent`, unhandled exceptions.
- `NightwatchServiceProvider`: register all listeners; configure token + environment.
- `docs/observability.md`: logging policy, Context fields, PII masking table.

## Acceptance
- Every request log entry contains `correlation_id` and `tenant_id`.
- Slow query (>500ms) triggers WARNING log with query + bindings masked.
- Exception in tenant context includes `tenant_id` via Context.

## Playbook

**Deliverables:** `CorrelationIdMiddleware`, `ObservabilityServiceProvider`, `config/observability.php`, `NightwatchServiceProvider`, `ObservabilityTest`, `docs/observability.md`.

**Steps:**
1. `composer require laravel/nightwatch`; add `NIGHTWATCH_TOKEN` to `.env.example`.
2. Create `CorrelationIdMiddleware`: `Context::add('correlation_id', $request->header('X-Correlation-ID') ?? Str::uuid()->toString())`; append header to response; register globally in `bootstrap/app.php`.
3. In stancl tenancy boot hook (after tenant initialized): `Context::add('tenant_id', tenancy()->tenant->getKey())` + `Context::add('tenant_slug', tenancy()->tenant->slug)`.
4. Create `config/observability.php`: `slow_query_threshold_ms = 500`, `pii_fields = ['password','token','secret','recovery_codes']`.
5. Create `ObservabilityServiceProvider`: register `DB::listen` → `Log::warning('slow_query', ...)` if over threshold; register `JobFailed`, `Login`, `NotificationSent` listeners.
6. Create `NightwatchServiceProvider`: configure token + environment from config.
7. In `BaseJob`, add `SerializesContext` trait so `correlation_id` propagates to queued jobs.
8. Write `ObservabilityTest` and `docs/observability.md`.

## Verification
```bash
php artisan test --filter ObservabilityTest
make docs-build
```

## Risks & mitigations
- ⚠ `Laravel\Context` not propagated to queued jobs by default → `SerializesContext` trait on `BaseJob` fixes this.
- ⚠ Nightwatch token absent in test env → mock Nightwatch recorder; set `NIGHTWATCH_TOKEN=null` in `phpunit.xml`.
- ⚠ Slow query threshold too low → make configurable; default 500ms.

## Rollback
Remove `ObservabilityServiceProvider` and `NightwatchServiceProvider` from `bootstrap/app.php`; remove `CorrelationIdMiddleware`.
