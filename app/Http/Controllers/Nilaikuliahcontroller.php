<?php

namespace App\Http\Controllers;

use App\Models\Nilaikuliah;
use Illuminate\Http\Request;

class NilaikuliahController extends Controller
{
    public function index()
    {
        $data = Nilaikuliah::all();
        return view('nilaisiswa', compact('data'));
    }

    public function tambah()
    {
        return view('nilaisiswa_tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NRP'        => 'required|max:6',
            'NilaiAngka' => 'required|integer|min:0|max:100',
            'SKS'        => 'required|integer',
        ]);

        Nilaikuliah::create($request->only('NRP', 'NilaiAngka', 'SKS'));

        return redirect('/nilaisiswa')->with('success', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        $row = Nilaikuliah::findOrFail($id);
        return view('nilaisiswa_edit', compact('row'));
    }

    public function update(Request $request)
    {
        Nilaikuliah::where('ID', $request->id)->update([
            'NRP'        => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS'        => $request->SKS,
        ]);

        return redirect('/nilaisiswa')->with('success', 'Data berhasil diupdate!');
    }

    public function hapus($id)
    {
        Nilaikuliah::destroy($id);
        return redirect('/nilaisiswa')->with('success', 'Data berhasil dihapus!');
    }
}
