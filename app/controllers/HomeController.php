<?php

class HomeController extends BaseController {


	public function showWelcome()
	{
		Mail::send('emails.auth.reminder', array('name' => 'Andre'), function($message){
				$message->to('andre.dempsey@live.com','Andre Dempsey')->subject('Test email');
		});
		$users = User::where('role_id','3')->orderBy('last_name','asc')->get();
		$subjects = Subject::orderBy('subject','asc')->get()->lists('subject');
		$posts = Post::take(3)->orderBy('created_at', 'desc')->get();

		$data = [
			'users' => $users,
			'subjects'  => $subjects,
			'posts' => $posts
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
	public function showCalendar()
	{
	return View::make('portfolios.calendar');
	}
}
