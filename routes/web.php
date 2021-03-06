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

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();


Route::get('index', 'PostsController@index');

//ログアウト中のページ
Route::get('/login', 'Auth\LoginController@login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/register', 'Auth\RegisterController@register');
Route::post('/register', 'Auth\RegisterController@register');
// 7/1バリデーション追加
// Route::post('/register', 'Auth\RegisterController@post');
// Route::post('/register', 'Auth\RegisterController@create');
Route::get('/added', 'Auth\RegisterController@added');
Route::post('/added', 'Auth\RegisterController@added');

//ログイン中のページ
Route::group(["middleware" => "auth"], function() {
    Route::get('/top','PostsController@index');
    // Route::get('/top','PostsController@timeLine');
    Route::post('/top','PostsController@postTweet');
    // Route::get('/Timeline','TimelineController@timeLine');
    // Route::post('/Timeline','TimelineController@postTweet');

    Route::get('/logout','Auth\LoginController@logout');

    Route::get('/profile','UsersController@profile');
    Route::get('/followerList','FollowsController@followerList');

    Route::get('/search','UsersController@index');

    Route::get('/follow-list','PostsController@index');
    Route::get('/follower-list','PostsController@index');

});
