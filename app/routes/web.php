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

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/membres', 'HomeController@user')->name('user_show')->middleware('auth');


Route::get('/articles', 'PostController@index' )->name('post_index')->middleware('auth');
Route::Post('/articles/categorie','PostController@indexByCat')->name('post_category')->middleware('auth');

Route::get('/articles/nouveau', 'PostController@create')->name('post_create')->middleware('auth');
Route::post('/articles/store', 'PostController@store')->name('post_store')->middleware('auth');

Route::get('/articles/article{id}', 'PostController@show')->name('post_show')->middleware('auth');
