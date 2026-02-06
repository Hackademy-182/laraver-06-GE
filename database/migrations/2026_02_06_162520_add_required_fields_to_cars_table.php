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
        Schema::table('cars', function (Blueprint $table) {
            $table->unsignedInteger('engine_cc')->default(0);
            $table->unsignedInteger('horsepower')->default(0);
            $table->unsignedSmallInteger('production_year')->default(2000);
            $table->text('description')->nullable();
            $table->string('body_type')->default('sedan');
            $table->unsignedTinyInteger('doors')->default(5);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn(['engine_cc', 'horsepower', 'production_year', 'description', 'body_type', 'doors']);
        });
    }
};
