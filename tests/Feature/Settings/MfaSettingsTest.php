<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Inertia\Testing\AssertableInertia as Assert;

uses(RefreshDatabase::class);

test('mfa settings route returns 404 when feature flag is disabled', function (): void {
    config(['features.mfa' => false]);

    $user = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $this->actingAs($user)
        ->get('http://app.localhost/settings/mfa')
        ->assertNotFound();
});

test('mfa settings route renders placeholder and persists baseline settings when enabled', function (): void {
    config(['features.mfa' => true]);

    $user = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $this->actingAs($user)
        ->get('http://app.localhost/settings/mfa')
        ->assertOk()
        ->assertInertia(fn (Assert $page) => $page
            ->component('settings/mfa')
            ->where('mfaEnabled', false)
            ->where('driver', 'totp')
        );

    $this->assertDatabaseHas('user_mfa_settings', [
        'user_id' => $user->id,
        'enabled' => false,
        'driver' => 'totp',
    ]);
});
