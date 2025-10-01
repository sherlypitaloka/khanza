<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return "
    <h1>Halaman Home</h1>
    <a href='/about'>About</a><br>
    <a href='/profile'>Profile</a>
    ";
});

Route::get('/about', function () {
   // return view('welcome');
    return "
    <h1>Halaman Home</h1>
    <a href='/Home'></a><br>
    <a href='/profile'>Profile</a>
    ";
});