@extends('layouts.app')

@section('judul', 'Tambah Alat')

@section('konten')

    <h2>Form Tambah Alat</h2>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('alat.store') }}">

        @csrf

        <p>
            Kode:
            <input name="kode" value="{{ old('kode') }}">
        </p>

        <p>
            Nama:
            <input name="nama" value="{{ old('nama') }}">
        </p>

        <p>
            Stok:
            <input name="stok" type="number" value="{{ old('stok') }}">
        </p>

        <p>
            Kondisi:
            <select name="kondisi">
                <option value="baik">baik</option>
                <option value="rusak ringan">rusak ringan</option>
                <option value="rusak berat">rusak berat</option>
            </select>
        </p>

        <button type="submit">Simpan</button>

    </form>

@endsection