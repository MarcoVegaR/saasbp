<?php

declare(strict_types=1);

namespace App\Concerns;

use App\Models\Tenant;
use App\Support\Rbac\TenantPermissionCatalog;
use Closure;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;

trait HasTenantPermissions
{
    public function hasTenantPermission(string $permission, Tenant|string $tenant): bool
    {
        if (! config('permission.teams', false)) {
            return false;
        }

        $tenantId = $this->normalizeTenantId($tenant);

        if (! $this->hasActiveMembershipForTenant($tenantId)) {
            return false;
        }

        try {
            return $this->withPermissionTeamContext($tenantId, fn (): bool => $this->hasPermissionTo($permission));
        } catch (PermissionDoesNotExist) {
            return false;
        }
    }

    public function hasTenantRole(string $role, Tenant|string $tenant): bool
    {
        if (! config('permission.teams', false)) {
            return false;
        }

        $tenantId = $this->normalizeTenantId($tenant);

        return $this->withPermissionTeamContext($tenantId, fn (): bool => $this->hasRole($role));
    }

    public function hasGlobalRole(string $role): bool
    {
        if (! config('permission.teams', false)) {
            return false;
        }

        $tableNames = (array) config('permission.table_names', []);
        $columnNames = (array) config('permission.column_names', []);

        $rolesTable = (string) ($tableNames['roles'] ?? 'roles');
        $modelHasRolesTable = (string) ($tableNames['model_has_roles'] ?? 'model_has_roles');
        $modelMorphKey = (string) ($columnNames['model_morph_key'] ?? 'model_id');
        $rolePivotKey = (string) ($columnNames['role_pivot_key'] ?? 'role_id');
        $teamForeignKey = (string) config('permission.column_names.team_foreign_key', 'team_id');

        return DB::table($modelHasRolesTable)
            ->join($rolesTable, $rolesTable.'.id', '=', $modelHasRolesTable.'.'.$rolePivotKey)
            ->where($modelHasRolesTable.'.model_type', $this->getMorphClass())
            ->where($modelHasRolesTable.'.'.$modelMorphKey, $this->getKey())
            ->where($modelHasRolesTable.'.'.$teamForeignKey, TenantPermissionCatalog::GLOBAL_CONTEXT_TEAM_ID)
            ->where($rolesTable.'.name', $role)
            ->where($rolesTable.'.guard_name', $this->getDefaultGuardName())
            ->exists();
    }

    private function hasActiveMembershipForTenant(string $tenantId): bool
    {
        return $this->tenants()
            ->whereKey($tenantId)
            ->wherePivot('status', 'active')
            ->exists();
    }

    private function normalizeTenantId(Tenant|string $tenant): string
    {
        if ($tenant instanceof Tenant) {
            return (string) $tenant->getKey();
        }

        return (string) $tenant;
    }

    /**
     * @template TReturn
     *
     * @param  Closure(): TReturn  $callback
     * @return TReturn
     */
    private function withPermissionTeamContext(string $teamId, Closure $callback): mixed
    {
        if (! function_exists('setPermissionsTeamId')) {
            return $callback();
        }

        $this->unsetRelation('roles');
        $this->unsetRelation('permissions');

        $previousTeamId = function_exists('getPermissionsTeamId')
            ? call_user_func('getPermissionsTeamId')
            : null;

        call_user_func('setPermissionsTeamId', $teamId);

        try {
            return $callback();
        } finally {
            call_user_func('setPermissionsTeamId', $previousTeamId);
            $this->unsetRelation('roles');
            $this->unsetRelation('permissions');
        }
    }
}
