<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route::resource("tweets","TweetController");

Route::resource("branches","BranchController");

Route::resource("divisions","DivisionController");

Route::resource("designations","DesignationController");

Route::resource("employees","EmployeeController");

Route::resource("hras","HRAController");