<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserBelongsToTenant
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): Response  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        $tenant = tenant();

        if ($user === null || $tenant === null) {
            abort(403, 'Tenant membership is required.');
        }

        if (! $user->tenants()->whereKey($tenant->getKey())->wherePivot('status', 'active')->exists()) {
            abort(403, 'You are not a member of this tenant.');
        }

        return $next($request);
    }
}
