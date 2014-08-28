<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);
		
		$data = [
		'user' => $user
		];


		return View::make('portfolios.student')->with($data);
	
	}
	public function showInstructor($last_name)
	{
		$user = User::findbyInstructor($last_name);
		$posts = Post::where('user_id',$user->id)->orderBy('created_at','desc')->paginate(3);
		$categories = Category::orderBy('tagname', 'asc')->get();

		$data = [
		'user' => $user,
		'posts' => $posts,
		'categories' => $categories

		];
		return View::make('portfolios.instructor')->with($data);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	public function showAdminLogin()
	{
		return View::make('users.login');
	}
	public function showLogin()
	{
		return View::make('users.login');
	}

	// public function showTermsPrivacy()
	// {
	// 	return View::make('terms-privacy');
	// }
	public function doLogin()
	{
		$email = Input::get('email');
		$found = User::where('email', $email)->get();
		$password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password))) 
		{
			Session::flash('successMessage', 'You have successfully logged in.');
			if(Auth::user()->is_admin)
			{
				return Redirect::action('UsersController@showAdmin');
			}

			return Redirect::intended(action('HomeController@showWelcome'));
		}
		else
		{
			if (!Auth::check())
			{
				return Redirect::action('UsersController@showRegister');
			}
			Session::flash('errorMessage', 'Email or password not found.');
			return Redirect::action('UsersController@showLogin')->withInput();
		}

	}

	public function showRegister()
	{
		return View::make('users.register');
	}

	public function doRegister()
	{
		$messageValue = 'Successfully registered!';
		$eMessageValue = 'There was a problem registering.';
		$email = Input::get('email');
		$userExists = User::where('email', $email)->get();

		if(empty($userExists))
		{
			Session::flash('errorMessage', 'Account already exists; please login');
			return Redirect::action('UsersController@showLogin');
		}

		$user = new User();

		$validator = Validator::make(Input::all(), User::$user_rules);
		if ($validator->fails()) 
		{
			Session::flash('errorMessage', $eMessageValue);
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->role_id = User::ROLE_STUDENT;
			$user->save();		
			Session::flash('successMessage', $messageValue);
			return Redirect::action('UsersController@showLogin')->withInput();
		}
	}
	public function showAdmin()
	{
		if(Auth::check() && (Auth::user()->is_admin))
		{
			$users = User::paginate(8);
			$contacts = Contact::paginate(8);
			$data = [
			'users' => $users,
			'contacts' => $contacts
		];
			return View::make('users.index')->with($data);
		}
		else
		{
			Session::flash('errorMessage', 'Insufficient Privileges.');
			return Redirect::action('UsersController@showLogin');
		}	
	}

	public function logout()
	{
		Auth::logout();
		Session::flash('successMessage', 'You have successfully logged out.');
		return Redirect::action('HomeController@showWelcome');
	}
}