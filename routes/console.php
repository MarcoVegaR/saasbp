<?php

use App\Support\Rbac\TenantRbacManager;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('rbac:backfill-memberships', function (): void {
    $synced = app(TenantRbacManager::class)->backfillMembershipRoles();

    $this->info(sprintf('RBAC membership backfill completed. Synced memberships: %d', $synced));
})->purpose('Backfill tenant_user membership roles into Spatie team-scoped roles');
