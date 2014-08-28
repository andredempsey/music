@extends('layouts.master')

@section('head')
    <title>Music School of Universal City | Login</title>
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
					<div class="col-sm-5">
						<div class="basic-login">
							{{Form::open(array('action'=>'UsersController@doLogin', 'class' => 'form-signin', 'role' => 'form'))}}
								<div class="form-group">
									{{Form::label('email', 'Email', array('class' => 'icon-user'))}}
									{{Form::text('email', null, array('class' => 'form-control'))}}
								</div>
								<div class="form-group">
									{{Form::label('password', 'Password', array('class' => 'icon-lock'))}}
									<br>
									{{Form::password('password', null, array('class' => 'form-control'))}}
								</div>
								<div class="form-group">
									{{ Form::checkbox('remember', 'remember', false, ['id' => 'remember']) }}
									{{ Form::label('remember', ' Remember Me') }}<br>
									{{Form::Submit('Login', array('class' => 'btn pull-right'))}}
									<div class="clearfix"></div>
								</div>
							{{Form::close()}}
						</div>
					</div>
					<div class="col-sm-7 social-login">
						<p>Or login with your Facebook or Twitter</p>
						<div class="social-login-buttons">
							<a href="#" class="btn-facebook-login">Login with Facebook</a>
							<a href="#" class="btn-twitter-login">Login with Twitter</a>
						</div>
						<div class="clearfix"></div>
						<div class="not-member">
							
						</div>
					</div>
				</div>
			</div>
		</div>

</div>
@stop
