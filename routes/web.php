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

Route::group(['middleware' => ['auth','admin']], function(){
  Route::get('/dashboard', function () {
    return view('admin.dashboard');
  });
  Route::get('users', 'UserController@index');
  Route::get('users/{user}/edit', 'UserController@edit');
  Route::get('users/{user}','UserController@show');
  Route::get('new-user','UserController@create');
});
