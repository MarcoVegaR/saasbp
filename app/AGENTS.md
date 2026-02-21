# App Guardrails (Phase 1)

- Every tenant-scoped model **must** use `App\Concerns\BelongsToTenant`.
- Scope guard is mandatory: `if (! tenancy()->initialized) return;`.
- Never log passwords, tokens, TOTP secrets, or recovery codes.
- PHPStan level 6 must pass.
- For secondary models (e.g. `Comment -> Post -> Tenant`), do not query directly without joining/scoping through the primary tenant-owned model.
