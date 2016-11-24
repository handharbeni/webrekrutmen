@extends('layouts.masterperusahaan')
@section('content')

<!--about-->
	<div class="about" id="about">
		<div class="container">
			<div class="col-md-3 about-left">
			</div>
			<div class="col-md-9 about-right">
				<h3>Posting Lowongan Kerja</h3>
				<form class="form-horizontal" method="post" action="{{url('job/create')}}">
					{{ csrf_field() }}
					<input type="hidden" name="company_id" value="{{$company_data->id}}"></input>
					<input type="hidden" name="enabled" value="1"></input>
					<input type="hidden" name="job_opening_status_id" value="1"></input>
 					<div class="form-group">
						<label for="position_id" class="col-sm-2 control-label">Posisi</label>
						<div class="col-sm-10">
							<select name="position_id" class="form-control chosen-position">
								<option value="0">Posisi yang Dibutuhkan</option>
								@foreach ($positions as $position)
								    <option value="{{ $position->id }}">{{ $position->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="requirements" class="col-sm-2 control-label">Persyaratan</label>
						<div class="col-sm-10">
							<textarea name="requirements" value="" class="form-control"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="skills" class="col-sm-2 control-label">Keahlian</label>
						<div class="col-sm-10">
							<select name="skills[]" data-placeholder="Masukkan keahlian..." class="form-control chosen-skills" multiple>
								@foreach($skills as $skill)
								<option value="{{$skill->name}}" >{{$skill->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="salary" class="col-sm-2 control-label">Gaji</label>
						<div class="col-sm-10">
							<input type="number" name="salary" class="form-control" value=""></input>
						</div>
					</div>
					<div class="form-group">
						<label for="number_of_openings" class="col-sm-2 control-label">Jumlah Posisi</label>
						<div class="col-sm-10">
							<input type="number" name="number_of_openings" class="form-control" value=""></input>
						</div>
					</div>
					<div class="form-group">
						<label for="valid_until" class="col-sm-2 control-label">Batas Penerimaan</label>
						<div class="col-sm-10">
							<input type="text" name="valid_until" class="form-control" id="datetimevalid" value=""></input>
						</div>
					</div>
					<div class="form-group">
						<label for="gender" class="col-sm-2 control-label">Jenis Kelamin</label>
						<div class="col-sm-10">										
							<select name="gender" class="form-control">
								<option value="Pria dan Wanita">Pria dan Wanita</option>
								<option value="Pria">Pria</option>
								<option value="Wanita">Wanita</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="tinggi_badan" class="col-sm-2 control-label">Tinggi Badan</label>
						<div class="col-sm-10">
							<input type="text" name="tinggi_badan" class="form-control" placeholder="Isi dalam satuan cm, kosongkan jika tidak perlu" value=""></input>
						</div>
					</div>
					<div class="form-group">
						<label for="berat_badan" class="col-sm-2 control-label">Berat Badan</label>
						<div class="col-sm-10">
							<input type="text" name="berat_badan" class="form-control" placeholder="Isi dalam satuan kg kosongkan jika tidak perlu" value=""></input>
						</div>
					</div>
					<div class="form-group">
						<label for="marriage_status_id" class="col-sm-2 control-label">Status Pernikahan</label>
						<div class="col-sm-10">										
							<select name="marriage_status_id" class="form-control">
							@foreach ($marriage_statuses as $status)
								<option value="{{ $status->id }}">{{ $status->name }}</option>
							@endforeach
							</select>
						</div>
					</div>
 					<div class="form-group">
						<label for="domisili_city_id" class="col-sm-2 control-label">Penempatan</label>
						<div class="col-sm-10">
							<select name="domisili_city_id" class="form-control chosen-select" id="sPropinsi">
								<option value="0">Kota</option>
								@foreach ($cities as $city)
								    <option value="{{ $city->id }}">{{ $city->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="tahun_lulus" class="col-sm-2 control-label">Tahun Lulus</label>
						<div class="col-sm-10">
							<input type="number" name="tahun_lulus" class="form-control" value=""></input>
						</div>
					</div>
					<div class="form-group">
						<label for="pendidikan" class="col-sm-2 control-label">Pendidikan</label>
						<div class="col-sm-10">
							<textarea name="pendidikan" value="" class="form-control"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="age_min" class="col-sm-2 control-label">Usia</label>
						<div class="col-sm-10">
							<div class="form-inline">
								<input type="number" name="age_min" class="form-control" value=""></input>
								&nbsp;sampai dengan &nbsp;
								<input type="number" name="age_max" class="form-control" value=""></input>
							</div>
						</div>
					</div>
					<div>
						<input type="submit" value="Simpan" class=" profil-submit">
					</div>
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!--about-->
@endsection
@section('custom-script')

	@parent
		<script>                                                                                                                                                                                                                                                                                                                                                                      
			$( function() {
				$(".chosen-skills").chosen().val();
				$(".chosen-city").chosen();
				$(".chosen-select").chosen();
				$(".chosen-position").chosen({
				    create_option: true,
					create_option_text: 'Add New Position',
				    create_option: function(term){
					    $.get('{{ URL::to('add/position') }}/'+term, function(e){
 					    });
						this.append_option({
							value: term,
							text: term
						});
				    },					
				    persistent_create_option: true,
				    skip_no_results: true,
				});
				
				$( "#datetimepicker" ).datetimepicker({
					format: 'YYYY-MM-DD'
				});			
				$( "#datetimevalid" ).datetimepicker({
					format: 'YYYY-MM-DD'
				});			
				$( "#tahunmulai" ).datetimepicker({
					format: 'YYYY-MM'
				});			
				$( "#tahunselesai" ).datetimepicker({
					format: 'YYYY-MM'
				});
			} );
		</script>

@endsection
