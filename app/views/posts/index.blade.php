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
                    <h1>Blogs</h1>
                </div>
                <div class="col-md-7 col-sm-7">
                    <ol class="breadcrumb pull-right hidden-xs">
                        <li><a href="index.html"><i class="ion-home"></i> Home</a></li>
                        <li><a>Blog</a></li>
                        <li class="active"><a>All Blogs</a></li>
                    </ol>
                </div>
            </div><!--row-->
        </div><!--container-->
    </section><!--page-tree-->

    <section id="blog-grid" class="padding-60">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <ul class=" portfolio-filters text-center">
                        <li class="filter" data-filter="all">All</li>
                        @foreach ($categories as $category)
                            <li class="filter" data-filter="{{$category->tagname}}">{{$category->tagname}}</li>
                        @endforeach
                    </ul><!--portfolio filter lisr-->

                    <div id="grid" class="row">
                       @foreach ($posts as $post)
                        {{"<div class=\"portfolio-item mix "}}
                        @foreach ($post->categories as $category)
                            {{$category->tagname }}
                        @endforeach
                        {{"col-xs-12 col-sm-4\">"}}
                            <div class="blog-grid-box">
                                <a href="{{action('PostsController@show', array($post->slug))}}">
                                    <div class="image-sec">
                                        <img class="img-responsive" src="{{$post->img_path}}" alt="Portfolio">
                                        <div class="image-overlay">
                                            <p><i class="ion-ios7-plus-empty"></i></p>
                                        </div>
                                    </div> <!--image-->
                                </a>
                                <div class="blog-grid-desc">
                                    <h4><a href="{{action('PostsController@show', array($post->slug))}}" class="hover-color">{{$post->title}}</a></h4>
                                    <div class="blog-grid-meta">
                                        <span><a href="#" class="hover-color">By {{$post->user->first_name . ' '. $post->user->last_name}}</a></span>
                                        <span>|</span>
                                        @foreach ($post->categories as $cat)
                                            <span><a href="#" class="hover-color">{{$cat->tagname}}</a></span>
                                            <span>|</span>
                                        @endforeach
                                    </div>
                                    <p>
                                        {{substr($post->renderBody(), 0, 50) . ' ...'}}
                                    </p>
                                    <p class="more-button"><a href="{{action('PostsController@show', array($post->slug))}}" class="btn btn-xs btn-dark">Read More</a></p>
                                    <div class="blog-grid-btm">
                                        <h3><span><a href="#" class="hover-color"><i class="ion-calendar"></i> {{{ $post->created_at->format('F jS Y')}}}</a></span>
                                    </div>
                                </div>
                            </div>
                        </div> <!--portfolio-item -->
                        @endforeach
                    </div> <!--grid -->
                    <div class="divied-40"></div><!--divide by 40px -->
                </div><!--col-md-12-->
            </div><!--row-->
        </div><!--container-->
    </section><!--blog filter-->
@stop