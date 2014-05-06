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

Route::get('/', function()
{
//	dd(App::environment());
	return View::make('hello');
});

Route::get('/test', function(){
	return '<h1>Welcome To Codeception Test!</h1>';
});


Route::group(array('prefix' => 'api/v1'), function() {
	Route::resource('posts', 'PostsController');
});
