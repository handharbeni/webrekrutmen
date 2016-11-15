<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>MetaJobs | Direktori Rekrutmen </title>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/moment-with-locales.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datetimepicker.js"></script>
<script src="js/chosen.jquery.js"></script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" media="all">
<link href="css/bootstrap-chosen.css" rel="stylesheet" type="text/css" media="all">

<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />

<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="MetaJobs" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway:900,800,700,600" type="text/css" media="all">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Scripts -->
<script>
	window.Laravel = <?php echo json_encode([
		'csrfToken' => csrf_token(),
	]); ?>
</script>

</head>
<body>

<!--header start here-->
@section('header')
<div class="header">
	<div class="container">
		<div class="header-main">
		<div class="header-right">
				   <div class="logo">
				   	   <h1><a href="home"><img src="images/metajobslogolandscape_small.png"></a></h1>
				   </div>
				
					 <div class="phone">
						<!--h2>Phone<span class="ph-numb">5696 593 980</span></h2-->&nbsp;
					</div>
					<div class="form-group">
					<!--form action="#" method="post">
					<input type="text" name="text" class="form-control" placeholder="Search">
					<button type="submit" class="btn btn-default" aria-label="Left Align">
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</button>
					</form-->
					@if (Auth::check())
						Selamat datang, {{ Auth::user()->name }}!
						<a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="label label-warning">
						Logout  
						<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
					</a>

					@else
						<a href="register" class="label label-warning">Daftar</a>&nbsp;<a href="login" class="label label-warning">Login</a>
					@endif
					
					</div>
		    <div class="clearfix"> </div>
	     </div>	   
	        <!---->
     </div>
   </div>
</div>
<!--header end here-->
<!--top nav start here-->
<div class="top-nav">
		<nav class="navbar navbar-default">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						@if (Auth::check())
							<li class="hvr-bounce-to-bottom {{ Request::is('dashboard') ? 'active' : '' }}"><a href="dashboard">Dashboard</a></li>
							<li class="hvr-bounce-to-bottom {{ Request::is('profil') ? 'active' : '' }}"><a href="profil">Profil</a></li>
						@else
							<li class="hvr-bounce-to-bottom {{ Request::is('/') ? 'active' : '' }} {{ Request::is('home') ? 'active' : '' }}"><a href="home">Beranda</a></li>
						@endif
						
						<li class="hvr-bounce-to-bottom {{ Request::is('job') ? 'active' : '' }}"><a href="job">Lowongan Kerja</a></li>
						<!-- <li class="hvr-bounce-to-bottom {{ Request::is('industri') ? 'active' : '' }}"><a href="industri">Industri</a></li> -->
						<li class="hvr-bounce-to-bottom {{ Request::is('perusahaan') ? 'active' : '' }}"><a href="perusahaan">Perusahaan</a></li>
						<!-- <li class="hvr-bounce-to-bottom {{ Request::is('training') ? 'active' : '' }}"><a href="training">Training</a></li> -->
						<li class="hvr-bounce-to-bottom {{ Request::is('contact') ? 'active' : '' }}"><a href="contact">Kontak</a></li>
					</ul>	
					
				</div>	
			</div>
		</nav>		
	</div>	
@show

@section('content')
@show

@section('footer')
		<div class="footer">
			<div class="container">	
				<div class="social">
			<h3>Follow Us</h3>
			<ul>
				<li><a href="#"><i class="facebok"> </i></a></li>
				<li><a href="#"><i class="twiter"> </i></a></li>
				<li><a href="#"><i class="inst"> </i></a></li>
				<li><a href="#"><i class="goog"> </i></a></li>
			</ul>
		</div>
				<p>&copy; 2016 MetaJobs . All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>				
			</div>
		</div>
	</div>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
@show

@section('default-script')
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
			*/
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<!-- //end-smoth-scrolling -->
@show

@section('custom-script')
<!--script-->
	<script src="js/modernizr.custom.97074.js"></script>
	<script src="js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="css/chocolat.css" type="text/css"  media="all">
<!--script-->
@show
</body>
</html>