<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "profile",
        "nama" => "ahmad jabar fikri",
        "nim" => "13242520040",
        "prodi" => "information",
        "image" => "adidas.jpg",

    ]);
});

Route::get('/berita', function () {
    return view('berita',[
        "title" => "berita",
    ]);
});

Route::get('/kontak', function () {
    return view('kontak',[
        "title" => "kontak",
    ]);
});