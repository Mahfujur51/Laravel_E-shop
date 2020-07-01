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

Route::get('/show/{slug}','FontendController@show')->name('show');
Route::get('/search','FontendController@search')->name('search');
Route::get('/category/{id}','FontendController@category')->name('category.show');

Route::group(['prefix'=>'admin'],function(){
   Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
   Route::get('/add/product','AdminController@add_product')->name('add.product');
   Route::post('/add/product','AdminController@product_store')->name('product.store');
   Route::get('/product/list','AdminController@product_index')->name('product.index');
   Route::get('/product/delete/{id}','AdminController@product_delete')->name('product.delete');
   Route::get('/product/edit/{id}','AdminController@product_edit')->name('product.edit');
   Route::post('/update/product/{id}','AdminController@product_update')->name('product.update');
//Category Route==============
   Route::group(['prefix'=>'/category'],function(){
    Route::get('/index','CategoryController@index')->name('category.index');
    Route::get('/delete/{id}','CategoryController@category_delete')->name('category.delete');
    Route::get('/add','CategoryController@category_add')->name('category.add');
    Route::post('/store','CategoryController@category_store')->name('category.store');
    Route::post('/update/{id}','CategoryController@category_update')->name('category.update');
    Route::get('/edit/{id}','CategoryController@category_edit')->name('category.edit');

});
 //==============Brand Route======
  Route::group(['prefix'=>'/brand'],function(){
   Route::get('/index','BrandController@index')->name('brand.index');
   Route::get('/delete/{id}','BrandController@brand_delete')->name('brand.delete');
   Route::get('/add','BrandController@brand_add')->name('brand.add');
   Route::post('/store','BrandController@brand_store')->name('brand.store');
   Route::post('/update/{id}','BrandController@brand_update')->name('brand.update');
   Route::get('/edit/{id}','BrandController@brand_edit')->name('brand.edit');

});

});

