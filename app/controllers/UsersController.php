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
		$cal = Calendar::make();

		$events = array(
        "2014-08-09 10:30:00" => array(
            "Event 1",
            "Event 2 <strong> with html</stong>",
        ),
        "2014-08-12 14:12:23" => array(
            "Event 3",
        ),
        "2014-08-14 08:00:00" => array(
            "Event 4",
        ),
    );

    $cal = Calendar::make();
    /**** OPTIONAL METHODS ****/
    $cal->setDate(Input::get('cdate')); //Set starting date
    $cal->setBasePath('/dashboard'); // Base path for navigation URLs
    $cal->showNav(true); // Show or hide navigation
    $cal->setView(Input::get('cv')); //'day' or 'week' or null
    $cal->setStartEndHours(8,20); // Set the hour range for day and week view
    $cal->setTimeClass('ctime'); //Class Name for times column on day and week views
    $cal->setEventsWrap(array('<p>', '</p>')); // Set the event's content wrapper
    $cal->setDayWrap(array('<div>','</div>')); //Set the day's number wrapper
    $cal->setNextIcon('>>'); //Can also be html: <i class='fa fa-chevron-right'></i>
    $cal->setPrevIcon('<<'); // Same as above
    $cal->setDayLabels(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat')); //Label names for week days
    $cal->setMonthLabels(array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December')); //Month names
    $cal->setDateWrap(array('<div>','</div>')); //Set cell inner content wrapper
    $cal->setTableClass('table'); //Set the table's class name
    $cal->setHeadClass('table-header'); //Set top header's class name
    $cal->setNextClass('btn'); // Set next btn class name
    $cal->setPrevClass('btn'); // Set Prev btn class name
    $cal->setEvents($events); // Receives the events array
		$cal->setDayWrap(array('<div class="relative_pos_class">','</div>'));
		$data = [
			'user' => $user,
			'cal'  => $cal,
		];
		return View::make('portfolios.student')->with($data);
	
	}
	public function showInstructor($last_name)
	{
		$user = User::findbyInstructor($last_name);
		return View::make('portfolios.instructor')->with('user',$user);
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