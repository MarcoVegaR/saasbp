<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TenantPermissionMiddleware
{
    /**
     * @param  Closure(Request): Response  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! config('permission.teams', false)) {
            return $next($request);
        }

        if (function_exists('setPermissionsTeamId') && tenancy()->initialized && tenant() !== null) {
            call_user_func('setPermissionsTeamId', (string) tenant()->getKey());
        }

        return $next($request);
    }
}
