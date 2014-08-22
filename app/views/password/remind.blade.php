@extends('layouts.master')

@section('head')
    <title>Music School of Universal City | Password Reset</title>
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
 
{{ Form::open(array('route' => 'password.request')) }}
 
  <p>{{ Form::label('email', 'Email') }}
  {{ Form::text('email') }}</p>
 
  <p>{{ Form::submit('Submit') }}</p>
 
{{ Form::close() }}
@stop