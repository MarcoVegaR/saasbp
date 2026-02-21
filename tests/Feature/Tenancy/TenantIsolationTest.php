<?php

declare(strict_types=1);

use App\Models\Tenant;
use App\Models\TenantNote;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('tenant notes are isolated and tenant_id is auto-managed safely', function (): void {
    $tenantA = Tenant::create([
        'id' => 'tenant-a',
        'name' => 'Tenant A',
        'slug' => 'tenant-a',
        'plan' => 'free',
        'status' => 'active',
        'settings' => [],
    ]);

    $tenantB = Tenant::create([
        'id' => 'tenant-b',
        'name' => 'Tenant B',
        'slug' => 'tenant-b',
        'plan' => 'pro',
        'status' => 'active',
        'settings' => [],
    ]);

    $noteA = $tenantA->run(fn (): TenantNote => TenantNote::create([
        'content' => 'Note from tenant A',
    ]));

    $noteB = $tenantB->run(fn (): TenantNote => TenantNote::create([
        'content' => 'Note from tenant B',
    ]));

    $tenantAVisibleIds = $tenantA->run(fn (): array => TenantNote::query()->pluck('id')->all());
    $tenantBVisibleIds = $tenantB->run(fn (): array => TenantNote::query()->pluck('id')->all());

    expect($noteA->tenant_id)->toBe($tenantA->id);
    expect($noteB->tenant_id)->toBe($tenantB->id);

    expect($tenantAVisibleIds)->toContain($noteA->id)->not->toContain($noteB->id);
    expect($tenantBVisibleIds)->toContain($noteB->id)->not->toContain($noteA->id);

    tenancy()->end();

    $centralNote = TenantNote::create([
        'content' => 'Central context note',
    ]);

    expect($centralNote->tenant_id)->toBeNull();
});
