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

	public function showWelcome()
	{
		$users = User::where('role_id','3')->orderBy('last_name','asc')->get();
		$subjects = Subject::orderBy('subject','asc')->get()->lists('subject');
		
		$data = [
			'users' => $users,
			'subjects'  => $subjects,
		];
		return View::make('index')->with($data);
	}
	public function showLocation()
	{
		return View::make('contact');
	}
	public function addContact()
	{
		
		$messageValue = 'Contact Info successfully sent!';
		$eMessageValue = 'There was a problem submitting Contact Info.';

		$validator = Validator::make(Input::all(), Contact::$rules);

		if ($validator->fails()) 
		{

			Session::flash('errorMessage', $eMessageValue);
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$contact = new Contact();
			$contact->name = Input::get('name');
			$contact->email = Input::get('email');
			$contact->subject = Input::get('subject');
			$contact->message = Input::get('message');
			$contact->save();	

			Session::flash('successMessage', $messageValue);
			return Redirect::action('HomeController@showWelcome');
		}
	}
}
