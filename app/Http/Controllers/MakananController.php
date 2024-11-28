<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class MakananController extends Controller
{

public function showMakanan()
{
    $makanan = Produk::where('kategori', 'makanan')->select('nama_produk', 'harga')->get();
    return view('makanan', compact('makanan'));
}

}
