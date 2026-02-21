<?php

declare(strict_types=1);

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('auth routes remain central-only', function (): void {
    $tenant = Tenant::create([
        'id' => 'tenant-auth',
        'name' => 'Tenant Auth',
        'slug' => 'tenant-auth',
        'plan' => 'free',
        'status' => 'active',
        'settings' => [],
    ]);

    $tenant->domains()->create(['domain' => 'tenant-auth']);

    $this->get('http://app.localhost/login')->assertOk();

    $tenantHostResponse = $this->get('http://tenant-auth.localhost/login');

    expect([403, 404])->toContain($tenantHostResponse->getStatusCode());
});

test('tenant protected route requires verified membership', function (): void {
    $tenant = Tenant::create([
        'id' => 'acme',
        'name' => 'Acme',
        'slug' => 'acme',
        'plan' => 'pro',
        'status' => 'active',
        'settings' => [],
    ]);

    $tenant->domains()->create(['domain' => 'acme.test']);

    $member = User::factory()->create([
        'email_verified_at' => now(),
    ]);
    $member->tenants()->attach($tenant->id, ['role' => 'owner']);

    $this->actingAs($member)
        ->get('http://acme.test/tenant-only')
        ->assertOk()
        ->assertJsonPath('user_id', $member->id)
        ->assertJsonPath('tenant_slug', 'acme');

    $outsider = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $this->actingAs($outsider)
        ->get('http://acme.test/tenant-only')
        ->assertForbidden();

    $unverifiedMember = User::factory()->unverified()->create();
    $unverifiedMember->tenants()->attach($tenant->id, ['role' => 'member']);

    $this->actingAs($unverifiedMember)
        ->get('http://acme.test/tenant-only')
        ->assertRedirect(route('verification.notice'));
});
