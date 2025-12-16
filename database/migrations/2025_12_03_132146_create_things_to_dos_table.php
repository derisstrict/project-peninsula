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
        Schema::create('things_to_dos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user');
            $table->timestamps();
            $table->string('kunci_judul', 100)->nullable(false);
            $table->string('kunci_deskripsi', 100)->nullable(false);
            $table->string('ikon', 100)->nullable(false);
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('things_to_dos');
    }
};
