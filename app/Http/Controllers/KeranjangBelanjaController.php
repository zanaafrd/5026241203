<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        // Mengambil data dari tabel keranjangbelanja
        $keranjang = DB::table('keranjangbelanja')->get();

        // Memanggil file view di folder resources/views/keranjangbelanja/index.blade.php
        return view('keranjangbelanja.index', compact('keranjang'));
    }

    public function create()
    {
        // Memanggil file view di folder resources/views/keranjangbelanja/create.blade.php
        return view('keranjangbelanja.create');
    }

    public function store(Request $request)
    {
        // Validasi input harus berupa angka
        $request->validate([
            'KodeBarang' => 'required|integer',
            'Jumlah' => 'required|integer|min:1',
            'Harga' => 'required|integer|min:0',
        ]);

        // Insert data ke database
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);

        // Redirect ke halaman index keranjangbelanja
        return redirect()->route('keranjangbelanja.index')->with('success', 'Barang berhasil dimasukkan ke keranjang.');
    }

    public function destroy($id)
    {
        // Hapus data berdasarkan ID (Tombol Batal)
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        // Redirect ke halaman index keranjangbelanja
        return redirect()->route('keranjangbelanja.index')->with('success', 'Pembelian berhasil dibatalkan.');
    }
}
