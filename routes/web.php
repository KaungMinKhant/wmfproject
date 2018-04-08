<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('/', 'MainController@index') -> name('main');
Route::get('/home', 'MainController@index') -> name('main');
Route::get('/news', 'NewsController@index') -> name('news');
Route::get('/wrestlemanialive', 'WrestleManiaLiveController@index') -> name('wrestlemanialive');
Route::get('/contactwmf', "ContactWMFController@index") -> name('contactwmf');
Route::get('/aboutdeveloper', "AboutDeveloperController@index") -> name('aboutdeveloper');
