<?php

declare(strict_types=1);

use App\Models\SignedLoginToken;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

function createTenantForOtt(string $id, string $domain): Tenant
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

function extractRawTokenFromUrl(string $url): string
{
    parse_str((string) parse_url($url, PHP_URL_QUERY), $query);

    return (string) ($query['token'] ?? '');
}

test('ott consume logs in member and redirects to tenant protected route', function (): void {
    $tenant = createTenantForOtt('acme', 'acme.test');

    $user = User::factory()->create([
        'email_verified_at' => now(),
    ]);
    $user->tenants()->attach($tenant->id, ['role' => 'owner']);

    $response = $this->actingAs($user)
        ->post('http://app.localhost/tenants/acme/sso-token', [
            'domain' => 'acme.test',
        ]);

    $response->assertOk();

    $consumeUrl = (string) $response->json('url');

    auth()->logout();

    $this->get($consumeUrl)
        ->assertRedirect('/tenant-only');

    $this->get('http://acme.test/tenant-only')
        ->assertOk()
        ->assertJsonPath('user_id', $user->id)
        ->assertJsonPath('tenant_slug', 'acme');

    expect(SignedLoginToken::query()->first()?->used_at)->not->toBeNull();
});

test('ott consume rejects expired token', function (): void {
    $tenant = createTenantForOtt('expire', 'expire.test');

    $user = User::factory()->create([
        'email_verified_at' => now(),
    ]);
    $user->tenants()->attach($tenant->id, ['role' => 'member']);

    $response = $this->actingAs($user)
        ->post('http://app.localhost/tenants/expire/sso-token', [
            'domain' => 'expire.test',
        ])
        ->assertOk();

    $consumeUrl = (string) $response->json('url');
    $rawToken = extractRawTokenFromUrl($consumeUrl);

    SignedLoginToken::query()
        ->where('token_hash', hash('sha256', $rawToken))
        ->update(['expires_at' => now()->subMinute()]);

    $this->get($consumeUrl)->assertUnauthorized();
});

test('ott consume rejects reused token', function (): void {
    $tenant = createTenantForOtt('reuse', 'reuse.test');

    $user = User::factory()->create([
        'email_verified_at' => now(),
    ]);
    $user->tenants()->attach($tenant->id, ['role' => 'member']);

    $response = $this->actingAs($user)
        ->post('http://app.localhost/tenants/reuse/sso-token', [
            'domain' => 'reuse.test',
        ])
        ->assertOk();

    $consumeUrl = (string) $response->json('url');

    auth()->logout();

    $this->get($consumeUrl)->assertRedirect('/tenant-only');
    $this->get($consumeUrl)->assertUnauthorized();
});

test('ott consume rejects tenant mismatch', function (): void {
    $acme = createTenantForOtt('acme-x', 'acme-x.test');
    createTenantForOtt('beta-x', 'beta-x.test');

    $user = User::factory()->create([
        'email_verified_at' => now(),
    ]);
    $user->tenants()->attach($acme->id, ['role' => 'owner']);

    $response = $this->actingAs($user)
        ->post('http://app.localhost/tenants/acme-x/sso-token', [
            'domain' => 'acme-x.test',
        ])
        ->assertOk();

    $consumeUrl = (string) $response->json('url');
    $wrongTenantUrl = str_replace('acme-x.test', 'beta-x.test', $consumeUrl);

    $this->get($wrongTenantUrl)->assertForbidden();
});

test('ott consume rejects tampered signatures', function (): void {
    $tenant = createTenantForOtt('sign', 'sign.test');

    $user = User::factory()->create([
        'email_verified_at' => now(),
    ]);
    $user->tenants()->attach($tenant->id, ['role' => 'member']);

    $response = $this->actingAs($user)
        ->post('http://app.localhost/tenants/sign/sso-token', [
            'domain' => 'sign.test',
        ])
        ->assertOk();

    $consumeUrl = (string) $response->json('url');
    $tamperedUrl = (string) preg_replace('/signature=[^&]+/', 'signature=invalid', $consumeUrl, 1);

    $this->get($tamperedUrl)->assertForbidden();
});
