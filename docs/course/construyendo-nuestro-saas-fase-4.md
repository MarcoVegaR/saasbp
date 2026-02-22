# Curso: Construyendo Nuestro SaaS — Fase 4 (RBAC Multi-Tenant con Spatie)

> Objetivo de la fase: pasar de checks por `tenant_user.role` a autorización robusta por permisos tenant-scoped, sin romper los guardrails de Fase 2/3.

---

## 1) Resultado de la fase

En Fase 4 quedaron implementados estos bloques:

1. **RBAC tenant-scoped con Spatie Teams** usando `team_id` compatible con tenant IDs string/UUID.
2. **Contexto de permisos por request**:
   - set en requests tenant,
   - reset en requests central para evitar fugas de contexto.
3. **Sincronización membership -> RBAC**:
   - owner/admin/member del pivot se sincroniza a roles Spatie.
4. **Bypass superadmin global** en capa Gate/Policy.
5. **Política base tenant-scoped** + policy concreta para `TenantNote`.
6. **Backfill command** para migrar membresías existentes a roles Spatie.

---

## 2) Cambios técnicos clave

## 2.1 Equipo (team) por tenant con IDs string

Como `tenants.id` es string/UUID, la capa de permisos también se ajustó a tipo string:

- migración base de Spatie adaptada para team columns string,
- migración de compatibilidad para bases existentes,
- bandera de rollout `PERMISSION_TEAMS` documentada.

## 2.2 Contexto RBAC por ciclo de request

Se agregaron middlewares:

- `TenantPermissionMiddleware`: define `setPermissionsTeamId((string) tenant()->id)` en requests tenant.
- `ResetPermissionTeamContext`: limpia contexto en requests central y al finalizar request.

Esto evita el problema clásico de **permission bleed** entre requests cuando hay workers de larga vida.

## 2.3 Sincronización pivot-role a roles Spatie

Se creó `TenantRbacManager` para:

- seed de permisos/roles tenant,
- asignación de rol por membresía,
- rol global `superadmin` en contexto reservado `__central__`,
- backfill masivo desde `tenant_user`.

Además, flujos de negocio ya existentes se conectaron a RBAC:

- al crear tenant: owner se sincroniza como role `owner`,
- al aceptar invitación: se sincroniza el rol final del miembro.

## 2.4 Policy tenant-scoped

Se introdujo:

- `TenantScopedPolicy` (base),
- `TenantNotePolicy` (ejemplo real).

La policy valida:

- ownership por `tenant_id`,
- membership activa,
- permiso requerido (`notes:view|create|update|delete`).

---

## 3) Flujo funcional (ejemplo práctico)

## 3.1 Invitar miembros

Caso práctico:

- Usuario A es `member` en Tenant X en pivot, pero RBAC lo sincroniza como `admin`.
- Resultado: puede invitar miembros porque tiene `members:invite`.

Qué se valida:

- Un member real (`member`) recibe 403.
- Un superadmin puede invitar aunque no sea miembro del tenant.

## 3.2 Seguridad ante estados de membresía

Caso práctico:

- Usuario B tiene rol stale en Spatie pero está `suspended` en `tenant_user`.
- Resultado: se deniega autorización porque el check exige membership `active`.

Esto evita escalaciones por datos stale en tablas de roles.

## 3.3 Aislamiento por tenant en policies

Caso práctico con `TenantNote`:

- Usuario admin en Tenant A y member en Tenant B.
- Puede `update` nota de A.
- No puede `update` nota de B.
- Tampoco puede actualizar desde contexto A un recurso que pertenece a B.

---

## 4) Comando operativo de backfill

```bash
php artisan rbac:backfill-memberships
```

Qué hace:

- recorre `tenant_user`,
- sincroniza roles Spatie para membresías `active`,
- limpia roles tenant para membresías no activas,
- deja la base alineada después de activar `PERMISSION_TEAMS`.

---

## 5) Tests de Fase 4

- `tests/Feature/Tenants/RbacTest.php`
- `tests/Feature/Tenants/TenantSwitchRbacTest.php`
- `tests/Feature/Tenants/TeamContextAlwaysSetTest.php`
- `tests/Feature/Tenants/RbacBackfillTest.php`

Cobertura principal:

- matrix member/admin/superadmin,
- reset de contexto entre switches,
- middleware que fija team context,
- backfill de membresías existentes,
- policy tenant-scoped con ownership real.

---

## 6) Verificación operativa

```bash
php artisan test --filter RbacTest
php artisan test --filter TenantSwitchRbacTest
php artisan test --filter TeamContextAlwaysSetTest
php artisan test --filter RbacBackfillTest
make ci
```

Esperado: suite de Fase 4 + CI completo en verde.

---

## 7) Guardrails preservados

- Endpoints de lifecycle tenant siguen central-only.
- Rutas tenant siguen con `auth + verified + tenant.member`.
- `superadmin` bypass no salta inicialización de tenancy ni middleware de membresía.
- Contexto de permisos se maneja por middleware (no en controllers ad-hoc).

---

## 8) Checklist de cierre de fase

- [x] Team context middleware implementado
- [x] Team context reset central implementado
- [x] Sync pivot role -> Spatie role conectado a flujos clave
- [x] Superadmin global con Gate::before
- [x] Policy base tenant-scoped + policy concreta
- [x] Backfill command operativo
- [x] Suite RBAC en verde
- [x] `make ci` en verde
