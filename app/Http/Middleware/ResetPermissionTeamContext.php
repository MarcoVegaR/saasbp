<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ResetPermissionTeamContext
{
    /**
     * @param  Closure(Request): Response  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! config('permission.teams', false)) {
            return $next($request);
        }

        if (! function_exists('setPermissionsTeamId')) {
            return $next($request);
        }

        if (! tenancy()->initialized) {
            call_user_func('setPermissionsTeamId', null);
        }

        try {
            return $next($request);
        } finally {
            call_user_func('setPermissionsTeamId', null);
        }
    }
}
