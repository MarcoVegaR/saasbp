<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

abstract class TenantScopedPolicy
{
    protected function allowsTenantPermission(User $user, string $permission): bool
    {
        $tenant = tenant();

        if (! $tenant instanceof Tenant) {
            return false;
        }

        return $user->hasTenantPermission($permission, $tenant);
    }

    protected function allowsResourcePermission(User $user, Model $resource, string $permission): bool
    {
        $tenant = tenant();

        if (! $tenant instanceof Tenant) {
            return false;
        }

        $resourceTenantId = $resource->getAttribute('tenant_id');

        if (! is_string($resourceTenantId) || $resourceTenantId !== (string) $tenant->getKey()) {
            return false;
        }

        return $user->hasTenantPermission($permission, $tenant);
    }
}
