@extends('layouts.app')

@section('judul', 'Ubah Buku')

@section('konten')

    <h2>Form Ubah Buku</h2>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST"
        action="{{ route('buku.update', $buku) }}">

        @csrf
        @method('PUT')

        <p>
            ISBN:
            <input name="isbn"
                value="{{ old('isbn', $buku->isbn) }}">
        </p>

        <p>
            Judul:
            <input name="judul"
                value="{{ old('judul', $buku->judul) }}">
        </p>

        <p>
            Penulis:
            <input name="penulis"
                value="{{ old('penulis', $buku->penulis) }}">
        </p>

        <p>
            Stok:
            <input type="number" name="stok"
                value="{{ old('stok', $buku->stok) }}">
        </p>

        <button type="submit">Perbarui</button>

    </form>

    <a href="{{ route('buku.index') }}">Kembali</a>

@endsection