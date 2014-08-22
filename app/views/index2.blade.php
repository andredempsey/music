@extends('layouts.master')

@section('content')
<!-- Wrap all page content here -->
<div id="top">
  <header class="masthead">
  	<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img style="opacity:0.5" src="/img/msofuc.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2>Guitar-Piano-Voice-Drums/Percussion-Strings-Brass/Woodwind-Banjo/Mandolin/Dobro</h2>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/img/brass.jpeg">
          <div class="container">
            <div class="carousel-caption">
              <h2><strong>210-748-7054</strong></h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/img/band.jpeg">
          <div class="container">
            <div class="carousel-caption">
              <h2><strong>210-748-7054</strong></h2>
              <p></p>
            </div>
          </div>
        </div>       
        <div class="item">
          <img src="/img/guitar.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2><strong>210-748-7054</strong></h2>
              <p></p>
            </div>
          </div>
        </div>       
      </div><!-- /.carousel-inner -->

      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a> 

    </div><!-- /.carousel -->
  </header>
    
    
  <!-- Fixed navbar -->
  <div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav nav-justified">
            <li><a href="#top">Home</a></li>
            <li><a href="#section2">Instructors</a></li>
            <li><a href="#section3">Gallery</a></li>
            <li><a href="#section4">Location</a></li>
            <li><a href="#section5">Rates/Scheduling</a></li>
            <li><a href="#section6">Hours</a></li>
            <li><a href="#section7">Contact</a></li>
            <li> <a href="#section8">Login</a></li>
          <li><a href="https://www.facebook.com/ucmusicschool"><img src="/img/fb.jpeg" width="30px" height="30px"></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container -->
  </div><!--/.navbar -->
  <!-- Begin page content -->
  <div class="divider" id="section1"></div>
    
  <div class="container">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="page-header text-center">
        <h1>Since 2006</h1>
      </div>
      
      <p class="lead text-center"> 
        UC Music School has been providing aspiring musicians tailored, private lessons since 2006.
      </p> 
      
      <hr>
      
      <div class="divider"></div>
      
    </div>
  </div>
  <!-- Instructor Section - Section 2 -->
  <section class="bg-2">
    <div class="col-sm-6 col-sm-offset-3 text-center"></div>
  </section> 
  <div class="divider" id="section2"></div>
  <div class="col-sm-10 col-sm-offset-1">
    <h1>Instructors</h1>
  </div>  
  <div class="row"></div>  

      <div class="row placeholders" style="padding-top: 30px">
        <div class="col-md-1 placeholder"></div>
        <div class="col-md-2 placeholder center-block">
          <img class="img-responsive img-circle center-block" alt="Art Villareal" src="/img/art.png" >
          <a href="#Art"><h5 class="instructorname text-center">Art Villareal</h4></a>
        </div>
        <div class="col-md-2 placeholder center-block">
          <img data-src="holder.js/200x200/auto/vine" class="img-responsive img-circle center-block" alt="200x200" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzM5REJBQyIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojMUUyOTJDO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4=">
          <a href="#Tom"><h5 class="instructorname text-center">Tom Lopez</h4></a>
        </div>
        <div class="col-md-2 placeholder center-block">
          <img data-src="holder.js/200x200/auto/vine" class="img-responsive img-circle center-block" alt="200x200" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzM5REJBQyIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojMUUyOTJDO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4=">
          <a href="#George"><h5 class="instructorname text-center">George Byrnes</h4></a>
        </div>
        <div class="col-md-2 placeholder center-block">
          <img data-src="holder.js/200x200/auto/vine" class="img-responsive img-circle center-block" alt="200x200" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzM5REJBQyIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojMUUyOTJDO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4=">
          <a href="#Oscar"><h5 class="instructorname text-center">Oscar Peche</h4></a>
        </div>
        <div class="col-md-2 placeholder center-block">
          <img data-src="holder.js/200x200/auto/vine" class="img-responsive img-circle center-block" alt="200x200" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzM5REJBQyIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojMUUyOTJDO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4=">
          <a href="#Sarah"><h5 class="instructorname text-center">Sarah Murphy</h4></a>
        </div>
        <div class="col-md-1 placeholder center-block"></div>
      </div>
  <div id='Art' class="container">
      <div class="col-sm-10 col-sm-offset-1">
        <h1>Profile</h1>
        <hr>
        <p>The staff at The Music School of Universal City brings their vast knowledge to offer a fun and rewarding musical experience to beginning or advanced level students, ages kinder to adult. Lessons in guitar, voice, piano and more are offered with a fun, focused and practical approach. All lessons are private and tailored to the individual. Whether you are a novice or an expert, our staff can help you acquire the skill level you're working towards. Our rates are competitive, and our schedules flexible.  Give us a call. 210-748-7054, or email us at - <a href="mailto:lessons@ucmusicschool.com" title="mailto:lessons@ucmusicschool.com">lessons@ucmusicschool.com</a></p>
        <hr>
        <p class='instructor'>Art Villareal (210)-748-7054 <a href="mailto:artmv1@yahoo.com">artmv1@yahoo.com</a></p>
        <p class="instruments">Electric and Acoustic Guitar, Electric Bass</p>
        <p id='Tom' class="curriculum"><strong>Curriculum/Styles:</strong> <a href="http://en.wikipedia.org/wiki/Music_theory">music theory</a>, <a href="http://en.wikipedia.org/wiki/Improvisation#Music">improvisation</a>, <a href="http://en.wikipedia.org/wiki/Sight-reading">sight reading</a>, <a href="http://en.wikipedia.org/wiki/Rock_music">Rock</a>, <a href="http://en.wikipedia.org/wiki/Metal_music">Metal</a>, <a href="http://en.wikipedia.org/wiki/Alternative_rock">Alternative</a>, <a href="http://en.wikipedia.org/wiki/Blues">Blues</a>, <a href="http://en.wikipedia.org/wiki/Acoustic_guitar">Acoustic</a> </p>
        <p class="bio">Art has enjoyed an impressive career as a guitarist. With over 30 years of playing experience, he has worked in the music industry
        at the highest levels, recording for and performing with artists of international notoriety. 
        Working for record label giant, Capitol/EMI, and touring for famed William Morris Talent, Art gained invaluable experience
        performing/recording with, some of the best musicians in the United States as well as working for some of the most influential names in the music    
        business. 
        After the demise of Brook Mays Music in 2006, Art, bringing fellow instructors along, navigated and opened The Music School in November
        that same year. Since then, he has enjoyed teaching numerous students from the Greater Randolph, Universal City and Schertz areas, among others. </p>
        <hr>
        <p class='instructor'>Tom Lopez (210)-542-4055 <a href="mailto:tomlo7997@gmail.com">tomlo7997@gmail.com</a></p>
        <p class="instruments">Guitar, Bass, Drums, Piano, Band and Orchestra </p>
        <p id='George' class="curriculum"><strong>Curriculum/Styles:</strong> <a href="http://en.wikipedia.org/wiki/Sight-reading">sight reading</a>, <a href="http://en.wikipedia.org/wiki/Musical_ensemble">ensemble performance</a>, <a href="http://en.wikipedia.org/wiki/Classical_music">Classical</a>, <a href="http://en.wikipedia.org/wiki/Popular_music">Popular</a> </p>
        <p class="bio">Mr. Lopez  graduated from Judson H.S.  before moving on to attend The University of Texas San Antonio, where he acquired his degree in music marketing. Tom specializes in entry level music instruction and has taught students as young as four years of age.  Tom carries a legacy of musicianship in his family, extending back to his great grandfather. Growing up surrounded by a vast array of instruments, he began playing drums at age ten. He would later find interest playing wind, and various other instruments in his school bands, before choosing classical guitar as his primary instrument in college.  
         
        With such an enormously diverse skill set, we consider Tom to be our Swiss Army Knife of instructors. Tom’s curriculum includes optional recitals, and pre-performance seminars where students can begin developing  their public performance skills in a relaxed environment.  </p>
        <hr>
        <p class='instructor'>George Byrnes (210)-649-2403 <a href="mailto:banjer6028@aol.com">banjer6028@aol.com</a></p>
        <p class="instruments">Banjo, Dobro, Mandolin, Guitar </p>
        <p id='Oscar' class="curriculum"><strong>Curriculum/Styles:</strong> <a href="http://en.wikipedia.org/wiki/Improvisation#Music">improvisation</a>, <a href="http://en.wikipedia.org/wiki/Ear_training">ear training</a>, <a href="http://en.wikipedia.org/wiki/Music_theory">music theory</a> <a href="http://en.wikipedia.org/wiki/Bluegrass_music">Bluegrass</a>, <a href="http://en.wikipedia.org/wiki/Country_music">Country</a>, <a href="http://en.wikipedia.org/wiki/Blues">Blues</a> </p>
        <p class="bio">George has been playing 5 string banjo for 25 years and has been teaching for almost 20 years. Although specializing in Scruggs style banjo, he also teaches <a href="http://en.wikipedia.org/wiki/Bluegrass_music">Bluegrass</a> Dobro® (resophonic/resonator guitar), mandolin and acoustic guitar. With an emphasis on learning to play by ear, George focuses his instruction on correct technique, music theory, ensemble performance skills, and  jam session etiquette.  Encouraging students to commit to daily practice rather than binge practicing once a week, George states that it is "...better to practice fifteen minutes every day than all day Saturday. </p>
        <hr>
        <p class='instructor'>Oscar Peche (210)-663-5481 <a href="mailto:oapeche@hotmail.com">oapeche@hotmail.com</a></p>
        <p class="instruments">Voice, Piano, Guitar</p>
        <p id='Sarah'class="curriculum"><strong>Curriculum/Styles:</strong>  <a href="http://en.wikipedia.org/wiki/Ear_training">ear training</a>, <a href="http://en.wikipedia.org/wiki/Music_theory">music theory</a>, <a href="http://en.wikipedia.org/wiki/Sight-reading">sight reading</a>, <a href="http://en.wikipedia.org/wiki/Classical_music">Classical</a></p>
        <p class="bio">As a graduate of The University of Texas San Antonio with a bachelor of music, graduate of The University of Texas Austin with a master’s in voice performance, and also a student of the Summer Opera Program AIMS in Graz, Austria, Oscar brings a wealth of world class training to his students. Some of Oscar’s experience as an instructor and performer includes; music teacher for  Laredo ISD, Cantor for St. Peter’s Church, Austin Tx., and section leader at Christ Episcopal Church in San Antonio, Tx. 
        Oscar specializes in classical voice, but also teaches entry level guitar and piano. We are excited to have a voice instructor with Oscar’s tremendous training and talent, as the newest member of our staff.  </p>
        <hr>
        <p class='instructor'>Sarah Murphy(210)-416-1000 <a href="mailto:sarahmurphy1492@gmail.com">sarahmurphy1492@gmail.com</a></p>
        <p class="instruments">Piano, Voice</p>
        <p class="curriculum"><strong>Curriculum/Styles:</strong>  </p>
    </div><!--/col-->
  </div><!--/container-->

