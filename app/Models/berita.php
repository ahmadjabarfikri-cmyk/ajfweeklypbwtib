<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    private static $data_berita = [
        [
            "judul" => "Mahasiswa TI",
            "slug" => "Mahasiswa-ti",
            "penulis" => "Admin",
            "konten" => "Mahasiswa Teknologi Informasi mempelajari perkembangan teknologi, pemrograman, jaringan komputer, dan sistem informasi."
        ],
        [
            "judul" => "Dosen TI",
            "slug" => "Dosen-ti",
            "penulis" => "Admin",
            "konten" => "Perkembangan teknologi membantu manusia dalam berkomunikasi, belajar, dan menyelesaikan pekerjaan dengan lebih mudah."
        ],
    ];

    public static function ambilberita()
    {
        return self::$data_berita;
    }

    public static function getBerita($slug)
    {
        $beritas = self::$data_berita;

        $berita = [];
        foreach($beritas as $b)
        {
            if($b["slug"] === $slug)
                {
                    $berita = $b;
                }
        }
        return $berita;

    }

    public static function getTitle($slug)
    {
        $berita = self::getBerita($slug);
        return $berita["judul"];
    }
    
}
