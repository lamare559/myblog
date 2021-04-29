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

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/home/myposts', 'HomeController@posts')->name('posts')->middleware('auth');
Route::get('/home/create', 'PostController@create')->name('create')->middleware('auth');
Route::get('/home/categories', 'HomeController@showCategories')->name('categories')->middleware('auth');
Route::get('/home/myaccount', 'HomeController@posts')->name('account')->middleware('auth');
Route::post('/home', 'PostController@storePost')->middleware('auth');
Route::get('/home/{postslot}', 'HomeController@showPost')->middleware('auth');