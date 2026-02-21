<?php

declare(strict_types=1);

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class MfaSettingsController extends Controller
{
    public function show(Request $request): Response
    {
        abort_unless(config('features.mfa'), 404);

        /** @var User|null $user */
        $user = $request->user();

        abort_unless($user !== null, 401);

        $mfaSetting = $user->mfaSetting()->firstOrCreate([], [
            'enabled' => false,
            'driver' => 'totp',
        ]);

        return Inertia::render('settings/mfa', [
            'mfaEnabled' => $mfaSetting->enabled,
            'driver' => $mfaSetting->driver,
        ]);
    }
}
