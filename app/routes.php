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
	return View::make('hello');
});

Route::get('users', function()
{
	$users = User::all();	
    return View::make('users', array('title'=>'Users'))->with('users', $users);
});

Route::controller('projects', 'ProjectController');

Route::get('/logout', function() {
    Auth::logout();
    return Redirect::to('/login');
});

Route::get('/login', function() {
    return View::make('login', array('title'=>'Login',
      'authUrl' => Auth::getProvider()->getAuthUrl()
    ));
});

/*Route::get('projects', function(){
	$projects = Project::all();
	return View::make('projects')->with('projects', $projects);	
});
*
 * 
 */