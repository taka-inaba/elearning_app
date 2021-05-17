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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'HomeController@list')->name('users');

Route::get('/users/{user}', 'HomeController@show')->name('user');


Route::post('/users/follow', 'FollowController@follow');
Route::delete('/users/unfollow', 'FollowController@unfollow');

Route::get('/users/{followed_id}/follow', 'FollowController@followget')->name('user.follow');;
Route::get('/users/{unfollowed_id}/unfollow', 'FollowController@unfollowget')->name('user.unfollow');


Route::get('/user/{id}/following', 'FollowController@following')->name('user.following');
Route::get('/user/{id}/followers', 'FollowController@followers')->name('user.followers');





