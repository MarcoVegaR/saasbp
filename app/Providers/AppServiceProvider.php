<?php

namespace App\Providers;

use App\Events\UserRegisteredEvent;
use App\Listeners\ForwardUserRegisteredToObservability;
use App\Models\TenantNote;
use App\Models\User;
use App\Policies\TenantNotePolicy;
use App\Support\Tenancy\CurrentTenant;
use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(CurrentTenant::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(UserRegisteredEvent::class, ForwardUserRegisteredToObservability::class);

        Gate::before(function (mixed $user): ?bool {
            if (! $user instanceof User) {
                return null;
            }

            return $user->hasGlobalRole('superadmin') ? true : null;
        });

        Gate::policy(TenantNote::class, TenantNotePolicy::class);

        $this->configureDefaults();
    }

    /**
     * Configure default behaviors for production-ready applications.
     */
    protected function configureDefaults(): void
    {
        Date::use(CarbonImmutable::class);

        DB::prohibitDestructiveCommands(
            app()->isProduction(),
        );

        Password::defaults(fn (): ?Password => app()->isProduction()
            ? Password::min(12)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised()
            : null
        );
    }
}
