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
        Schema::table('kamars', function (Blueprint $table) {
            $table->string('harga', 12)->change();
          
            $table->enum('tipe', ['AC', 'Kipas Angin'])->change();
            $table->enum('status', ['tersedia', 'terisi'])->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};