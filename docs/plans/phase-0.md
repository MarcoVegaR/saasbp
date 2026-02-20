# Phase 0 — Project Scaffolding & Packages ✅

**Status:** Completed

## Goal
Working Laravel 12 app, all packages installed, CI skeleton, DB connected.

## Deliverables
- `composer.json`, `package.json`, `pint.json`, `phpstan.neon`, `tsconfig.json`
- `.env.example`, `.github/workflows/ci.yml`, `Makefile`

## Tasks
1. `laravel new saasbp` → select React starter kit (Inertia + React + TypeScript) interactively.
2. Configure PostgreSQL (port `5434` locally) and validate migrations.
3. Install packages: `stancl/tenancy`, `spatie/laravel-permission`, `spatie/laravel-activitylog`, `filament/filament:^3`, `pragmarx/google2fa-laravel`, `laravel/nightwatch`, `laravel/horizon`.
4. `php artisan filament:install --panels` (central admin panel scaffold).
5. Configure quality tools: `pint.json` (preset: laravel), `phpstan.neon` (level 6 + larastan, `tests/` excluded), `tsconfig.json` (strict: true).
6. Set **local dev defaults** (`SESSION_DRIVER=file`, `CACHE_STORE=file`, `QUEUE_CONNECTION=database`, `FILESYSTEM_DISK=local`) and document cloud-ready profile (Redis+S3) as commented-out toggle in `.env.example`.
7. Add feature flags: `FEATURES_MFA=false`, `NIGHTWATCH_TOKEN=`.
8. Add Makefile targets: `test`, `lint`, `analyse`, `docs-serve`, `docs-build`, `docs-check-links`, `ci`.
9. Add CI workflow with PostgreSQL + Redis services; run `npm ci && npm run build` **before** `pest`, then `pint --test`, `phpstan --memory-limit=512M`, `tsc --noEmit`, `docs-build`.

## Acceptance
`make ci` passes (tests, lint, analyse, docs-build all green).

## Verification
```bash
make ci
```

## Real-world outcomes recorded
- PostgreSQL on port `5434` (non-standard; document in `.env.example`).
- Local env runs without Redis; Redis only needed for cloud-ready profile.
- PHPStan requires `--memory-limit=512M` and `tests/` excluded from paths to avoid Pest conflicts at level 6.
- `npm run build` must run in CI before Pest — feature tests crash with `ViteManifestNotFoundException` otherwise.
- `SESSION_DOMAIN` derived programmatically in `config/session.php` as `'.' . env('APP_DOMAIN', 'localhost')` — cloud panels don't expand `${VAR}`.

## Risks & mitigations
- ⚠ Filament migrations may conflict with Spatie tables → run `migrate:fresh` to verify order.
- ⚠ Tailwind 4 + shadcn/ui compatibility → verify component imports before Phase 9.
- ⚠ Nightwatch token absent in CI → set `NIGHTWATCH_TOKEN=skip`.

## Rollback
Delete project dir; re-run `laravel new`; add packages incrementally.
