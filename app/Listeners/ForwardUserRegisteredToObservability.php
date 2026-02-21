<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Events\UserRegisteredEvent;
use Illuminate\Support\Facades\Log;

class ForwardUserRegisteredToObservability
{
    public function handle(UserRegisteredEvent $event): void
    {
        Log::info('auth.user_registered', [
            'user_id' => $event->user->id,
            'registered_at' => now()->toIso8601String(),
        ]);
    }
}
