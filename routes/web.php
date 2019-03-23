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
Route::get('/control', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('control.index');



Route::resource('accountsmanagement','UsersController');
Route::resource('categories','CategoryController');
Route::resource('posts','PostsController');

// Route::get('/posts/trashed', 'PostsController@trashed')->name('posts.trashed');

