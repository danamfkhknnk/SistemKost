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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('kamar_id')->nullable()->constrained();
            $table->foreignId('penghuni_id')->nullable()->constrained();
            $table->enum('status',['pending','selesai','batal']);
            $table->enum('tipe',['baru','sewa'])->nullable();
            $table->string('snap_token')->nullable();
            $table->date('jatuhtempo')->nullable();
            $table->date('tanggal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};