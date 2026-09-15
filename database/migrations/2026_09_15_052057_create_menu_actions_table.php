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
        Schema::create('menu_actions', function (Blueprint $table) {
             $table->id();
            $table->unsignedBigInteger('menu_id');
            $table->string('name');
            $table->string('bn_name')->nullable();
            $table->string('key');                          // create, edit, delete, view
            $table->string('permission_name')->nullable();  // Spatie permission name (product-create)
            $table->string('icon')->nullable();
            $table->string('button_class')->nullable();
            $table->integer('order_by')->default(0);
            $table->integer('status')->default(1);

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('menu_id')->references('id')->on('menus')->cascadeOnDelete();
            $table->unique(['menu_id', 'key']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_actions');
    }
};
