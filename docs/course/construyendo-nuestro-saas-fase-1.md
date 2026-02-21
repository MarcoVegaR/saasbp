# Curso: Construyendo Nuestro SaaS — Fase 1 (Fundación Multi-tenant)

> Objetivo de este material: que cualquier integrante del equipo entienda **qué implementamos en la Fase 1**, **por qué era crítico** y **cómo verificarlo de forma confiable**.

---

## 1) ¿Qué resolvemos en la Fase 1?

La Fase 1 define la frontera central/tenant de forma estricta.

Sin esta fase:

- puedes mezclar rutas centrales y tenant,
- puedes disparar errores 500 por resolución de tenant,
- puedes terminar con comportamiento multi-DB accidental.

Con esta fase:

- el dominio central queda aislado,
- los tenants se resuelven por subdominio o dominio custom,
- el aislamiento de datos queda probado con tests.

---

## 2) Convención de dominios (local)

Estándar aplicado:

- **Central app:** `app.localhost`
- **Tenant subdomain:** `{tenant}.localhost`
- **Custom domain de prueba:** `acme.test`
- **Base domain:** `localhost`

Esta convención quedó codificada en configuración y pruebas.

Bloqueadores comunes en local:

- `php artisan serve` corre por defecto en `127.0.0.1:8000`; si navegas en `app.localhost` sin mapear host/puerto, romperás la convención.
- Safari/WebKit puede comportarse distinto con `*.localhost`; para flujo estable, usar Valet/Herd/dnsmasq o host mapping explícito.
- Para `APP_DOMAIN=localhost`, usar `SESSION_DOMAIN=null` (cookie host-only). Algunos navegadores rechazan `Domain=.localhost` y eso termina en 419 por CSRF al hacer login/register.

---

## 3) Reglas no negociables que implementamos

## 3.1 Single-DB real (no “medio configurado”)

Se desactivó el bootstrapper de base de datos por tenant:

- `DatabaseTenancyBootstrapper` está comentado en `config/tenancy.php`.

También se quitaron los jobs de creación/migración/eliminación de base por tenant en `TenancyServiceProvider`.

## 3.2 Frontera de rutas central vs tenant

- `routes/web.php` quedó como entrada mínima y sólo carga `routes/central.php`.
- `routes/central.php` está envuelto en `Route::domain(config('saas.central_host'))`.
- `routes/tenant.php` se carga exclusivamente desde `TenancyServiceProvider`.

## 3.3 Orden de middleware endurecido en tenant routes

Orden aplicado:

`web -> PreventAccessFromCentralDomains -> InitializeTenancyByDomainOrSubdomain`

Esto evita 500 por identificación de tenant en requests del dominio central.

## 3.4 Flujo mental mínimo de un request

1. Llega `Host`.
2. Si `Host ∈ central_domains`: request central (no inicializar tenancy).
3. Si `Host ∉ central_domains`: aplica `PreventAccessFromCentralDomains`.
4. Luego `InitializeTenancyByDomainOrSubdomain` resuelve tenant.
5. Recién después corre auth/policies/controlador.

## 3.5 `central_domains` en producción (base + app)

`tenancy.central_domains` no es sólo “el host central principal”; define qué dominios se consideran centrales para guardrails y detección por subdominio.

Regla práctica para prod:

- incluir dominio base (ej: `tuempresa.com`), y
- incluir host de app central (ej: `app.tuempresa.com`).

Si omites el base domain, puedes romper la identificación esperada en subdominios tenant.

---

## 4) Modelado base de tenancy

## 4.1 Modelo Tenant

Se creó `App\Models\Tenant` extendiendo el modelo base de stancl y usando `HasDomains`.

Campos de negocio definidos:

- `id`
- `name`
- `slug`
- `plan`
- `status`
- `settings`

## 4.2 Migración de tenants

Se actualizó la tabla `tenants` para incluir esos campos y se conservó `data` para compatibilidad con el virtual column trait de stancl.

## 4.3 Trait `BelongsToTenant`

