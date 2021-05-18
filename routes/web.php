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

Route::get('/admin/categories', 'CategoryController@list')->name('list');
Route::post('/admin/categories', 'CategoryController@store');

<<<<<<< Updated upstream
Route::get('/admin/categories/create', 'CategoryController@create');
=======
Route::get('/admin/users', 'HomeController@admin_users_list')->name('admin_users_list');
>>>>>>> Stashed changes

Route::get('/admin/categories/create', 'CategoryController@create');

Route::get('/admin/users/{user}/edit', 'HomeController@edit');
Route::patch('/admin/users/{user}/edit', 'HomeController@update');
Route::delete('/admin/users/{user}/edit', 'HomeController@delete');

Route::get('/admin/categories/{categories}/edit', 'CategoryController@edit');
Route::patch('/admin/categories/{categories}/edit', 'CategoryController@update');
Route::delete('/admin/categories/{categories}/edit', 'CategoryController@delete');
Route::get('/admin/categories/{categories}', 'CategoryController@show');

Route::post('/admin/categories/{categories}', 'QuizController@store');

Route::get('/admin/categories/{categories}/quiz/create', 'QuizController@create');

Route::get('/admin/categories/{categories}/quiz/{quizzes}/edit', 'QuizController@edit');
Route::patch('/admin/categories/{categories}/quiz/{quizzes}/edit', 'QuizController@update');
Route::delete('/admin/categories/{categories}/quiz/{quizzes}/edit', 'QuizController@delete');

Route::get('/admin/categories/{categories}/edit', 'CategoryController@edit');
Route::patch('/admin/categories/{categories}/edit', 'CategoryController@update');
Route::delete('/admin/categories/{categories}/edit', 'CategoryController@delete');
Route::get('/admin/categories/{categories}', 'CategoryController@show');

Route::post('/admin/categories/{categories}', 'QuizController@store');

Route::get('/admin/categories/{categories}/quiz/create', 'QuizController@create');

Route::get('/admin/categories/{categories}/quiz/{quizzes}/edit', 'QuizController@edit');
Route::patch('/admin/categories/{categories}/quiz/{quizzes}/edit', 'QuizController@update');
Route::delete('/admin/categories/{categories}/quiz/{quizzes}/edit', 'QuizController@delete');


