<?php

declare(strict_types=1);

use App\Models\Tenant;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('fortify auth endpoints are available only on central domain', function (): void {
    $tenant = Tenant::create([
        'id' => 'phase2-auth-central',
        'name' => 'Phase2 Auth Central',
        'slug' => 'phase2-auth-central',
        'plan' => 'free',
        'status' => 'active',
        'settings' => [],
    ]);

    $tenant->domains()->create(['domain' => 'phase2-auth-central']);

    $this->get('http://app.localhost/login')->assertOk();

    $tenantHostResponse = $this->get('http://phase2-auth-central.localhost/login');

    expect([403, 404])->toContain($tenantHostResponse->getStatusCode());
});
