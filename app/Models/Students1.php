<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Students;

class Students
{
    private static $students = [
        [
            "id" => 1,
            "nis" => 101,
            "nama" => "Roja Ridho Robbihi",
            "asal" => "Blora",
            "gender" => "Pria"
        ],
        [
            "id" => 2,
            "nis" => 102,
            "nama" => "Muhammad Zikrinayah",
            "asal" => "Sumbawa",
            "gender" => "Pria"
        ],
        [
            "id" => 3,
            "nis" => 103,
            "nama" => "Aaron Ikhwan Saputra",
            "asal" => "Kudus Deket Pati Dikit",
            "gender" => "Pria"
        ],
        [
            "id" => 4,
            "nis" => 104,
            "nama" => "Vania Aisyah Rohmawati",
            "asal" => "Jep Ara",
            "gender" => "Wanita"
        ],
        [
            "id" => 5,
            "nis" => 105,
            "nama" => "Eureka Ahadyan Ilhamy",
            "asal" => "Tank A Rank",
            "gender" => "Pria"
        ],
    ];

    public static function all()
    {
        return self::$students;
    }
}
