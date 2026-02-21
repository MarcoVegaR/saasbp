<?php

declare(strict_types=1);

namespace App\Support\Tenancy;

use App\Models\Tenant;

class CurrentTenant
{
    public function get(): ?Tenant
    {
        $tenant = tenant();

        return $tenant instanceof Tenant ? $tenant : null;
    }

    public function id(): ?string
    {
        return $this->get()?->id;
    }

    public function check(): bool
    {
        return $this->get() !== null;
    }
}
