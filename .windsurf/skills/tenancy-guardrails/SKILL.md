# Tenancy Guardrails Skill

## Checklist

### Phase 1 (foundation)

1. Tenant-scoped model uses `BelongsToTenant`.
2. Trait includes guard `if (! tenancy()->initialized) return;` in global scope logic.
3. `TenantIsolationTest` exists and validates read/write isolation.
4. No raw queries bypass `tenant_id` filtering.

### Phase 2 (auth/account)

5. Central auth endpoints are only available on `app.<APP_DOMAIN>`.
6. Tenant-protected routes enforce `auth + verified + tenant.member`.
7. OTT flow stores token hash only, enforces single-use + TTL, and never logs raw token values.
8. Session cookie policy is environment-aware (`SESSION_DOMAIN=null` local, shared domain in production).

### Phase 3 (tenant lifecycle)

9. Tenant lifecycle endpoints (create, invite, accept, switch) remain central-only on `app.<APP_DOMAIN>`.
10. Membership checks for tenant access and tenant switching require `tenant_user.status = active`.
11. Invitation acceptance enforces signed URL + invited email match and one-time semantics.
12. Spatie team-context switching is gated by `PERMISSION_TEAMS` via `config('permission.teams')`.
13. Tenant host format is `<slug>.<APP_DOMAIN>` (never `<slug>.app.<APP_DOMAIN>`).
14. Inertia-triggered cross-origin redirects must use `Inertia::location(...)`.
