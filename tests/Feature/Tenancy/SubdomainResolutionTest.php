<?php

declare(strict_types=1);

use App\Models\Tenant;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('subdomain host resolves the correct tenant', function (): void {
    $tenant = Tenant::create([
        'id' => 'tenant1',
        'name' => 'Tenant 1',
        'slug' => 'tenant1',
        'plan' => 'free',
        'status' => 'active',
        'settings' => [],
    ]);

    $tenant->domains()->create(['domain' => 'tenant1']);

    $this->get('http://tenant1.localhost/')
        ->assertOk()
        ->assertJsonPath('tenant_slug', 'tenant1');

    expect(tenancy()->initialized)->toBeTrue();
    expect(tenancy()->tenant?->slug)->toBe('tenant1');

    tenancy()->end();
});
