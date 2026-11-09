@extends('layouts.app')

@section('judul', 'Ubah Alat')

@section('konten')

    <h2>Form Ubah Alat</h2>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('alat.update', $alat) }}">

        @csrf
        @method('PUT')

        <p>
            Kode:
            <input name="kode"
                value="{{ old('kode', $alat->kode) }}">
        </p>

        <p>
            Nama:
            <input name="nama"
                value="{{ old('nama', $alat->nama) }}">
        </p>

        <p>
            Stok:
            <input type="number" name="stok"
                value="{{ old('stok', $alat->stok) }}">
        </p>

        <p>
            Kondisi:
            <select name="kondisi">

                <option value="baik"
                    {{ old('kondisi', $alat->kondisi) == 'baik' ? 'selected' : '' }}>
                    baik
                </option>

                <option value="rusak ringan"
                    {{ old('kondisi', $alat->kondisi) == 'rusak ringan' ? 'selected' : '' }}>
                    rusak ringan
                </option>

                <option value="rusak berat"
                    {{ old('kondisi', $alat->kondisi) == 'rusak berat' ? 'selected' : '' }}>
                    rusak berat
                </option>

            </select>
        </p>

        <button type="submit">Perbarui</button>

    </form>

@endsection