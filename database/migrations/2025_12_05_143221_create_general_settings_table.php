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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('is_gs')->nullable(true);
            $table->string('bahasa_tersedia')->nullable(false);
            $table->string('judul_utama')->nullable(false);
            $table->string('warna_aksen_judul_utama')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
