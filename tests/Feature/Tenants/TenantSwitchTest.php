<?php

declare(strict_types=1);

use App\Models\SignedLoginToken;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

function createSwitchableTenant(string $id, string $domain): Tenant
{
    $tenant = Tenant::create([
        'id' => $id,
        'name' => ucfirst($id),
        'slug' => $id,
        'plan' => 'pro',
        'status' => 'active',
        'settings' => [],
    ]);

    $tenant->domains()->create(['domain' => $domain]);

    return $tenant;
}

test('active tenant member can switch to tenant domain', function (): void {
    $tenant = createSwitchableTenant('switch-ok', 'switch-ok.test');

    $member = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $member->tenants()->attach($tenant->id, [
        'role' => 'member',
        'status' => 'active',
        'joined_at' => now(),
    ]);

    $this->actingAs($member)
        ->post("http://app.localhost/tenants/{$tenant->id}/switch")
        ->assertRedirectContains('http://switch-ok.test/auth/ott/consume')
        ->assertSessionHas('current_tenant_id', $tenant->id);

    $this->assertDatabaseHas('signed_login_tokens', [
        'user_id' => $member->id,
        'tenant_id' => $tenant->id,
    ]);

    expect(SignedLoginToken::query()->count())->toBe(1);
});

test('switch from inertia request returns inertia location response', function (): void {
    $tenant = createSwitchableTenant('switch-inertia', 'switch-inertia.test');

    $member = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $member->tenants()->attach($tenant->id, [
        'role' => 'member',
        'status' => 'active',
        'joined_at' => now(),
    ]);

    $response = $this->actingAs($member)
        ->withHeader('X-Inertia', 'true')
        ->post("http://app.localhost/tenants/{$tenant->id}/switch");

    $response->assertStatus(409);

    $location = $response->headers->get('X-Inertia-Location');

    expect($location)->toBeString();
    expect((string) $location)->toStartWith('http://switch-inertia.test/auth/ott/consume');
});

test('switch keeps non-standard local port in redirect url', function (): void {
    $tenant = createSwitchableTenant('switch-port', 'switch-port.test');

    $member = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $member->tenants()->attach($tenant->id, [
        'role' => 'member',
        'status' => 'active',
        'joined_at' => now(),
    ]);

    $this->actingAs($member)
        ->post("http://app.localhost:8000/tenants/{$tenant->id}/switch")
        ->assertRedirectContains('http://switch-port.test:8000/auth/ott/consume');
});

test('outsider cannot switch to tenant', function (): void {
    $tenant = createSwitchableTenant('switch-denied', 'switch-denied.test');

    $outsider = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $this->actingAs($outsider)
        ->post("http://app.localhost/tenants/{$tenant->id}/switch")
        ->assertForbidden();
});

test('suspended member cannot switch to tenant', function (): void {
    $tenant = createSwitchableTenant('switch-suspended', 'switch-suspended.test');

    $suspendedMember = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $suspendedMember->tenants()->attach($tenant->id, [
        'role' => 'member',
        'status' => 'suspended',
        'joined_at' => now(),
    ]);

    $this->actingAs($suspendedMember)
        ->post("http://app.localhost/tenants/{$tenant->id}/switch")
        ->assertForbidden();
});
