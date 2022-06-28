<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserInfoController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::resource('/user_info',UserInfoController::class);

Route::resource('/login',loginController::class);

Route::resource('/register',RegistrationController::class);
