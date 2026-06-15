<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiPesertaController extends Controller
{
    public function index()
    {
        // Mengirim data nilaipeserta ke view index
        $nilaikuliah = DB::table('nilai_peserta')->get();
        return view('nilaipeserta.index', ['nilaipeserta' => $nilaipeserta]);
    }

    // Fungsi untuk menampilkan form tambah data
    public function create()
    {
        return view('nilaipeserta.create');
    }

    public function store(Request $request)
    {
        $nilaipeserta = $request->NilaiPeserta;
        $rata_rata = $request->Rata-rata;

        // Hitung Nilai Huruf otomatis
        if ($nilaipeserta >= 75) {
            $nilaiHuruf = 'Berhasil';
        } elseif ($nilaipeserta < 75) {
            $nilaiHuruf = 'Gagal';
        }

        // Hitung Rata-rata otomatis
        $rata_rata = ($NilaiTeori + $NilaiPraktek) / 2;

        // Simpan ke database
        DB::table('nilai_peserta')->insert([
            'NoPeserta' => $request->NoPeserta,
            'NilaiTeori' => $NilaiTeori,
            'NilaiPraktek' => $NilaiPraktek,
        ]);

        return redirect('/nilaipeserta');
    }
}
