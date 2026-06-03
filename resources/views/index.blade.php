@extends('template')
@section('judul_halaman', 'Data Pegawai')
@section('konten')

<p>
	<br><a href="/pegawai/tambah" class="btn btn-primary">Tambah Pegawai Baru</a>
</p>
<p>Cari Data Pegawai :</p>
<form action="/pegawai/cari" method="GET">
	<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
	<input type="submit" value="CARI">
</form>
	<br/>
	<br/>
	<table class="table table-striped tabel-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning btn-sm">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
{{$pegawai->links() }}
@endsection
