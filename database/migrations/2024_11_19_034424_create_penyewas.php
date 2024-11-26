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
        Schema::create('penyewas', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis
            $table->foreignId('user_id')->constrained();
            $table->string('nik', 20)->unique();
            $table->string('telepon', 15);
            $table->text('alamat');
            $table->foreignId('kamars_id')->constrained();
            $table->date('tgglmasuk');
            $table->date('tgglkeluar')->nullable();
            $table->string('gambarktp'); // Lokasi gambar KTP
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyewas');
    }
};