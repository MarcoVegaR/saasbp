<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('central routes are accessible and tenant-only route never initializes tenancy on central host', function (): void {
    tenancy()->end();

    $this->get('http://app.localhost/')
        ->assertOk();

    $tenantOnlyResponse = $this->get('http://app.localhost/tenant-only');

    expect([403, 404])->toContain($tenantOnlyResponse->getStatusCode());
    expect(tenancy()->initialized)->toBeFalse();
});
