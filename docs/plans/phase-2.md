# Phase 2 — Auth & Account

## Goal
Register/login/reset/verify on central domain; session works across subdomains.

## Tasks
- Laravel starter kit auth pages already present; verify/adapt for central-only routes.
- Cookie domain set to `.tuempresa.com` (`SESSION_DOMAIN=.tuempresa.com`).
- Custom domain auth: hardened one-time token (OTT) flow.
- Email verification enforced via middleware on tenant routes.
- MFA scaffolding: `user_mfa_settings` table, `FEATURES_MFA` env flag, placeholder UI.
- `UserRegisteredEvent` → Nightwatch.

## OTT Security Checklist (custom domain SSO)
- Token stored hashed (SHA-256) in `signed_login_tokens` table; raw value only in signed URL.
- TTL: 90 seconds max.
- Bound to specific `user_id` + `tenant_id`; rejects if mismatch.
- Single-use: consumed atomically via `lockForUpdate()` inside transaction.
- Never logged (not in access logs, Nightwatch, or audit).
- Minimum audit entry on consumption: `{user_id, tenant_id, ip, used_at}` — no token value.

## Acceptance
- User registers on central, verifies email, redirected to onboarding.
- Session cookie with `.APP_DOMAIN` persists across subdomains.
- OTT: expired → 401; reused → 401; mismatched tenant → 403; valid → session set, redirect.
- MFA flag disabled by default; enabling it shows TOTP setup placeholder.

## Playbook

**Deliverables:** `signed_login_tokens` migration, `OttSsoController`, `user_mfa_settings` migration, MFA placeholder page, `AuthTest`, `OttSsoTest`.

**Steps:**
1. Audit starter kit — all auth routes in `routes/central.php` only; none in `routes/tenant.php`.
2. In `config/session.php` derive domain: `'domain' => env('SESSION_DOMAIN', '.' . env('APP_DOMAIN', 'localhost'))`.
3. Create `signed_login_tokens` migration: `id`, `user_id`, `tenant_id`, `token_hash(varchar)`, `expires_at`, `used_at`, `ip`, timestamps.
4. `OttSsoController@generate`: check membership, `random_bytes(32)`, store `hash('sha256', $raw)`, return signed URL with raw token, TTL 90s.
5. `OttSsoController@consume`: verify signature → lookup by hash → check `expires_at` → check `used_at null` → verify user+tenant match → `lockForUpdate()` inside transaction → set `used_at` → create session → redirect.
6. Log audit entry on consume: `{user_id, tenant_id, ip, used_at}` — never the token itself.
7. Create `user_mfa_settings` migration + model; gate all MFA code behind `FEATURES_MFA`.
8. Write `AuthTest` and `OttSsoTest` (valid, expired, reused, wrong-tenant cases).

## Verification
```bash
php artisan test --filter AuthTest
php artisan test --filter OttSsoTest
```

## Risks & mitigations
- ⚠ Raw token visible in web server logs → configure log channel to exclude OTT route path query params.
- ⚠ Race condition on token consumption → `DB::transaction` + `lockForUpdate()` on hash lookup.
- ⚠ `SESSION_DOMAIN` breaks local `localhost` dev → set null in `.env` override for local.

## Rollback
Drop `signed_login_tokens` migration; remove `OttSsoController`; revert session config.
