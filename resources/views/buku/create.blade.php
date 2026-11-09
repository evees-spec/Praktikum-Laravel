@extends('layouts.app')

@section('judul', 'Tambah Buku')

@section('konten')

    <h2>Form Tambah Buku</h2>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('buku.store') }}">

        @csrf

        <p>
            ISBN:
            <input name="isbn" value="{{ old('isbn') }}">
        </p>

        <p>
            Judul:
            <input name="judul" value="{{ old('judul') }}">
        </p>

        <p>
            Penulis:
            <input name="penulis" value="{{ old('penulis') }}">
        </p>

        <p>
            Stok:
            <input type="number" name="stok"
                value="{{ old('stok') }}">
        </p>

        <button type="submit">Simpan</button>

    </form>

    <a href="{{ route('buku.index') }}">Kembali</a>

@endsection