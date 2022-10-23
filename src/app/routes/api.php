<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Spot\SpotApiController;
use App\Http\Controllers\Chart\ChartApiController;
use App\Http\Controllers\Auth\UnityLoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// chart
Route::get('/chart_all/{id}', [ChartApiController::class, 'chartAll']);

// spot
Route::get('/spot_all/{id}', [SpotApiController::class, 'spotAll']);

// unityのログイン
Route::post('/unity_login', [UnityLoginController::class, 'unityLogin']);