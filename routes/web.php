<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;

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
// route CRUD
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class, 'cari']);


//nilai kuliah
Route::get('/nilaisiswa', [NilaikuliahController::class, 'index'])->name('nilaisiswa.menu');
Route::get('/nilaisiswa/tambah', [NilaikuliahController::class, 'tambah']);
Route::post('/nilaisiswa/store', [NilaikuliahController::class, 'store']);
Route::get('/nilaisiswa/edit/{id}', [NilaikuliahController::class, 'edit']);
Route::post('/nilaisiswa/update', [NilaikuliahController::class, 'update']);
Route::get('/nilaisiswa/hapus/{id}', [NilaikuliahController::class, 'hapus']);
