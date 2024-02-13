<?php

use Illuminate\Support\Facades\Route;
use App\Models\Students;
use App\Http\Controllers\StudentsControllers;
use App\Models\Extracurricular;
use App\Http\Controllers\ExtracurricularController;
use App\Models\Kelas;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', 
    ["title" => "welcome"]);
});
Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/home', function () {
    return view ('home', 
    ["title" => "home"]);
}); 
Route::get('/about', function () {
    return view ('about', [
        "name" => "Yakaria Yahya",
        "email" => "yakariayahya50@gmail.com",
        "kelas" => "11 PPLG 1",
        "image" => "img/saya.jpg",
        "title" => "about"
    ]);
});

Route::get('/extracurricular', [
    ExtracurricularController::class, 'index1'
]
);

Route::group(["prefix" => "/student"], function(){
    Route::get('/all', [
        StudentsControllers::class, 'index'
    ]
    ); 
    Route::get('/detail/{student}', [
        StudentsControllers::class, 'show'
    ]
    ); 
    Route::get('/create', [
        StudentsControllers::class, 'create'
    ]
    ); 
    Route::post('/add', [
        StudentsControllers::class, 'store'
    ]
    ); 
    Route::delete('/delete/{id}', [
        StudentsControllers::class, 'destroy'
    ]
    ); 
    Route::get('/edit/{student}', [
        StudentsControllers::class, 'edit'
    ]
    );
    Route::post('/update/{student}', [
        StudentsControllers::class, 'update'
    ]
    ); 
});

Route::group(["prefix" => "/kelas"], function(){
    Route::get('/all', [
        KelasController::class, 'index'
    ]
    ); 
    Route::get('/detail/{kelas}', [
        KelasController::class, 'show'
    ]
    ); 
    Route::get('/create', [
        KelasController::class, 'create'
    ]
    ); 
    Route::post('/add', [
        KelasController::class, 'store'
    ]
    ); 
    Route::delete('/delete/{id}', [
        KelasController::class, 'destroy'
    ]
    ); 
    Route::get('/edit/{kelas}', [
        KelasController::class, 'edit'
    ]
    );
    Route::post('/update/{kelas}', [
        KelasController::class, 'update'
    ]
    ); 
});

    Route::get('/login', [
        LoginController::class, 'index'
    ]
    )->name('login') ->middleware('guest');
     
    Route::post('/login', [
        LoginController::class, 'auth'
    ]
    );
    
    Route::get('/register', [
        RegisterController::class, 'register'
    ]
    ); 
    Route::post('/register', [
        RegisterController::class, 'store'
    ]
    ); 

    Route::group(["prefix" => "/dashboard"], function(){

        Route::get('/', [
            DashboardController::class, 'index'
        ]
        )->middleware('auth');
    });
    