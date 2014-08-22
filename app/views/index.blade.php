@extends('layouts.master')

@section('head')
    <title>Music School of Universal City | Home</title>
    <meta name="description" content="Music School of Universal City has been providing aspiring musicians tailored, private lessons since 2006">
    <meta name="keywords" content="universal city music guitar piano voice lessons"> 
@stop
@section('content')
    <!--main flex slider start-->
    <section id="main-slider-bg">
        <div class="slider-overlay">
            <div class="slider-main">
                <div class="container text-center">
                    <ul class="slides">
                        <li>
                            <h1 class="slider-heading">Welcome to the Music School of Universal City</h1>
                            <a href="{{action('HomeController@showLocation')}}#getintouch" class="btn btn-lg btn-white">Contact Us Now</a>
                        </li>
                    </ul>
                </div> <!-- /container -->
            </div><!--slider main-->
        </div><!--slider overlay-->
    </section>
    <!--main flex slider end-->
    <section id="instructors" class="padding-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center margin-btm40">
                    <h1>Instructors</h1>
                    <h2 class="subtitle"><i class="ion-ios7-musical-notes"></i></h2>
                </div>
                <div class="col-md-12">
                    <ul class="portfolio-filters text-center">
                        <li class="filter" data-filter="all">All</li>
                        @foreach ($subjects as $subject)
                        <li class="filter" data-filter="{{$subject}}">{{$subject}}</li>
                        @endforeach
                    </ul><!--subject list-->

                    <div id="grid" class="row">
                        @foreach ($users as $user)
                        {{"<div class=\"portfolio-item mix "}}
                        @foreach ($user->subjects as $subj)
                        {{$subj->subject }}
                        @endforeach
                        {{"col-xs-12 col-sm-4\">"}}
                            <a href="{{action('UsersController@showInstructor', $user->last_name)}}">
                                <div class="image-sec">
                                    <img class="img-responsive" src="{{$user->detail->img_path}}" alt="{{$user->last_name}}">
                                    <div class="image-overlay">
                                        <p>{{$user->first_name . ' '  . $user->last_name}}</p>
                                    </div>
                                </div> <!--image-->
                            </a>
                        </div> <!--instructor -->
                        @endforeach
                    </div> <!--grid -->
                </div><!--col-md-12-->
            </div><!--row-->
        </div><!--container end-->
    </section><!--recent work-->
    <hr>
    <section id="latest-news" class="padding-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 margin-btm40 text-center">
                    <h1>Latest News</h1>
                    <h2 class="subtitle"><i class="ion-compose"></i></h2>
                </div>
                <div class="col-sm-4 col-xs-12 margin-btm20">
                    <a href="blog-post.html">
                        <div class="image-sec">
                            <img class="img-responsive" src="img/img-6.jpg" alt="Portfolio">
                            <div class="image-overlay">
                                <p>by author | 7 may | Design</p>
                            </div>
                        </div> <!--image-->                          
                    </a>
                    <div class="blog-desc">
                        <h3><a href="blog-post.html" class="hover-color">Amazing theme for Multi-Purpose</a></h3>
                        <p>
                            aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 margin-btm20">
                    <a href="blog-post.html">
                        <div class="image-sec">
                            <img class="img-responsive" src="img/img-1.jpg" alt="Portfolio">
                            <div class="image-overlay">
                                <p>by author | 7 may | Design</p>
                            </div>
                        </div> <!--image-->                          
                    </a>
                    <div class="blog-desc">
                        <h3><a href="blog-post.html" class="hover-color">Amazing theme for Multi-Purpose</a></h3>
                        <p>
                            aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 margin-btm20">
                    <a href="blog-post.html">
                        <div class="image-sec">
                            <img class="img-responsive" src="img/img-2.jpg" alt="Portfolio">
                            <div class="image-overlay">
                                <p>by author | 7 may | Design</p>
                            </div>
                        </div> <!--image-->                          
                    </a>
                    <div class="blog-desc">
                        <h3><a href="blog-post.html" class="hover-color">Amazing theme for Multi-Purpose</a></h3>
                        <p>
                            aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                </div>                   
            </div><!--row--> 
            <div class="divied-40"></div>

        </div><!--container-->
    </section><!--latest news-->
    <hr> 
    <!-- About Us Section -->
    <section id="about-colored" class="padding-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 margin-btm20 text-center">
                    <h1>About Us</h1>
                    <h2 class="subtitle"><i class="ion-ios7-people-outline"></i></h2>
                </div>
                <div class="col-sm-12 text-center margin-btm20">
                    <p>
                        The staff at The Music School of Universal City brings their vast knowledge to offer a fun and rewarding musical experience to beginning or advanced level students, ages kinder to adult. Lessons in guitar, voice, piano and more are offered with a fun, focused and practical approach. All lessons are private and tailored to the individual. Whether you are a novice or an expert, our staff can help you acquire the skill level you're working towards. Our rates are competitive, and our schedules flexible.  Give us a call. 210-748-7054, or email us at - <a href="mailto:lessons@ucmusicschool.com" title="mailto:lessons@ucmusicschool.com">lessons@ucmusicschool.com</a>
                    </p>
                </div>
                <div class="col-sm-12 text-center">
                    <ul class="list-unstyled list-inline social">
                        <li><a href="https://www.facebook.com/ucmusicschool"><i class="ion-social-facebook-outline"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Like On Facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter-outline"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow On twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus-outline"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow On googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-rss-outline"  data-toggle="tooltip" data-placement="top" title="" data-original-title="rss"></i></a></li>
                        <li><a href="#"><i class="ion-social-linkedin-outline"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow On linkedin"></i></a></li>
                        <li><a href="#"><i class="ion-social-pinterest-outline"  data-toggle="tooltip" data-placement="top" title="" data-original-title="pinterest"></i></a></li>
                        <li><a href="#"><i class="ion-social-skype-outline"  data-toggle="tooltip" data-placement="top" title="" data-original-title="skype"></i></a></li>
                        <li><a href="#"><i class="ion-social-dribbble-outline"  data-toggle="tooltip" data-placement="top" title="" data-original-title="dribbble"></i></a></li>
                        <li><a href="#"><i class="ion-social-yahoo-outline"  data-toggle="tooltip" data-placement="top" title="" data-original-title="yahoo"></i></a></li>
                        <li><a href="#"><i class="ion-social-vimeo-outline"  data-toggle="tooltip" data-placement="top" title="" data-original-title="vimeo"></i></a></li>
                        <li><a href="#"><i class="ion-social-github-outline"  data-toggle="tooltip" data-placement="top" title="" data-original-title="github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div><!--container-->
    </section><!--about Colored-->
@stop
@section('bottomscript')
<script src="js/scripts.js"></script>
@stop
