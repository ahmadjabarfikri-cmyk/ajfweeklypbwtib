<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\berita;
class UserController extends Controller
{
    public function tampilberita()
    {
        return view('berita', [
        "title" => "Berita",
        "beritas" => berita::all(),
    ]);
    }
    public function getBerita($slug)
    {
    $beritas = berita::all();

    $beritatunggal = [];
    foreach($beritas as $berita)
        {
            if($berita['slug'] === $slug)
            {
                $beritatunggal = $berita;
            }
        }

        return view('beritatunggal', [
        "title" => $beritatunggal['judul'],
        "berita" => $beritatunggal,
        ]);
    
    }
}
