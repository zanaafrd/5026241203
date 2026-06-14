@extends('template')
@section('judul_halaman', 'Data Nilai Kuliah')
@section('konten')
<p>
    <br />
    <a href="/nilaikuliah/tambah" class="btn btn-primary">Tambah Data</a>
</p>

<br />

<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>NRP</th>
        <th>Nilai Angka</th>
        <th>SKS</th>
        <th>Nilai Huruf</th>
        <th>Bobot</th>
    </tr>
    @foreach ($nilaikuliah as $nm)
    <tr>
        <td>{{ $nm->ID }}</td>
        <td>{{ $nm->NRP }}</td>
        <td>{{ $nm->NilaiAngka }}</td>
        <td>{{ $nm->SKS }}</td>
        <td>
            @if ($nm->NilaiAngka >= 81)
                A
            @elseif ($nm->NilaiAngka >= 61)
                B
            @elseif ($nm->NilaiAngka >= 41)
                C
            @else
                D
            @endif
        </td>
        <td>
            {{ $nm->SKS * $nm->NilaiAngka }}
        </td>
    </tr>
    @endforeach
</table>
@endsection
