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
        Schema::create('blog', function (Blueprint $table){
            $table->id();
            $table->bigInteger('id_user');
            $table->string('judul_blog', 100)->nullable(false);
            $table->text('isi_blog')->nullable(false);
            $table->string('gambar_blog', 100)->nullable(false);
            $table->timestamps();
            $table->string('slug', 100)->nullable(false);
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
