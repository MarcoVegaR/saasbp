<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\SignedLoginToken;
use App\Models\Tenant;
use App\Models\User;
use App\Support\Tenancy\TenantSsoUrlFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\Exception\HttpException;

class OttSsoController extends Controller
{
    public function generate(Request $request, Tenant $tenant, TenantSsoUrlFactory $tenantSsoUrlFactory): JsonResponse
    {
        $user = $request->user();

        abort_unless($user !== null, 401);

        if (! $user->tenants()->whereKey($tenant->getKey())->wherePivot('status', 'active')->exists()) {
            abort(403, 'You are not allowed to access this tenant.');
        }

        $payload = $tenantSsoUrlFactory->make(
            $request,
            $user,
            $tenant,
            $request->string('domain')->toString(),
        );

        return response()->json([
            'url' => $payload['url'],
            'expires_at' => $payload['expires_at']->toIso8601String(),
        ]);
    }

    public function consume(Request $request): RedirectResponse
    {
        $validated = Validator::make($request->query(), [
            'token' => ['required', 'string', 'size:64'],
        ])->validate();

        $tenant = tenant();

        abort_unless($tenant instanceof Tenant, 403);

        $tokenHash = hash('sha256', $validated['token']);

        /** @var User|null $resolvedUser */
        $resolvedUser = null;
        $usedAt = null;

        DB::transaction(function () use ($tenant, $tokenHash, $request, &$resolvedUser, &$usedAt): void {
            $record = SignedLoginToken::query()
                ->where('token_hash', $tokenHash)
                ->lockForUpdate()
                ->first();

            if ($record === null) {
                throw new HttpException(401, 'Invalid or expired one-time token.');
            }

            if ((string) $record->tenant_id !== (string) $tenant->getKey()) {
                throw new HttpException(403, 'Token tenant mismatch.');
            }

            $expiresAt = Carbon::parse($record->expires_at);

            if ($record->used_at !== null || $expiresAt->isPast()) {
                throw new HttpException(401, 'Invalid or expired one-time token.');
            }

            $user = User::query()->find($record->user_id);

            if ($user === null) {
                throw new HttpException(401, 'Invalid or expired one-time token.');
            }

            if (! $user->tenants()->whereKey($tenant->getKey())->wherePivot('status', 'active')->exists()) {
                throw new HttpException(403, 'You are not allowed to access this tenant.');
            }

            $record->forceFill([
                'used_at' => now(),
                'ip' => $request->ip(),
            ])->save();

            $resolvedUser = $user;
            $usedAt = Carbon::parse($record->used_at)->toIso8601String();
        });

        if (! $resolvedUser instanceof User) {
            throw new HttpException(401, 'Invalid or expired one-time token.');
        }

        $user = $resolvedUser;

        Auth::login($user);
        $request->session()->regenerate();

        Log::info('auth.ott.consume', [
            'user_id' => $user->id,
            'tenant_id' => tenant('id'),
            'ip' => $request->ip(),
            'used_at' => $usedAt,
        ]);

        return redirect()->to(route('tenant.only', absolute: false));
    }
}
