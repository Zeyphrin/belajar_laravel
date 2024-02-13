<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function register() {
        return view('login.register',[
            'title' => 'register'
        ]);
        
    }
    
    public function store(Request $request){
        $validateData = $request->validate([
            'name'  => 'required|max:255',
            'email'  => 'required|max:255',
            'password'  => 'required|min:5|max:255'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);
        

        $result = User::create($validateData);

        if ($result) {
            return redirect('/login')->with('success', 'Anda sudah berhasil register!');
        }
    }
}
