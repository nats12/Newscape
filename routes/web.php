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

Route::get('/', 'TwitterController@accessVariables')->name('access');

// Login
Route::get('twitter/login', 'TwitterController@twitterLogIn', ['as' => 'twitter.login'])->name('twitterLogin');

// Logout
Route::get('twitter/logout', 'TwitterController@twitterLogOut', ['as' => 'twitter.logout'])->name('twitterLogout');

// CallBack
Route::get('twitter/callback', 'TwitterController@twitterCallBack', ['as' => 'twitter.callback'])->name('callback');

// NewsFeed
Route::get('newsfeed', 'TwitterController@twitterNewsFeed')->name('newsfeed');

// Error
Route::get('error', 'TwitterController@error')->name('error');

Route::get('/twitter/timeline', ['uses'=> 'TwitterController@getTimeline']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/tweet', ['uses'=> 'TwitterController@tweetArticle']);
