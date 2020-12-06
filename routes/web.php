<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtsController;
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

# 5 route untuk UTS

Route::get("/home", [UtsController::class, "satu"]);

use App\Http\Controllers\NewController;
Route::get("/new/satu", [NewController::class, "pertama"]);
Route::get("/new/dua", [NewController::class, "kedua"]);
Route::get("/new/tiga", [NewController::class, "ketiga"]);
Route::get("/new/empat", [NewController::class, "keempat"]);

# route untuk form validasi
use App\Http\Controllers\FormController;
Route::get("/daftar/new", [FormController::class, "new"])->name("daftar_new");
Route::post("/daftar/proses", [FormController::class, "proses"])->name("daftar_proses");
