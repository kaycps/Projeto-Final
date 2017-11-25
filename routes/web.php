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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('profile', 'ProfileController');
Route::resource('adress', 'AdressController');
Route::resource('select-process', 'SelectProcessController');
Route::resource('special-need', 'SpecialNeedController');
Route::resource('career', 'CareerController');
Route::resource('quota', 'QuotaController');
Route::resource('inscription', 'InscriptionController');
Route::resource('exemption', 'ExemptionController');