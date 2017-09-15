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
    return view('home');
})->middleware('auth');

Route::get('home', function () {
    return view('home');
})->middleware('auth');

Route::get('philosophy', function () {
  return view('philosophy');
})->middleware('auth');

Route::get('tools', function () {
  return view('tools');
})->middleware('auth');

Route::get('profile', function () {
  return view('profile');
})->middleware('auth');

Route::get('login', function () {
  return view('login');
});

Route::get('contact', function () {
  return view('contact');
});

Route::get('analysis', 'SearchController@index')->middleware('auth');

Route::get('search', 'SearchController@search')->middleware('auth');

Route::get('song/{id}', 'SearchController@show');

Route::post('contact', 'ContactController@postContact');

Route::get('course', 'CourseController@index');

Route::get('course-subpage/{id}', 'CourseController@show');

Route::get('reset-password', 'UserController@password');

Route::post('reset-password', 'UserController@resetPassword');

Route::post('profile', 'UserController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
