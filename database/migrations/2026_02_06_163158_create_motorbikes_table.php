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
        Schema::create('motorbikes', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('brand');
            $table->unsignedInteger('engine_cc')->default(0);
            $table->unsignedInteger('horsepower')->default(0);
            $table->unsignedSmallInteger('production_year')->default(2000);
            $table->text('description')->nullable();
            $table->string('category')->default('naked');
            $table->string('license_type')->default('A');
            $table->string('condition')->default('used');
            $table->unsignedInteger('mileage_km')->default(0);
            $table->unsignedInteger('price_eur')->default(0);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motorbikes');
    }
};
