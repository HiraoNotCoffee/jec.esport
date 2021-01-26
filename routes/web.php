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
Route::get('/user', 'UserController@index');
Route::post('user/edit', 'UserController@edit');
Route::get('user/profile', 'UserController@profile');
Route::get('/contact', 'ContactController@index');
Route::post('/contact/post', 'ContactController@post');
Route::post('/contact/post', 'ContactController@postlist');
// Route::post('/contact/post', 'ContactController@post');
Route::get('/contact/success', 'ContactController@success');
Route::get('/post', 'PostController@index');
Route::post('/post/post', 'PostController@post');
Route::get('/post/postdetail/{id}', 'PostController@detail');
Route::get('/post/postlist','PostController@viewlist');