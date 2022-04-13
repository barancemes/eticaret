<?php

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
Route::get('/anasayfa',[\App\Http\Controllers\AnasayfaController::class,'index'])->name('anasayfa');
Route::get('/detay/{id}',[\App\Http\Controllers\DetayController::class,'index'])->name('detay');
Route::get('/renk',[\App\Http\Controllers\AnasayfaController::class,'renkler'])->name('renkler');

