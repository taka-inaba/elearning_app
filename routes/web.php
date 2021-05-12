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
// Route::get('/users', 'HomeController@list')->name('users');


Route::post('/users/follow', 'FollowController@follow')->name('user.follow');
Route::delete('/users/unfollow', 'FollowController@unfollow')->name('user.unfollow');

// Route::get('/users/follow_id', 'FollowController@followget')
// Route::get('/users/unfollow_id', 'FollowController@unfollowget')

