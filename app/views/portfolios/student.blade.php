@extends('layouts.master')

@section('head')
    <title>Music School of Universal City | Student</title>
    <meta name="description" content="Music School of Universal City has been providing aspiring musicians tailored, private lessons since 2006">
    <meta name="keywords" content="universal city music guitar piano voice lessons location"> 
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
                    <li><a>Profile</a></li>
                    <li class="active"><a>Student</a></li>
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
                <ul class="slides">
                    <li>
                        <img src="/img/img-1.jpg" class="img-responsive" alt="">
                    </li>
                    <li>
                        <img src="/img/img-4.jpg" class="img-responsive" alt="">
                    </li>
                    <li>
                       <img src="/img/img-3.jpg" class="img-responsive" alt="">
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-5">
            <h3>Description</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at pellentesque augue, a gravida purus. Sed consequat, diam congue malesuada varius, erat leo placerat mi, eget eleifend velit augue id erat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at pellentesque augue, a gravida purus. Sed consequat, diam congue malesuada varius, erat leo placerat mi, eget eleifend velit augue id erat.
            </p>
            <div class="divied-40"></div>
            <div class="sidebar-box port-single-desc">
                 <p><strong>Skills Used:</strong> html5,css3,bootstrap3</p>
            </div>
             <div class="sidebar-box  port-single-desc">
                <p><strong>Client:</strong> Client name</p>
            </div>
              <div class="sidebar-box  port-single-desc">
                  <a href="#" class="btn btn-dark">View Live Demo</a>
            </div>
        </div>
    </div><!--portfolio single description row end-->
    <div class="divied-60"></div>

    <div class="row">
        <div class="col-md-12 margin-btm20">
            <h3>Lessons</h3>
        </div>
        <div class="col-md-12">
            <div class="row">
                <table class="table-striped table-responsive">
                    <tr>
                    <th>Date</th>
                    <th>Duration</th>
                    </tr>
                    <td>1 Jan 14</td>
                    <td>1hr</td>
                </table>
            </div>
        </div>
    </div>
</div><!--portfolio single container end-->
    <div class="divied-40"></div>
@stop