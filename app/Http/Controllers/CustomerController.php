<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'nomor-meja' => 'required|integer|min:1|max:10',
            'nama-customer' => 'required|string|max:255',
            'nomor-hp' => 'required|string|max:15',
        ]);

        // Simpan data ke database
        Customer::create([
            'nomor_meja' => $validated['nomor-meja'],
            'nama_customer' => $validated['nama-customer'],
            'nomor_hp' => $validated['nomor-hp'],
        ]);

        // Redirect atau tampilkan pesan sukses
        return redirect('/home')->with('success', 'Data berhasil disimpan!');
    }
}

