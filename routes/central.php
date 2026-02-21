<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\OttSsoController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::domain(config('saas.central_host'))->group(function (): void {
    Route::get('/', function () {
        return Inertia::render('welcome', [
            'canRegister' => Features::enabled(Features::registration()),
        ]);
    })->name('home');

    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::post('tenants/{tenant}/sso-token', [OttSsoController::class, 'generate'])
        ->middleware(['auth', 'verified', 'throttle:ott-generate'])
        ->name('central.ott.generate');

    require __DIR__.'/settings.php';
});
