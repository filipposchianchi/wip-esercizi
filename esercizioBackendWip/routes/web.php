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

Route::get('/', 'MyController@index') -> name('posts');
Route::post('/postCreate', 'MyController@createPost') -> name('postCreate');
Route::post('commentCreate/{id}', 'MyController@createComment')->name('commentCreate');
Route::get('/post/delete/{id}', 'MyController@deletePost')->name('postDelete');
Route::get('/comment/delete/{id}', 'MyController@deleteComment')->name('commentDelete');