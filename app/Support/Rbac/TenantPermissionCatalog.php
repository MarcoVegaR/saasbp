<?php

declare(strict_types=1);

namespace App\Support\Rbac;

final class TenantPermissionCatalog
{
    public const GLOBAL_CONTEXT_TEAM_ID = '__central__';

    /**
     * @return list<string>
     */
    public static function tenantRoles(): array
    {
        return ['owner', 'admin', 'member'];
    }

    /**
     * @return list<string>
     */
    public static function globalRoles(): array
    {
        return ['superadmin'];
    }

    /**
     * @return list<string>
     */
    public static function permissions(): array
    {
        return [
            'tenants:view',
            'tenants:switch',
            'tenants:update',
            'members:view',
            'members:invite',
            'members:update',
            'members:suspend',
            'notes:view',
            'notes:create',
            'notes:update',
            'notes:delete',
        ];
    }

    /**
     * @return list<string>
     */
    public static function permissionsForRole(string $role): array
    {
        return match ($role) {
            'owner' => self::permissions(),
            'admin' => [
                'tenants:view',
                'tenants:switch',
                'members:view',
                'members:invite',
                'members:update',
                'notes:view',
                'notes:create',
                'notes:update',
            ],
            'member' => [
                'tenants:view',
                'tenants:switch',
                'members:view',
                'notes:view',
            ],
            default => [],
        };
    }

    public static function normalizeTenantRole(?string $role): string
    {
        return in_array($role, self::tenantRoles(), true)
            ? (string) $role
            : 'member';
    }
}
