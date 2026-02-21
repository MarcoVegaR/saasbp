<?php

declare(strict_types=1);

namespace App\Concerns;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use LogicException;

trait BelongsToTenant
{
    public static function bootBelongsToTenant(): void
    {
        static::addGlobalScope('tenant', function (Builder $builder): void {
            if (! tenancy()->initialized) {
                return;
            }

            $tenantId = tenant('id');

            if ($tenantId === null) {
                return;
            }

            $builder->where($builder->qualifyColumn('tenant_id'), $tenantId);
        });

        static::creating(function (Model $model): void {
            if (! tenancy()->initialized) {
                return;
            }

            $tenantId = tenant('id');

            if ($tenantId === null || $model->getAttribute('tenant_id') !== null) {
                return;
            }

            $model->setAttribute('tenant_id', $tenantId);
        });

        static::updating(function (Model $model): void {
            if (! $model->isDirty('tenant_id')) {
                return;
            }

            throw new LogicException('The tenant_id attribute is immutable once set.');
        });
    }
}
