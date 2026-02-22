<?php

declare(strict_types=1);

use App\Models\Tenant;
use App\Models\User;
use App\Support\Rbac\TenantRbacManager;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

function createTenantForSwitchRbac(string $id, string $domain): Tenant
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

test('switching tenant clears stale team context and keeps permissions scoped by tenant', function (): void {
    $tenantA = createTenantForSwitchRbac('rbac-switch-a', 'rbac-switch-a.test');
    $tenantB = createTenantForSwitchRbac('rbac-switch-b', 'rbac-switch-b.test');

    $user = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $user->tenants()->attach($tenantA->id, [
        'role' => 'member',
        'status' => 'active',
        'joined_at' => now(),
    ]);

    $user->tenants()->attach($tenantB->id, [
        'role' => 'member',
        'status' => 'active',
        'joined_at' => now(),
    ]);

    $rbac = app(TenantRbacManager::class);
    $rbac->syncMembershipRole($user, $tenantA, 'admin');
    $rbac->syncMembershipRole($user, $tenantB, 'member');

    if (function_exists('setPermissionsTeamId')) {
        call_user_func('setPermissionsTeamId', (string) $tenantA->id);
    }

    expect($user->fresh()?->hasPermissionTo('members:invite'))->toBeTrue();

    $this->actingAs($user)
        ->post("http://app.localhost/tenants/{$tenantB->id}/switch")
        ->assertRedirectContains('http://rbac-switch-b.test/auth/ott/consume');

    if (function_exists('getPermissionsTeamId')) {
        expect(call_user_func('getPermissionsTeamId'))->toBeNull();
    }

    $freshUser = $user->fresh();

    expect($freshUser)->toBeInstanceOf(User::class);

    if (! $freshUser instanceof User) {
        return;
    }

    expect($freshUser->hasTenantPermission('members:invite', $tenantA))->toBeTrue();
    expect($freshUser->hasTenantPermission('members:invite', $tenantB))->toBeFalse();
});
