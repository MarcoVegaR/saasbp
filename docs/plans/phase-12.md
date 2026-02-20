# Phase 12 — i18n (ES/EN)

## Goal
All user-facing strings translatable; consistent frontend strategy.

## i18n export strategy (resolved decision)

Laravel's `lang/{locale}/{namespace}.php` files return arrays. To export translations to the frontend correctly:

- **`trans('auth')`** (or `Lang::get('auth')`) returns the full array from `lang/{locale}/auth.php`. ✅
- **`__('auth')`** is for string lookup by key (e.g. `__('auth.login')`) — do NOT use it to export a whole namespace. ❌

### Option A — Flat key map (recommended for `t('auth.login')` style)

```php
// HandleInertiaRequests::share
'trans' => fn() => collect(Lang::get('auth'))
    ->mapWithKeys(fn($v, $k) => ["auth.{$k}" => $v])
    ->merge(
        collect(Lang::get('common'))
            ->mapWithKeys(fn($v, $k) => ["common.{$k}" => $v])
    )
    ->all(),
```

Frontend `useTrans()`:
```ts
const t = (key: string): string => {
    const trans = usePage().props.trans as Record<string, string>;
    return trans[key] ?? key;
};
```

### Option B — Namespaced map (nested objects)

```php
'trans' => fn() => [
    'auth'   => Lang::get('auth'),   // returns array ✅
    'common' => Lang::get('common'), // returns array ✅
],
```

Frontend `useTrans()`:
```ts
const t = (key: string): string => {
    const [ns, ...parts] = key.split('.');
    const trans = usePage().props.trans as Record<string, Record<string, string>>;
    return parts.reduce((obj: any, k) => obj?.[k], trans[ns]) ?? key;
};
```

**Choose one approach before Phase 12 and document it here.** Mixing both in different modules causes runtime bugs.

> Do **not** share all namespaces on every request — only `auth` + `common` by default. Add `/api/trans/{namespace}` lazy-load endpoint for modules that need additional namespaces.

## Tasks
- Backend: `lang/es/*.php` + `lang/en/*.php` for all modules.
- Frontend: share translations via `HandleInertiaRequests::share` using the chosen strategy above.
- `useTrans()` hook: implements lookup based on chosen strategy.
- i18n type generation: script extracts backend keys → TS types for autocomplete.
- Scaffold generator includes `lang-en.stub` and `lang-es.stub`.

## Acceptance
- Switching `APP_LOCALE=es` changes all UI strings to Spanish.
- TS errors if `t()` is called with unknown key.

## Playbook

**Deliverables:** `lang/en/*.php`, `lang/es/*.php`, `HandleInertiaRequests` updated, `useTrans.ts` hook, `generate-trans-types.ts` script, i18n test.

**Steps:**
1. Create `lang/en/` files: `auth.php`, `tenancy.php`, `membership.php`, `notifications.php`, `common.php`.
2. Duplicate structure to `lang/es/` with Spanish translations.
3. Update `HandleInertiaRequests::share` with chosen strategy (Option A or B).
4. Create `resources/js/hooks/useTrans.ts` matching chosen strategy.
5. Create `scripts/generate-trans-types.ts`: reads `lang/en/*.php`, generates `resources/js/types/trans-keys.d.ts` with union type of all keys.
6. Update `package.json`: add `"trans:types": "ts-node scripts/generate-trans-types.ts"`.
7. Update scaffold generator: add `lang-en.stub` and `lang-es.stub` to stub list.
8. Write `I18nTest`: switch `APP_LOCALE=es`; assert shared `trans` contains Spanish strings.

## Verification
```bash
npm run trans:types
php artisan test --filter I18nTest
npx tsc --noEmit
```

## Risks & mitigations
- ⚠ Using `__('auth')` instead of `Lang::get('auth')` returns string/fallback, not array — causes silent runtime failure.
- ⚠ Sharing all lang keys bloats Inertia page props → share only `auth` + `common` by default.
- ⚠ TS type generation slow → only run in CI and pre-commit hook.

## Rollback
Remove `trans` from shared props; revert `useTrans` to simple string lookup without types.
