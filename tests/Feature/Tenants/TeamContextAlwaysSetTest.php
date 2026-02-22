<?php

declare(strict_types=1);

use App\Http\Middleware\ResetPermissionTeamContext;
use App\Http\Middleware\TenantPermissionMiddleware;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;

uses(RefreshDatabase::class);

function createTenantForTeamContext(string $id, string $domain): Tenant
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

test('tenant permission middleware sets team context from initialized tenant', function (): void {
    $tenant = createTenantForTeamContext('rbac-context', 'rbac-context.test');

    $user = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $user->tenants()->attach($tenant->id, [
        'role' => 'member',
        'status' => 'active',
        'joined_at' => now(),
    ]);

    $middleware = app(TenantPermissionMiddleware::class);

    $capturedTeamId = null;

    $tenant->run(function () use ($middleware, $user, &$capturedTeamId): void {
        $request = Request::create('http://rbac-context.test/tenant-only', 'GET');
        $request->setUserResolver(fn (): User => $user);

        $middleware->handle($request, function () use (&$capturedTeamId) {
            if (function_exists('getPermissionsTeamId')) {
                $capturedTeamId = call_user_func('getPermissionsTeamId');
            }

            return response('ok');
        });
    });

    expect($capturedTeamId)->toBe((string) $tenant->id);
});

test('central reset middleware clears stale team context after request', function (): void {
    if (function_exists('setPermissionsTeamId')) {
        call_user_func('setPermissionsTeamId', 'stale-team');
    }

    $middleware = app(ResetPermissionTeamContext::class);
    $request = Request::create('http://app.localhost/dashboard', 'GET');

    $middleware->handle($request, fn () => response('ok'));

    if (function_exists('getPermissionsTeamId')) {
        expect(call_user_func('getPermissionsTeamId'))->toBeNull();
    }
});
