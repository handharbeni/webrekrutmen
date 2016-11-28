@extends('layouts.masterperusahaan')
@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div class="about" id="about">
	<div class="container">
		<div class="col-md-12 about-right">
			<table class="table">
				<tr>
					<th>No.</th>
					<th>No. Anggota</th>
					<th>Nama Pelamar</th>
					<th>Posisi</th>
					<th>Status</th>
					<th>Detail</th>
				</tr>
				@if($applicants == NULL)
					
				@else
				<tr>
					<td colspan="5" class="emptyrow">Belum ada pelamar untuk lowongan di perusahaan Anda</td>
				</tr>
				@endif
			</table>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
@endsection
</body>
</html>