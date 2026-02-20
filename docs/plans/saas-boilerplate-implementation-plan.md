# SaaS Boilerplate — Implementation Plan

Plan for building a generic, reusable SaaS boilerplate on Laravel 12 + Inertia 2 + React 19 + PostgreSQL with multi-tenancy, RBAC, scaffolding generator, observability, MkDocs documentation, and Windsurf Skills + AGENTS.md ecosystem (ready for Laravel Cloud).

## Key Technical Decisions

| Area | Decision | Rationale |
|---|---|---|
| Starter | `laravel new` with official React+Inertia+TS starter kit | Inertia 2 + React 19 + TS + Tailwind 4 + shadcn/ui |
| Tenancy | `stancl/tenancy` v3 (single DB) | Subdomain/custom-domain lifecycle + tenant scoping |
| Admin | Filament v3 in central domain only | Avoid tenant bootstrap conflicts in admin routes |
| Auth | Starter kit + `pragmarx/google2fa-laravel` (feature-flagged) | Standard auth + controlled MFA rollout |
| Testing | Pest | Laravel-first and fast to author |
| Queue driver | Redis | Laravel Cloud-compatible for queue/cache/session |
| Session strategy | Redis + cookie domain | Better UX for multi-subdomain SSO |
| Audit | `spatie/laravel-activitylog` | Model + business events logging |
| i18n frontend | Laravel `lang/` as source of truth + Inertia shared props + typed hook | No extra i18n package, keeps stack simple |

## Architecture Overview (target)

- Central: `app.tuempresa.com`
- Tenant subdomain: `{tenant}.tuempresa.com`
- Custom domain: `{custom-domain.com}`

Routes:
- `routes/web.php` thin entry point
- `routes/central.php` central routes
- `routes/tenant.php` tenant routes
- `routes/api.php` tenant-aware API when needed

Tenant lifecycle middleware order (canonical):
1. `InitializeTenancyByDomainOrSubdomain`
2. `Authenticate`
3. `TenantPermissionMiddleware` (sets team context)
4. `EnsureEmailIsVerified`

## Guiding Principles

- Single Responsibility (Controller -> Service -> Model)
- Authorization first (Policy/Gate before state changes)
- Tenant safety by default (`BelongsToTenant` + isolation tests)
- Convention over configuration (generator-enforced module layout)

## Cross-cutting Guardrails

- Central routes never initialize tenancy.
- Every tenant-scoped model must apply tenant scope.
- Team context must be set before policy checks.
- Reset team context + permissions cache after tenant switch.
- Logging must include `correlation_id` and `tenant_id` and must never include secrets.
- Laravel Cloud ephemeral disk rule:
  - `SESSION_DRIVER=redis`
  - `CACHE_STORE=redis`
  - `QUEUE_CONNECTION=redis`
  - `FILESYSTEM_DISK=s3`

Mandatory tests:
- `TenantIsolationTest`
- `CentralRoutesAccessibleTest`
- `TenantSwitchRbacTest`
- `TeamContextAlwaysSetTest`

## Phases & Milestones (index)

- Phase 0: Project scaffolding & packages
- Phase 1: Multi-tenancy foundation
- Phase 2: Auth & account
- Phase 3: Tenants & memberships
- Phase 4: RBAC (Spatie teams)
- Phase 5: Audit & activity log
- Phase 6: Notifications
- Phase 7: Jobs & queues
- Phase 8: Observability (Nightwatch)
- Phase 9: UI base components
- Phase 10: Filament admin panel
- Phase 11: Scaffold generator (`make:saas-module`)
- Phase 12: i18n (ES/EN)
- Phase 13: Quality & CI hardening
- Phase 14: MkDocs documentation site
- Phase 15: Windsurf skills + AGENTS.md ecosystem

## Phase 0 — Project Scaffolding & Packages

### Goal
Working Laravel 12 app, packages installed, CI skeleton, PostgreSQL configured.

### Deliverables
- `composer.json`
- `package.json`
- `pint.json`
- `phpstan.neon`
- `tsconfig.json`
- `.env.example`
- `.github/workflows/ci.yml`
- `Makefile`

### Tasks
1. Scaffold Laravel + React starter.
2. Configure PostgreSQL and validate migrations.
3. Install packages:
   - `stancl/tenancy`
   - `spatie/laravel-permission`
   - `spatie/laravel-activitylog`
   - `filament/filament:^3`
   - `pragmarx/google2fa-laravel`
   - `laravel/nightwatch`
   - `laravel/horizon`
4. Install Filament panel.
5. Configure quality tools (Pint, PHPStan level 6 + Larastan, TS strict).
6. Set cloud-ready env defaults (`redis` + `s3`) and MFA/Nightwatch flags.
7. Add Makefile targets (`test`, `lint`, `analyse`, `docs-serve`, `docs-build`, `docs-check-links`).
8. Add CI workflow with PostgreSQL service and checks (`pest`, `pint --test`, `phpstan`, `tsc --noEmit`, `docs-build`).

### Acceptance
`php artisan test` passes and CI is green.

### Verification command
```bash
php artisan test && ./vendor/bin/pint --test && ./vendor/bin/phpstan analyse && npx tsc --noEmit
```

## User-provided recommendations incorporated

1. Use `PermissionRegistrar::forgetCachedPermissions()` (not `clearPermissionsCache()`).
2. If `InitializeTenancyByDomainOrSubdomain` is custom, document it explicitly.
3. Keep middleware order consistent between guardrails and implementation.
4. Align i18n strategy (flat key map or namespaced keys) to avoid runtime/type mismatch.

## Notes

This document was restored after re-scaffolding the repository. It is the canonical implementation plan inside the repo and should be versioned from now on.
