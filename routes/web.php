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


Route::get('/', 'PageController@index');
Route::get('/services', 'PageController@services');
Route::get('/register', 'PageController@register');
Route::get('/Create', 'PageController@Create');
Route::get('/search', 'PageController@search');
Route::get('/payment', 'PageController@Payment');
Route::get('postings', 'HomeController@index');


Route::resource('posts', 'PostsController');
Route::resource('search', 'SearchController');
Route::resource('reviews', 'ReviewsController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





