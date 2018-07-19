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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//allLoad
Route::get('/newLoad','LoadDetailsController@create')->name('newEntry');
Route::post('/adding','LoadDetailsController@store');
Route::get('/allLoad','LoadDetailsController@index');
Route::get('/remove/{id}','LoadDetailsController@delete');


//Day Sales
Route::get('/daySale','DaySaleController@create');
Route::post('/addDaySale','DaySaleController@store');
Route::get('/seeDaySale','DaySaleController@index');