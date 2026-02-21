<?php

declare(strict_types=1);

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('tenant member can access protected tenant route', function (): void {
    $tenant = Tenant::create([
        'id' => 'membership-tenant',
        'name' => 'Membership Tenant',
        'slug' => 'membership-tenant',
        'plan' => 'pro',
        'status' => 'active',
        'settings' => [],
    ]);

    $tenant->domains()->create(['domain' => 'membership-tenant.test']);

    $user = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $user->tenants()->attach($tenant->id, ['role' => 'member']);

    $this->actingAs($user)
        ->get('http://membership-tenant.test/tenant-only')
        ->assertOk()
        ->assertJsonPath('user_id', $user->id)
        ->assertJsonPath('tenant_slug', 'membership-tenant');
});

test('tenant outsider is forbidden from protected tenant route', function (): void {
    $tenant = Tenant::create([
        'id' => 'outsider-tenant',
        'name' => 'Outsider Tenant',
        'slug' => 'outsider-tenant',
        'plan' => 'pro',
        'status' => 'active',
        'settings' => [],
    ]);

    $tenant->domains()->create(['domain' => 'outsider-tenant.test']);

    $outsider = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $this->actingAs($outsider)
        ->get('http://outsider-tenant.test/tenant-only')
        ->assertForbidden();
});
