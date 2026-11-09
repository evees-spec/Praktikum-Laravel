@extends('layouts.app')

@section('judul', 'Data Buku')

@section('konten')

    <h2>Daftar Buku Perpustakaan</h2>

    <a href="{{ route('buku.create') }}">
        + Tambah Buku
    </a>

    @if (session('sukses'))
        <p style="color:green">
            {{ session('sukses') }}
        </p>
    @endif

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <table border="1" cellpadding="8">

        <tr>
            <th>ISBN</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        @forelse ($buku as $b)

            <tr>
                <td>{{ $b->isbn }}</td>
                <td>{{ $b->judul }}</td>
                <td>{{ $b->penulis }}</td>
                <td>{{ $b->stok }}</td>

                <td>
                    <a href="{{ route('buku.show', $b) }}">
                        Detail
                    </a>

                    |

                    <a href="{{ route('buku.edit', $b) }}">
                        Ubah
                    </a>

                    <form method="POST"
                        action="{{ route('buku.destroy', $b) }}"
                        style="display:inline"
                        onsubmit="return confirm('Hapus buku ini?')">

                        @csrf
                        @method('DELETE')

                        <button type="submit">Hapus</button>

                    </form>
                </td>
            </tr>

        @empty

            <tr>
                <td colspan="5">Belum ada data buku.</td>
            </tr>

        @endforelse

    </table>

    {{ $buku->links() }}

@endsection