<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{action('HomeController@showWelcome')}}"><img src="/img/title.png" class="img-responsive" alt="title"></a>
            <img id="phone" src="/img/phone.png" class="img-responsive navbar-brand" alt="title">
        </div>
        <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Home <i class="ion-ios7-arrow-down"></i></a>
                    <ul class="dropdown-menu">
                         <li>{{link_to_action('PostsController@index', 'Blog')}}</li>
                        <li><a href="{{action('HomeController@showWelcome')}}#instructors">Instructors</a></li>
                         <li><a href="{{action('HomeController@showLocation')}}">Location</a></li>
                        <li><a href="{{action('HomeController@showWelcome')}}#footer-defoult">Hours</a></li>
                        <li><a href="{{action('HomeController@showWelcome')}}#about-colored">About Us</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Instructors <i class="ion-ios7-arrow-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{action('UsersController@showInstructor', array('Villarreal'))}}">Art Villarreal</a></li>
                        <li><a href="{{action('UsersController@showInstructor', array('Lopez'))}}">Tom Lopez</a></li>
                        <li><a href="{{action('UsersController@showInstructor', array('Byrnes'))}}">George Byrnes</a></li>
                        <li><a href="{{action('UsersController@showInstructor', array('Peche'))}}">Oscar Peche</a></li>
                        <li><a href="{{action('UsersController@showInstructor', array('Murphy'))}}">Sarah Murphy</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Gallery <i class="ion-ios7-arrow-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Students</a></li>
                        <li><a href="#">Events</a></li>                              
                    </ul>
                </li>
                <li class="dropdown">
                    @if(Auth::check())
                        <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">{{{Auth::user()->first_name}}} <i class="ion-ios7-arrow-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{action('UsersController@show', Auth::user()->id)}}">Profile</a></li>
                            <li><a href="{{action('UsersController@logout')}}">Logout</a></li>
                        </ul>
                    @else
                        <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Login/Register <i class="ion-ios7-arrow-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{action('UsersController@showLogin')}}">Login</a></li>
                            <li><a href="{{action('UsersController@showRegister')}}">Register</a></li>
                        </ul>
                    @endif
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-->
</div><!--navigation end-->
@if (Session::has('successMessage'))
    <div class="alert alert-success fade_message">{{{ Session::get('successMessage') }}}</div>
@endif
@if (Session::has('errorMessage'))
    <div class="alert alert-danger fade_message">{{{ Session::get('errorMessage') }}}</div>
@endif