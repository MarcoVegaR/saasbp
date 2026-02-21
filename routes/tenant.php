<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'tenant_id' => tenant('id'),
        'tenant_slug' => tenant()?->slug,
    ]);
})->name('tenant.home');

Route::get('/tenant-only', function () {
    return response()->json([
        'tenant_id' => tenant('id'),
        'tenant_slug' => tenant()?->slug,
    ]);
});
