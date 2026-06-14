@extends('template')
@section('title', 'Tambah Sirup')
@section('konten')

    <h2>Tambah Sirup</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('sirup.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>Merk Sirup</label><br>
            <input type="text" name="merksirup" id="merksirup" maxlength="30" value="{{ old('merksirup') }}">
        </p>

        <p>
            <label>Stock</label><br>
            <input type="number" name="stocksirup" id="stocksirup" min="0" value="{{ old('stocksirup') }}">
        </p>

        <p>
            <label>Tersedia (Y/T)</label><br>
            <select name="tersedia" id="tersedia">
                <option value="">-- Pilih --</option>
                <option value="Y" {{ old('tersedia') == 'Y' ? 'selected' : '' }}>Y - Ya</option>
                <option value="T" {{ old('tersedia') == 'T' ? 'selected' : '' }}>T - Tidak</option>
            </select>
        </p>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('sirup.index') }}" class="btn btn-secondary">Kembali</a>
    </form>

    <script>
        function validasiForm() {
            let merk = document.getElementById('merksirup').value.trim();
            let stock = document.getElementById('stocksirup').value.trim();
            let tersedia = document.getElementById('tersedia').value;

            if (merk === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Merk wajib diisi", icon: "error" });
                return false;
            }

            if (merk.length > 30) {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Merk maksimal 30 karakter", icon: "error" });
                return false;
            }

            if (stock === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Stock wajib diisi", icon: "error" });
                return false;
            }

            if (tersedia === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Status ketersediaan wajib dipilih", icon: "error" });
                return false;
            }

            return true;
        }
    </script>
@endsection
