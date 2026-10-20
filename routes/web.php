
<?php

use App\Http\Controllers\UserController;
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
Route::get('/berita',[UserController::class,'tampilberita']);
Route::get('/berita/{slug}',[UserController::class,'getberita']);
