<?php

namespace App\Http\Middleware;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        $user = $request->user();

        /** @var array<int, array{id: string, name: string, slug: string, role: string, domain: string|null}> $userTenants */
        $userTenants = [];

        if ($user !== null) {
            $tenantMemberships = $user->tenants()
                ->wherePivot('status', 'active')
                ->orderBy('tenants.name')
                ->get();

            foreach ($tenantMemberships as $tenant) {
                if (! $tenant instanceof Tenant) {
                    continue;
                }

                /** @var string|null $domain */
                $domain = $tenant->domains()->value('domain');

                if (is_string($domain) && $domain !== '' && ! str_contains($domain, '.')) {
                    $domain = sprintf('%s.%s', $domain, config('saas.app_domain'));
                }

                $userTenants[] = [
                    'id' => (string) $tenant->getKey(),
                    'name' => (string) $tenant->name,
                    'slug' => (string) $tenant->slug,
                    'role' => (string) data_get($tenant, 'pivot.role', 'member'),
                    'domain' => $domain,
                ];
            }
        }

        $currentTenantId = $request->session()->get('current_tenant_id');

        if ($currentTenantId === null && $userTenants !== []) {
            $currentTenantId = $userTenants[0]['id'];
        }

        return [
            ...parent::share($request),
            'name' => config('app.name'),
            'features' => [
                'mfa' => (bool) config('features.mfa'),
            ],
            'auth' => [
                'user' => $user,
            ],
            'tenancy' => [
                'userTenants' => $userTenants,
                'currentTenantId' => $currentTenantId,
            ],
            'sidebarOpen' => ! $request->hasCookie('sidebar_state') || $request->cookie('sidebar_state') === 'true',
        ];
    }
}
