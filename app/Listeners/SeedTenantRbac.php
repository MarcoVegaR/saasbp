<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Models\Tenant;
use App\Support\Rbac\TenantRbacManager;
use Stancl\Tenancy\Events\TenantCreated;

class SeedTenantRbac
{
    public function __construct(private readonly TenantRbacManager $tenantRbacManager) {}

    public function handle(TenantCreated $event): void
    {
        if (! $event->tenant instanceof Tenant) {
            return;
        }

        $this->tenantRbacManager->seedTenant($event->tenant);
    }
}
