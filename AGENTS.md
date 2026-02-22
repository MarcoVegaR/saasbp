# AGENTS.md

## Stack

- Laravel 12
- Inertia 2 + React 19 + TypeScript
- stancl/tenancy v3 in single-database mode

## Commit convention

- `type(scope): message`

## Canonical CI command

```bash
make ci
```

## Tenancy & Auth guardrails (Phase 1 + 2)

- Central auth endpoints must remain central-only on `app.<APP_DOMAIN>`.
- Tenant-protected routes must enforce `auth + verified + tenant.member`.
- OTT SSO tokens are one-time and sensitive: never log raw token values.
- Session cookie policy is environment-aware:
  - local (`localhost`): `SESSION_DOMAIN=null`
  - production: `SESSION_DOMAIN=.yourdomain.com`

## Tenancy lifecycle guardrails (Phase 3)

- Tenant lifecycle endpoints (create, invite, accept, switch) stay central-only on `app.<APP_DOMAIN>`.
- Membership checks for tenant access and switching require `tenant_user.status = active`.
- Invitation tokens are one-time and hashed at rest; acceptance must enforce signed URL + invited email match.
- Spatie team-context switching remains gated by `PERMISSION_TEAMS` (`config('permission.teams')`).
- Tenant host convention is strict: central = `app.<APP_DOMAIN>`, tenant = `<tenant-slug>.<APP_DOMAIN>` (not `<tenant-slug>.app.<APP_DOMAIN>`).
- Cross-origin redirects triggered from Inertia requests must use `Inertia::location(...)` (avoid Axios network/CORS failures).

## RBAC guardrails (Phase 4)

- Team context for Spatie permissions must be established by middleware (`TenantPermissionMiddleware`), not ad-hoc inside policies/controllers.
- Team context must be reset on central requests to avoid stale permission leakage across requests.
- Authorization decisions must require active membership (`tenant_user.status = active`) plus tenant-scoped permission checks.
- Global `superadmin` bypass is gate/policy-level only; it must not bypass tenancy initialization or tenant membership middleware.
- Tenant IDs are string/UUID; Spatie team context and schema must use string-compatible `team_id` columns.
