<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name', 50)->after('id');
            $table->string('last_name', 50)->nullable()->after('first_name');
            $table->string('phone', 20)->unique()->nullable()->after('email');
            $table->string('image', 255)->nullable()->after('phone');

            $table->unsignedTinyInteger('type')->default(1)->after('image');
            // 1: Customer, 2: Admin, 3: Staff, 4: Supplier

            $table->unsignedTinyInteger('status')->default(1)->after('type');
            // 0: Inactive, 1: Active, 2: Banned

            $table->timestamp('phone_verified_at')->nullable()->after('email_verified_at');
            $table->timestamp('last_login_at')->nullable()->after('phone_verified_at');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropUnique(['phone']);

        $table->dropColumn([
            'first_name',
            'last_name',
            'phone',
            'image',
            'type',
            'status',
            'phone_verified_at',
            'last_login_at',
            'deleted_at',
        ]);
    });
}
};
