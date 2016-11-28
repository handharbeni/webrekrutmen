@extends('layouts.masterperusahaan')
@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div class="about" id="about">
	<div class="container">
		<div class="col-md-3 about-left">
		</div>
		<div class="col-md-9 about-right">
			<h3>Profil Perusahaan </h3>
			<form action="{{ url('/company-profile') }}" method="post">
				{{ csrf_field() }}
				<input type="hidden" name="id" required="" class="form-control" value="{{ isset($company_data) ? $company_data->id : '' }}">
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">Nama Perusahaan</label>
					<div class="col-sm-10">
						<input type="text" placeholder="Nama Perusahaan" name="name" required="" class="form-control" value="{{ isset($company_data) ? $company_data->name : '' }}">
							@if ($errors->has('name'))
								<span class="help-block">
									<em>{{ $errors->first('name') }}</em>
								</span>
							@endif
					</div>
				</div>
				<div class="form-group">
					<label for="description" class="col-sm-2 control-label">Deskripsi</label>
					<div class="col-sm-10">
						<textarea name="description">{{ isset($company_data) ? $company_data->description : "Deskripsikan tentang perusahaan Anda" }} </textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="contact_person" class="col-sm-2 control-label">Contact Person</label>
					<div class="col-sm-10">
						<input type="text" placeholder="Contact Person" name="contact_person" required="" class="form-control" value="{{ isset($company_data) ? $company_data->contact_person : '' }}" >
					</div>
				</div>
				<div class="form-group">
					<label for="phone" class="col-sm-2 control-label">No.Telp</label>
					<div class="col-sm-10">
						<input type="number" name="phone" required="" class="form-control" value="{{ isset($company_data) ? $company_data->phone : '' }}">
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="text" name="email" required="" value="{{ isset($company_data) ? $company_data->email : '' }}" class="form-control">
							@if ($errors->has('email'))
								<span class="help-block">
									<em>{{ $errors->first('email') }}</em>
								</span>
							@endif
					</div>
				</div>
				<input type="submit" value="Simpan" class="profil-submit">
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
@endsection
</body>
</html>