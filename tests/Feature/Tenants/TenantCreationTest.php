<?php

declare(strict_types=1);

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('verified user can create a tenant and becomes owner', function (): void {
    $user = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $response = $this->actingAs($user)
        ->post('http://app.localhost/tenants', [
            'name' => 'Acme Inc',
            'slug' => 'acme',
        ]);

    $response
        ->assertRedirect(route('dashboard'))
        ->assertSessionHas('status', 'tenant-created');

    $tenant = Tenant::query()->where('slug', 'acme')->first();

    expect($tenant)->not->toBeNull();

    if (! $tenant instanceof Tenant) {
        return;
    }

    $response->assertSessionHas('current_tenant_id', $tenant->id);

    $this->assertDatabaseHas('domains', [
        'tenant_id' => $tenant->id,
        'domain' => 'acme',
    ]);

    $this->assertDatabaseHas('tenant_user', [
        'tenant_id' => $tenant->id,
        'user_id' => $user->id,
        'role' => 'owner',
        'status' => 'active',
    ]);
});

test('tenant slug rejects reserved central labels', function (): void {
    $user = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $this->actingAs($user)
        ->from('http://app.localhost/tenants/create')
        ->post('http://app.localhost/tenants', [
            'name' => 'Reserved Label Co',
            'slug' => 'app',
        ])
        ->assertRedirect('http://app.localhost/tenants/create')
        ->assertSessionHasErrors(['slug']);

    $this->assertDatabaseMissing('tenants', [
        'slug' => 'app',
    ]);
});

test('tenant slug must be unique', function (): void {
    $existing = Tenant::create([
        'id' => 'existing-tenant',
        'name' => 'Existing Tenant',
        'slug' => 'existing',
        'plan' => 'free',
        'status' => 'active',
        'settings' => [],
    ]);

    $existing->domains()->create([
        'domain' => 'existing.localhost',
    ]);

    $user = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $this->actingAs($user)
        ->post('http://app.localhost/tenants', [
            'name' => 'Another Tenant',
            'slug' => 'existing',
        ])
        ->assertSessionHasErrors(['slug']);
});
