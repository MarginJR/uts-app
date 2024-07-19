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
        Schema::create('penyimpanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang', 50);
            $table->text('deskripsi')->nullable();
            $table->integer('stok_tersedia');
            $table->integer('harga_satuan');
            $table->enum('kategori', ['Pakaian', 'Sepatu', 'Aksesoris'])->default('Pakaian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyimpanans');
    }
};
