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
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('slug', 100)->unique();
            $table->unsignedTinyInteger('type')->default(1)->comment('1: Frontend Storefront (Customer), 2: Admin & Super Admin Dashboard, 3: Staff Dashboard, 4: Supplier Dashboard');
            $table->string('view_path', 150);
            $table->boolean('is_default')->default(0);
            $table->unsignedInteger('sort_order')->default(0);
            $table->json('settings')->nullable();
            $table->string('preview_image', 255)->nullable();
            $table->unsignedTinyInteger('status')->default(1)->comment('0: Inactive, 1: Active');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('templates');
    }
};
