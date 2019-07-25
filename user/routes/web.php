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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/openAcc', 'HomeController@open');
Route::get('/welcome', 'HomeController@welcome');

Route::get('/feedback', 'HomeController@feed');
Route::get('/editprofile', 'HomeController@edit');
Route::get('/acc', 'HomeController@showAcc');
Route::get('/balance', 'HomeController@bal');
//Route::get('/send_money', 'HomeController@send');
Route::get('/send_money', 'transaction@index');

//Route::post('/uploadfile', 'cover_image@upload');
Route::post('/successtran', 'transaction@store');
Route::post('/openAcc','cover_image@savethis');
Route::get('/transactions', 'transaction@trans');
Auth::routes();



