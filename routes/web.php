<?php

use App\Http\Controllers\Beranda;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/beranda', [Beranda::class,'index'])->middleware('auth');


Route ::get('/', [LoginController::class,'index'])->name('login')->middleware('guest');
Route ::post('/login', [LoginController::class,'authenticate']);
Route ::post('/logout', [LoginController::class,'logout']);

Route ::get('/login/daftar', [LoginController::class,'daftar'])->middleware('guest');
Route ::get('/login/tentang', [LoginController::class,'tentang']);
Route ::post('/login/daftar', [LoginController::class,'store']);