# Phase 9 — UI Base Components

## Goal
Reusable, typed React components for all CRUD patterns; consistent theme.

## Tasks
- `DataTable<T>`: columns config, server-side pagination, sort, search, filter bar (Inertia GET params).
- `BaseIndex`: wraps DataTable + page header + action buttons.
- `BaseForm`: form wrapper with `useForm` (Inertia), error display, dirty-state guard.
- `BaseShow`: key-value detail layout with action buttons.
- Components: `ConfirmDialog`, `Toast` (via shadcn Sonner), `SearchableSelect`, `StatusBadge`.
- Theme tokens: success/warning/error/info color vars in Tailwind config.
- TypeScript interfaces: `PaginatedResponse<T>`, `InertiaFormProps<T>`, `BreadcrumbItem`.
- `useTrans()` hook: reads `$page.props.trans`, returns `t(key: string): string`.

## Acceptance
- Each component renders without TS errors.
- `tsc --noEmit` passes.

## Playbook

**Deliverables:** `DataTable<T>`, `BaseIndex`, `BaseForm`, `BaseShow`, `ConfirmDialog`, `Toast`, `SearchableSelect`, `StatusBadge`, TS interfaces file, Tailwind theme tokens, `useTrans()` hook.

**Steps:**
1. Install shadcn/ui components: `table`, `dialog`, `sonner`, `select`, `badge`, `button`, `input`, `form` via `npx shadcn add`.
2. Create `resources/js/types/index.ts`: export `PaginatedResponse<T>`, `InertiaFormProps<T>`, `BreadcrumbItem`, `SelectOption`.
3. Create `DataTable<T>`: accepts `columns`, `data: PaginatedResponse<T>`, syncs page/sort/search/filter to Inertia GET params via `router.get`.
4. Create `BaseIndex`, `BaseForm`, `BaseShow`, `ConfirmDialog`.
5. Configure Tailwind theme: add `--color-success`, `--color-warning`, `--color-error`, `--color-info` CSS vars.
6. Create `useTrans()` hook (see Phase 12 for full i18n strategy).
7. Run `npx tsc --noEmit` — must pass with zero errors.

## Verification
```bash
npx tsc --noEmit
```

## Risks & mitigations
- ⚠ shadcn components updated upstream break local use → only use `npx shadcn add`; document in `docs/shadcn-update.md`.
- ⚠ Tailwind 4 CSS var syntax differs from v3 → use Tailwind 4 `@theme` block; verify shadcn compatibility.

## Rollback
Remove custom components; revert to raw shadcn primitives.
