@extends('layouts.app')

@section('judul', 'Coba Blade')

@section('konten')

    <p>Daftar alat (sementara, data contoh):</p>

    @php
        $alat = ['Kamera', 'Tripod', 'Mikrofon'];
    @endphp

    <ul>
        @foreach ($alat as $a)
            <li>{{ $a }}</li>
        @endforeach
    </ul>

    @if (count($alat) > 2)
        <p>Jumlah alat lebih dari 2.</p>
    @endif

@endsection