<!-- Gallery Section - Section 3 -->

  <section class="bg-3">
    <div class="col-sm-6 col-sm-offset-3 text-center"></div>
  </section>
  <div class="divider" id="section3"></div>
  <div class="col-sm-10 col-sm-offset-1">
    <h1>Gallery</h1>
  </div>  
  <div class="row"></div>  
  <div class="bg-4">
    <div class="container">
  	<div class="row">
  	   <div class="col-sm-4 col-xs-6">
          <div class="panel panel-default">
            <div class="panel-thumbnail embed-responsive embed-responsive-4by3">            
              <embed width="350" height="265"
              src="https://www.youtube.com/v/jVVxOtXiceY" 
              type="application/x-shockwave-flash" allowfullscreen>
            </div>
            <div class="panel-body">
              <p>Keep It True 2014"<br><a href="https://www.youtube.com/v/jVVxOtXiceY">Watch on YouTube</a></p>
            </div>
          </div><!--/panel-->
        </div><!--/col-->
        <div class="col-sm-4 col-xs-6">
        	<div class="panel panel-default">
            <div class="panel-thumbnail"><img src="/img/DominiqueG.jpg" class="img-responsive"></div>
            <div class="panel-body">
              <p>Dominique - x months</p>
              <audio controls class="embed-responsive">
                <source src="/audio/letitbe.ogg" type="audio/ogg">
                <source src="/audio/cantbuymelove.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
              </audio>
              <p></p>
            </div>
          </div><!--/panel--> 
        </div><!--/col-->
        <div class="col-sm-4 col-xs-6">
        	<div class="panel panel-default">
            <div class="panel-thumbnail"><img src="/img/SarahM.jpg" class="img-responsive"></div>
            <div class="panel-body">
              <p>Sarah - x months</p>
              <audio controls class="embed-responsive">
                <source src="/audio/letitbe.ogg" type="audio/ogg">
                <source src="/audio/cantbuymelove.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
              </audio>
              <p></p>
            </div>
          </div><!--/panel--> 
        </div><!--/col--> 
        <div class="col-sm-4 col-xs-6">
        	<div class="panel panel-default">
            <div class="panel-thumbnail"><img src="/img/TeraD.jpg" class="img-responsive"></div>
            <div class="panel-body">
              <p>Tera - x months</p>
              <audio controls class="embed-responsive">
                <source src="/audio/letitbe.ogg" type="audio/ogg">
                <source src="/audio/cantbuymelove.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
              </audio>
              <p></p>
            </div>
          </div><!--/panel--> 
        </div><!--/col--> 
        <div class="col-sm-4 col-xs-6">
        	<div class="panel panel-default">
            <div class="panel-thumbnail"><img src="/img/TrevorM.jpg" class="img-responsive"></div>
            <div class="panel-body">
              <p>Trevor - x months</p>
              <audio controls class="embed-responsive">
                <source src="/audio/letitbe.ogg" type="audio/ogg">
                <source src="/audio/cantbuymelove.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
              </audio>
              <p></p>
            </div>
          </div><!--/panel--> 
        </div><!--/col--> 
        <div class="col-sm-4 col-xs-6">
        	<div class="panel panel-default">
            <div class="panel-thumbnail"><img src="/img/ZachS.jpg" class="img-responsive"></div>
            <div class="panel-body">
              <p>Zach - x months</p>
              <audio controls class="embed-responsive">
                <source src="/audio/letitbe.ogg" type="audio/ogg">
                <source src="/audio/cantbuymelove.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
              </audio>
              <p></p>
            </div>
          </div><!--/panel--> 
        </div><!--/col--> 
  	</div><!--/row-->
    </div><!--/container-->
  </div>
  <!-- Location Section - Section 4 -->
  <section class="bg-2">
    <div class="col-sm-6 col-sm-offset-3 text-center"></div>
  </section>
  <div class="row">
    <div class="col-md-8 col-md-offset-1"></div>
  </div>
  <div class="divider" id="section4"></div>
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <h1>Location</h1>
    </div>
    <div id="map-canvas"></div>
    <hr>
    <div class="col-sm-6 col-sm-offset-1 pull-left">   
      We are located at 902B Pat Booker Rd in the Randolph Plaza Shopping Center, 2 miles east of I35 between the Live Oak Cinema and Randolph AFB.  Our neighboring businesses are Polly's Pet Shop, Hallmark Gift Shop, Patriot Martial Arts, TJ's Driving School, Cash Cars and The Bistro.
    </div>     
    <div class="col-sm-3 pull-right">
        <address>
          UC Music School<br>
          <span id="map-input">
          902B Pat Booker Rd<br>
          Universal City, TX 78148</span><br>
          P: (210)-748-7054
        </address>
        <address>
          <strong>Email Us</strong><br>
          <a href="mailto:lessons@ucmusicschool.com" title="mailto:lessons@ucmusicschool.com">lessons@ucmusicschool.com</a>
        </address>          
    </div>
  </div><!--/row-->
  <!-- Location Section - Section 4 -->

  <section class="bg-3">
    <div class="col-sm-6 col-sm-offset-3 text-center"></div>
  </section>
  <div class="row">
    <div class="col-md-8 col-md-offset-1"></div>
  </div>
  <div class="divider" id="section5"></div>
    <div class="col-sm-10 col-sm-offset-1">
      <h1>Rates and Scheduling</h1>
    </div>  
    <div class="row"></div>  
    <div class="container"> 
      <p>All scheduling and payments are arranged on a month to month basis. Sessions are held once
      weekly, for either 30 minutes or 60 minutes each.  Payments are to be made no later than the <strong>first week of each month</strong>. Fees vary among instructors. However, there are <span style="text-decoration: underline">no peripheral fees or required purchases</span>.</p>
      <ul>
        <li>Registration/Processing <span class="badge">included</span></li>
        <li>Initial Consultation <span class="badge">included</span></li>
        <li>Transcriptions <span class="badge">included</span></li>
      </ul>
      <p>No required texts/manuals. All books are purchased at students option. Students beginning after the first week of the month will have a pro rated discount. Please contact the instructor of your choice for specific information regarding scheduling and fees. You can also email us at - <a href="mailto:lessons@ucmusicschool.com" title="mailto:lessons@ucmusicschool.com">lessons@ucmusicschool.com</a></p>
      <br>
      <br>
      <h2 class="col-sm-6 col-sm-offset-3 text-center"><strong>210-748-7054</strong></h2>
      <br>
      <br>
  </div>

    <!-- Studio Hours Section - Section 6 -->

  <section class="bg-2">
    <div class="col-sm-6 col-sm-offset-3 text-center"></div>
  </section>
  <div class="row">
    <div class="col-md-8 col-md-offset-1"></div>
  </div>
  <div class="divider" id="section6"></div>
    <div class="col-sm-10 col-sm-offset-1">
      <h1>Studio Hours</h1>
    </div>  
  <div class="row">
    <div class="col-sm-3 col-sm-offset-1">
      <table width="300px">
        <tr>
          <th>Day</th>
          <th class="text-center">Times</th>
        </tr>
        <tr>
          <td>Monday</td>
          <td class="text-right">2:00pm - 8:00pm</td>
        </tr>      
        <tr>
          <td>Tuesday</td>
          <td class="text-right">2:00pm - 8:00pm</td>
        </tr>
        <tr>
          <td>Wednesday</td>
          <td class="text-right">2:00pm - 8:00pm</td>
        </tr>
        <tr>
          <td>Thursday</td>
          <td class="text-right">2:00pm - 8:00pm</td>
        </tr>
        <tr>
          <td>Friday</td>
          <td class="text-right">2:00pm - 8:00pm</td>
        </tr>
        <tr>
          <td>Saturday</td>
          <td class="text-right">10:00am - 6:00pm</td>
        </tr>
        <tr>
          <td>Sunday</td>
        <td class="text-right">10:00am - 6:00pm</td>
        </tr>
     </table>
    </div>
    <div class="col-sm-5">
      <p>We currently schedule Mon-Sun. Hours vary from 2:00-8:00 p.m. weekdays and 10:00 a.m.-6:00 p.m. weekends. Contact the instructor of your choice for specific scheduling information. Hours are set by appointment.</p>
    </div>
  </div><!--/row-->

  <div class="divider" id="section7"></div>  

  <div class="row">
    
    <hr>
    
    <div class="col-sm-9 col-sm-offset-1">
        
        <div class="row form-group">
          <div class="col-md-12">
          <h1>Contact Us</h1>        
          </div>
          <div class="col-xs-4">
            <input type="text" class="form-control" id="firstName" name="name" placeholder="Your Name">
          </div>
        </div>
        <div class="row form-group">
            <div class="col-xs-5">
            <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="col-xs-5">
            <input type="text" class="form-control" name="phone" placeholder="Phone">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-xs-10">
              <textarea class="form-control" placeholder="Comments"></textarea>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-xs-10">
              <button class="btn btn-default pull-right">Contact Us</button>
            </div>
        </div>
      
    </div>
    
  </div><!--/row-->
    
</div><!--/wrap-->

<div id="footer">
  <div class="container">
    <p class="text-muted">Copyright ©2014 AaIT Innovations, LLC</p>
  </div>
</div>

<ul class="nav pull-right scroll-top">
  <li><a href="#top" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>
@stop
@section('bottomscript')
  <!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
<script src="js/scripts.js"></script>
@stop