@extends('template')
@section('title', 'Data stock Sirup')
@section('konten')

    <h2> <br>Stock Sirup</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif


<a href="{{ route('sirup.create') }}" class="btn btn-primary">Beli</a>
<br>
</br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>Merk</th>
            <th>Stock</th>
            <th>Status</th>

        </tr>

        @forelse($sirup as $row)
            <tr>
                <td>{{ $row->kodesirup }}</td>
                <td>{{ $row->merksirup }}</td>
                <td>{{ $row->stocksirup }}</td>
                <td>{{ $row->tersedia }}</td>
                <td>
                        <form action="{{ route('sirup.destroy', $row->kodesirup) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center;">Belum ada data di stock Sirup.</td>
                </tr>
            @endforelse
        </table>
    @endsection
