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
            $table->id(); // Primary key
            $table->string('nokamar', 10)->unique(); // Nomor kamar, dengan nilai unik
            $table->string('tipe', 50); // Tipe kamar
            $table->decimal('harga', 10, 2); // Harga kamar (2 desimal untuk uang)
            $table->enum('status', ['tersedia', 'terisi', 'perbaikan']); // Status kamar
            $table->string('gambarkamar'); // Lokasi file gambar kamar
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