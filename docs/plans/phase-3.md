# Phase 3 — Tenants & Memberships

## Goal
Enable a full tenant lifecycle on central app: create tenant, invite members, accept invitation, and switch safely between tenants.

## Devil's-advocate adjustments (what can go wrong if we don't fix now)

1. `tenant_user` already exists from Phase 2. Re-creating it in Phase 3 will break migrations.
2. `setPermissionsTeamId()` belongs to RBAC context (Phase 4). Hard-coupling it now creates sequence risk.
3. Tenancy is host-driven (`tenant.localhost`), not session-driven. Session `current_tenant_id` is auxiliary only.
4. Filament resources are already planned in Phase 10. Implementing them here duplicates scope.

## Non-negotiables

- Central-only contract remains: create/invite/switch endpoints live on `app.<APP_DOMAIN>`.
- Tenant routes remain protected by `auth + verified + tenant.member` (from Phase 2).
- No raw invite or OTT tokens in logs.
- Single-DB contract from Phase 1 remains unchanged.

## Tasks

- **Evolve** existing `tenant_user` pivot with an incremental migration:
  - add `status` (`invited|active|suspended`),
  - add `invited_by`, `invited_at`, `joined_at`.
- Tenant creation wizard (Inertia): name -> slug/subdomain validation -> create tenant + domain + owner membership (`role=owner`, `status=active`).
- Invitation flow:
  - owner/admin invites by email + role,
  - send signed link,
  - recipient logs in/registers then accepts,
  - membership becomes `active` idempotently.
- `switch-tenant` endpoint (central): validates membership, stores `current_tenant_id` for central UX, redirects to tenant host.
- Top-nav tenant switcher: list all user tenants + active marker + "Create new" CTA.
- Share `userTenants` and `currentTenantId` from Inertia middleware.

## Acceptance

- E2E: register/login -> create tenant -> invite -> accept -> switch.
- Switch to non-member tenant => 403.
- Reusing invite link after acceptance => rejected (410/422) and does not mutate membership.
- Existing member invited again => idempotent behavior (no duplicate membership rows).

## Playbook

**Deliverables:**

- `alter_tenant_user_for_membership_lifecycle` migration (do not recreate table).
- `TenantController` (central create/store).
- `TenantInvitationController` (`store`, `accept`).
- `SwitchTenantController`.
- `MemberInvitedNotification` (signed URL).
- Inertia pages/components: tenant create wizard + tenant switch dropdown.
- Tests: `TenantCreationTest`, `MembershipInvitationTest`, `TenantSwitchTest`.

**Steps:**

1. Add migration to alter `tenant_user` with `status`, `invited_by`, `invited_at`, `joined_at`.
2. Update `User::tenants()` and `Tenant::users()` to include new pivot fields.
3. Create central routes for tenant creation, invite, accept, and switch.
4. Implement `TenantController@store`:
   - validate name/slug,
   - reject reserved slugs (`app`, `www`, central domains),
   - create tenant + domain row,
   - attach creator as owner and active member.
5. Implement invitation issuing:
   - validate inviter role,
   - create/update pending membership,
   - dispatch notification with signed URL.
6. Implement invitation accept:
   - validate signature + expiration,
   - require authenticated user email to match invitation target,
   - activate membership, set `joined_at`, redirect to tenant host.
7. Implement `SwitchTenantController@switch`:
   - verify membership exists and status is `active`,
   - set `session(['current_tenant_id' => $tenant->id])` for central context,
   - if `PERMISSION_TEAMS=true`, call `setPermissionsTeamId()` and `forgetCachedPermissions()`,
   - redirect to `https://{tenant-domain}`.
8. Add top-nav tenant dropdown driven by shared `userTenants`.
9. Add policy/authorization checks so only owner/admin can invite.
10. Write tests:
    - `TenantCreationTest` (success + reserved slug + duplicate slug race),
    - `MembershipInvitationTest` (invite, accept, replay, wrong-user accept),
    - `TenantSwitchTest` (member switch ok, outsider 403).
11. Run full CI.

## Verification

```bash
php artisan test --filter TenantCreationTest
php artisan test --filter MembershipInvitationTest
php artisan test --filter TenantSwitchTest
make ci
```

## Risks & mitigations

- ⚠ Migration collision (`tenant_user` already exists) -> use alter migration only.
- ⚠ Slug/domain race condition -> DB unique constraints + graceful retry message.
- ⚠ Invitation replay -> one-time accept semantics + status checks.
- ⚠ Wrong-account acceptance -> enforce invited email match against authenticated user.
- ⚠ Cross-phase RBAC coupling -> gate team-context calls behind `PERMISSION_TEAMS` and finalize in Phase 4.
- ⚠ Scope creep with Filament -> keep Filament tenant/member CRUD in Phase 10.

## Rollback

Remove Phase 3 routes/controllers, revert Phase 3 alter-migration, and remove invitation notification + UI components.
