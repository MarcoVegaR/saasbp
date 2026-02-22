<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\TenantNote;
use App\Models\User;

class TenantNotePolicy extends TenantScopedPolicy
{
    public function viewAny(User $user): bool
    {
        return $this->allowsTenantPermission($user, 'notes:view');
    }

    public function view(User $user, TenantNote $tenantNote): bool
    {
        return $this->allowsResourcePermission($user, $tenantNote, 'notes:view');
    }

    public function create(User $user): bool
    {
        return $this->allowsTenantPermission($user, 'notes:create');
    }

    public function update(User $user, TenantNote $tenantNote): bool
    {
        return $this->allowsResourcePermission($user, $tenantNote, 'notes:update');
    }

    public function delete(User $user, TenantNote $tenantNote): bool
    {
        return $this->allowsResourcePermission($user, $tenantNote, 'notes:delete');
    }
}
