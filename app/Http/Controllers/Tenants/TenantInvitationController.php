<?php

declare(strict_types=1);

namespace App\Http\Controllers\Tenants;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use App\Models\TenantInvitation;
use App\Models\User;
use App\Notifications\MemberInvitedNotification;
use App\Support\Tenancy\TenantSsoUrlFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpKernel\Exception\HttpException;

class TenantInvitationController extends Controller
{
    public function store(Request $request, Tenant $tenant): RedirectResponse
    {
        $actor = $request->user();

        abort_unless($actor instanceof User, 401);

        if (! $this->canInvite($actor, $tenant)) {
            abort(403, 'You do not have permission to invite members to this tenant.');
        }

        $validated = $request->validate([
            'email' => ['required', 'string', 'email:rfc'],
            'role' => ['required', 'string', Rule::in(['admin', 'member'])],
        ]);

        $email = strtolower(trim((string) $validated['email']));

        /** @var User|null $existingUser */
        $existingUser = User::query()
            ->whereRaw('LOWER(email) = ?', [$email])
            ->first();

        if ($existingUser instanceof User && $this->hasActiveMembership($existingUser, $tenant)) {
            return back()->with('status', 'tenant-invite-already-member');
        }

        $rawToken = bin2hex(random_bytes(32));
        $expiresAt = now()->addDays(7);

        /** @var TenantInvitation $invitation */
        $invitation = DB::transaction(function () use ($tenant, $actor, $validated, $email, $rawToken, $expiresAt): TenantInvitation {
            $invitation = TenantInvitation::query()
                ->where('tenant_id', $tenant->getKey())
                ->where('email', $email)
                ->lockForUpdate()
                ->first();

            if ($invitation === null) {
                return TenantInvitation::query()->create([
                    'tenant_id' => $tenant->getKey(),
                    'email' => $email,
                    'role' => (string) $validated['role'],
                    'invited_by' => $actor->id,
                    'token_hash' => hash('sha256', $rawToken),
                    'expires_at' => $expiresAt,
                ]);
            }

            $invitation->forceFill([
                'role' => (string) $validated['role'],
                'invited_by' => $actor->id,
                'token_hash' => hash('sha256', $rawToken),
                'expires_at' => $expiresAt,
                'accepted_at' => null,
            ])->save();

            return $invitation;
        });

        $signedPath = URL::temporarySignedRoute(
            'central.invitations.accept',
            $expiresAt,
            [
                'invitation' => $invitation->getKey(),
                'token' => $rawToken,
            ],
            absolute: false,
        );

        $acceptUrl = sprintf(
            '%s://%s%s',
            $request->getScheme(),
            (string) config('saas.central_host'),
            $signedPath,
        );

        Notification::route('mail', $email)
            ->notify(new MemberInvitedNotification(
                tenantName: (string) $tenant->name,
                acceptUrl: $acceptUrl,
                role: (string) $validated['role'],
                inviterName: $actor->name,
            ));

        return back()->with('status', 'tenant-invite-sent');
    }

    public function accept(Request $request, TenantInvitation $invitation, TenantSsoUrlFactory $tenantSsoUrlFactory): RedirectResponse
    {
        $user = $request->user();

        abort_unless($user instanceof User, 401);

        $validated = $request->validate([
            'token' => ['required', 'string', 'size:64'],
        ]);

        if (strtolower($invitation->email) !== strtolower((string) $user->email)) {
            abort(403, 'This invitation was issued for a different email address.');
        }

        $tenant = $invitation->tenant;

        abort_unless($tenant instanceof Tenant, 404);

        DB::transaction(function () use ($invitation, $validated, $user, $tenant): void {
            $lockedInvitation = TenantInvitation::query()
                ->whereKey($invitation->getKey())
                ->lockForUpdate()
                ->first();

            if (! $lockedInvitation instanceof TenantInvitation) {
                throw new HttpException(404, 'Invitation not found.');
            }

            if ($lockedInvitation->accepted_at !== null) {
                throw new HttpException(410, 'This invitation has already been accepted.');
            }

            if (Carbon::parse((string) $lockedInvitation->expires_at)->isPast()) {
                throw new HttpException(410, 'This invitation has expired.');
            }

            if (! hash_equals((string) $lockedInvitation->token_hash, hash('sha256', $validated['token']))) {
                throw new HttpException(401, 'Invalid invitation token.');
            }

            $existingMembership = $user->tenants()->whereKey($tenant->getKey())->first();

            if ($existingMembership instanceof Tenant) {
                $existingRole = (string) data_get($existingMembership, 'pivot.role', 'member');
                $joinedAt = data_get($existingMembership, 'pivot.joined_at');

                $user->tenants()->updateExistingPivot($tenant->getKey(), [
                    'role' => $existingRole === 'owner' ? 'owner' : (string) $lockedInvitation->role,
                    'status' => 'active',
                    'invited_by' => $lockedInvitation->invited_by,
                    'invited_at' => $lockedInvitation->created_at,
                    'joined_at' => $joinedAt ?? now(),
                ]);
            } else {
                $user->tenants()->attach($tenant->getKey(), [
                    'role' => (string) $lockedInvitation->role,
                    'status' => 'active',
                    'invited_by' => $lockedInvitation->invited_by,
                    'invited_at' => $lockedInvitation->created_at,
                    'joined_at' => now(),
                ]);
            }

            $lockedInvitation->forceFill([
                'accepted_at' => now(),
            ])->save();
        });

        $request->session()->put('current_tenant_id', (string) $tenant->getKey());

        $payload = $tenantSsoUrlFactory->make($request, $user, $tenant);

        return redirect()->away($payload['url']);
    }

    private function canInvite(User $user, Tenant $tenant): bool
    {
        $role = $user->tenants()
            ->whereKey($tenant->getKey())
            ->wherePivot('status', 'active')
            ->value('tenant_user.role');

        return in_array($role, ['owner', 'admin'], true);
    }

    private function hasActiveMembership(User $user, Tenant $tenant): bool
    {
        return $user->tenants()
            ->whereKey($tenant->getKey())
            ->wherePivot('status', 'active')
            ->exists();
    }
}
