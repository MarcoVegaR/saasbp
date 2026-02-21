# Curso: Construyendo Nuestro SaaS — Fase 0 (Fundación Técnica)

> Objetivo de este material: que una persona junior, incluso empezando desde cero, entienda **qué hicimos**, **por qué lo hicimos** y **cómo repetirlo** paso a paso.

---

## 1) ¿Qué es la Fase 0?

La Fase 0 es la **fundación** del proyecto. Todavía no estamos construyendo funcionalidades de negocio (como facturación, CRM, etc.), sino preparando una base sólida para poder construirlas después sin caos.

En términos simples:

- Sin Fase 0, cada cambio futuro se vuelve frágil.
- Con Fase 0 bien hecha, el proyecto escala con menos errores.

### Meta oficial de la fase

Tener una app Laravel 12 funcionando, con:

1. stack frontend/backend instalado,
2. paquetes SaaS base,
3. calidad técnica automatizada,
4. entorno cloud-ready,
5. CI validando todo.

Referencia del plan: `docs/plans/saas-boilerplate-implementation-plan.md`.

---

## 2) Resultado esperado al terminar esta fase

Al finalizar Fase 0, debes poder ejecutar:

```bash
make ci
```

y obtener todo en verde:

- tests,
- lint PHP,
- análisis estático PHP,
- verificación TypeScript,
- build de documentación.

---

## 3) Stack técnico que usamos (explicado fácil)

## Backend

- **Laravel 12**: framework principal.
- **PostgreSQL**: base de datos relacional.
- **Redis (opcional en local, requerido en cloud-ready)**: sesión, caché y colas cuando activamos el perfil de despliegue.

## Frontend

- **Inertia 2 + React 19 + TypeScript**.
- **Vite** para build rápido.
- **Tailwind 4** + componentes UI.

## Calidad / DX

- **Pest** para testing.
- **Pint** para estilo de código PHP.
- **PHPStan + Larastan** para análisis estático.
- **MkDocs** para documentación técnica.

---

## 4) Prerrequisitos para reproducir desde cero

Antes de comenzar, instala:

- PHP 8.2+ (recomendado 8.4 como en CI),
- Composer v2,
- Node.js 20+
- npm,
- PostgreSQL,
- Redis (opcional para local; necesario si quieres simular perfil cloud),
- Python 3.11+ (para docs).

---

## 5) Paso a paso de implementación (modo clase)

## Paso 1 — Definir una sola fuente de verdad

Movimos y consolidamos el plan de implementación dentro del repo, en:

```text
docs/plans/saas-boilerplate-implementation-plan.md
```

Esto evita que el equipo dependa de notas fuera del proyecto.

---

## Paso 2 — Scaffold base Laravel + React + TS

Partimos del starter oficial con React/Inertia/TypeScript y pruebas.

Si un junior quiere recrearlo desde 0 en un repo vacío, una ruta típica es:

```bash
laravel new saasbp
```

Luego elegir starter **React + Inertia + TypeScript + Pest** durante el asistente del instalador.

> Nota pedagógica: el scaffold inicial te ahorra semanas de configuración manual.

---

## Paso 3 — Instalar paquetes clave del SaaS

Instalamos paquetes base del roadmap:

```bash
composer require stancl/tenancy \
  spatie/laravel-permission \
  spatie/laravel-activitylog \
  filament/filament:^3 \
  pragmarx/google2fa-laravel \
  laravel/nightwatch \
  laravel/horizon

composer require --dev larastan/larastan
```

### ¿Para qué sirve cada uno?

- `stancl/tenancy`: multi-tenant.
- `spatie/laravel-permission`: roles/permisos (RBAC).
- `spatie/laravel-activitylog`: auditoría de acciones.
- `filament/filament`: panel administrativo central.
- `pragmarx/google2fa-laravel`: MFA.
- `laravel/nightwatch`: observabilidad.
- `laravel/horizon`: monitoreo de colas Redis.
- `larastan/larastan`: tipado y análisis estático fuerte.

