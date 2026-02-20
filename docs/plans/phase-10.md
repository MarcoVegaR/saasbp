# Phase 10 — Filament Admin Panel

## Goal
Central superadmin panel for managing tenants, users, memberships, audit.

## Tasks
- Filament v3 on central domain at `/admin` (separate panel; no stancl tenancy bootstrapping).
- Resources: `TenantResource`, `UserResource`, `MembershipResource`, `ActivityLogResource`.
- Actions: impersonate tenant, suspend tenant, change plan, view audit trail.
- Auth guard: Filament uses superadmin role check.

## Acceptance
- Superadmin can CRUD tenants and memberships from Filament.
- Non-superadmin cannot access `/admin`.

## Playbook

**Deliverables:** `AdminPanelProvider`, `TenantResource`, `UserResource`, `MembershipResource`, `ActivityLogResource`, `FilamentAccessTest`.

**Steps:**
1. Configure `AdminPanelProvider`: path `/admin`, guard `web`, no stancl tenancy middleware in Filament's route group.
2. Override Filament's route registration to ensure `InitializeTenancyByDomainOrSubdomain` is NOT applied to `/admin/*` routes.
3. Implement Filament auth gate: `->authMiddleware([Authenticate::class])` + custom gate superadmin check in `canAccess()`.
4. Create `TenantResource`: list/create/edit/delete tenants; custom action `SuspendTenant`; custom action `ViewAsDomain`.
5. Create `UserResource`: list users; show tenant memberships; assign/revoke superadmin role.
6. Create `MembershipResource`: list `tenant_user` rows; filter by tenant; change role; revoke.
7. Create `ActivityLogResource`: read-only; filterable by tenant, actor, subject type, date range.
8. Write `FilamentAccessTest`: non-superadmin GET `/admin` → 403/redirect; superadmin → 200.

## Verification
```bash
php artisan test --filter FilamentAccessTest
```

## Risks & mitigations
- ⚠ Filament registers its routes before stancl; tenancy middleware may intercept `/admin` → explicitly exclude `/admin` path in stancl config.
- ⚠ Filament tables may trigger `BelongsToTenant` global scope when no tenant initialized → guard scope with `tenancy()->initialized` (Phase 1).

## Rollback
Remove `AdminPanelProvider` registration; revert to default Filament install state.
