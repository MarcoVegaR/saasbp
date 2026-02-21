<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tenant_user', function (Blueprint $table): void {
            $table->string('status', 32)->default('active');
            $table->foreignId('invited_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('invited_at')->nullable();
            $table->timestamp('joined_at')->nullable();
            $table->index('status', 'tenant_user_status_index');
        });

        DB::table('tenant_user')->update([
            'status' => 'active',
        ]);

        DB::table('tenant_user')
            ->whereNull('joined_at')
            ->update(['joined_at' => now()]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tenant_user', function (Blueprint $table): void {
            $table->dropForeign(['invited_by']);
            $table->dropIndex('tenant_user_status_index');
            $table->dropColumn(['status', 'invited_by', 'invited_at', 'joined_at']);
        });
    }
};
