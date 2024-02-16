<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public static function index() {
        return view ('dashboard.dashboard', 
        ["title" => "dashboard",]);
    }

}
