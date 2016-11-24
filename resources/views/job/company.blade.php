@extends('layouts.masterperusahaan')
@section('content')

<!--about-->
	<div class="about" id="about">
		<div class="container">
			<div class="col-md-3 about-left">
				<div class="ab-top">
					<div class="list-group">						
					  <button type="button" class="list-group-item"><a href="{{ url('job/create/') }}">Posting Lowongan</a></button>
					</div>
				</div>
			</div>
			<div class="col-md-9 about-right">
			@if(!$company_data == NULL)
				@if(!$jobs->isEmpty())
					<h3>Lowongan di  {{( isset($company_data) ? " di ".$company_data->name : "" )}}</h3>
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
							<p class="job-desc"><strong>Tinggi : </strong>{{ ($job->tinggi_badan > 0) ? $job->tinggi_badan." cm" : "-"}}</p>
							<p class="job-desc"><strong>Berat : </strong>{{ ($job->berat_badan > 0) ? $job->berat_badan." kg" : "-"}}</p>
						</div>
						<div class="clearfix"></div>
						<a href="#" class="btn btn-default">Update Lowongan</a> <a href="#" class="btn btn-default">Lihat Kandidat</a>
					</div>
					<div class="clearfix"></div>
					<hr/>
					@endforeach
				@else
					<h4>Perusahaan Anda belum memposting lowongan kerja.</h4>							
				@endif
			@else
				<h4>Anda belum melengkapi data perusahaan Anda. <a href="{{ url('company-profile') }}">Perbarui sekarang</a></h4>							
			@endif
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!--about-->
@endsection
</body>
</html>