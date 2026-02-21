<?php

declare(strict_types=1);

namespace App\Support\Tenancy;

use App\Models\SignedLoginToken;
use App\Models\Tenant;
use App\Models\User;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class TenantSsoUrlFactory
{
    /**
     * @return array{url: string, expires_at: CarbonImmutable}
     */
    public function make(Request $request, User $user, Tenant $tenant, ?string $requestedDomain = null): array
    {
        $domain = $this->resolveTenantDomain($tenant, $requestedDomain);
        $port = $request->getPort();

        if (($request->isSecure() && $port !== 443) || (! $request->isSecure() && $port !== 80)) {
            $domain = sprintf('%s:%d', $domain, $port);
        }

        $rawToken = bin2hex(random_bytes(32));
        $expiresAt = now()->addSeconds(90)->toImmutable();

        SignedLoginToken::query()->create([
            'user_id' => $user->id,
            'tenant_id' => $tenant->getKey(),
            'token_hash' => hash('sha256', $rawToken),
            'expires_at' => $expiresAt,
            'ip' => $request->ip(),
        ]);

        $signedPath = URL::temporarySignedRoute(
            'tenant.ott.consume',
            $expiresAt,
            ['token' => $rawToken],
            absolute: false,
        );

        return [
            'url' => sprintf('%s://%s%s', $request->getScheme(), $domain, $signedPath),
            'expires_at' => $expiresAt,
        ];
    }

    private function resolveTenantDomain(Tenant $tenant, ?string $requestedDomain): string
    {
        $domain = trim((string) $requestedDomain);
        $availableDomains = $tenant->domains()->pluck('domain')->map(static fn (mixed $value): string => (string) $value)->values();

        if ($availableDomains->isEmpty()) {
            abort(422, 'The tenant has no assigned domains.');
        }

        if ($domain === '') {
            return $this->normalizeTenantHost((string) $availableDomains->first());
        }

        if ($availableDomains->contains($domain)) {
            return $this->normalizeTenantHost($domain);
        }

        foreach ($availableDomains as $availableDomain) {
            if ($this->normalizeTenantHost($availableDomain) === $domain) {
                return $this->normalizeTenantHost($availableDomain);
            }
        }

        abort(403, 'The requested domain does not belong to this tenant.');
    }

    private function normalizeTenantHost(string $domain): string
    {
        if (str_contains($domain, '.')) {
            return $domain;
        }

        return sprintf('%s.%s', $domain, config('saas.app_domain'));
    }
}
