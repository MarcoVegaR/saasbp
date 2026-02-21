<?php

declare(strict_types=1);

use App\Models\Tenant;
use App\Models\TenantInvitation;
use App\Models\User;
use App\Notifications\MemberInvitedNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

uses(RefreshDatabase::class);

function createTenantAndOwnerForInvites(string $id = 'invite-tenant', string $domain = 'invite.test'): array
{
    $tenant = Tenant::create([
        'id' => $id,
        'name' => 'Invite Tenant',
        'slug' => $id,
        'plan' => 'pro',
        'status' => 'active',
        'settings' => [],
    ]);

    $tenant->domains()->create(['domain' => $domain]);

    $owner = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $owner->tenants()->attach($tenant->id, [
        'role' => 'owner',
        'status' => 'active',
        'joined_at' => now(),
    ]);

    return [$tenant, $owner];
}

test('owner can invite member and invitee can accept the invitation', function (): void {
    [$tenant, $owner] = createTenantAndOwnerForInvites('phase3-invite-a', 'phase3-invite-a.test');

    Notification::fake();

    $this->actingAs($owner)
        ->post("http://app.localhost/tenants/{$tenant->id}/invitations", [
            'email' => 'invitee@example.com',
            'role' => 'member',
        ])
        ->assertRedirect()
        ->assertSessionHas('status', 'tenant-invite-sent');

    $acceptUrl = null;

    Notification::assertSentOnDemand(MemberInvitedNotification::class, function (MemberInvitedNotification $notification, array $channels, object $notifiable) use (&$acceptUrl): bool {
        if (! $notifiable instanceof AnonymousNotifiable) {
            return false;
        }

        $acceptUrl = $notification->acceptUrl;

        return ($notifiable->routes['mail'] ?? null) === 'invitee@example.com';
    });

    expect($acceptUrl)->toBeString();

    $invitee = User::factory()->create([
        'email' => 'invitee@example.com',
        'email_verified_at' => now(),
    ]);

    $this->actingAs($invitee)
        ->get((string) $acceptUrl)
        ->assertRedirectContains('http://phase3-invite-a.test/auth/ott/consume');

    $this->assertDatabaseHas('tenant_user', [
        'tenant_id' => $tenant->id,
        'user_id' => $invitee->id,
        'role' => 'member',
        'status' => 'active',
    ]);

    expect(
        TenantInvitation::query()
            ->where('tenant_id', $tenant->id)
            ->where('email', 'invitee@example.com')
            ->first()?->accepted_at
    )->not->toBeNull();
});

test('invitation cannot be accepted by a different account', function (): void {
    [$tenant, $owner] = createTenantAndOwnerForInvites('phase3-invite-b', 'phase3-invite-b.test');

    Notification::fake();

    $this->actingAs($owner)
        ->post("http://app.localhost/tenants/{$tenant->id}/invitations", [
            'email' => 'target@example.com',
            'role' => 'member',
        ])
        ->assertRedirect();

    $acceptUrl = null;

    Notification::assertSentOnDemand(MemberInvitedNotification::class, function (MemberInvitedNotification $notification) use (&$acceptUrl): bool {
        $acceptUrl = $notification->acceptUrl;

        return true;
    });

    $wrongUser = User::factory()->create([
        'email' => 'wrong@example.com',
        'email_verified_at' => now(),
    ]);

    $this->actingAs($wrongUser)
        ->get((string) $acceptUrl)
        ->assertForbidden();

    $this->assertDatabaseMissing('tenant_user', [
        'tenant_id' => $tenant->id,
        'user_id' => $wrongUser->id,
    ]);
});

test('invitation link is one-time and rejects replay after acceptance', function (): void {
    [$tenant, $owner] = createTenantAndOwnerForInvites('phase3-invite-c', 'phase3-invite-c.test');

    Notification::fake();

    $this->actingAs($owner)
        ->post("http://app.localhost/tenants/{$tenant->id}/invitations", [
            'email' => 'replay@example.com',
            'role' => 'admin',
        ])
        ->assertRedirect();

    $acceptUrl = null;

    Notification::assertSentOnDemand(MemberInvitedNotification::class, function (MemberInvitedNotification $notification) use (&$acceptUrl): bool {
        $acceptUrl = $notification->acceptUrl;

        return true;
    });

    $invitee = User::factory()->create([
        'email' => 'replay@example.com',
        'email_verified_at' => now(),
    ]);

    $this->actingAs($invitee)
        ->get((string) $acceptUrl)
        ->assertRedirectContains('http://phase3-invite-c.test/auth/ott/consume');

    $this->actingAs($invitee)
        ->get((string) $acceptUrl)
        ->assertStatus(410);
});

test('inviting an already active member is idempotent', function (): void {
    [$tenant, $owner] = createTenantAndOwnerForInvites('phase3-invite-d', 'phase3-invite-d.test');

    $member = User::factory()->create([
        'email' => 'existing@example.com',
        'email_verified_at' => now(),
    ]);

    $member->tenants()->attach($tenant->id, [
        'role' => 'member',
        'status' => 'active',
        'joined_at' => now(),
    ]);

    Notification::fake();

    $this->actingAs($owner)
        ->post("http://app.localhost/tenants/{$tenant->id}/invitations", [
            'email' => 'existing@example.com',
            'role' => 'admin',
        ])
        ->assertRedirect()
        ->assertSessionHas('status', 'tenant-invite-already-member');

    $membershipCount = DB::table('tenant_user')
        ->where('tenant_id', $tenant->id)
        ->where('user_id', $member->id)
        ->count();

    expect($membershipCount)->toBe(1);

    Notification::assertNothingSent();
});
