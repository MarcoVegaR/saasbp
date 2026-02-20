# Phase 13 — Quality & CI

## Goal
Consistent code style enforced; static analysis at level 6; full test suite in CI.

## Tasks
- `pint.json`: opinionated PSR-12 + Laravel conventions.
- `phpstan.neon`: level 6, custom baseline for Filament/Spatie generics.
- `tsconfig.json`: strict mode, `noImplicitAny`, `strictNullChecks`.
- Pest suites: Unit, Feature (tenancy isolation, auth, RBAC, membership, generator output).
- GitHub Actions `ci.yml`: PHP deps + migrate + Pest; Pint (dry-run, fail on diff); PHPStan; npm install + tsc + Vite build; docs-build.

## Acceptance
- All checks green on a clean branch push.
- These feature tests exist and pass: `TenantIsolationTest`, `AuthTest`, `RbacTest`, `MembershipSwitchTest`, `ScaffoldGeneratorTest`.

## Playbook

**Deliverables:** Final `pint.json`, `phpstan.neon`, `tsconfig.json`, complete `ci.yml`, all guardrail tests present and green.

**Steps:**
1. Finalize `pint.json`: preset: laravel, add project-specific overrides.
2. Finalize `phpstan.neon`: level 6, include larastan, add `ignoreErrors` baseline for Filament/Spatie dynamic methods.
3. Finalize `tsconfig.json`: `strict: true`, paths aliases for `@/` → `resources/js/`.
4. Verify all guardrail tests are present: `TenantIsolationTest`, `CentralRoutesAccessibleTest`, `TenantSwitchRbacTest`, `TeamContextAlwaysSetTest`, `OttSsoTest`, `ScaffoldGeneratorTest`.
5. Update `ci.yml`: add `docs-build` job; add `docs-linkcheck` job; ensure jobs run in parallel where possible.
6. Add GitHub Actions job order: `test` (with PostgreSQL service) → `lint` → `analyse` → `ts-check` → `docs-build`.
7. Run full CI locally: `make ci` → all green.

## Verification
```bash
make ci
# Push to GitHub → all CI jobs green
```

## Risks & mitigations
- ⚠ PHPStan false positives on Filament/Spatie magic → create baseline with `phpstan analyse --generate-baseline`.
- ⚠ CI times out due to large test suite → parallelize Pest with `--parallel` flag.

## Rollback
Revert `ci.yml` to Phase 0 version; re-run individually.
