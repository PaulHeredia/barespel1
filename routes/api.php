<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|this is very
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('bars', 'API\BarController');
Route::apiResource('buzons', 'API\BuzonController');
Route::apiResource('menus', 'API\MenuController');
Route::apiResource('preferencias', 'API\PreferenciaController');
<<<<<<< HEAD
Route::apiResource('sites', 'API\SiteController');
Route::apiResource('snacks', 'API\SnackController');
=======
Route::apiResource('snacks', 'API\SnackController');
>>>>>>> ariel
