<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    // Menentukan tabel yang digunakan (opsional jika nama model sama dengan tabel)
    protected $table = 'produk';

    // Menentukan kolom yang boleh diisi secara massal
    protected $fillable = ['nama_produk', 'harga', 'gambar', 'kategori', 'deskripsi_produk'];

    /**
     * Scope untuk mendapatkan produk kategori makanan.
     */
    public function scopeMakanan($query)
    {
        return $query->where('kategori', 'makanan');
    }

    /**
     * Scope untuk mendapatkan produk kategori minuman.
     */
    public function scopeMinuman($query)
    {
        return $query->where('kategori', 'minuman');
    }    
}
