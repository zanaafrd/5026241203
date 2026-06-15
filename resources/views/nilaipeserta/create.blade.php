@extends('template')
@section('judul_halaman', 'Kode soal nilai_peserta')
@section('konten')

    <br>
    <a href="/nilaipeserta" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Nilai Peserta
        </div>

        <div class="card-body">
            <form action="/nilaipeserta/store" method="POST">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="NoPeserta" class="col-sm-2 col-form-label">No Peserta</label>
                    <div class="col-sm-10">
                        <input type="text" name="NoPeserta" id="NoPeserta" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="NilaiTeori" class="col-sm-2 col-form-label">Nilai Teori</label>
                    <div class="col-sm-10">
                        <input type="text" name="NilaiTeori" id="NilaiTeori" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="NilaiPraktek" class="col-sm-2 col-form-label">Nilai Praktek</label>
                    <div class="col-sm-10">
                        <input type="text" name="NilaiPraktek" id="NilaiPraktek" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
