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
        Schema::create('user_menu_actions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('menu_action_id');
            $table->string('name');
            $table->string('bn_name')->nullable();
            $table->string('route_name')->nullable();
            $table->string('custom_element')->nullable();
            $table->integer('order_by')->default(0);
            $table->integer('is_hidden')->default(0);
            $table->integer('show_in_table')->default(0);
            $table->integer('new_tab')->default(0);
            $table->integer('status')->default(1);

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('menu_id')->references('id')->on('menus')->cascadeOnDelete();
            $table->foreign('menu_action_id')->references('id')->on('menu_actions')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_menu_actions');
    }
};
