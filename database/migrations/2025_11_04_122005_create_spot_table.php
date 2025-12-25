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
            $table->bigInteger('id_user');
            $table->string('xpos', 15)->nullable(false);
            $table->string('ypos', 15)->nullable(false);
            $table->string('kunci_judul', 50)->nullable(false);
            $table->string('kunci_teaser', 250)->nullable(false);
            $table->string('url_media', 255)->nullable(false);
            $table->string('alt_gambar', 255)->nullable(true);
            $table->string('kunci_catatan', 50)->nullable(true);
            $table->text('kunci_keterangan')->nullable(false);
            $table->timestamps();
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
