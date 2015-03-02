<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
| protected $table = 'tours';
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/',function(){
	return View::make('populair');
});
Route::get('chitiettour/index.php',function(){
	return View::make('chitiettour');
});
Route::get('search',function(){
	$name = Input::get('text-search');
	$tours = Tour::where('tentour', 'like', '%'. $name . '%')->get();
	return View::make('searchtour', compact('tours') );
});
Route::get('tintuc/index.php',function(){
	return View::make('xemtintuc');
});
Route::get('amthuc/index.php',function(){
	return View::make('xemamthuc');
});
Route::get('thongtin',function(){
	return View::make('thongtindd');
});

Route::resource('phanhois', 'PhanhoisController');
//Admin
Route::get('admin',function(){
	return View::make('adcontent');
});



Route::resource('tours', 'ToursController');

Route::resource('tintucs', 'TintucsController');