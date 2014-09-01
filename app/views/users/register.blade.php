@extends('layouts.master')

@section('head')
    <title>Music School of Universal City | Register</title>
    <meta name="description" content="Music School of Universal City has been providing aspiring musicians tailored, private lessons since 2006">
    <meta name="keywords" content="universal city music guitar piano voice lessons"> 
@stop
@section('content')
    <section id="page-tree">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <h1>Login</h1>
                </div>
                <div class="col-md-7 col-sm-7">
                    <ol class="breadcrumb pull-right hidden-xs">
                        <li><a href="index.html"><i class="ion-home"></i> Home</a></li>
                        <li class="active"><a>Login</a></li>
                    </ol>
                </div>
            </div><!--row-->
        </div><!--container-->
    </section><!--page-tree-->
<div class="section">
	<div class="container">
		<div class="row">
			@foreach($errors->all() as $error)
	            <li class="danger">{{ ($error=='The password2 and password must match.')?'The passwords do not match':$error}}</li>
	        @endforeach
			<div class="col-sm-5">
				<div class="basic-login">
					{{Form::open(array('action'=>'UsersController@showRegister', 'class' => 'form-signin', 'role' => 'form'))}}
						<div class="form-group">
							{{Form::label('first_name', 'First Name', array('class' => 'icon-user'))}}
							{{Form::text('first_name', null, array('class' => 'form-control'))}}
						</div>
						<div class="form-group">
							{{Form::label('last_name', 'Last Name', array('class' => 'icon-user'))}}
							{{Form::text('last_name', null, array('class' => 'form-control'))}}
						</div>
						<div class="form-group">
							{{Form::label('email', 'Email', array('class' => 'icon-user'))}}
							{{Form::text('email', null, array('class' => 'form-control'))}}
						</div>
						<div class="form-group">
							{{Form::label('password', 'Password (min 6 chars)', array('class' => 'icon-lock'))}}
							<br>
							{{Form::password('password', null, array('class' => 'form-control'))}}
						</div>
						<div class="form-group">
							{{Form::label('password2', 'Re-enter Password', array('class' => 'icon-lock'))}}
							<br>
							{{Form::password('password2', null, array('class' => 'form-control'))}}
						</div>
						<div class="form-group">
							<img src="{{ URL::to('/captcha')}}">
							<input type="text" name="user-captcha">
						</div>
						{{Form::Submit('Register', array('class' => 'btn pull-right'))}}
						<div class="clearfix"></div>
					{{Form::close()}}
				</div>
			</div>
			<div class="col-sm-6 col-sm-offset-1 social-login">
				<p>You can use your Facebook or Twitter for registration</p>
				<div class="social-login-buttons">
					<a href="#" class="btn-facebook-login">Use Facebook</a>
					<a href="#" class="btn-twitter-login">Use Twitter</a>
				</div>
			</div>
		</div>
	</div>
</div>
@stop