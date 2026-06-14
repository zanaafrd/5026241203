<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaikuliahController extends Controller
{
    public function indexnilaikuliah()
    {
        // Mengirim data nilaikuliah ke view index
        $nilaikuliah = DB::table('nilaikuliah')->get();
        return view('nilaikuliah.indexnilaikuliah', ['nilaikuliah' => $nilaikuliah]);
    }

    // Fungsi untuk menampilkan form tambah data
    public function tambah()
    {
        return view('nilaikuliah.tambahnilaikuliah');
    }

    public function store(Request $request)
    {
        $nilaiAngka = $request->NilaiAngka;
        $sks = $request->SKS;

        // Hitung Nilai Huruf otomatis
        if ($nilaiAngka <= 40) {
            $nilaiHuruf = 'D';
        } elseif ($nilaiAngka >= 41 && $nilaiAngka <= 60) {
            $nilaiHuruf = 'C';
        } elseif ($nilaiAngka >= 61 && $nilaiAngka <= 80) {
            $nilaiHuruf = 'B';
        } else {
            $nilaiHuruf = 'A';
        }

        // Hitung Bobot otomatis
        $bobot = $nilaiAngka * $sks;

        // Simpan ke database
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $nilaiAngka,
            'SKS' => $sks,
        ]);

        return redirect('/nilaikuliah');
    }
}
