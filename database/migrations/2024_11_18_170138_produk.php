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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();  // id_produk akan menjadi primary key
            $table->string('nama_produk', 70);
            $table->string('gambar')->nullable(); // menyimpan path gambar
            $table->decimal('harga', 10, 2);
            $table->enum('kategori', ['makanan', 'minuman']);  // Menggunakan enum untuk kategori
            $table->text('deskripsi_produk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
