<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('login', [
    'as' => 'login',
    'uses' => 'SessionsController@create',
]);

Route::post('login', [
    'as' => 'login',
    'uses' => 'SessionsController@store',
]);

Route::resource('users', 'UsersController');

Route::resource('posts', 'PostsController');

Route::get('/post/{slug}',[
    'as'=>'post-show',
    'uses'=>'PostController@getShow',
]);

Route::get('about', [
    'as' => 'about',
    'uses' => 'MainController@about',
]);