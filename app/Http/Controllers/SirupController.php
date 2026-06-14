<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SirupController extends Controller
{
    public function index()
    {
        // Mengambil semua data sirup
        $sirup = DB::table('sirup')->orderBy('kodesirup')->get();
        return view('sirup.index', compact('sirup'));
    }

    public function create()
    {
        return view('sirup.create');
    }

    public function store(Request $request)
    {
        // Validasi input (kodesirup tidak divalidasi karena auto-increment)
        $request->validate([
            'merksirup' => 'required|string|max:30',
            'stocksirup' => 'required|integer|min:0',
            'tersedia' => 'required|string|max:1',
        ]);

        // Insert data
        DB::table('sirup')->insert([
            'merksirup' => $request->merksirup,
            'stocksirup' => $request->stocksirup,
            'tersedia' => $request->tersedia,
        ]);

        return redirect()->route('sirup.index')->with('success', 'Data sirup berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $sirup = DB::table('sirup')->where('kodesirup', $id)->first();

        if (!$sirup) {
            abort(404);
        }

        return view('sirup.edit', compact('sirup'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'merksirup' => 'required|string|max:30',
            'stocksirup' => 'required|integer|min:0',
            'tersedia' => 'required|string|max:1',
        ]);

        // Update data
        DB::table('sirup')
            ->where('kodesirup', $id)
            ->update([
                'merksirup' => $request->merksirup,
                'stocksirup' => $request->stocksirup,
                'tersedia' => $request->tersedia,
            ]);

        return redirect()->route('sirup.index')->with('success', 'Data sirup berhasil diubah.');
    }

    public function destroy($id)
    {
        DB::table('sirup')->where('kodesirup', $id)->delete();

        return redirect()->route('sirup.index')->with('success', 'Data sirup berhasil dihapus.');
    }
}
