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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','FontendController@index')->name('index');
Route::get('/contact','FontendController@contact')->name('contact');
Route::get('/about','FontendController@about')->name('about');
Route::get('/products','FontendController@product')->name('product');


