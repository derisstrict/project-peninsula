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
        Schema::create('foto_video', function (Blueprint $table){
            $table->id();
            $table->bigInteger('id_user');
            $table->string('tipe_media', 100)->nullable(false);
            $table->string('url_media', 255)->nullable(false);
            $table->text('keterangan')->nullable(true);
            $table->string('tanggal_upload', 50)->nullable(false);
            $table->foreign('id_user')->references('id')->on('admin')->onDelete('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_video');
    }
};
