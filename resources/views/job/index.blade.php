@extends('layouts.app')
@section('content')

<!--about-->
	<div class="about" id="about">
		<div class="container">
			<div class="col-md-3 about-left">
				<div class="ab-top">
					<div class="list-group">
					@foreach ($companies as $company)
					  <button type="button" class="list-group-item">{{$company->name}} Perusahaan</button>
					@endforeach
					</div>
				</div>
			</div>
			<div class="col-md-9 about-right">
				<h3>Lowongan Tersedia</h3>
				
				@foreach ($jobs as $job)
				<div class="col-md-12 ab-lft">
					<div class="col-md-6">
						<h4>{{$job->position->name}}</h4>							
						<p class="job-desc"><strong>Jumlah Lowongan :</strong> {{$job->number_of_openings}} posisi</p>
						<p class="job-desc"><strong>Pendidikan :</strong> {{$job->pendidikan}}</p>
						<p class="job-desc"><strong>Jenis Kelamin :</strong> {{$job->gender}}</p>
						<p class="job-desc"><strong>Tahun Kelulusan : </strong> {{$job->tahun_lulus}}</p>
					</div>
					<div class="col-md-6">
						<h6 class="text-left"><a href="" class="company">{{$job->company->name}}</a></h6>
						<p class="job-desc"><strong>Tinggi : </strong>{{$job->tinggi_badan}}</p>
						<p class="job-desc"><strong>Berat : </strong>{{$job->berat_badan}}</p>
					</div>
					<div class="clearfix"></div>
					<a href="#" class="btn btn-default">Kirim Lamaran</a>
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