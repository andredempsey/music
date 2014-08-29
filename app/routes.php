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

Route::get('/', 'HomeController@showWelcome');

Route::get('/contact', 'HomeController@showLocation');

Route::get('/php_info', function()
{
	phpinfo();
});

Route::post('/payment', 'PaymentsController@store');

Route::resource('posts', 'PostsController');

Route::resource('users', 'UsersController');

Route::get('/admin2032', 'UsersController@showAdminLogin');

Route::get('/login', 'UsersController@showLogin');

Route::post('/login', 'UsersController@doLogin');

Route::get('/logout', 'UsersController@logout');

Route::get('/admin2032/users', 'UsersController@showAdmin');

Route::get('/register', 'UsersController@showRegister');

Route::post('/register', 'UsersController@doRegister');

Route::post('/contact', 'HomeController@addContact');

Route::get('/{last_name}', 'UsersController@showInstructor');

