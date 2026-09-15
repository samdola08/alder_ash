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
        Schema::table('menu_actions', function (Blueprint $table) {
            $table->dropColumn('permission_name');
        });

        Schema::table('menu_actions', function (Blueprint $table) {
            $table->unsignedBigInteger('permission_id')->nullable()->after('key');
            $table->foreign('permission_id')->references('id')->on('permissions')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('menu_actions', function (Blueprint $table) {
            $table->dropForeign(['permission_id']);
            $table->dropColumn('permission_id');
        });

        Schema::table('menu_actions', function (Blueprint $table) {
            $table->string('permission_name')->nullable()->after('key');
        });
    }
};
