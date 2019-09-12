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

Route::get('/', function () {
    return view('welcome');
});
Route::get('zidane', function() {
    return view('zidane');
});

Route::get('owner', 'ZidaneController@index');
Route::get('passdata', 'ZidaneController@passData');
Route::get('/nama/{zidane}', 'ZidaneController@reqData');
Route::get('/form', 'ZidaneController@form');
Route::post('/form/isi', 'ZidaneController@isi');
