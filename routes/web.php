
<?php

use App\Models\berita;
use Illuminate\Support\Facades\Route;

// Route Home
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

// Route Profile
Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "nama" => "Ahmad Jabar Fikri",
        "nim" => "13242520040",
        "prodi" => "Information Technology",
        "image" => "adidas.jpg",
    ]);
});

// Route Kontak
Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak",
    ]);
});

// Route Berita
Route::get('/berita', function () {

    return view('berita', [
        "title" => "Berita",
        "beritas" => berita::ambilberita(),
    ]);
});

Route::get('/berita/{slug}', function ($slug) {

    return view('beritatunggal', [
        "title" => berita::gettitle($slug),
        "berita" => berita::getBerita($slug),
    ]);
});
