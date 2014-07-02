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

use GuzzleHttp\Client;

Route::get('/', function()
{
//	dd(App::environment());
	return View::make('hello');
});

Route::get('/test', function(){
	return '<h1>Welcome To Codeception Test!</h1>';
});

Route::get('/guzzle', function(){

//	$client = new Client();
//	$res = $client->get('https://api.github.com/user', [
//		'auth' =>  ['mikeerickson', 'mkjbbtrsh09']
//	]);
//	echo $res->getStatusCode();           // 200
//	echo $res->getHeader('content-type'); // 'application/json; charset=utf8'
//	echo $res->getBody();                 // {"type":"User"...'
//	var_export($res->json());             // Outputs the JSON decoded data

	$queryString = Input::query();
//	$result = [];
//	parse_str($queryString,$result);
	var_dump($queryString);


//	$client = new Client();
//	$data = ['body' => ['name' => 'ABC Company']];
//	$res = $client->post('http://rangladex.app:8000/api/v1/companies', $data);
//
//	var_dump($res);
//
//	$id = $res->json()['id'];
//
//	$res = $client->delete("http://rangladex.app:8000/api/v1/companies/$id",[]);
//	var_dump($res->json());
//		$value = $json['id']; // this is not returning the correct value

});

Route::get('/behat', function(){
	return '<h1>Welcome To Behat Test!</h1>';
});


Route::group(array('prefix' => 'api/v1'), function() {
	Route::resource('posts', 'PostsController');
});
