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
        Schema::create('sgo_config_banners', function (Blueprint $table) {
            $table->id();
            $table->string('image_i52');
            $table->string('image_i20');
            $table->string('image_i23');
            $table->string('image_i21');
            $table->string('image_i34');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_config_banners');
    }
};
