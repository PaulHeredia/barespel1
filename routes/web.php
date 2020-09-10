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
//Raiz de nuestro Proyecto
//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/','PublicController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('sites', 'SiteController');
Route::resource('bars', 'BarController');
Route::resource('buzons', 'BuzonController');
Route::resource('menus', 'MenuController');
Route::resource('preferencias', 'PreferenciaController');
Route::resource('snacks', 'SnackController');
//Reportes
Route::get('reportes/reporte', 'ReportesUsuarioController@index')->name('reportes.userreportes');