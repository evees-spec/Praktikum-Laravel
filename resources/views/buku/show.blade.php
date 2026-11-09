@extends('layouts.app')

@section('judul', 'Detail Buku')

@section('konten')

    <h2>Detail Buku</h2>

    <p>ISBN: {{ $buku->isbn }}</p>

    <p>Judul: {{ $buku->judul }}</p>

    <p>Penulis: {{ $buku->penulis }}</p>

    <p>Stok: {{ $buku->stok }}</p>

    <a href="{{ route('buku.index') }}">Kembali</a>

@endsection