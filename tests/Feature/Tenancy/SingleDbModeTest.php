<?php

declare(strict_types=1);

use App\Models\Tenant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\DB;
use Stancl\Tenancy\Jobs\CreateDatabase;
use Stancl\Tenancy\Jobs\MigrateDatabase;
use Stancl\Tenancy\Jobs\SeedDatabase;

uses(RefreshDatabase::class);

test('tenant creation honors single database mode contract', function (): void {
    Bus::fake();

    $queries = [];

    DB::listen(function ($query) use (&$queries): void {
        $queries[] = $query->sql;
    });

    $databaseNameBefore = DB::connection()->getDatabaseName();
    $defaultConnectionBefore = DB::getDefaultConnection();

    $tenant = Tenant::create([
        'id' => 'single-db',
        'name' => 'Single DB Tenant',
        'slug' => 'single-db',
        'plan' => 'free',
        'status' => 'active',
        'settings' => [],
    ]);

    $tenant->domains()->create(['domain' => 'single-db.localhost']);

    Bus::assertNotDispatched(CreateDatabase::class);
    Bus::assertNotDispatched(MigrateDatabase::class);
    Bus::assertNotDispatched(SeedDatabase::class);

    expect(DB::connection()->getDatabaseName())->toBe($databaseNameBefore);
    expect(DB::getDefaultConnection())->toBe($defaultConnectionBefore);
    expect(collect($queries)->contains(fn (string $sql): bool => str_contains(strtolower($sql), 'create database')))->toBeFalse();
});
