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
        Schema::create('keluhans', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('user_id')->constrained();
            $table->string('judul', 100);
            $table->text('keluhan'); // Judul keluhan
            $table->string('gambarbukti'); // Lokasi file gambar bukti
            $table->enum('status', ['tolak', 'selesai','pending'])->default('pending'); // Status keluhan dengan nilai default 'ditolak'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluhans');
    }
};