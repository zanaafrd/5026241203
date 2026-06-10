<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Nilai Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
        th { background-color: #4CAF50; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        .btn { padding: 8px 16px; background: #4CAF50; color: white;
               border: none; cursor: pointer; border-radius: 4px; }
        .form-box { background: #f9f9f9; padding: 20px;
                    border-radius: 8px; margin-bottom: 20px; max-width: 400px; }
        input { width: 100%; padding: 8px; margin: 6px 0 12px;
                box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
    </style>
</head>
<body>

<h2>Data Nilai Siswa</h2>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

{{-- Form Tambah --}}
<div class="form-box">
    <h3>Tambah Mahasiswa</h3>
    <form method="POST" action="/nilaisiswa">
        @csrf
        <label>NRP (maks 6 karakter)</label>
        <input type="text" name="NRP" maxlength="6" required>

        <label>Nilai Angka (55–100)</label>
        <input type="number" name="NilaiAngka" min="0" max="100" required>

        <label>SKS</label>
        <input type="number" name="SKS" value="3" required>

        <button type="submit" class="btn">Tambah</button>
    </form>
</div>

{{-- Tabel Data --}}
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $i => $row)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $row->NRP }}</td>
            <td>{{ $row->NilaiAngka }}</td>
            <td>{{ $row->SKS }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
