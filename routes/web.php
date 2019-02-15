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

Route::get('/revenue', 'RevenueController@index');
Route::get('/revenue/new', 'RevenueController@create');
Route::post('/revenue', 'RevenueController@store');
Route::get('/revenue/{id}', 'RevenueController@show');
Route::get('/revenue/{id}/edit', 'RevenueController@edit');
Route::put('/revenue/{id}', 'RevenueController@update');
Route::delete('/revenue/{id}', 'RevenueController@destroy');

Route::get('/expenditure', 'ExpenditureController@index');
Route::get('/expenditure/new', 'ExpenditureController@create');
Route::post('/expenditure', 'ExpenditureController@store');
Route::get('/expenditure/{id}', 'ExpenditureController@show');
Route::get('/expenditure/{id}/edit', 'ExpenditureController@edit');
Route::put('/expenditure/{id}', 'ExpenditureController@update');
Route::delete('/expenditure/{id}', 'ExpenditureController@destroy');

Route::get('/category/{status}', 'CategoryController@index');
Route::post('/category', 'CategoryController@store');
