<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $appDomain = trim((string) config('saas.app_domain'));

        if ($appDomain === '') {
            return;
        }

        $suffix = '.'.$appDomain;

        /** @var \Illuminate\Support\Collection<int, object{id: int, domain: string}> $domains */
        $domains = DB::table('domains')
            ->select(['id', 'domain'])
            ->get();

        foreach ($domains as $domainRecord) {
            $currentDomain = (string) $domainRecord->domain;

            if (! str_ends_with($currentDomain, $suffix)) {
                continue;
            }

            $subdomain = substr($currentDomain, 0, -strlen($suffix));

            if ($subdomain === '' || str_contains($subdomain, '.')) {
                continue;
            }

            $alreadyExists = DB::table('domains')
                ->where('domain', $subdomain)
                ->where('id', '!=', $domainRecord->id)
                ->exists();

            if ($alreadyExists) {
                continue;
            }

            DB::table('domains')
                ->where('id', $domainRecord->id)
                ->update(['domain' => $subdomain]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Irreversible normalization migration.
    }
};