Se creó un trait reusable con tres garantías:

1. Scope global con guard: `if (! tenancy()->initialized) return;`
2. Auto-asignación de `tenant_id` al crear en contexto tenant.
3. `tenant_id` inmutable al actualizar.

## 4.4 `CurrentTenant` singleton

Se añadió `App\Support\Tenancy\CurrentTenant` y su registro en el contenedor para acceso consistente al tenant actual.

## 4.5 Modelo fixture `TenantNote`

Se creó `TenantNote` + migración + factory para probar aislamiento real de lectura/escritura entre tenants.

## 4.6 Contrato de aislamiento en single-DB

En single-DB no todo es “tenant-only”. Hay tablas compartidas (por ejemplo, según diseño del producto).

El contrato correcto de seguridad es:

1. Rutas centrales no inicializan tenancy.
2. Rutas tenant no son accesibles desde central domains.
3. Entidades tenant-scoped (con `tenant_id`) no cruzan tenants.

---

## 5) Tests obligatorios de la fase

Se agregaron y pasan en verde:

1. `CentralRoutesAccessibleTest` — previene que el dominio central quede inaccesible por scoping incorrecto.
2. `SingleDbModeTest` — previene regresión a multi-DB accidental; debe validar efectos (conexión/DB activa no cambian), no sólo dispatch de jobs.
3. `SubdomainResolutionTest` — previene fallas en resolución `{tenant}.localhost`.
4. `CustomDomainResolutionTest` — previene regresiones al resolver dominios custom (`acme.test`).
5. `TenantIsolationTest` — previene fugas de datos entre tenants en modelos con `tenant_id`.

Además, se ajustó el test de ejemplo para usar `http://app.localhost/` y respetar el scoping de dominio central.

---

## 6) Artefactos de guardrails para el equipo

Se crearon estos archivos mínimos de gobierno técnico:

- `AGENTS.md` (root)
- `app/AGENTS.md`
- `.windsurf/skills/tenancy-guardrails/SKILL.md`

Estos archivos fijan reglas base para futuras fases.

---

## 7) Verificación operativa (lo que debe ejecutar un estudiante)

```bash
php artisan test --filter CentralRoutesAccessibleTest
php artisan test --filter SingleDbModeTest
php artisan test --filter SubdomainResolutionTest
php artisan test --filter CustomDomainResolutionTest
php artisan test --filter TenantIsolationTest
make ci
```

Resultado esperado:

- 5 tests de tenancy en verde,
- suite completa en verde,
- lint + static analysis + docs build en verde.

---

## 8) Problemas reales detectados y fixes aplicados

## Problema A: `Tenant could not be identified` en test de subdominio

- **Causa:** en stancl, subdominio se guarda sin punto (`tenant1`), no como FQDN (`tenant1.localhost`); el sufijo base se infiere desde `central_domains`.
- **Fix:** guardar `domain = tenant1` para caso subdomain y mantener `acme.test` para dominio custom.

## Problema B: smoke test 404 en `/`

- **Causa:** ahora las rutas centrales están domain-scoped a `app.localhost`.
- **Fix:** actualizar test para llamar `http://app.localhost/`.

## Problema C: reglas de Pint/PHPStan tras agregar nuevos modelos

- **Fix:** ajustar estilo y tipos genéricos en relación Eloquent de `TenantNote`.

---

## 9) Checklist de cierre de Fase 1

- [x] Tenancy provider registrado
- [x] Single-DB enforced
- [x] Rutas central/tenant separadas
- [x] Middleware order hardened
- [x] Tenant model y migración actualizados
- [x] BelongsToTenant + CurrentTenant implementados
- [x] TenantNote fixture completo
- [x] 5 tests obligatorios en verde
- [x] `make ci` en verde

---

## 10) ¿Qué sigue después de esta fase?

Con la frontera de tenancy validada, la siguiente fase puede construir Auth/Account sin arrastrar deuda estructural de dominios, middleware o aislamiento de datos.
