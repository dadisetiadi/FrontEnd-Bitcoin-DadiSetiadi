<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\Konversi1Controller;
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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', [HalamanController::class, 'home'])->name('home');
Route::get('/dataharga', [DataController::class, 'index'])->name('dataharga');
Route::get('/konversi1', [Konversi1Controller::class, 'index'])->name('konversi1');