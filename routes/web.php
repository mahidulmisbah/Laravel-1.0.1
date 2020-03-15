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
Route::get('/',function(){
  return view('index');
});

Route::get('/about','helloController@about');
Route::get('/contact','helloController@contact');
Route::get('/post','postController@post')->name('post');
Route::get('/addCategory','postController@addCategory')->name('addCategory');
Route::get('/allCategory','postController@allCategory')->name('allCategory');
Route::post('/store','databaseController@insertIntoCategory')->name('store.category');
