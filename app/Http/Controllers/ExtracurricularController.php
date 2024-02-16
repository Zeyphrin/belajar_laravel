<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;


class ExtracurricularController extends Controller
{
    public function index1()
    {
        $extras = Extracurricular::all();
        
        return view('extracurricular', ["title" => "Extracurricular", "extras" => $extras]);
    }
}
