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

Route::get('philosophy', function () {
  return view('philosophy');
})->middleware('auth');

Route::get('tools', function () {
  return view('tools');
});

Route::get('analysis', function () {
  return view('analysis');
})->middleware('auth');

Route::get('course', function () {
  return view('course');
})->middleware('auth');

Route::get('profile', function () {
  return view('profile');
})->middleware('auth');

Route::get('header', function () {
  return view('header');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
