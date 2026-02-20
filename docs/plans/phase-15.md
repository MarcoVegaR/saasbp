# Phase 15 — Windsurf Skills & AGENTS.md Ecosystem

## Goal
Every key directory has AI guardrails; 7 custom skills + 3 adopted community skills installed.

## Community Skills (to adopt/adapt)

| Skill | Source | Reason |
|---|---|---|
| `react-composition` | vercel-labs/agent-skills | React patterns (components, hooks, composition) |
| `typescript-strict` | vercel-labs/agent-skills | TS strict mode guardrails + type-safe patterns |
| `postgres-query-patterns` | community / agentskills.io | PostgreSQL best practices: indexes, N+1 prevention, JSONB |

Community skills are copied to `.windsurf/skills/<name>/SKILL.md` and adapted minimally.

## Custom Skills

| Skill | Description |
|---|---|
| `tenancy-guardrails` | Prevent cross-tenant data leaks: BelongsToTenant, tenant_id in queries, TenantIsolationTest |
| `rbac-spatie-tenant` | Correct Spatie permission usage: always set team context, `{resource}:{action}` naming, TenantScopedPolicy |
| `filament-central-admin` | Filament panel conventions: central domain only, no stancl bootstrap, superadmin gate |
| `scaffold-saas-module` | How to use `make:saas-module`: command usage, stub anatomy, generated file locations |
| `nightwatch-observability` | Nightwatch logging policy: correlation ID, tenant context, PII masking, slow query threshold |
| `laravel-cloud-runtime` | Laravel Cloud guardrails: no ephemeral disk, Redis for session/cache/queue, S3 for storage |
| `docs-mkdocs-authoring` | MkDocs authoring: page template, Mermaid syntax, no broken links, `--strict` before PR |

## AGENTS.md Files

| File | Scope | Key rules |
|---|---|---|
| `AGENTS.md` | Repo root | Stack overview, commit conventions, CI commands |
| `app/AGENTS.md` | All backend code | Controller→Service→Policy pattern; BelongsToTenant requirement; no PII in logs; PHPStan level 6 |
| `resources/js/AGENTS.md` | All frontend code | TypeScript strict; shadcn no-fork rule; `useForm` + `useTrans()` patterns; naming conventions |
| `routes/AGENTS.md` | Route files | Central vs tenant split; required middleware stack; `Route::domain()` on central routes; no logic in closures |
| `docs/AGENTS.md` | Documentation | MkDocs authoring rules; Mermaid syntax; `mkdocs build --strict` before merge; no broken links |

## Acceptance
- All 7 custom skills created with `SKILL.md` + at least one `resources/` file each.
- 3 community skills installed and adapted.
- All 5 `AGENTS.md` files present with `<!-- verified: YYYY-MM-DD -->` comment.
- Cascade recognizes `@tenancy-guardrails`, `@rbac-spatie-tenant`, `@scaffold-saas-module` by name.
- Directory scoping verified: `app/AGENTS.md` rules not active when editing `resources/js/` files.

## Playbook

**Steps:**
1. Browse `github.com/vercel-labs/agent-skills`; download `react-composition` and `typescript-strict` SKILL.md.
2. Find `postgres-query-patterns` equivalent on agentskills.io; adapt for Laravel context.
3. Place adapted skills in `.windsurf/skills/<name>/SKILL.md`.
4. Create 7 custom skill dirs with `SKILL.md` (YAML frontmatter: name, description) + body checklist.
5. For each custom skill, add at least one `resources/` example file (PHP/TS snippet).
6. Create all 5 `AGENTS.md` files.
7. Verify directory scoping: open controller → `app/AGENTS.md` active; open React page → `resources/js/AGENTS.md` active; add `<!-- verified: YYYY-MM-DD -->` to each.

## Risks & mitigations
- ⚠ Community skill URLs unavailable → copy content into repo; note source in SKILL.md frontmatter comment.
- ⚠ AGENTS.md too verbose → keep under 80 lines; delegate detail to skill resources or docs.

## Rollback
Remove `.windsurf/skills/` and `AGENTS.md` files; zero code impact.