---

## Paso 4 — Configurar variables de entorno (clave)

Ajustamos `.env.example` y `.env` para reflejar arquitectura real del proyecto.

### Base de datos

```dotenv
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5434
DB_DATABASE=saasbp
DB_USERNAME=postgres
```

### Perfil local por defecto (sin Redis)

```dotenv
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=database
FILESYSTEM_DISK=local
```

### Perfil cloud-ready (Laravel Cloud)

Si quieres igualar comportamiento de hosting cloud, usa:

```dotenv
SESSION_DRIVER=redis
CACHE_STORE=redis
QUEUE_CONNECTION=redis
FILESYSTEM_DISK=s3
```

### Dominio base

```dotenv
APP_DOMAIN=localhost
SESSION_DOMAIN=null
```

> En local con `localhost`, usamos cookie host-only (`SESSION_DOMAIN=null`) para evitar rechazos de dominio inválido en algunos navegadores (ej: Firefox) y errores 419 por CSRF.

### Feature flags

```dotenv
FEATURES_MFA=false
NIGHTWATCH_TOKEN=
```

> Importante: el puerto de PostgreSQL usado en este proyecto es **5434**.

---

## Paso 5 — Ajuste de sesión para subdominios

En `config/session.php` se dejó el dominio de cookie usando fallback desde `APP_DOMAIN`:

```php
'domain' => env('SESSION_DOMAIN', '.'.env('APP_DOMAIN', 'localhost')),
```

¿Por qué?

- En producción, permite compartir sesión entre subdominios cuando defines `SESSION_DOMAIN=.tuempresa.com`.
- En local con `localhost`, conviene override a `SESSION_DOMAIN=null` (host-only) para compatibilidad de navegador.

---

## Paso 6 — Crear estándar de comandos con Makefile

Definimos comandos simples para todo el equipo:

```bash
make test
make lint
make analyse
make docs-serve
make docs-build
make ci
```

Además:

- `analyse` usa memoria explícita para PHPStan:

```bash
./vendor/bin/phpstan analyse --memory-limit=512M
```

- `docs-*` detecta automáticamente `.venv-docs/bin/mkdocs` cuando existe.
- Para usar `composer run dev` sin Redis local, dejamos `QUEUE_CONNECTION=database`.

---

## Paso 7 — Configurar calidad de código

## 7.1 Pint (estilo PHP)

Se valida con:

```bash
./vendor/bin/pint --test
```

Y se corrige con:

```bash
./vendor/bin/pint
```

## 7.2 PHPStan + Larastan

Archivo: `phpstan.neon` con nivel 6.

Objetivo: detectar errores de tipos antes de producción.

## 7.3 TypeScript strict check

```bash
npx tsc --noEmit
```

Esto verifica tipos sin generar archivos.

---

## Paso 8 — Configurar CI (GitHub Actions)

Creamos workflow de CI que ejecuta toda la validación automáticamente en cada push/PR.

Incluye servicios:

- PostgreSQL (mapeado al puerto 5434),
- Redis.

Y pasos:

1. instalar dependencias PHP/Node/Python,
2. preparar app,
3. correr migraciones,
4. correr Pest,
5. correr Pint,
6. correr PHPStan,
7. correr TypeScript,
8. compilar docs.

---

## Paso 9 — Configurar documentación técnica (MkDocs)

Se creó:

- `mkdocs.yml`
- `docs/index.md`
- `docs/requirements.txt`

Dependencias de docs:

```txt
mkdocs>=1.6,<2.0
mkdocs-material>=9.5,<10.0
```

Comandos:

```bash
make docs-serve
make docs-build
```

---

## Paso 10 — Build frontend para resolver pruebas

Se ejecutó:

```bash
npm run build
```

Esto genera `public/build/manifest.json`.

