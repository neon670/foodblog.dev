<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when thats URI is requested.
|
*/

Route::get('/', 'HomeController@showHome');

Route::get('hello', 'HomeController@showHome');

Route::get('about', 'HomeController@showAboutMe');

Route::get('gallery', 'HomeController@showGallery');

Route::get('location', 'HomeController@showLocation');

Route::get('links', 'HomeController@showLinks');
 // <-----------------Admin------------>

Route::get('/admin', function()
	{
		return View::make('admin.home');
	});
Route::get('admin', 'AdminController');