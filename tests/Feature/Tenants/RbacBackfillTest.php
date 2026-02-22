<?php

declare(strict_types=1);

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

function createTenantForBackfill(string $id, string $domain): Tenant
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

test('rbac backfill command syncs active memberships and strips suspended roles', function (): void {
    $tenant = createTenantForBackfill('rbac-backfill', 'rbac-backfill.test');

    $owner = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $suspended = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $owner->tenants()->attach($tenant->id, [
        'role' => 'owner',
        'status' => 'active',
        'joined_at' => now(),
    ]);

    $suspended->tenants()->attach($tenant->id, [
        'role' => 'admin',
        'status' => 'suspended',
        'joined_at' => now(),
    ]);

    $this->artisan('rbac:backfill-memberships')
        ->expectsOutputToContain('RBAC membership backfill completed')
        ->assertSuccessful();

    $owner = $owner->fresh();
    $suspended = $suspended->fresh();

    expect($owner)->toBeInstanceOf(User::class);
    expect($suspended)->toBeInstanceOf(User::class);

    if (! $owner instanceof User || ! $suspended instanceof User) {
        return;
    }

    expect($owner->hasTenantRole('owner', $tenant))->toBeTrue();
    expect($owner->hasTenantPermission('members:invite', $tenant))->toBeTrue();

    expect($suspended->hasTenantRole('admin', $tenant))->toBeFalse();
    expect($suspended->hasTenantPermission('members:invite', $tenant))->toBeFalse();
});
