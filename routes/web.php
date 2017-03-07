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

Route::get('/', 'AccueilController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/gererFrais','FraisController@index');

Route::get('/saisirFrais', 'FraisController@ajout');
