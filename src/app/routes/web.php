<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpotController;
use App\Http\Controllers\ChartController;


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
Route::get('/top/{id}', [App\Http\Controllers\HomeController::class, 'top'])->name('top');
Route::get('/chart', [App\Http\Controllers\HomeController::class, 'chart'])->name('chart');
Route::get('/simulator', [App\Http\Controllers\HomeController::class, 'simulator'])->name('simulator');
Route::get('/information', [App\Http\Controllers\HomeController::class, 'information'])->name('information');
Route::get('/setting', [App\Http\Controllers\HomeController::class, 'setting'])->name('setting');
Route::get('/help', [App\Http\Controllers\HomeController::class, 'help'])->name('help');

// cart
Route::get('/chart-rate/{id}', [App\Http\Controllers\ChartController::class, 'chartRate'])->name('chart-rate');
Route::get('/chart-comparison/{id}', [App\Http\Controllers\ChartController::class, 'chartComparison'])->name('chart-comparison');

// store
Route::post('/spot-store', [SpotController::class, 'spotStore'])->name('setting');