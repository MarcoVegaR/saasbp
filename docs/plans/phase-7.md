# Phase 7 — Jobs & Queues

## Goal
Redis-backed queue; structured retry/backoff; dead-letter documentation.

## Tasks
- `QUEUE_CONNECTION=redis` (Laravel Cloud KV store — Redis-compatible).
- `BaseJob` abstract: `$tries = 3`, `$backoff = [30, 60, 120]`, `$timeout = 60`.
- Failed jobs: `failed_jobs` table; `FailedJobMonitor` listener → logs to Nightwatch.
- Horizon: installed + config + dashboard at `/horizon` (superadmin gate); optional for local dev.
- `docs/queues.md`: Horizon setup, dead-letter strategy, re-queue procedure, monitoring playbook.

## Acceptance
- Job fails 3x → lands in `failed_jobs`; alert event fired.
- Horizon dashboard accessible only to superadmin (when installed).

## Playbook

**Deliverables:** `BaseJob`, `FailedJobMonitor`, `config/horizon.php`, `HorizonServiceProvider` gate, `JobTest`, `docs/queues.md`.

**Steps:**
1. Verify `QUEUE_CONNECTION=redis` in `.env.example`; confirm Redis KV store connection.
2. Create `BaseJob` abstract: `$tries = 3`, `$backoff = [30, 60, 120]`, `$timeout = 60`, `$queue = 'default'`.
3. `php artisan horizon:install`; configure `config/horizon.php`: queues `default`, `notifications`, `emails`.
4. Create `HorizonServiceProvider`: `Horizon::auth(fn($req) => $req->user()?->hasRole('superadmin'))`.
5. Create `FailedJobMonitor` listener: listens to `JobFailed` event, logs to Nightwatch at error level with `job_class`, `exception`, `correlation_id`.
6. Create console.php schedule: `php artisan horizon:snapshot` every 5 minutes.
7. Document in `docs/queues.md`: Horizon optional install steps, dead-letter strategy, re-queue with `php artisan queue:retry all`, monitoring playbook.
8. Write `JobTest`.

## Verification
```bash
php artisan test --filter JobTest
make docs-build
```

## Risks & mitigations
- ⚠ Laravel Cloud KV store may need predis driver → `composer require predis/predis`; set `REDIS_CLIENT=predis`.
- ⚠ Horizon supervisor not running in Cloud → document Cloud worker config in `docs/setup.md`; Horizon is optional.

## Rollback
Remove Horizon config; revert to `QUEUE_CONNECTION=sync` for tests only.
