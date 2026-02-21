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
