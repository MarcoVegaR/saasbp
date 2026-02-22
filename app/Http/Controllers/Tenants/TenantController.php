<?php

declare(strict_types=1);

namespace App\Http\Controllers\Tenants;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use App\Support\Rbac\TenantRbacManager;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Inertia\Inertia;
use Inertia\Response;

class TenantController extends Controller
{
    public function create(): Response
    {
        return Inertia::render('tenants/create');
    }

    public function store(Request $request, TenantRbacManager $tenantRbacManager): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'slug' => [
                'required',
                'string',
                'max:63',
                'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/',
                Rule::notIn($this->reservedSlugs()),
                Rule::unique('tenants', 'slug'),
            ],
        ]);

        $user = $request->user();

        abort_unless($user !== null, 401);

        $slug = strtolower((string) $validated['slug']);
        $domain = $slug;

        try {
            /** @var Tenant $tenant */
            $tenant = DB::transaction(function () use ($validated, $slug, $domain, $user, $tenantRbacManager): Tenant {
                $tenant = Tenant::query()->create([
                    'id' => (string) Str::uuid(),
                    'name' => (string) $validated['name'],
                    'slug' => $slug,
                    'plan' => 'free',
                    'status' => 'active',
                    'settings' => [],
                ]);

                $tenant->domains()->create(['domain' => $domain]);

                $user->tenants()->attach($tenant->getKey(), [
                    'role' => 'owner',
                    'status' => 'active',
                    'joined_at' => now(),
                ]);

                $tenantRbacManager->syncMembershipRole($user, $tenant, 'owner');

                return $tenant;
            });
        } catch (QueryException $exception) {
            if ($this->isUniqueConstraintViolation($exception)) {
                return back()
                    ->withInput()
                    ->withErrors([
                        'slug' => 'The selected slug is already in use.',
                    ]);
            }

            throw $exception;
        }

        $request->session()->put('current_tenant_id', (string) $tenant->getKey());

        return to_route('dashboard')->with('status', 'tenant-created');
    }

    /**
     * @return list<string>
     */
    private function reservedSlugs(): array
    {
        $reserved = ['app', 'www'];

        $centralDomains = [
            ...(array) config('tenancy.central_domains', []),
            (string) config('saas.central_host'),
            (string) config('saas.app_domain'),
        ];

        foreach ($centralDomains as $domain) {
            $firstLabel = strtolower((string) explode('.', (string) $domain)[0]);

            if ($firstLabel !== '') {
                $reserved[] = $firstLabel;
            }
        }

        return array_values(array_unique($reserved));
    }

    private function isUniqueConstraintViolation(QueryException $exception): bool
    {
        return in_array($exception->getCode(), ['23000', '23505'], true);
    }
}
