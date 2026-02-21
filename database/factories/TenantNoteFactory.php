<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Tenant;
use App\Models\TenantNote;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TenantNote>
 */
class TenantNoteFactory extends Factory
{
    protected $model = TenantNote::class;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tenant_id' => null,
            'content' => fake()->sentence(),
        ];
    }

    public function forTenant(Tenant $tenant): static
    {
        return $this->state(fn (): array => [
            'tenant_id' => $tenant->id,
        ]);
    }
}
