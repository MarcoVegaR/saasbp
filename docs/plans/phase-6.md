# Phase 6 — Notifications

## Goal
Email + in-app notifications via queued jobs; notification center in UI.

## Tasks
- `notifications` table (standard Laravel) + `notification_preferences` table.
- `BaseMailNotification` + `BaseInAppNotification` abstract classes with `ShouldQueue`.
- `NotificationCenter` component: bell icon → dropdown + `/notifications` page; mark-as-read, mark-all-read.
- Example notifications: `MemberInvitedNotification`, `WelcomeNotification`.

## Acceptance
- Notification created → appears in center; email sent to queue (testable with `Mail::fake()`).
- Unread count badge visible in nav.

## Playbook

**Deliverables:** `notification_preferences` migration, `BaseMailNotification`, `BaseInAppNotification`, `NotificationCenter` React component, `NotificationController`, `MemberInvitedNotification`, `WelcomeNotification`, `NotificationTest`.

**Steps:**
1. `php artisan notifications:table`; create `notification_preferences` migration: `user_id`, `tenant_id`, `channel`, `type`, `enabled`.
2. Create `BaseMailNotification` abstract: implements `ShouldQueue`, uses `notifications` queue.
3. Create `BaseInAppNotification` abstract: stores to DB channel; adds `tenant_id` to notification data.
4. Create `MemberInvitedNotification` and `WelcomeNotification` extending base classes.
5. Create `NotificationController` (tenant): `index` (paginated, unread first), `markRead`, `markAllRead`; scoped to `auth()->id()` + `tenant_id` in data.
6. Create `NotificationCenter` React component: bell icon with unread badge, dropdown (latest 5), link to full page.
7. Share `unreadNotificationCount` in `HandleInertiaRequests::share`.
8. Write `NotificationTest`.

## Verification
```bash
php artisan test --filter NotificationTest
```

## Risks & mitigations
- ⚠ In-app notifications from tenant A visible to tenant B → always filter by `data->tenant_id` in `NotificationController`.
- ⚠ Badge count stale with Inertia navigation → reload count on every Inertia visit via shared props.

## Rollback
Remove notification routes/controller; revert `notification_preferences` migration.
