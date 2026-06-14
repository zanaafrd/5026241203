<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaikuliahController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\SirupController;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('halo', function () {
    return "<h1>Halo, Selamat Datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pert5',function () {
    return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

// dari file FE

Route::get('intro',function () {
    return view('intro');
});

Route::get('news',function () {
    return view('news');
});

Route::get('responsive',function () {
    return view('responsive');
});

Route::get('template', function () {
    return view('template');
});

// pertemuan 9 asinkron
Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']); // jangan lupa diganti
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// pertemuan 12 sambung mysql - bagian 9 malasngoding. programmer hanya bikin dari arahan system analyst
// route CRUD pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class, 'cari']);

//route CRUD siswa (SIAP EAS)
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');


//nilai kuliah
// latihan 2 - route Nilai Kuliah
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'indexnilaikuliah'])->name('nilaikuliah.indexnilaikuliah');
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'tambah'])->name('nilaikuliah.tambah');
Route::post('/nilaikuliah/store', [NilaiKuliahController::class, 'store'])->name('nilaikuliah.store');

//keranjang belanja
// latihan 1
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index'])->name('keranjangbelanja.index');
Route::get('/keranjangbelanja/beli', [KeranjangBelanjaController::class, 'create'])->name('keranjangbelanja.create');
Route::post('/keranjangbelanja', [KeranjangBelanjaController::class, 'store'])->name('keranjangbelanja.store');
Route::delete('/keranjangbelanja/{id}', [KeranjangBelanjaController::class, 'destroy'])->name('keranjangbelanja.destroy');
