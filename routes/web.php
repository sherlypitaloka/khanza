<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Halo Laravel';
    return view('index');
});

Route::get('/about', function () {
    return 'Ini adalah halaman <b>about</b>';
    return view('about');
});

Route::get('/mahasiswa', function () {
    return 'Ini adalah halaman <b>mahasiswa </b>';
    return view('mahasiswa');
});

Route::get('/profile', function () {
    $nama = 'Sherly Pitaloka';
    return 'Ini adalah halaman <b>profile</b>, nama saya adalah ' . $nama;
    // return view('profile', compact('nama'));
    return view('profile')->with('nama', $nama);
});