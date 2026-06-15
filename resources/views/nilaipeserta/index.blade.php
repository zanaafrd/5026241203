@extends('template')
@section('judul_halaman', 'Kode soal nilai_peserta')
@section('konten')
<p>
    <br />
    <a href="/nilaipeserta/tambah" class="btn btn-primary">Tambah Data</a>
</p>

<br />

<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>No Peserta</th>
        <th>Nilai Teori</th>
        <th>Nilai Praktek</th>
    </tr>
    @foreach ($nilaipeserta as $nm)
    <tr>
        <td>{{ $nm->ID }}</td>
        <td>{{ $nm->NilaiPeserta }}</td>
        <td>{{ $nm->NilaiTeori }}</td>
        <td>{{ $nm->NilaiPraktek }}</td>
        <td>
            @if ($nm->Rata_rata >= 75)
                Lulus
            @elseif ($nm->Rata_rata < 75)
                Gagal
            @endif
        </td>
        <td>
            {{ ($nm->NilaiTeori + $nm->NilaiPraktek) / 2 }}
        </td>
    </tr>
    @endforeach
</table>
@endsection
