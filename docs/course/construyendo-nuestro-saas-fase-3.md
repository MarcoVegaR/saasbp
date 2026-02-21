# Curso: Construyendo Nuestro SaaS — Fase 3 (Tenants & Memberships)

> Objetivo de la fase: completar el ciclo de vida tenant en app central (`app.<APP_DOMAIN>`): creación de tenant, invitaciones seguras, aceptación y switch entre tenants.

---

## 1) Resultado de la fase

En Fase 3 quedaron implementados estos bloques:

1. **Evolución del pivot `tenant_user`** con estado de membresía (`status`) y metadatos de invitación/ingreso.
2. **Creación de tenant** con wizard Inertia y asignación automática de owner.
3. **Invitaciones por email** con enlace firmado y token one-time.
4. **Aceptación de invitación** con validación estricta de email y replay protection.
5. **Switch de tenant** desde UI con redirect seguro al dominio tenant.
6. **Tenant switcher** en header (selector + CTA “Create new tenant”).

---

## 2) Cambios técnicos clave

## 2.1 Evolución de `tenant_user`

Se añadió migración incremental (sin recrear tabla):

- `status` (`invited|active|suspended`),
- `invited_by`,
- `invited_at`,
- `joined_at`.

Además:

- `User::tenants()` y `Tenant::users()` ahora incluyen estos campos de pivot.
- `tenant.member` ahora exige explícitamente `status = active`.

## 2.2 Invitaciones seguras

Se agregó `tenant_invitations` para soportar invitación por email y aceptación posterior (incluyendo usuario que aún no había ingresado).

Cada invitación usa:

- `token_hash` (nunca se persiste el token raw),
- expiración (`expires_at`),
- enlace firmado (`signed:relative`),
- invalidación por uso (`accepted_at`).

## 2.3 Switch tenant reutilizando OTT

Se introdujo `TenantSsoUrlFactory`, reutilizado por:

- `OttSsoController@generate`,
- `SwitchTenantController`,
- `TenantInvitationController@accept`.

Esto garantiza un único patrón seguro para generar URL SSO one-time hacia dominio tenant.

---

## 3) Endpoints nuevos (central-only)

- `GET /tenants/create`
- `POST /tenants`
- `POST /tenants/{tenant}/invitations`
- `GET /invitations/{invitation}/accept` (`signed:relative`)
- `POST /tenants/{tenant}/switch`

Todos en dominio central (`app.<APP_DOMAIN>`), manteniendo guardrails de fases previas.

> Convención de host en local:
>
> - Central: `app.localhost`
> - Tenant: `<slug>.localhost` (ejemplo: `mercado.localhost`)
>
> **No** usar `<slug>.app.localhost`.

---

## 4) Flujo funcional esperado (E2E)

1. Usuario verificado crea tenant en `app.localhost/tenants/create`.
2. Se crea tenant + dominio + membresía owner activa.
3. Owner invita por email a miembro/admin.
4. Invitado autenticado/verificado acepta enlace firmado.
5. Aceptación activa membresía y redirige al tenant vía OTT.
6. Desde header, usuario puede cambiar tenant con el switcher.

Nota técnica: cuando el switch se dispara desde una request Inertia (XHR), el backend debe responder con `Inertia::location(...)` para forzar navegación completa cross-origin al dominio tenant.

Nota técnica local: si el entorno central corre en un puerto no estándar (por ejemplo `:8000`), la redirección OTT del switch conserva ese puerto (`<slug>.localhost:8000`).

## 4.1 Fuera de alcance en Fase 3

- Esta fase **no** incluye una UI final de "perfil tenant" o dashboard tenant completo.
- El objetivo funcional de acceso tenant en Fase 3 queda cubierto al llegar a rutas tenant protegidas (por ejemplo `/tenant-only`).
- La experiencia de producto tenant (pantallas de negocio) se implementa en fases posteriores.

---

## 5) Tests agregados

- `tests/Feature/Tenants/TenantCreationTest.php`
- `tests/Feature/Tenants/MembershipInvitationTest.php`
- `tests/Feature/Tenants/TenantSwitchTest.php`

Cobertura principal:

- creación tenant + owner assignment,
- slugs reservados/duplicados,
- invitación válida,
- wrong-user acceptance (403),
- replay invite (410),
- idempotencia al invitar miembro existente,
- switch autorizado y no autorizado.

---

## 6) Verificación operativa

```bash
php artisan test --filter TenantCreationTest
php artisan test --filter MembershipInvitationTest
php artisan test --filter TenantSwitchTest
make ci
```

Esperado: suite de Fase 3 + CI completo en verde.

---

## 7) Guardrails preservados

- Auth central sigue central-only.
- Rutas tenant protegidas por `auth + verified + tenant.member`.
- No se loguean tokens raw ni datos sensibles.
- Se mantiene arquitectura single-DB.

---

## 8) Cierre de fase

Checklist:

- [x] `tenant_user` evolucionado sin colisión de migración
- [x] tenant create wizard funcional
- [x] invitación segura por email
- [x] aceptación one-time con validación de cuenta
- [x] switch tenant desde UI
- [x] tests de Fase 3 en verde
- [x] `make ci` en verde
