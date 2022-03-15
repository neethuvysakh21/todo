<?php

use App\Http\Controllers\todocontroller;
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

Route::get('/', 'App\Http\Controllers\TodoController@home')->name(name:'home');
Route::post('/store', 'App\Http\Controllers\TodoController@store')->name(name:'store');
Route::get('/edit/{todo}', 'App\Http\Controllers\TodoController@edit')->name(name:'edit');
Route::post('/update/{todo}', 'App\Http\Controllers\TodoController@update')->name(name:'update');
Route::post('/delete/{todo}', 'App\Http\Controllers\TodoController@delete')->name(name:'destroy');

