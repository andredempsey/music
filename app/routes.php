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

Route::get('/payment', function()
{
	return View::make('payment');
});
Route::post('/payment', function()
{
// Set your secret key: remember to change this to your live secret key in production
// See your keys here https://dashboard.stripe.com/account
Stripe::setApiKey('sk_test_4XHB8A5Peogvqvirwkox76u8');

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

// Create the charge on Stripe's servers - this will charge the user's card
try {
$charge = Stripe_Charge::create(array(
  "amount" => 1000, // amount in cents, again
  "currency" => "usd",
  "card" => $token,
  "description" => "payinguser@example.com")
);
} catch(Stripe_CardError $e) {
  // The card has been declined
}

});
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

