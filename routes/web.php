<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.beranda');
})->name('beranda');

Route::get('/profil', function () {
    return view('frontend.profil');
})->name('profil');
