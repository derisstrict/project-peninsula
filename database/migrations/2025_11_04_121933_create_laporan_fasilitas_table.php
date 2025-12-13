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
        Schema::create('laporan_fasilitas', function (Blueprint $table){
            $table->id();
            $table->bigInteger('id_user')->nullable(true);
            $table->string('judul_laporan', 100)->nullable(false);
            $table->text('deskripsi_laporan')->nullable(false);
            $table->string('foto_fasilitas', 100)->nullable(true);
            $table->string('email_pelapor', 100)->nullable(false);
            $table->string('nama_pelapor', 60)->nullable(false);
            $table->tinyInteger('status_laporan')->default(0);
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_fasilitas');
    }
};
