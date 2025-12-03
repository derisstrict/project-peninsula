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
            $table->bigInteger('user_id');
            $table->string('title', 100)->nullable(false);
            $table->string('deskripsi', 100)->nullable(false);
            $table->string('icon', 100)->nullable(false);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
