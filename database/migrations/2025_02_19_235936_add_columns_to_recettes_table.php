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
        Schema::table('recettes', function (Blueprint $table) {
            $table->enum('meal_type', ['iftar', 'suhoor', 'other'])->default('other');
            $table->integer('prep_time')->nullable();
            $table->integer('cook_time')->nullable();
            $table->integer('servings')->nullable();
            $table->text('additional_notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recettes', function (Blueprint $table) {
            //
        });
    }
};
