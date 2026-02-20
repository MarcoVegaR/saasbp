# Phase 14 — MkDocs Documentation Site

## Goal
All docs navigable via MkDocs Material; `make docs-build` works locally; CI validates no broken links.

## Tasks
- `mkdocs.yml` with mkdocs-material theme, Mermaid plugin, search, nav tree.
- `docs/requirements.txt`: `mkdocs-material`, `mkdocs-mermaid2-plugin`, `mkdocs-linkcheck`.
- Makefile targets: `docs-serve`, `docs-build`, `docs-check-links`.
- GitHub Action `docs.yml`: build + linkcheck on PR (no publish).
- Populate all pages with content from implementation decisions.

## MkDocs nav tree
```
docs/
  index.md                 ← project overview + quick-start
  architecture.md          ← Mermaid diagram + decisions + trade-offs
  setup.md                 ← local dev + Laravel Cloud deployment
  tenancy.md               ← subdomain + custom domains + session strategy
  rbac.md                  ← Spatie teams/tenant scoping
  auditing.md              ← activitylog config + redaction policy
  notifications.md         ← email + in-app + queue strategy
  queues.md                ← Redis config + retry/backoff + dead-letter
  observability.md         ← Nightwatch + logging policy + correlation IDs
  generator.md             ← make:saas-module usage + stub anatomy
  mfa.md                   ← feature flag + TOTP scaffold + future work
  custom-domains.md        ← one-time-token SSO flow + trade-offs
  shadcn-update.md         ← no-fork rule + update procedure
  new-product-checklist.md ← step-by-step checklist for new SaaS
  billing.md               ← adapter interface + skeleton schema
  phase-playbooks.md       ← index of all Phase Playbooks
  plans/                   ← implementation plan files (versioned)
```

## Acceptance
- `mkdocs build --strict` exits 0 (no warnings).
- `mkdocs-linkcheck` reports 0 broken internal links.
- GitHub Action passes on CI.

## Playbook

**Deliverables:** `mkdocs.yml`, `docs/requirements.txt`, all `docs/*.md` pages, `docs/phase-playbooks.md`, Makefile doc targets, `.github/workflows/docs.yml`.

**Steps:**
1. `pip install mkdocs-material mkdocs-mermaid2-plugin` locally; create `docs/requirements.txt` pinning versions.
2. Create `mkdocs.yml`: theme material, plugins search + mermaid2, `strict: true`, full nav tree.
3. Create each `docs/*.md` stub with frontmatter title + one-paragraph summary.
4. Create `docs/phase-playbooks.md`: table with Phase number, name, objective, key deliverables, link to plan section.
5. Write `docs/architecture.md` with Mermaid diagram: tenant resolution flow, request lifecycle, folder structure.
6. Write `docs/setup.md`: local dev steps + Laravel Cloud deployment checklist.
7. Write `docs/tenancy.md`: stancl domains table, middleware, OTT SSO, session strategy.
8. Write `docs/observability.md`: Nightwatch config, `Laravel\Context` fields, logging policy table, PII masking.
9. Add Makefile targets: `docs-serve`, `docs-build`, `docs-check-links`.
10. Create `.github/workflows/docs.yml`: `mkdocs build --strict` + linkcheck on every PR.

## Verification
```bash
make docs-build
make docs-check-links
```

## Risks & mitigations
- ⚠ mkdocs-mermaid2-plugin version conflicts with mkdocs-material → pin compatible versions in `requirements.txt`.
- ⚠ `--strict` fails on TODO stubs → use `<!-- TODO -->` comments instead of empty headings.
- ⚠ Python not available in CI → use `actions/setup-python` with `python-version: '3.x'`.

## Rollback
Remove `docs/` dir; remove `mkdocs.yml`; remove docs CI job.
