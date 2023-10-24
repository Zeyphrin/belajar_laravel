<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ExtracurricularController;
use App\Models\Extracurricular;

class ExtracurricularController extends Controller
{
    public static function index1() {
        return view ('extracurricular', 
        ["title" => "extracurricular",
          "extracurricular" => Extracurricular::all()]);
    }
}
