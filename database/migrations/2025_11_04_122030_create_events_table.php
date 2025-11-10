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
        Schema::create('events', function (Blueprint $table){
            $table->id();
            $table->bigInteger('user_id');
            $table->string('tanggal_mulai', 50)->nullable(false);
            $table->string('tanggal_selesai', 50)->nullable(false);
            $table->text('deskripsi_event')->nullable(false);
            $table->string('judul_event', 100)->nullable(false);
            $table->string('slug', 100)->nullable(false);
            $table->string('gambar_event', 100)->nullable(false);
            $table->string('nama_penyelenggara', 50)->nullable(true);
            $table->integer('harga_tiket')->nullable(true);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
