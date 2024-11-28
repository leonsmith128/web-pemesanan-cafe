<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class MinumanController extends Controller
{

public function showMinuman()
{
    $minuman = Produk::where('kategori', 'minuman')->get();
    return view('menu', compact('minuman'));
}

}
