# Phase 5 — Audit & Activity Log

## Goal
All model mutations and key business events logged with actor + before/after.

## Tasks
- `spatie/laravel-activitylog` config: log name `audit` for models, `activity` for business events.
- `AuditableTenant` trait: adds `LogsActivity`; redacts fields in `$auditRedact` (`password`, `secret`, `token`, `recovery_codes`).
- Business events: `MembershipAccepted`, `TenantCreated`, `RoleChanged` → `activity()->log()`.
- Audit UI: `Pages/Tenant/Audit/Index` — filterable by actor, subject type, date (DataTable).
- Central audit view in Filament.

## Acceptance
- Create/update/delete a model → activity log entry with correct before/after.
- Password field is redacted in log.
- Audit UI renders log for current tenant only.

## Playbook

**Deliverables:** `config/activitylog.php`, `AuditableTenant` trait, `ActivityLogResource` (Filament), `AuditController` (tenant), `AuditTest`.

**Steps:**
1. Publish config; set `log_name = 'audit'` for models, `'activity'` for business events.
2. Create `AuditableTenant` trait: uses `LogsActivity`; overrides `getActivitylogOptions()` to set `$auditRedact` fields as hidden (`['password','secret','token','recovery_codes']`).
3. Apply `AuditableTenant` to all tenant-scoped models going forward.
4. Add business event logging to: `TenantCreated`, `MembershipAccepted`, `MembershipRevoked`, `RoleChanged`.
5. Create `AuditController@index` (tenant): paginated `Activity` records filtered by `causer_type/id`, `subject_type`, date range; scoped to `CurrentTenant::id()`.
6. Create Inertia page `Pages/Tenant/Audit/Index`.
7. Add `ActivityLogResource` to Filament (central view, no tenant scope).
8. Write `AuditTest`.

## Verification
```bash
php artisan test --filter AuditTest
```

## Risks & mitigations
- ⚠ Audit log grows fast → add `cleanup_activity_log` scheduled command (keep 90 days).
- ⚠ `properties->tenant_id` JSONB query slow at scale → add GIN index on `properties` column.

## Rollback
Remove `AuditableTenant` from models; remove activitylog config.
