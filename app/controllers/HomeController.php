<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		return View::make('home');
	}
	public function showAboutMe()
	{
		return View::make('about');
	}
	public function showGallery()
	{
		return View::make('gallery');
	}
	public function showLinks()
	{
		return View::make('links');
	}
	public function showLocation()
	{
		return View::make('location');
	}
}