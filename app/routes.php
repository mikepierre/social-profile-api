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

// Since were using laravel 4 were gonna use this to make a controller 
// 

Route::get('/', function()
{
	return View::make('hello');
});

//Route::resource('user', 'UserController');

Route::group(array('prefix' => 'api/v1'), function()
{
    Route::resource('user', 'UsersController');
});
