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
        Schema::create('genre_historical', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('judul');
            $table->text('sinopsis')->nullable();
            $table->string('nama_penulis');
            $table->string('genre');
            $table->string('tahun_terbit');
            $table->string('image')->nullable();
            $table->string('status')->default("in stock");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genre_historical');
    }
};
