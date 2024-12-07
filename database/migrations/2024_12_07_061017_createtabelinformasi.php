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
        Schema::create('infos', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis
            $table->string('wa', 255)->nullable();
            $table->string('fb', 255)->nullable();
            $table->string('tt', 255)->nullable();
            $table->string('logo')->nullable(); // Lokasi gambar KTP
            $table->string('galeri')->nullable(); // Lokasi gambar KTP
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};