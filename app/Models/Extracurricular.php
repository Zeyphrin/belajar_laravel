<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Extracurricular;

class Extracurricular
{
    private static $extracurricular = [
        [
            "id" => 1,
            "nama" => "Roja Ridho Robbihi",
            "pembina" => "Bu Widy",
            "deskripsi" => "OSIS"
        ],
        [
            "id" => 2,
            "nama" => "Muhammad Zikrinayah",
            "pembina" => "Bu Diyah",
            "deskripsi" => "Jurnalistik"
        ],
        [
            "id" => 3,
            "nama" => "Aaron Ikhwan Saputra",
            "pembina" => "Pak Sarwo Edi",
            "deskripsi" => "Rohis"
        ],
        [
            "id" => 4,
            "nama" => "Vania Aisyah Rohmawati",
            "pembina" => "Kak Lia",
            "deskripsi" => "Musik"
        ],
        [
            "id" => 5,
            "nama" => "Eureka Ahadyan Ilhamy",
            "pembina" => "Bu Fara",
            "deskripsi" => "Teater"
        ],
    ];
    

    public static function all()
    {
        return self::$extracurricular;
    }
}