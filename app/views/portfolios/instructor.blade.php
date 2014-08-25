@extends('layouts.master')

@section('head')
    <title>Music School of Universal City | Instructor</title>
    <meta name="description" content="Music School of Universal City has been providing aspiring musicians tailored, private lessons since 2006">
    <meta name="keywords" content="universal city music guitar piano voice lessons location"> 
    <link href='/css/fullcalendar.css' rel='stylesheet' />
    <link href='/css/fullcalendar.print.css' rel='stylesheet' media='print' />
    <style>

        body {
            margin: 0;
            padding: 0;
            font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
            font-size: 14px;
        }
        .calendar-container {
        position: relative;
        padding-bottom: 75%;
        height: 0;
        overflow: hidden;
        }
        #calendar {
            position: absolute;
            padding-left: 5%;
            padding-right: 5%;
            top:0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
@stop
@section('content')
<section id="page-tree">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <h1>{{$user->first_name .' ' . $user->last_name}}</h1>
            </div>
            <div class="col-md-7 col-sm-7">
                <ol class="breadcrumb pull-right hidden-xs">
                    <li><a href="{{action('HomeController@showWelcome')}}"><i class="ion-home"></i> Home</a></li>
                    <li><a>Portfolio</a></li>
                    <li class="active"><a>Instructor</a></li>
                </ol>
            </div>
        </div><!--row-->
    </div><!--container-->
</section><!--page-tree-->
<div class="divied-60"></div>

<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="flexslider">
                <img src="{{$user->detail->img_path}}" class="img-responsive" alt="{{$user->last_name}}">
            </div>
              <div class="sidebar-box  port-single-desc">
                  <a href="#" class="btn btn-dark">View Live Demo</a>
            </div>
        </div>
        <div class="col-md-5">
            <p>
                {{$user->detail->summary}}
            </p>  
            <p><strong>Skills:</strong></p>
                <ul>
                     @foreach ($user->subjects as $subj)
                    <li class="badge"> {{$subj->subject }}</li>
                    @endforeach
                </ul><!--subject list-->
            <p><strong>Styles:</strong></p>
                <ul>
                     @foreach ($user->styles as $style)
                    <a href="{{$style->style_link}}"><li class="badge"> {{$style->style }}</li></a>
                    @endforeach
                </ul><!--subject list-->
        </div>
    </div><!--portfolio single description row end-->

    <div style="background-color: white" class="calendar-container" >
        <div id='calendar'></div>
    </div>
    <div class="divied-60"></div>
    <div class="row">
        <div class="col-md-12 margin-btm20">
            <h3>Blogs</h3>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="portfolio-item mix seo col-xs-12 col-sm-4">
                    <a href="portfolio-single.html">
                        <div class="image-sec">
                            <img class="img-responsive" src="/img/img-1.jpg" alt="Portfolio">
                            <div class="image-overlay">
                                <p><i class="ion-ios7-plus-empty"></i></p>
                            </div>
                        </div> <!--image-->
                    </a>
                </div> <!--portfolio-item -->

                <div class="portfolio-item mix html seo col-xs-12 col-sm-4">
                    <a href="portfolio-single.html">
                        <div class="image-sec">
                            <img class="img-responsive" src="/img/img-2.jpg" alt="Portfolio">
                            <div class="image-overlay">
                                <p><i class="ion-ios7-plus-empty"></i></p>
                            </div>
                        </div> <!--image-->
                    </a>
                </div> <!--portfolio-item -->

                <div class="portfolio-item mix wordpress html Design col-xs-12 col-sm-4">
                    <a href="portfolio-single.html">
                        <div class="image-sec">
                            <img class="img-responsive" src="/img/img-3.jpg" alt="Portfolio">
                            <div class="image-overlay">
                                <p><i class="ion-ios7-plus-empty"></i></p>
                            </div>
                        </div> <!--image-->
                    </a>
                </div> <!--portfolio-item -->
            </div>
        </div>
    </div>
</div><!--portfolio single container end-->
    <div class="divied-40"></div>
@stop
@section('bottomscript')
    <script src='/lib/moment.min.js'></script>
    <script src='/lib/jquery.min.js'></script>
    <script src='/lib/jquery-ui.custom.min.js'></script>
    <script src='/js/fullcalendar.min.js'></script>
    <script type='text/javascript' src='/js/gcal.js'></script>
<script>

    $(document).ready(function() {
        
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            defaultDate: '2014-08-12',
            editable: true,
            events: 'https://www.google.com/calendar/feeds/andre.r.dempsey%40gmail.com/public/basic'
        });
        
    });

</script>
@stop