<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\OttSsoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'tenant_id' => tenant('id'),
        'tenant_slug' => tenant()?->slug,
    ]);
})->name('tenant.home');

Route::get('/auth/ott/consume', [OttSsoController::class, 'consume'])
    ->middleware(['signed:relative', 'throttle:ott-consume'])
    ->name('tenant.ott.consume');

Route::middleware(['auth', 'verified', 'tenant.member'])->group(function (): void {
    Route::get('/tenant-only', function () {
        return response()->json([
            'tenant_id' => tenant('id'),
            'tenant_slug' => tenant()?->slug,
            'user_id' => auth()->id(),
        ]);
    })->name('tenant.only');
});
