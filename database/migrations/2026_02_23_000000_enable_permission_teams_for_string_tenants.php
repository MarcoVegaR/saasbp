<?php

declare(strict_types=1);

use App\Support\Rbac\TenantPermissionCatalog;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $tableNames = (array) config('permission.table_names', []);
        $columnNames = (array) config('permission.column_names', []);

        $rolesTable = (string) ($tableNames['roles'] ?? 'roles');
        $modelHasRolesTable = (string) ($tableNames['model_has_roles'] ?? 'model_has_roles');
        $modelHasPermissionsTable = (string) ($tableNames['model_has_permissions'] ?? 'model_has_permissions');

        if (! Schema::hasTable($rolesTable)
            || ! Schema::hasTable($modelHasRolesTable)
            || ! Schema::hasTable($modelHasPermissionsTable)
        ) {
            return;
        }

        $teamColumn = (string) ($columnNames['team_foreign_key'] ?? 'team_id');
        $modelMorphColumn = (string) ($columnNames['model_morph_key'] ?? 'model_id');
        $rolePivotColumn = (string) ($columnNames['role_pivot_key'] ?? 'role_id');
        $permissionPivotColumn = (string) ($columnNames['permission_pivot_key'] ?? 'permission_id');

        $this->ensureRolesTeamColumn($rolesTable, $teamColumn);
        $this->ensurePivotTeamColumn($modelHasRolesTable, $teamColumn);
        $this->ensurePivotTeamColumn($modelHasPermissionsTable, $teamColumn);

        if ($this->isPgsql()) {
            $this->ensurePgsqlRolesUniqueIndex($rolesTable, $teamColumn);
            $this->ensurePgsqlCompositePrimary(
                table: $modelHasRolesTable,
                primaryName: 'model_has_roles_role_model_type_primary',
                teamColumn: $teamColumn,
                pivotColumn: $rolePivotColumn,
                modelMorphColumn: $modelMorphColumn,
            );
            $this->ensurePgsqlCompositePrimary(
                table: $modelHasPermissionsTable,
                primaryName: 'model_has_permissions_permission_model_type_primary',
                teamColumn: $teamColumn,
                pivotColumn: $permissionPivotColumn,
                modelMorphColumn: $modelMorphColumn,
            );
        }

        app('cache')
            ->store(config('permission.cache.store') != 'default' ? config('permission.cache.store') : null)
            ->forget(config('permission.cache.key'));
    }

    public function down(): void
    {
        // Intentionally left as no-op.
    }

    private function ensureRolesTeamColumn(string $table, string $teamColumn): void
    {
        if (! Schema::hasColumn($table, $teamColumn)) {
            Schema::table($table, function (Blueprint $blueprint) use ($teamColumn): void {
                $blueprint->string($teamColumn, 64)->nullable();
            });
        }

        if ($this->isPgsql()) {
            DB::statement(sprintf(
                'ALTER TABLE %s ALTER COLUMN %s TYPE VARCHAR(64) USING %s::text',
                $this->wrapIdentifier($table),
                $this->wrapIdentifier($teamColumn),
                $this->wrapIdentifier($teamColumn),
            ));

            DB::statement(sprintf(
                'CREATE INDEX IF NOT EXISTS %s ON %s (%s)',
                $this->wrapIdentifier('roles_team_foreign_key_index'),
                $this->wrapIdentifier($table),
                $this->wrapIdentifier($teamColumn),
            ));
        }
    }

    private function ensurePivotTeamColumn(string $table, string $teamColumn): void
    {
        if (! Schema::hasColumn($table, $teamColumn)) {
            Schema::table($table, function (Blueprint $blueprint) use ($teamColumn): void {
                $blueprint->string($teamColumn, 64)->nullable();
            });
        }

        if ($this->isPgsql()) {
            DB::statement(sprintf(
                'ALTER TABLE %s ALTER COLUMN %s TYPE VARCHAR(64) USING %s::text',
                $this->wrapIdentifier($table),
                $this->wrapIdentifier($teamColumn),
                $this->wrapIdentifier($teamColumn),
            ));
        }

        DB::table($table)
            ->whereNull($teamColumn)
            ->update([$teamColumn => TenantPermissionCatalog::GLOBAL_CONTEXT_TEAM_ID]);

        if ($this->isPgsql()) {
            DB::statement(sprintf(
                'ALTER TABLE %s ALTER COLUMN %s SET NOT NULL',
                $this->wrapIdentifier($table),
                $this->wrapIdentifier($teamColumn),
            ));

            DB::statement(sprintf(
                'CREATE INDEX IF NOT EXISTS %s ON %s (%s)',
                $this->wrapIdentifier($table.'_team_foreign_key_index'),
                $this->wrapIdentifier($table),
                $this->wrapIdentifier($teamColumn),
            ));
        }
    }

    private function ensurePgsqlRolesUniqueIndex(string $rolesTable, string $teamColumn): void
    {
        DB::statement(sprintf(
            'ALTER TABLE %s DROP CONSTRAINT IF EXISTS %s',
            $this->wrapIdentifier($rolesTable),
            $this->wrapIdentifier('roles_name_guard_name_unique'),
        ));

        DB::statement(sprintf(
            'DROP INDEX IF EXISTS %s',
            $this->wrapIdentifier('roles_team_foreign_key_name_guard_name_unique'),
        ));

        DB::statement(sprintf(
            'CREATE UNIQUE INDEX %s ON %s (%s, %s, %s)',
            $this->wrapIdentifier('roles_team_foreign_key_name_guard_name_unique'),
            $this->wrapIdentifier($rolesTable),
            $this->wrapIdentifier($teamColumn),
            $this->wrapIdentifier('name'),
            $this->wrapIdentifier('guard_name'),
        ));
    }

    private function ensurePgsqlCompositePrimary(
        string $table,
        string $primaryName,
        string $teamColumn,
        string $pivotColumn,
        string $modelMorphColumn,
    ): void {
        $currentPrimaryName = $this->getPgsqlPrimaryConstraintName($table);

        if (is_string($currentPrimaryName) && $currentPrimaryName !== '') {
            DB::statement(sprintf(
                'ALTER TABLE %s DROP CONSTRAINT IF EXISTS %s',
                $this->wrapIdentifier($table),
                $this->wrapIdentifier($currentPrimaryName),
            ));
        }

        DB::statement(sprintf(
            'ALTER TABLE %s ADD CONSTRAINT %s PRIMARY KEY (%s, %s, %s, %s)',
            $this->wrapIdentifier($table),
            $this->wrapIdentifier($primaryName),
            $this->wrapIdentifier($teamColumn),
            $this->wrapIdentifier($pivotColumn),
            $this->wrapIdentifier($modelMorphColumn),
            $this->wrapIdentifier('model_type'),
        ));
    }

    private function getPgsqlPrimaryConstraintName(string $table): ?string
    {
        $record = DB::selectOne(
            <<<'SQL'
                SELECT con.conname
                FROM pg_constraint con
                INNER JOIN pg_class rel ON rel.oid = con.conrelid
                INNER JOIN pg_namespace nsp ON nsp.oid = rel.relnamespace
                WHERE rel.relname = ?
                  AND nsp.nspname = current_schema()
                  AND con.contype = 'p'
                LIMIT 1
            SQL,
            [$table],
        );

        if (! is_object($record)) {
            return null;
        }

        $name = data_get($record, 'conname');

        return is_string($name) ? $name : null;
    }

    private function wrapIdentifier(string $identifier): string
    {
        return '"'.str_replace('"', '""', $identifier).'"';
    }

    private function isPgsql(): bool
    {
        return DB::getDriverName() === 'pgsql';
    }
};
