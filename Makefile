.PHONY: test lint analyse docs-serve docs-build docs-check-links ci

MKDOCS ?= mkdocs

ifneq (,$(wildcard .venv-docs/bin/mkdocs))
MKDOCS := .venv-docs/bin/mkdocs
endif

test:
	php artisan test

lint:
	./vendor/bin/pint --test

analyse:
	./vendor/bin/phpstan analyse --memory-limit=512M

docs-serve:
	$(MKDOCS) serve -a 127.0.0.1:8000

docs-build:
	$(MKDOCS) build --strict

docs-check-links:
	$(MKDOCS) build --strict

ci: test lint analyse docs-build
