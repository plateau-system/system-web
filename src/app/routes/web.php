<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpotController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/chart', [App\Http\Controllers\HomeController::class, 'chart'])->name('chart');
Route::get('/simulator', [App\Http\Controllers\HomeController::class, 'simulator'])->name('simulator');
Route::get('/information', [App\Http\Controllers\HomeController::class, 'information'])->name('information');
Route::get('/setting', [App\Http\Controllers\HomeController::class, 'setting'])->name('setting');
Route::get('/help', [App\Http\Controllers\HomeController::class, 'help'])->name('help');

Route::post('/spot-store', [SpotController::class, 'spotStore'])->name('setting');