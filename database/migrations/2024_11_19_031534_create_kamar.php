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
        Schema::create('kamars', function (Blueprint $table) {
            $table->id(); // Membuat kolom id dengan tipe bigint UNSIGNED dan auto-increment
            $table->string('nokamar', 10); // Kolom nokamar dengan tipe varchar(10) yang tidak boleh NULL
            $table->enum('tipe', ['AC', 'Kipas Angin']); // Kolom tipe dengan tipe enum
            $table->string('harga', 12); // Kolom harga dengan tipe varchar(12) yang tidak boleh NULL
            $table->enum('status', ['tersedia', 'terisi']); // Kolom status dengan tipe enum
            $table->string('gambarkamar'); // Kolom gambarkamar dengan tipe varchar(255) yang tidak boleh NULL
            $table->timestamps(); // Kolom created_at dan updated_at


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamar');
    }
};