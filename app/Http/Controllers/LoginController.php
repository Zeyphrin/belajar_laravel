<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public static function index() {
        return view ('login.login', 
        ["title" => "login",]);
    }

    public static function register() {
        return view ('login.register', 
        ["title" => "register",]);
    }
}

