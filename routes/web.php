<?php

use App\Http\Controllers\AppListController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NumFormatController;

Route::get('/', function () {
    return view('home');
})->name("home");
Route::get('login', [LoginController::class, "index"])->name("login");
Route::post('login/check', [LoginController::class, "check"])->name("login.check");
Route::resource("user", UserController::class);
Route::get("logout", [LogoutController::class, "index"])->name("logout");
Route::get("applist", [AppListController::class, "index"])->name("applist");
Route::get("numberformat", [NumFormatController::class, "index"])->name("numberformat");