¿Por qué era necesario?

- Algunas vistas/test dependen del manifest de Vite.
- Sin build, aparecía error de manifest faltante.

---

## Paso 11 — Ejecutar validación final completa

Secuencia usada al cierre:

```bash
php artisan test
./vendor/bin/pint --test
./vendor/bin/phpstan analyse --memory-limit=512M
npx tsc --noEmit
make ci
```

Resultado: Fase 0 completada y verificable.

---

## 6) Problemas reales encontrados (y cómo se resolvieron)

## Problema A: test fallaba por manifest de Vite

- **Síntoma**: error relacionado a `manifest.json`.
- **Causa**: frontend no compilado.
- **Fix**: `npm run build`.

## Problema B: lint fallando por estilo

- **Síntoma**: Pint reportaba múltiples archivos.
- **Fix**: ejecutar `./vendor/bin/pint` y luego revalidar con `--test`.

## Problema C: PHPStan se caía por memoria (128M)

- **Síntoma**: crash por memory limit.
- **Fix**: agregar `--memory-limit=512M` en Makefile y CI.

## Problema D: PHPStan pedía más tipado

- **Síntoma**: errores por return types faltantes.
- **Fix**: agregar `: void` y PHPDoc de tipos donde correspondía.

## Problema E: `mkdocs` no estaba en PATH

- **Síntoma**: `make docs-build` no encontraba comando.
- **Fix**: fallback automático a `.venv-docs/bin/mkdocs` en Makefile.

## Problema F: `RedisException Connection refused` en local

- **Síntoma**: error al abrir la app o al ejecutar `composer run dev`.
- **Causa**: perfil con Redis activo sin servidor Redis levantado.
- **Fix local (sin Redis)**: usar `SESSION_DRIVER=file`, `CACHE_STORE=file`, `QUEUE_CONNECTION=database`, `FILESYSTEM_DISK=local`.
- **Fix cloud-like**: mantener Redis/S3 y levantar un Redis local.

---

## 7) Guía de ejecución para un estudiante (checklist rápido)

1. Instala dependencias del sistema (PHP, Composer, Node, Postgres, Python; Redis opcional).
2. Copia `.env.example` a `.env` y ajusta credenciales.
3. Verifica que PostgreSQL esté en puerto `5434`.
4. Instala dependencias:

```bash
composer install
npm ci
```

5. Genera key y migra:

```bash
php artisan key:generate
php artisan migrate
```

6. Compila frontend:

```bash
npm run build
```

7. Valida calidad completa:

```bash
make ci
```

8. Si quieres modo cloud-like en local, activa el perfil Redis/S3 y levanta Redis.

Si todo pasa, la Fase 0 está lista.

---

## 8) ¿Qué aprendió el estudiante en esta fase?

Al terminar, debería poder explicar:

- qué diferencia hay entre construir plataforma vs construir features,
- por qué usar Redis para sesión/caché/colas en cloud,
- por qué el análisis estático detecta errores antes de runtime,
- cómo CI evita regressions,
- por qué documentación versionada es parte de la ingeniería.

---

## 9) Autoevaluación (mini quiz)

1. ¿Por qué usamos `DB_PORT=5434` en este proyecto?
2. ¿Qué problema resuelve `npm run build` en contexto de tests Laravel + Vite?
3. ¿Cuál es la diferencia entre Pint y PHPStan?
4. ¿Por qué `make ci` debe pasar siempre antes de avanzar de fase?
5. ¿Qué rol cumple `SESSION_DOMAIN=.${APP_DOMAIN}` en un SaaS por subdominios?

---

## 10) Cierre de Fase 0

La Fase 0 se considera cerrada cuando:

- entorno local funciona,
- documentación existe y compila,
- pruebas y calidad pasan,
- CI refleja ese mismo estándar.

Con esto, el equipo puede pasar a Fase 1 (multi-tenancy foundation) sobre una base confiable.
