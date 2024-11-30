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
            $table->string('nik', 20)->unique()->nullable();
            $table->string('telepon', 15)->nullable();
            $table->text('alamat')->nullable();
            $table->foreignId('kamars_id')->constrained();
            $table->date('tgglmasuk')->nullable();
            $table->date('tgglkeluar')->nullable();
            $table->string('gambarktp')->nullable(); // Lokasi gambar KTP
            
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