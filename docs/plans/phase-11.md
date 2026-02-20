# Phase 11 — Scaffold Generator ⭐

## Goal
`php artisan make:saas-module {Name}` generates a complete, working module in seconds.

## Tasks
- Command: `app/Console/Commands/MakeSaasModule.php`
- Options: `--tenant` (default true), `--with-repo` (optional repository), `--force`
- Stubs in `stubs/saas-module/`:
  - `migration.stub` — includes `tenant_id` FK, timestamps, soft deletes
  - `model.stub` — uses `BelongsToTenant`, `Auditable`, fillable array
  - `service.stub` — constructor injection, CRUD methods
  - `repository.stub` — optional; implements `RepositoryInterface`
  - `form-request-store.stub`, `form-request-update.stub`
  - `controller.stub` — Inertia controller (Index/Create/Store/Edit/Update/Destroy/Show)
  - `policy.stub` — extends `TenantScopedPolicy`
  - `routes.stub` — resource routes appended to `routes/tenant.php`
  - `permission-seeder.stub` — entries for `{name}:view|create|update|delete`
  - `react-index.stub`, `react-create.stub`, `react-edit.stub`, `react-show.stub`
  - `test-feature.stub` — Pest test: isolation + auth + RBAC
  - `lang-en.stub`, `lang-es.stub`
- Generator config in `config/saas-generator.php`.
- Demo module: Tickets (`php artisan make:saas-module Ticket`).

## Acceptance
Running the command with `Ticket` generates all files, `php artisan migrate` runs, Inertia pages render, Pest tests pass.

## Playbook

**Deliverables:** `MakeSaasModule.php` command, all stubs in `stubs/saas-module/`, `config/saas-generator.php`, demo Tickets module.

**Steps:**
1. Create `config/saas-generator.php`: maps stub names to output paths; configurable per project.
2. Create `MakeSaasModule` command: accepts `{name}`, `--tenant` (default true), `--with-repo`, `--force`.
3. Write each stub with `{{Name}}`, `{{name}}`, `{{namespace}}` placeholders.
4. Implement stub processor: reads stub, replaces placeholders, writes to target path; skips if exists (unless `--force`).
5. After file generation: append generated routes to `routes/tenant.php`; append permission entries to `PermissionSeeder`.
6. Run `php artisan make:saas-module Ticket --force` to generate demo module.
7. Run `php artisan migrate` to apply generated Tickets migration.
8. Write `ScaffoldGeneratorTest`: run command, assert all expected files exist, assert migration has `tenant_id` column.

## Verification
```bash
php artisan make:saas-module Ticket --force
php artisan migrate
php artisan test --filter ScaffoldGeneratorTest
php artisan test --filter Ticket
```

## Risks & mitigations
- ⚠ Generated routes appended to `tenant.php` break if file has non-standard end → use marker comment `// [saas-generator routes]` and insert before it.
- ⚠ Stub placeholders not sanitized → validate `{name}` is PascalCase before processing.
- ⚠ Generated React files may have TS errors → run `tsc --noEmit` as part of `ScaffoldGeneratorTest`.

## Rollback
Delete generated Tickets files; remove appended routes from `tenant.php`.
