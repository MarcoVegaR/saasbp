<?php

declare(strict_types=1);

namespace App\Http\Controllers\Tenants;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use App\Models\User;
use App\Support\Tenancy\TenantSsoUrlFactory;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Spatie\Permission\PermissionRegistrar;
use Symfony\Component\HttpFoundation\Response;

class SwitchTenantController extends Controller
{
    public function __invoke(Request $request, Tenant $tenant, TenantSsoUrlFactory $tenantSsoUrlFactory): Response
    {
        $user = $request->user();

        abort_unless($user instanceof User, 401);

        if (! $this->hasActiveMembership($user, $tenant)) {
            abort(403, 'You are not allowed to switch into this tenant.');
        }

        $request->session()->put('current_tenant_id', (string) $tenant->getKey());

        if ($this->teamsFeatureEnabled() && function_exists('setPermissionsTeamId')) {
            call_user_func('setPermissionsTeamId', $tenant->getKey());
            app(PermissionRegistrar::class)->forgetCachedPermissions();
        }

        $payload = $tenantSsoUrlFactory->make($request, $user, $tenant);

        return Inertia::location($payload['url']);
    }

    private function hasActiveMembership(User $user, Tenant $tenant): bool
    {
        return $user->tenants()
            ->whereKey($tenant->getKey())
            ->wherePivot('status', 'active')
            ->exists();
    }

    private function teamsFeatureEnabled(): bool
    {
        return (bool) config('permission.teams', false);
    }
}
