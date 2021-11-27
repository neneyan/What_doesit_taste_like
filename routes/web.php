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

Route::get('/', 'TopPageController@show');
Route::get('search', 'ProductController@show')->name('show');
Route::get('searchproduct', 'ProductController@search')->name('searchproduct');
Route::resource('review', 'ReviewController' , [ 'only' => [ 'show','store','destroy'] ]);
Route::get('blog', 'ArticleController@index');
Route::get('text', 'TextController@show')->name('text.show');
