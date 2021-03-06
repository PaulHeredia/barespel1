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
Route::resource('bars', 'BarController');
Route::resource('buzons', 'BuzonController');
Route::resource('menus', 'MenuController');
Route::resource('preferencias', 'PreferenciaController'); 
Route::resource('sites', 'SiteController');
Route::resource('snacks', 'SnackController');
 
Route::resource('snacks', 'SnackController');

Route::get('reportes','ReporteController@index')->name('reportes.index');
Route::get('reportes/preferencias','ReporteController@preferencias')->name('reportes.preferencias');
Route::get('reportes/listpreferencias','ReporteController@listpreferencias')->name('reportes.listpreferencias');
Route::get('reportes/buzon','ReporteController@buzon')->name('reportes.buzon');
 
