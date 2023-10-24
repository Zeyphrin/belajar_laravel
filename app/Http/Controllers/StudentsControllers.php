<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StudentsControllers;
use App\Models\Students;

class StudentsControllers extends Controller
{
    public static function index() {
        return view ('student', 
        ["title" => "student",
          "students" => Students::all()]);
    }

}
