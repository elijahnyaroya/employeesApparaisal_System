<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\dashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

//Login
Route::get('/login', function(){
    return view('login');
});

//Register
Route::view('/register', 'register');

Route::post('/register',[UserController::class,'registerUsers']);

Route::post('/login',[UserController::class,'loginUser']);

//Rout for dashboard
Route::get('/',[dashboardController::class,'dashboardArea']);