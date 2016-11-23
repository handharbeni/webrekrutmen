@extends('layouts.app')
@section('content')

<!--about-->
	<div class="about" id="about">
		<div class="container">
			<div class="col-md9 about-right">
				<h3>Lowongan Tersedia</h3>
				
				@foreach ($companies as $company)
				<div class="col-md-12 ab-lft">
					<div class="col-md-6">
						<h4>{{$company->name}}</h4>							
						<p class="job-desc">{{$company->description}}</p>
					</div>
					<div class="col-md-6">
						<h6 class="text-left"><strong>Contact Person : </strong>{{$company->contact_person}}</h6>
						<p class="job-desc"><strong>Email : </strong>{{$company->email}}</p>
						<p class="job-desc"><strong>Phone : </strong>{{$company->phone}}</p>
					</div>
					<div class="clearfix"></div>
<<<<<<< HEAD
					<a href="{{ url('job/company/'.$company->id)}}" class="btn btn-default">Job Listing</a>
=======
					<a href="job/company/{{$company->id}}" class="btn btn-default">Job Listing</a>
>>>>>>> origin/master
				</div>
				<div class="clearfix"></div>
				<hr/>
				@endforeach
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!--about-->
@endsection
</body>
</html>