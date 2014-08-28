<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   

	@yield('head')	
        <!--bootstrap3 css-->
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--ion icon fonts css-->
        <link href="/icons/css/ionicons.css" rel="stylesheet">
        <!--custom css-->
        <link href="/css/style.css" rel="stylesheet" type="text/css">
        <!--google raleway font family-->
         <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,100,700,500' rel='stylesheet' type='text/css'>
        <!--flex slider css-->
        <link href="/css/flexslider.css" rel="stylesheet">
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
<body>
    @include('layouts.header')
    @yield('content')
	@include('layouts.footer')
	<!--scripts-->
        <script src="/js/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script src="/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="/js/jquery.mixitup.min.js" type="text/javascript"></script>
        <script src="/js/app.js" type="text/javascript"></script>
        <script>
            $('.fade_message').delay(2000).fadeOut(1000);
        </script>
	@yield('bottomscript')
</body>
</html>