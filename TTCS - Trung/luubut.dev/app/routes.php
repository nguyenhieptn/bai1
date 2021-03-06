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

Route::get('/',[
    'as'=>'home',
    'uses' => 'HomeController@index'
] );

Route::get('login',[
    'as'=>'login',
    'uses'=>'SessionController@create'
]);
Route::post('login',[
    'as'=>'login',
    'uses'=>'SessionController@store'
]);
Route::get('post/{slug}',[
    'as'=>'post-show',
    'uses'=>'PostsController@getShow'
]);
Route::get('Create',[
    'as'=>'Create',
    'uses'=>'PostsController@Create'

]);

Route::get('Create',[
    'as'=>'Create',
    'uses'=>'PostsController@Create'

]);
Route::resource('users', 'UsersController');
Route::resource('posts', 'PostsController');