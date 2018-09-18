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
Route::get('/profile', 'ProfileController@show');
Route::get('/profiles', 'ProfileController@index');
Route::get('/products', 'ProductController@index');

//Maak een pagina die alle profielen laat zien