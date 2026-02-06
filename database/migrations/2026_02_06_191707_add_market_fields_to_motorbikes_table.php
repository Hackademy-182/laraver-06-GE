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
        Schema::table('motorbikes', function (Blueprint $table) {
            Schema::table('motorbikes', function (Blueprint $table) {
                $table->string('condition')->default('used');
                $table->unsignedInteger('mileage_km')->default(0);
                $table->unsignedInteger('price_eur')->default(0);
            });

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('motorbikes', function (Blueprint $table) {
            $table->dropColumn(['condition', 'mileage_km', 'price_eur']);
        });

    }
};
