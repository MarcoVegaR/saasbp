# Phase 3 — Tenants & Memberships

## Goal
User can create a tenant, invite members, switch between tenants.

## Tasks
- `TenantUser` pivot: `tenant_id`, `user_id`, `role`, `status` (active/invited/suspended), `invited_by`, `invited_at`, `joined_at`.
- Tenant creation wizard (Inertia page): name → subdomain check → creates tenant + sets user as owner.
- Invitation flow: send signed email link → recipient registers or logs in → joins tenant.
- `switch-tenant` endpoint: validates membership → sets `current_tenant_id` in session → calls `setPermissionsTeamId($tenantId)` → `app(PermissionRegistrar::class)->forgetCachedPermissions()` → redirects to tenant subdomain.
- Switch UI: dropdown in top nav (all user's tenants + "Create new").
- Filament: tenant list, membership table, impersonate/switch.

## Acceptance
- Full flow E2E: register → create tenant → invite → accept → switch.
- Switching to a tenant the user is NOT a member of → 403.

## Playbook

**Deliverables:** `tenant_user` migration, `TenantController`, `InvitationService`, `SwitchTenantController`, `TenantSwitchTest`, `MembershipInvitationTest`, tenant UI pages.

**Steps:**
1. Create `tenant_user` pivot migration: `tenant_id`, `user_id`, `role`, `status`, `invited_by`, `invited_at`, `joined_at`.
2. Create `TenantController` (central): store wizard (name → slug availability check → create tenant + add domains row + seed owner role).
3. Create `InvitationService`: generate signed URL (7-day TTL), dispatch `MemberInvitedNotification`.
4. Create `InvitationController@accept`: validate signature, create/update `tenant_user` row, redirect to tenant.
5. Create `SwitchTenantController@switch`:
   ```php
   // Validate tenant_user membership
   // Set session
   session(['current_tenant_id' => $tenant->id]);
   // Reset Spatie team context + cache
   setPermissionsTeamId($tenant->id);
   app(PermissionRegistrar::class)->forgetCachedPermissions();
   // Redirect
   return redirect("https://{$tenant->slug}." . env('APP_DOMAIN'));
   ```
6. Create tenant nav dropdown component (React): lists all user's tenants from `$page.props.userTenants`; shows active badge.
7. Share `userTenants` in `HandleInertiaRequests::share`.
8. Add Filament resources: `TenantResource`, `MembershipResource`.
9. Write `TenantSwitchTest` and `MembershipInvitationTest`.

## Verification
```bash
php artisan test --filter TenantSwitch
php artisan test --filter MembershipInvitation
```

## Risks & mitigations
- ⚠ Slug uniqueness race condition → unique DB constraint + retry on `UniqueConstraintViolation`.
- ⚠ Invitation link reuse after acceptance → check `status = active` before accepting again (idempotent).
- ⚠ Permission cache stale after switch → `forgetCachedPermissions()` is Spatie's documented API; do not use `clearPermissionsCache()` (internal).

## Rollback
Remove `SwitchTenantController`; revert `tenant_user` migration; remove invitation routes.
