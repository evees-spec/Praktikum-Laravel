<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return 'Halo, Laravel!';
});

Route::get('/halo/{nama}', function ($nama) {
    return 'Halo, ' . $nama . '!';
});

Route::get('/coba', function () {
    return view('coba');
});

Route::resource('alat', AlatController::class);

Route::resource('buku', BukuController::class);