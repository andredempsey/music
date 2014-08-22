@extends('layouts.master')

@section('head')
    <title>Music School of Universal City | Contact</title>
    <meta name="description" content="Music School of Universal City has been providing aspiring musicians tailored, private lessons since 2006">
    <meta name="keywords" content="universal city music guitar piano voice lessons location"> 
@stop
@section('content')
    <section id="page-tree">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <h1>Contact us</h1>
            </div>
            <div class="col-md-7 col-sm-7">
                <ol class="breadcrumb pull-right hidden-xs">
                    <li><a href="{{action('HomeController@showWelcome')}}"><i class="ion-home"></i> Home</a></li>
                    <li class="active"><a>Contact us</a></li>
                </ol>
            </div>
        </div><!--row-->
    </div><!--container-->
    </section><!--page-tree-->
    <div id="map"></div>
    <!--google map-->
    <div id="map-canvas" class="carousel"></div>
    <!--google map end-->
    <div class="divied-60"></div>
    <div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3 id="getintouch">Get in touch</h3>
            <div class="form-box margin-btm40">
                {{ Form::open(array('action' => array('HomeController@addContact'), 'method' => 'POST')) }}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name*</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email*</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Message*</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 text-right">
                            <button type="submit" class="btn btn-dark btn-lg">Send Message</button>
                        </div>
                    </div>
              {{Form::close()}}
            </div>
        </div>
        <div class="col-md-4">
            <h3>Contact info</h3>
            <p class="margin-btm40">
                  We are located at 902B Pat Booker Rd in the Randolph Plaza Shopping Center, 2 miles east of I35 between the Live Oak Cinema and Randolph AFB.  Our neighboring businesses are Polly's Pet Shop, Hallmark Gift Shop, Patriot Martial Arts, TJ's Driving School, Cash Cars and The Bistro.
            </p>
            <ul class="list-unstyled contact-list margin-btm20">
                <li><i class="ion-home"></i> 902B Pat Booker Rd, Universal City, TX 78148</li>
                <li><i class="ion-ios7-telephone"></i> <strong>Phone:</strong> 210-748-7054</li>
                <li><i class="ion-ios7-email"></i> <strong>Email:</strong> <a href="mailto:lessons@ucmusicschool.com" title="mailto:lessons@ucmusicschool.com">lessons@ucmusicschool.com</a></li>
                <li><i class="ion-ios7-world"></i> <strong>Website:</strong> http://www.ucmusicschool.com</li>
            </ul>
            <h3>Social Connect</h3>
            <ul class="list-unstyled list-inline social">
                <li><a href="https://www.facebook.com/ucmusicschool"><i class="ion-social-facebook-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like On Facebook"></i></a></li>
                <li><a href="#"><i class="ion-social-twitter-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow On twitter"></i></a></li>
                <li><a href="#"><i class="ion-social-googleplus-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow On googleplus"></i></a></li>
                <li><a href="#"><i class="ion-social-pinterest-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="pinterest"></i></a></li>
                <li><a href="#"><i class="ion-social-skype-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="skype"></i></a></li>

            </ul>
        </div>
    </div>
    </div><!--Contact container end-->
@stop
@section('bottomscript')
    <script src="js/app.js" type="text/javascript"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
    <script type="text/javascript">
      var myLatlng;
      var map;
      var marker;

      function initialize() {
        myLatlng = new google.maps.LatLng(29.5500249,-98.2933038);

        var mapOptions = {
          zoom: 18,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.HYBRID,
          scrollwheel: true,
          draggable: true
        };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var contentString = '<p style="line-height: 20px;"><strong>Music School of Universal City</strong></p><p>902B Pat Booker Rd, Universal City, TX 78148</p>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Marker'
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map,marker);
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@stop
