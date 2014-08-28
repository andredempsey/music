@extends('layouts.master')

@section('head')
    <title>Music School of Universal City | Blog</title>
    <meta name="description" content="Music School of Universal City has been providing aspiring musicians tailored, private lessons since 2006">
    <meta name="keywords" content="universal city music guitar piano voice lessons"> 
@stop
@section('content')
    <section id="page-tree">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <h1>{{{ $post->title }}}</h1>
                </div>
                <div class="col-md-7 col-sm-7">
                    <ol class="breadcrumb pull-right hidden-xs">
                        <li><a href="index.html"><i class="ion-home"></i> Home</a></li>
                        <li><a>Blog</a></li>
                        <li class="active"><a>{{{ $post->title }}}</a></li>
                    </ol>
                </div>
            </div><!--row-->
        </div><!--container-->
    </section><!--page-tree-->
    <div class="divied-60"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-items margin-btm40">
                    <img class="img-responsive" src="{{$post->img_path}}" alt="">
                    <div class="single-post-title">
                        <h1 class="hover-color">{{{ $post->title }}}</h1>
                        <h5>{{{$post->user->first_name . " " . $post->user->last_name . " (" . $post->user->email . ")"}}}</h5>
                    @if(Auth::check() && (Auth::user()->id == $post->user_id || Auth::user()->is_admin))
                        {{ Form::model($post, array('action' => array('PostsController@destroy', $post->slug), 'method' => 'DELETE')) }}
                            {{Form::submit('Delete', array('class' => 'btn-danger pull-right'))}}
                        {{Form::close()}}
                        <button class="btn-success pull-right">{{link_to_action('PostsController@edit', 'edit', array($post->slug))}}</button>
                    @endif
                    </div>
                    <ul class="list-inline blog-post-list">
                        <li><i class="ion-calendar"></i> {{{ $post->created_at->format('F jS Y')}}}</li>
                        <li>|</li>
                        @foreach ($post->categories as $cat)
                            <span class="hover-color"><i class="ion-bookmark"></i> {{$cat->tagname}}</span>
                        <span>|</span>
                        @endforeach
                    </ul>
                    <div class="single-post-content">
                        <p>{{$post->renderBody()}}</p>
                    </div>
                </div><!--blog items-->
                
            </div>
        </div>
    </div><!--blog full width-->
@stop
