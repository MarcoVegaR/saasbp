<?php

declare(strict_types=1);

use App\Models\Tenant;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('custom domain host resolves the correct tenant', function (): void {
    $tenant = Tenant::create([
        'id' => 'acme',
        'name' => 'Acme Inc',
        'slug' => 'acme',
        'plan' => 'pro',
        'status' => 'active',
        'settings' => [],
    ]);

    $tenant->domains()->create(['domain' => 'acme.test']);

    $this->get('http://acme.test/')
        ->assertOk()
        ->assertJsonPath('tenant_slug', 'acme');

    expect(tenancy()->initialized)->toBeTrue();
    expect(tenancy()->tenant?->slug)->toBe('acme');

    tenancy()->end();
});
