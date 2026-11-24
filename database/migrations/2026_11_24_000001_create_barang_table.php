<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Tabel barang sesuai modul: id, kode, nama, stok (semua varchar 255)
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode')->nullable();
            $table->string('nama')->nullable();
            $table->string('stok')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
