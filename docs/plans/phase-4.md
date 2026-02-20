# Phase 4 — RBAC (Spatie Multi-Tenant)

## Goal
Permission checks scoped to tenant; superadmin bypasses; policies on all resources.

## Tasks
- Spatie config: teams mode enabled (`PERMISSION_TEAMS=true`).
- Roles: `owner`, `admin`, `member` (tenant-scoped) + `superadmin` (global, central).
- Permission naming: `{resource}:{action}` — e.g. `users:view`, `users:create`, `users:delete`.
- `PermissionSeeder`: seeds all roles + permissions per tenant on creation.
- `HasTenantPermissions` trait on `User`: wraps `hasPermissionTo` with explicit `setPermissionsTeamId($tenantId)`.
- `TenantPermissionMiddleware`: calls `setPermissionsTeamId` from current tenant on every tenant request.
- `TenantScopedPolicy` base class: checks `tenant_id` ownership + permission.
- `Gate::before` for superadmin.

## Acceptance
- Member cannot perform admin-only action; owner can; superadmin can do anything.
- `TenantSwitchRbacTest`: switching tenant resets context; old tenant permissions do NOT carry over.

## Playbook

**Deliverables:** `config/permission.php` (teams: true), `TenantPermissionMiddleware`, `HasTenantPermissions`, `TenantScopedPolicy`, `PermissionSeeder`, `RbacTest`, `TenantSwitchRbacTest`, `TeamContextAlwaysSetTest`.

**Steps:**
1. Publish Spatie config; set `'teams' => true` in `config/permission.php`.
2. Run Spatie migrations; verify `model_has_roles` includes `team_id` column.
3. Create `TenantPermissionMiddleware`: resolve current tenant from `tenancy()->tenant`, call `setPermissionsTeamId($tenant->id)`.
4. Create `HasTenantPermissions` trait on `User`: `hasPermission(string $permission): bool` always calls `setPermissionsTeamId` before checking.
5. Create `TenantScopedPolicy`: `$resource->tenant_id === CurrentTenant::id()` AND `$user->hasPermission('{resource}:action')`.
6. Create `PermissionSeeder`: define standard permissions (`{resource}:view|create|update|delete`), seed roles `owner`/`admin`/`member`; hook into tenant creation event.
7. Register superadmin `Gate::before` in `AuthServiceProvider`.
8. Write `RbacTest`, `TenantSwitchRbacTest`, `TeamContextAlwaysSetTest`.

## Verification
```bash
php artisan test --filter RbacTest
php artisan test --filter TenantSwitchRbacTest
php artisan test --filter TeamContextAlwaysSetTest
```

## Risks & mitigations
- ⚠ `setPermissionsTeamId` not called in console/job context → jobs that check permissions must call it explicitly; document in `BaseJob`.
- ⚠ PHPStan doesn't understand Spatie magic methods → add Spatie stubs to `phpstan.neon`.
- ⚠ Seeder runs on every test → `RefreshDatabase` + seed only in tests that need RBAC.

## Rollback
Remove `TenantPermissionMiddleware` from middleware group; revert `config/permission.php`.
