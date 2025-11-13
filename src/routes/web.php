<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JevilController;

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

//以下記載
Route::get('/toppage', [JevilController::class, 'index'])->name('index');

Route::get('/memory', [JevilController::class, 'log'])->name('log');

Route::get('/about', [JevilController::class, 'about'])->name('about');

Route::get('/lock', [JevilController::class, 'hidden'])->name('hidden');

Route::get('/log/update', [JevilController::class, 'update'])->name('update');