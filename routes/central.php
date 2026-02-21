<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\OttSsoController;
use App\Http\Controllers\Tenants\SwitchTenantController;
use App\Http\Controllers\Tenants\TenantController;
use App\Http\Controllers\Tenants\TenantInvitationController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::domain(config('saas.central_host'))->group(function (): void {
    Route::get('/', function () {
        return Inertia::render('welcome', [
            'canRegister' => Features::enabled(Features::registration()),
        ]);
    })->name('home');

    Route::middleware(['auth', 'verified'])->group(function (): void {
        Route::get('dashboard', function () {
            return Inertia::render('dashboard');
        })->name('dashboard');

        Route::get('tenants/create', [TenantController::class, 'create'])
            ->name('central.tenants.create');

        Route::post('tenants', [TenantController::class, 'store'])
            ->name('central.tenants.store');

        Route::post('tenants/{tenant}/invitations', [TenantInvitationController::class, 'store'])
            ->name('central.tenants.invite.store');

        Route::get('invitations/{invitation}/accept', [TenantInvitationController::class, 'accept'])
            ->middleware(['signed:relative'])
            ->name('central.invitations.accept');

        Route::post('tenants/{tenant}/switch', SwitchTenantController::class)
            ->middleware(['throttle:ott-generate'])
            ->name('central.tenants.switch');

        Route::post('tenants/{tenant}/sso-token', [OttSsoController::class, 'generate'])
            ->middleware(['throttle:ott-generate'])
            ->name('central.ott.generate');
    });

    require __DIR__.'/settings.php';
});
