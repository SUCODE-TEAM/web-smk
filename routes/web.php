<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return view('home'); // Placeholder
});

Route::get('/jurusan', function () {
    return view('home'); // Placeholder
});

Route::get('/ppdb', function () {
    return view('home'); // Placeholder
});
