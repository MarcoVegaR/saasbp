<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Tenant;
use App\Support\Rbac\TenantRbacManager;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run(TenantRbacManager $tenantRbacManager): void
    {
        $tenantRbacManager->seedGlobalRoles();

        Tenant::query()->orderBy('id')->each(function (Tenant $tenant) use ($tenantRbacManager): void {
            $tenantRbacManager->seedTenant($tenant);
        });

        $tenantRbacManager->backfillMembershipRoles();
    }
}
