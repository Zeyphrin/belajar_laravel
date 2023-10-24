<?php

use Illuminate\Support\Facades\Route;
use App\Models\Students;
use App\Http\Controllers\StudentsControllers;
use App\Models\Extracurricular;
use App\Http\Controllers\ExtracurricularController;


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
Route::get('/student', [
    StudentsControllers::class, 'index'
]
); 

Route::get('/extracurricular', [
    ExtracurricularController::class, 'index1'
]
); 