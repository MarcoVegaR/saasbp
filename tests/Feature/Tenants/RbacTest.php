<?php

declare(strict_types=1);

use App\Models\Tenant;
use App\Models\TenantNote;
use App\Models\User;
use App\Support\Rbac\TenantRbacManager;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Notification;

uses(RefreshDatabase::class);

function createTenantForRbac(string $id, string $domain): Tenant
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

test('tenant admin role can invite even when pivot role is member', function (): void {
    $tenant = createTenantForRbac('rbac-invite-admin', 'rbac-invite-admin.test');

    $admin = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $admin->tenants()->attach($tenant->id, [
        'role' => 'member',
        'status' => 'active',
        'joined_at' => now(),
    ]);

    app(TenantRbacManager::class)->syncMembershipRole($admin, $tenant, 'admin');

    Notification::fake();

    $this->actingAs($admin)
        ->post("http://app.localhost/tenants/{$tenant->id}/invitations", [
            'email' => 'new-admin-invitee@example.com',
            'role' => 'member',
        ])
        ->assertRedirect()
        ->assertSessionHas('status', 'tenant-invite-sent');
});

test('tenant scoped policy enforces tenant ownership and role permissions', function (): void {
    $tenantA = createTenantForRbac('rbac-policy-a', 'rbac-policy-a.test');
    $tenantB = createTenantForRbac('rbac-policy-b', 'rbac-policy-b.test');

    $user = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $user->tenants()->attach($tenantA->id, [
        'role' => 'admin',
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

    $noteA = $tenantA->run(fn (): TenantNote => TenantNote::create([
        'content' => 'Tenant A note',
    ]));

    $noteB = $tenantB->run(fn (): TenantNote => TenantNote::create([
        'content' => 'Tenant B note',
    ]));

    $canUpdateA = $tenantA->run(fn (): bool => Gate::forUser($user->fresh())->allows('update', $noteA));
    $canUpdateB = $tenantB->run(fn (): bool => Gate::forUser($user->fresh())->allows('update', $noteB));
    $crossTenantUpdate = $tenantA->run(fn (): bool => Gate::forUser($user->fresh())->allows('update', $noteB));

    expect($canUpdateA)->toBeTrue();
    expect($canUpdateB)->toBeFalse();
    expect($crossTenantUpdate)->toBeFalse();
});

test('tenant member role cannot invite members', function (): void {
    $tenant = createTenantForRbac('rbac-invite-member', 'rbac-invite-member.test');

    $member = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $member->tenants()->attach($tenant->id, [
        'role' => 'member',
        'status' => 'active',
        'joined_at' => now(),
    ]);

    app(TenantRbacManager::class)->syncMembershipRole($member, $tenant, 'member');

    $this->actingAs($member)
        ->post("http://app.localhost/tenants/{$tenant->id}/invitations", [
            'email' => 'should-fail@example.com',
            'role' => 'member',
        ])
        ->assertForbidden();
});

test('superadmin can invite without tenant membership', function (): void {
    $tenant = createTenantForRbac('rbac-superadmin', 'rbac-superadmin.test');

    $superadmin = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    app(TenantRbacManager::class)->assignGlobalRole($superadmin, 'superadmin');

    Notification::fake();

    $this->actingAs($superadmin)
        ->post("http://app.localhost/tenants/{$tenant->id}/invitations", [
            'email' => 'superadmin-invitee@example.com',
            'role' => 'member',
        ])
        ->assertRedirect()
        ->assertSessionHas('status', 'tenant-invite-sent');
});
