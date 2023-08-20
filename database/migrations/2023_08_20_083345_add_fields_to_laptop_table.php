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
        Schema::table('laptops', function (Blueprint $table) {
            $table->tinyText('brand');
            $table->tinyText('model');
            $table->tinyText('processor');
            $table->tinyText('ram');
            $table->tinyText('storage');
            $table->tinyText('graphics_card');
            $table->tinyText('condition');
            $table->tinyText('features');

            $table->unsignedInteger('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumns('laptops', ['brand', 'model', 'processor', 'ram', 'storage', 'graphics_card', 'condition', 'features', 'price']);
    }
};
