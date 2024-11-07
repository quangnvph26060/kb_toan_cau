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
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('logo')->nullable();
            $table->string('icon')->nullable();
            $table->string('title_seo')->nullable();
            $table->text('description_seo')->nullable();
            $table->text('keywords_seo')->nullable();
            $table->string('hotline')->nullable();
            $table->string('tax_code')->nullable(); // mã số thuế
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configs');
    }
};
