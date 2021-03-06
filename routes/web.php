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
//
//Route::resource('/', 'BookController', ['except' => 'show']);

Route::get('/', 'BookController@index')->name('index');
Route::get('/create', 'BookController@create')->name('create');
Route::post('/', 'BookController@store')->name('store');
Route::get('{book}/edit', 'BookController@edit')->name('edit');
Route::patch('/{book}', 'BookController@update')->name('update');
Route::delete('/{book}', 'BookController@destroy')->name('delete');

