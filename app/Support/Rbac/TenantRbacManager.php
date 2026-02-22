<?php

declare(strict_types=1);

namespace App\Support\Rbac;

use App\Models\Tenant;
use App\Models\User;
use Closure;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class TenantRbacManager
{
    public function seedTenant(Tenant $tenant): void
    {
        if (! $this->teamsEnabled()) {
            return;
        }

        $this->ensurePermissionsExist();

        $this->withTeamContext((string) $tenant->getKey(), function (): void {
            foreach (TenantPermissionCatalog::tenantRoles() as $roleName) {
                $role = Role::findOrCreate($roleName, 'web');
                $role->syncPermissions(TenantPermissionCatalog::permissionsForRole($roleName));
            }
        });

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    public function seedGlobalRoles(): void
    {
        if (! $this->teamsEnabled()) {
            return;
        }

        $this->ensurePermissionsExist();

        $this->withTeamContext(TenantPermissionCatalog::GLOBAL_CONTEXT_TEAM_ID, function (): void {
            foreach (TenantPermissionCatalog::globalRoles() as $roleName) {
                Role::findOrCreate($roleName, 'web');
            }
        });

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    public function syncMembershipRole(User $user, Tenant $tenant, ?string $membershipRole): void
    {
        if (! $this->teamsEnabled()) {
            return;
        }

        $this->seedTenant($tenant);

        $roleToAssign = TenantPermissionCatalog::normalizeTenantRole($membershipRole);

        $this->withTeamContext((string) $tenant->getKey(), function () use ($user, $roleToAssign): void {
            $user->unsetRelation('roles');
            $user->syncRoles([$roleToAssign]);
        });

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    public function assignGlobalRole(User $user, string $role): void
    {
        if (! $this->teamsEnabled()) {
            return;
        }

        $this->seedGlobalRoles();

        $this->withTeamContext(TenantPermissionCatalog::GLOBAL_CONTEXT_TEAM_ID, function () use ($user, $role): void {
            $user->unsetRelation('roles');

            if (! $user->hasRole($role)) {
                $user->assignRole($role);
            }
        });

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    public function removeTenantRoles(User $user, Tenant $tenant): void
    {
        if (! $this->teamsEnabled()) {
            return;
        }

        $this->withTeamContext((string) $tenant->getKey(), function () use ($user): void {
            $user->unsetRelation('roles');
            $user->syncRoles([]);
        });

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    public function backfillMembershipRoles(): int
    {
        if (! $this->teamsEnabled()) {
            return 0;
        }

        $this->seedGlobalRoles();

        $affectedRows = 0;

        $memberships = DB::table('tenant_user')
            ->select(['tenant_id', 'user_id', 'role', 'status'])
            ->orderBy('id')
            ->get();

        foreach ($memberships as $membership) {
            $tenant = Tenant::query()->find((string) $membership->tenant_id);
            $user = User::query()->find((int) $membership->user_id);

            if (! $tenant instanceof Tenant || ! $user instanceof User) {
                continue;
            }

            if ((string) $membership->status !== 'active') {
                $this->removeTenantRoles($user, $tenant);

                continue;
            }

            $this->syncMembershipRole($user, $tenant, (string) $membership->role);
            $affectedRows++;
        }

        return $affectedRows;
    }

    private function ensurePermissionsExist(): void
    {
        foreach (TenantPermissionCatalog::permissions() as $permission) {
            Permission::findOrCreate($permission, 'web');
        }
    }

    private function teamsEnabled(): bool
    {
        return (bool) config('permission.teams', false);
    }

    /**
     * @template TReturn
     *
     * @param  Closure(): TReturn  $callback
     * @return TReturn
     */
    private function withTeamContext(?string $teamId, Closure $callback): mixed
    {
        if (! function_exists('setPermissionsTeamId')) {
            return $callback();
        }

        $previousTeamId = function_exists('getPermissionsTeamId')
            ? call_user_func('getPermissionsTeamId')
            : null;

        call_user_func('setPermissionsTeamId', $teamId);

        try {
            return $callback();
        } finally {
            call_user_func('setPermissionsTeamId', $previousTeamId);
        }
    }
}
