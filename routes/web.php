<?php

use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
<<<<<<< HEAD
use App\Http\Controllers\NumFormatController;
=======
use App\Http\Controllers\AppListController;
>>>>>>> 248dc007b32ab0e490aa99b838ac3f7480696d5b

Route::get('/', function () {
    return view('home');
})->name("home");
Route::get('login', [LoginController::class, "index"])->name("login");
Route::post('login/check', [LoginController::class, "check"])->name("login.check");
Route::resource("user", UserController::class);
Route::get("logout", [LogoutController::class, "index"])->name("logout");
<<<<<<< HEAD
Route::get("numberformat", [NumFormatController::class, "index"])->name("numberformat");
=======
Route::get("applist", [AppListController::class, "index"])->name("applist");
>>>>>>> 248dc007b32ab0e490aa99b838ac3f7480696d5b
