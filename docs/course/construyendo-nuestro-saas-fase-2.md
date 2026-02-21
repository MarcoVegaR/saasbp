# Curso: Construyendo Nuestro SaaS — Fase 2 (Auth & Account)

> Objetivo de esta fase: endurecer autenticación/autorización para un SaaS multi-tenant single-DB con guardrails operativos y pruebas de seguridad.

---

## 1) Resultado de la fase

En Fase 2 cerramos cuatro frentes:

1. **Auth central-only** (Fortify en `app.<APP_DOMAIN>`).
2. **Contrato explícito user↔tenant** (`tenant_user` + middleware).
3. **SSO por dominio custom** con **OTT** (one-time token) endurecido.
4. **MFA scaffolding** detrás de feature flag (`FEATURES_MFA`).

---

## 2) Guardrails implementados

## 2.1 Contrato de membresía tenant

Se agregó `tenant_user` con:

- `tenant_id`
- `user_id`
- `role`
- `timestamps`
- `unique(tenant_id, user_id)`

Y relaciones:

- `User::tenants()`
- `Tenant::users()`

Además, el middleware `tenant.member` valida membresía real por tenant antes de permitir acceso.

## 2.2 Rutas tenant protegidas

`/tenant-only` quedó protegido por:

`auth + verified + tenant.member`

Esto evita el falso positivo de “está autenticado, entonces puede todo tenant”.

## 2.3 OTT hardened para custom domains

Se creó `signed_login_tokens` y `OttSsoController`:

- `generate` (central):
  - valida membresía,
  - genera token aleatorio,
  - persiste **hash SHA-256**,
  - TTL 90s,
  - construye URL firmada relativa para el dominio tenant.
- `consume` (tenant):
  - valida firma,
  - valida token/expiración/single-use,
  - `lockForUpdate()` + transacción,
  - valida tenant esperado,
  - autentica y regenera sesión,
  - registra auditoría segura sin exponer token.

## 2.4 MFA scaffolding por flag

Se agregó `user_mfa_settings` + `UserMfaSetting` + página placeholder `settings/mfa`.

- Si `FEATURES_MFA=false`, la página responde 404.
- Si `FEATURES_MFA=true`, muestra estado de wiring de MFA.

## 2.5 Telemetría de registro

Se agregó `UserRegisteredEvent` + listener `ForwardUserRegisteredToObservability`.

- Registra metadatos mínimos (`user_id`, `registered_at`).
- Sin secretos ni tokens.

---

## 3) Archivos clave

- `database/migrations/2026_02_21_210000_create_tenant_user_table.php`
- `database/migrations/2026_02_21_210100_create_signed_login_tokens_table.php`
- `database/migrations/2026_02_21_210200_create_user_mfa_settings_table.php`
- `app/Http/Middleware/EnsureUserBelongsToTenant.php`
- `app/Http/Controllers/Auth/OttSsoController.php`
- `app/Http/Controllers/Settings/MfaSettingsController.php`
- `app/Models/SignedLoginToken.php`
- `app/Models/UserMfaSetting.php`
- `tests/Feature/Auth/AuthTest.php`
- `tests/Feature/Auth/AuthCentralOnlyTest.php`
- `tests/Feature/Auth/OttSsoTest.php`
- `tests/Feature/Auth/TenantMembershipAccessTest.php`
- `tests/Feature/Auth/SessionDomainEnvironmentTest.php`
- `tests/Feature/Settings/MfaSettingsTest.php`

---

## 4) Qué bug previene cada prueba nueva

1. **AuthTest::auth routes remain central-only**
   - Previene exposición accidental de login/register en hosts tenant.

2. **AuthTest::tenant protected route requires verified membership**
   - Previene acceso cross-tenant por sesión autenticada sin membresía.

3. **OttSsoTest::valid consume**
   - Previene flujos OTT incompletos que no setean sesión tenant.

4. **OttSsoTest::expired / reused / tenant-mismatch / tampered-signature**
   - Previene replay attacks, token theft reutilizable y uso en tenant incorrecto.

---

## 5) Verificación operativa

```bash
php artisan test --filter AuthTest
php artisan test --filter AuthCentralOnlyTest
php artisan test --filter OttSsoTest
php artisan test --filter TenantMembershipAccessTest
php artisan test --filter SessionDomainEnvironmentTest
php artisan test --filter MfaSettingsTest
make ci
```

Esperado:

- matriz OTT en verde,
- guardrails auth/tenant en verde,
- lint + phpstan + docs build en verde.

### 5.1 Verificación manual desde interfaz (end-to-end local)

Precondiciones:

- Servidor en `http://app.localhost:8000`.
- Al menos un tenant (`acme`) con dominio (`acme.test` o `acme.localhost`).
- Usuario miembro de ese tenant.

Flujo recomendado:

1. Abrir `http://app.localhost:8000/register` y registrar usuario.
2. Confirmar que aparece email de verificación en bandeja local (`http://127.0.0.1:8025`).
3. Abrir link de verificación y confirmar redirección a dashboard central.
4. Validar que `http://acme.test:8000/login` no expone auth central (403/404).
5. Iniciar sesión en central (`app.localhost`) y generar OTT para tenant:
   - endpoint: `POST /tenants/{tenant}/sso-token`, payload `{ "domain": "acme.test" }`.
6. Abrir la URL OTT devuelta por el endpoint:
   - esperado: login en tenant + redirect a `/tenant-only`.
7. Reabrir la misma URL OTT:
   - esperado: `401` (token single-use).

Con esto validas auth central-only, verificación email, membresía tenant y hardening OTT desde flujo real.

---

## 6) Notas de entorno (local vs producción)

### 6.1 SMTP local para verificación (Mailtrap/Mailpit)

Configuración local recomendada en `.env`:

```dotenv
MAIL_MAILER=smtp
MAIL_HOST=127.0.0.1
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
```

UI de inspección de emails en local:

- `http://127.0.0.1:8025`

Si cambias variables de entorno, ejecutar:

```bash
php artisan optimize:clear
```

> Si en tu máquina usas Mailtrap Cloud (SMTP remoto) en lugar de capturador local, reemplaza `MAIL_HOST/MAIL_PORT/MAIL_USERNAME/MAIL_PASSWORD` por tus credenciales de sandbox.

### 6.2 Sesiones por entorno

- **Local (`localhost`)**: usar `SESSION_DOMAIN=null` para cookie host-only y evitar 419 en navegadores estrictos.
- **Producción**: usar `SESSION_DOMAIN=.tuempresa.com` si necesitas sesión compartida entre subdominios.

---

## 7) Coherencia Fase 1 ↔ Fase 2

La Fase 2 es coherente con la Fase 1 y no rompe su contrato base:

- Se mantiene la frontera de dominios (`app.localhost` central, `{tenant}.localhost/.test` tenant).
- Se conserva middleware de resolución tenant (`PreventAccessFromCentralDomains` + `InitializeTenancyByDomainOrSubdomain`).
- No se introduce multi-DB; continúa single-DB con aislamiento por contrato + membresía explícita.
- Fase 2 agrega guardrails de auth/autorización sobre la base sólida de routing/tenancy construida en Fase 1.

---

## 8) Cierre de fase

Checklist:

- [x] Contrato explícito user↔tenant
- [x] Middleware de membresía tenant
- [x] OTT hardened con token one-time
- [x] MFA scaffolding behind flag
- [x] Telemetría de registro sanitizada
- [x] Tests Auth + OTT

Con esto, Fase 2 deja lista la base para fases de onboarding, permisos avanzados y billing sin deuda de seguridad en auth multi-tenant.
