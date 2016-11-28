@extends('layouts.masterperusahaan')
@section('content')
<!--services-->
	<div class="services" id="menu">
		<div class="container">
			<div class="col-md-2 menu">
				<a href="{{ url('profil')}}">
				<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
				<h4>Profil</h4>
				</a>
			</div>
			<div class="col-md-2 menu">
				<a href="{{ url('profil')}}">
				<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
				<h4>Lamaran</h4>
				</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!--services-->

<!--news-->
<div class="news" id="news">
		<div class="container">
			<h3>News &amp; Events</h3>
			<div class="news-info agileits">	
				<div class="col-md-4 news-grids">
					<h4><span>14/07</span></h4>
					<p>Cras justo odioda pibus facilisis dignissimos Sed ut perspiciatis unde omnis iste natus error sit voluptatem inventore veritatis</p>
					<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>

				</div>
				<div class="col-md-4 news-grids agileinfo">
					<h4><span>10/15</span>August</h4>
					<p>Cras justo odioda pibus facilisis dignissimos Sed ut perspiciatis unde omnis iste natus error sit voluptatem inventore veritatis</p>
					<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>

				</div>
				<div class="col-md-4 news-grids">
					<h4><span>05/15</span>August</h4>
					<p>Cras justo odioda pibus facilisis dignissimos Sed ut perspiciatis unde omnis iste natus error sit voluptatem inventore veritatis</p>
					<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>

				</div>				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!--news-->

@endsection
</body>
</html>