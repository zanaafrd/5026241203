@extends('template')
@section('title', 'Data Siswa')
@section('konten')

    <h2>Tambah Keranjang Belanja</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('keranjangbelanja.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>Kode Barang</label><br>
            <input type="text" name="KodeBarang" id="KodeBarang" maxlength="10" value="{{ old('KodeBarang') }}">
        </p>

        <p>
            <label>Jumlah</label><br>
            <input type="text" name="Jumlah" id="Jumlah" maxlength="20" value="{{ old('Jumlah') }}">
        </p>

        <p>
            <label>Harga</label><br>
            <input type="text" name="Harga" id="Harga" maxlength="5" value="{{ old('Harga') }}">
        </p>

        <button type="submit" class="btn btn-success">Beli</button>
        <a href="{{ route('siswa.index') }}">Kembali</a>
    </form>

    <script>
        function validasiForm() {
            let kodebarang = document.getElementById('KodeBarang').value.trim();
            let jumlah = document.getElementById('Jumlah').value.trim();
            let harga = document.getElementById('Harga').value.trim();

            if (kodebarang === '' || isNan(kodebarang)) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kode Barang wajib diisi dan harus berupa angka",
                    icon: "error"
                });
                return false;
            }

            if (jumlah === '' || isNan(jumlah)) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Jumlah wajib diisi dan harus berupa angka",
                    icon: "error"
                });
                return false;
            }

            if (harga === '' || isNan(harga)) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Harga wajib diisi dan harus berupa angka",
                    icon: "error"
                });
                return false;
            }


            //return true;
        }
    </script>
@endsection
