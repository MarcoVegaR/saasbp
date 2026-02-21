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
