# Phase 4 — RBAC (Spatie Multi-Tenant)

## Goal
Introduce tenant-scoped authorization with Spatie Teams, without breaking the Phase 2/3 guardrails:

- central auth + tenant lifecycle stay central-only,
- tenant protected routes still require `auth + verified + tenant.member`,
- only active memberships can operate in tenant context.

## Devil's-advocate adjustments (what can go wrong if we do this naively)

1. Permission tables already exist. If they were migrated with `PERMISSION_TEAMS=false`, just toggling the flag later causes schema/runtime mismatch (`team_id` missing in pivot tables).
2. `tenant_user.role` is already used by lifecycle flows. Introducing Spatie roles without a sync/backfill strategy creates dual-source drift.
3. Suspended/invited users can still have role rows. Policies that only check permissions can accidentally allow actions if membership status is not enforced.
4. A global `Gate::before` can become overreach if used as a routing shortcut. Superadmin bypass must not bypass tenancy initialization or `tenant.member` membership checks.
5. Queue jobs/commands do not inherit HTTP tenant context; missing `setPermissionsTeamId()` can produce false denies/allows.

## Non-negotiables

- Central auth and lifecycle endpoints remain on `app.<APP_DOMAIN>`.
- Tenant routes remain protected by `auth + verified + tenant.member`.
- Invitation and OTT security contracts from previous phases stay unchanged.
- `PERMISSION_TEAMS` remains the rollout switch, with safe fallback behavior.
- No logging of tokens/secrets/recovery codes.

## Tasks

- **Config + schema compatibility (first):**
  - Keep `config/permission.php` env-driven.
  - Add `PERMISSION_TEAMS` to `.env.example`.
  - Add an **incremental** migration that aligns existing permission tables with teams mode when needed (`roles`, `model_has_roles`, `model_has_permissions` + indexes/keys).
  - Do not recreate or rerun base Spatie migrations.
- **Role model + sync strategy:**
  - Tenant-scoped roles: `owner`, `admin`, `member` (`team_id = tenant_id`).
  - Global central role: `superadmin` bound to a reserved global team context (`team_id = __central__`) so it remains outside tenant scopes.
  - Permission naming: `{resource}:{action}` (e.g. `users:view`, `users:create`, `users:delete`).
  - Create a sync/backfill path from `tenant_user.role` to Spatie roles for existing memberships.
- **Team context lifecycle:**
  - Add `TenantPermissionMiddleware` on tenant route stack to call `setPermissionsTeamId((string) tenant()->getKey())` before policy checks.
  - Add central-context reset middleware (`setPermissionsTeamId(null)`) to prevent context bleed in long-lived workers.
  - Keep switch-tenant cache reset behavior (`PermissionRegistrar::forgetCachedPermissions()`).
- **Authorization abstraction:**
  - Add `HasTenantPermissions` helpers on `User` with explicit tenant parameter for non-HTTP contexts.
  - Add `TenantScopedPolicy` base class for tenant-owned models (`BelongsToTenant`) enforcing:
    - resource tenant ownership,
    - active membership,
    - required permission.
  - Move owner/admin checks (e.g. invitation privileges) to permissions after backfill, with temporary fallback only during rollout.

## Acceptance

- Role matrix works per tenant: member denied admin actions; admin/owner allowed by permission grants.
- Suspended/invited memberships are denied even if stale role assignments exist.
- `TenantSwitchRbacTest`: switching tenant resets team context; old-tenant permissions do not carry over.
- `TeamContextAlwaysSetTest`: every tenant request evaluates permissions with explicit team context.
- Superadmin bypass applies to authorization gates/policies, not to tenancy bootstrap or membership middleware.

## Playbook

**Deliverables:**

- `.env.example` update (`PERMISSION_TEAMS`),
- teams-compat migration for existing Spatie tables,
- `TenantPermissionMiddleware` + central-context reset middleware,
- `HasTenantPermissions` trait,
- `PermissionSeeder` + role backfill command/service,
- `TenantScopedPolicy` base class,
- superadmin `Gate::before` registration in `AppServiceProvider`,
- tests: `RbacTest`, `TenantSwitchRbacTest`, `TeamContextAlwaysSetTest`, `RbacBackfillTest`.

**Steps:**

1. Audit current schema state of `roles`, `model_has_roles`, `model_has_permissions` for `team_id` support.
2. Add `PERMISSION_TEAMS` in `.env.example` and document rollout sequence (dev/staging first).
3. Create incremental teams-compat migration for existing databases.
4. Build/attach `TenantPermissionMiddleware` in tenant route stack (`TenancyServiceProvider`).
5. Build/attach central-context reset middleware for central web requests.
6. Implement `HasTenantPermissions` helper methods for HTTP + jobs/commands use.
7. Implement `PermissionSeeder` (canonical permissions + role grants).
8. Implement backfill/sync from `tenant_user.role` for existing active memberships.
9. Add superadmin `Gate::before` in `AppServiceProvider` (policy/gate only).
10. Introduce `TenantScopedPolicy` base and migrate first protected resource to validate the pattern.
11. Replace owner/admin pivot-role checks with permission checks (keep temporary fallback during migration window).
12. Add test matrix (`RbacTest`, `TenantSwitchRbacTest`, `TeamContextAlwaysSetTest`, `RbacBackfillTest`) and run CI.

## Verification

```bash
php artisan test --filter RbacTest
php artisan test --filter TenantSwitchRbacTest
php artisan test --filter TeamContextAlwaysSetTest
php artisan test --filter RbacBackfillTest
make ci
```

## Risks & mitigations

- ⚠ Teams schema mismatch in existing DBs -> add incremental compatibility migration before enabling `PERMISSION_TEAMS=true`.
- ⚠ Pivot-role vs Spatie-role drift -> explicit backfill + sync path; remove fallback only after passing test matrix.
- ⚠ Missing team context in async contexts -> helper API requires explicit tenant; add coverage in tests.
- ⚠ Superadmin bypass abuse -> constrain bypass to gates/policies; never bypass tenancy initialization or membership middleware.
- ⚠ Performance regression from cache churn -> clear Spatie cache on role/permission/switch events, not on every request.

## Rollback

Set `PERMISSION_TEAMS=false`, remove RBAC middlewares from stacks, disable permission-based checks (restore temporary fallback), and rollback Phase 4 incremental migration and seed/backfill artifacts.
