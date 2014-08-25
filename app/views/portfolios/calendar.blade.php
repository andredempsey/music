@extends('layouts.master')

@section('head')
    <title>Music School of Universal City | Calendar</title>
    <meta name="description" content="Music School of Universal City has been providing aspiring musicians tailored, private lessons since 2006">
    <meta name="keywords" content="universal city music guitar piano voice lessons"> 


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
<div class="divied-80"></div>
<div style="background-color: white" class="calendar-container" >
	<div id='calendar'></div>
</div>
<div class="divied-20"></div>
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