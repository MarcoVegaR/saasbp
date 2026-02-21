# Tenancy Guardrails Skill

## Checklist

1. Tenant-scoped model uses `BelongsToTenant`.
2. Trait includes guard `if (! tenancy()->initialized) return;` in global scope logic.
3. `TenantIsolationTest` exists and validates read/write isolation.
4. No raw queries bypass `tenant_id` filtering.
