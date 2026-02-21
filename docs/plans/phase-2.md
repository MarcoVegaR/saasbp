# Phase 2 — Auth & Account

## Goal
Implement production-grade auth/account guardrails for a single-DB multi-tenant app:

- central auth on central domain only,
- explicit user↔tenant authorization contract,
- hardened custom-domain SSO via one-time token (OTT),
- MFA scaffolding behind feature flag.

## Professional baseline (community-aligned)

- **Central auth boundary:** login/register/reset/verify live on central domain only.
- **Authorization != authentication:** tenant access must be checked through explicit membership (pivot), not only by authenticated session.
- **Single-use token exchange:** OTT must be hashed at rest, short-lived, single-use, and consumed atomically.
- **Environment-aware sessions:** local `localhost` uses host-only cookies; production subdomains use shared cookie domain.
- **Sensitive-data hygiene:** never log raw OTT token, passwords, TOTP secrets, or recovery codes.

## Tasks
- Verify/adapt starter-kit auth routes so they remain central-only.
- Create explicit membership contract: `tenant_user` pivot + model relations + tenant membership middleware.
- Keep session config env-driven:
  - local (`localhost`): `SESSION_DOMAIN=null`,
  - production: `SESSION_DOMAIN=.tuempresa.com`.
- Implement custom-domain auth via hardened OTT exchange.
- Enforce `verified` + tenant membership on protected tenant routes.
- Add MFA scaffolding (`user_mfa_settings` + placeholder UI) behind `FEATURES_MFA`.
- Emit `UserRegisteredEvent` and forward sanitized metadata to observability (Nightwatch/log pipeline).

## OTT Security Checklist (custom domain SSO)
- Token stored hashed (SHA-256) in `signed_login_tokens` table; raw value only in signed URL.
- TTL: 90 seconds max.
- Bound to specific `user_id` + `tenant_id`; rejects if mismatch.
- Single-use: consumed atomically via `lockForUpdate()` inside transaction.
- Signed URL validated with `signed:relative` for cross-domain handoff.
- Generate/consume routes throttled.
- Session regenerated after successful consume (session fixation defense).
- Never logged (not in access logs, Nightwatch, or audit).
- Minimum audit entry on consumption: `{user_id, tenant_id, ip, used_at}` — no token value.

## Acceptance
- Central auth routes are available on `app.<APP_DOMAIN>` and not exposed on tenant hosts.
- Protected tenant routes enforce `auth` + `verified` + membership.
- Session policy is environment-safe:
  - local `localhost`: host-only cookies (`SESSION_DOMAIN=null`),
  - production subdomains: shared cookie domain (`SESSION_DOMAIN=.tuempresa.com`).
- OTT matrix:
  - valid token => 302 to tenant protected route,
  - expired => 401,
  - reused => 401,
  - tenant mismatch => 403,
  - invalid/tampered signature => 403.
- MFA flag disabled by default; enabling it exposes placeholder UI/endpoint.

## Playbook

**Deliverables:**

- `tenant_user` pivot migration + `User::tenants()` / `Tenant::users()` relations.
- `EnsureUserBelongsToTenant` middleware + alias.
- `signed_login_tokens` migration + model.
- `OttSsoController` (`generate`, `consume`) + central/tenant routes.
- `user_mfa_settings` migration + model + placeholder page/controller.
- `UserRegisteredEvent` + listener for sanitized observability handoff.
- Tests: `AuthTest`, `OttSsoTest`.
- Course update: `docs/course/construyendo-nuestro-saas-fase-2.md`.

**Steps:**
1. Audit starter-kit auth endpoints: central-only contract remains intact.
2. Add membership schema (`tenant_user`) and relations (`User`/`Tenant`).
3. Add tenant membership middleware and apply it to protected tenant routes with `auth` + `verified`.
4. Keep session domain derivation in config; document env policy (`SESSION_DOMAIN=null` local, `.tuempresa.com` prod).
5. Create `signed_login_tokens` migration/model (`user_id`, `tenant_id`, `token_hash`, `expires_at`, `used_at`, `ip`).
6. Implement `OttSsoController@generate` (membership check, token generation, hash storage, signed relative consume URL, throttle).
7. Implement `OttSsoController@consume` (signature check, lock+consume transaction, expiry/single-use/tenant checks, session regeneration, safe audit).
8. Add MFA scaffolding (`user_mfa_settings` + placeholder page/controller) behind `FEATURES_MFA`.
9. Emit `UserRegisteredEvent` and send sanitized metadata to observability.
10. Write/adjust `AuthTest` and `OttSsoTest` for full matrix.
11. Update `docs/course` with Phase 2 implementation and operational gotchas.

## Verification
```bash
php artisan test --filter AuthTest
php artisan test --filter OttSsoTest
make ci
```

## Risks & mitigations
- ⚠ Raw token visible in web server logs → configure log channel to exclude OTT route path query params.
- ⚠ Race condition on token consumption → `DB::transaction` + `lockForUpdate()` on hash lookup.
- ⚠ `SESSION_DOMAIN` breaks local `localhost` dev → set `SESSION_DOMAIN=null` in local `.env`.
- ⚠ Membership bypass risk → never trust tenant host alone; enforce middleware + token tenant binding.
- ⚠ Feature drift (MFA) → gate routes/controllers/UI behind flag and test both states.

## Rollback
Drop `tenant_user`, `signed_login_tokens`, and `user_mfa_settings` migrations; remove OTT/controller/middleware routes and MFA placeholder; revert docs.
