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

/**
* 基本ルート
*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@top')->name('home');

/**
* チーム関係
*/
Route::post('/team/create', 'TeamController@create');
Route::get('/team/index/{id}', 'TeamController@index');
Route::get('/team/edit', 'TeamController@edit');
Route::post('/team/edit/post', 'TeamController@editPost');
Route::get('/team/member', 'TeamController@member');
Route::post('/team/remove', 'TeamController@remove');

/**
* ユーザー関係
*/
Route::get('user', 'UserController@index');
Route::get('user/list', 'UserController@list');
Route::post('user/edit', 'UserController@edit');
Route::get('user/profile', 'UserController@profile');

/**
* 投稿　　
*/
Route::get('/post/list/recruit', 'PostController@listRecruit');
Route::get('/post/list/battle', 'PostController@listBattle');
Route::get('/post', 'PostController@index');
Route::post('/post/post', 'PostController@post');
Route::get('/post/postdetail/{id}', 'PostController@detail');
Route::get('/post/postlist','PostController@viewlist');

/**
*　お問い合わせ
*/
Route::get('/contact', 'ContactController@index');
Route::post('/contact/post', 'ContactController@post');
Route::get('/contact/success', 'ContactController@success');

/**
* チャット関係
*/
Route::get('/chat/{id}', 'ChatController@index');
