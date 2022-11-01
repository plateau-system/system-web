<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Spot\SpotController;
use App\Http\Controllers\Chart\ChartController;
use App\Http\Controllers\Map\MapController;


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

// home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('top');
Route::get('/top/{id}', [App\Http\Controllers\HomeController::class, 'top'])->name('top');
Route::get('/chart/{id}', [App\Http\Controllers\HomeController::class, 'chart'])->name('chart');
Route::get('/simulator/{id}', [App\Http\Controllers\HomeController::class, 'simulator'])->name('simulator');
Route::get('/information/{id}', [App\Http\Controllers\HomeController::class, 'information'])->name('information');
Route::get('/setting/{id}', [App\Http\Controllers\HomeController::class, 'setting'])->name('setting');
Route::get('/help/{id}', [App\Http\Controllers\HomeController::class, 'help'])->name('help');

// cart
Route::get('/chart/{id}', [ChartController::class, 'chart'])->name('chart');

// map
Route::get('/map/{id}', [MapController::class, 'map'])->name('map');

// store
Route::post('/spot-store', [SpotController::class, 'spotStore'])->name('top');
Route::get('/spot-delete/{id}', [SpotController::class, 'spotDelete'])->name('top');
Route::get('/spot-start/{id}', [SpotController::class, 'spotStart'])->name('top');
Route::get('/spot-stop/{id}', [SpotController::class, 'spotStop'])->name('top');