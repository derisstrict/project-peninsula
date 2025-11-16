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
        Schema::create('spot', function (Blueprint $table){
            $table->id();
            $table->string('xpos', 15)->nullable(false);
            $table->string('ypos', 15)->nullable(false);
            $table->string('title', 50)->nullable(false);
            $table->string('url_media', 255)->nullable(false);
            $table->string('catatan', 50)->nullable(true);
            $table->text('keterangan')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spot');
    }
};
