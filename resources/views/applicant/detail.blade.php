@extends('layouts.app')
@section('content')

<!--about-->
	<div class="about" id="about">
		<div class="container">
			<div class="col-md-3 about-left">
				
			</div>
			<div class="col-md-9 about-right">
				<h3>Data Pelamar</h3>
					<div class="col-sm-2 control-label">Nama</div>
					<div class="col-sm-10">{{ $applicant_detail->name }}</div>
					
					<div class="col-sm-2 control-label">Tempat, Tanggal Lahir </div>
					<div class="col-sm-10">{{ $applicant_detail->city->name.", ".date('dd-M-Y',strtotime($applicant_detail->tanggal_lahir))}}</div>
					
					<div class="col-sm-2 control-label">Jenis Kelamin</div>
					<div class="col-sm-10">{{ $candidate_data->gender }}</div>
					
					<div class="col-sm-2 control-label">Tinggi / Berat Badan</div>
					<div class="col-sm-10">{{ $candidate_data->tinggi_badan." cm / ".$candidate_data->berat_badan." kg" }}</div>
					
					<div class="col-sm-2 control-label">Agama</div>
					<div class="col-sm-10">{{ $candidate_data->agama->name }}</div>
					
					
					<div class="form-group">
						<label for="agama_id" class="col-sm-2 control-label">Agama</label>
						<div class="col-sm-10">							
							<select name="agama_id" class="form-control">
							@foreach ($religions as $religion)
								<option value="{{ $religion->id }}"{{ ($candidate_data->agama_id == $religion->id) ? "selected" : "" }}>{{ $religion->name }}</option>
							@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="marriage_status_id" class="col-sm-2 control-label">Status Pernikahan</label>
						<div class="col-sm-10">										
							<select name="marriage_status_id" class="form-control">
							@foreach ($statuses as $status)
								<option value="{{ $status->id }}"{{ ($candidate_data->marriage_status_id == $status->id) ? "selected" : "" }}>{{ $status->name }}</option>
							@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="alamat" class="col-sm-2 control-label">Domisili</label>
						<div class="col-sm-10">
							<textarea name="alamat" class="form-control" width="100%">{{ $candidate_data->alamat }}</textarea>
						</div>
					</div> 
 					<div class="form-group">
						<label for="propinsi" class="col-sm-2 control-label">&nbsp;</label>
						<div class="col-sm-10">
							<select name="domisili_province_id" class="form-control chosen-select" id="sPropinsi">
								<option value="0">Propinsi</option>
								@foreach ($propinsi as $propinsi_item)
								    <option value="{{ $propinsi_item->id }}"{{ ($candidate_data->domisili_province_id == $propinsi_item->id) ? "selected" : "" }}>{{ ($candidate_data->domisili_province_id == $propinsi_item->id) ? $propinsi_item->name : "Propinsi" }}</option>
								@endforeach
							</select>
					</div>
					</div>
 					<div class="form-group">
						<label for="domisili_city_id" class="col-sm-2 control-label">&nbsp;</label>
						<div class="col-sm-10">
							<select name="domisili_city_id" class="form-control chosen-select" id="sKota">
								<option value="{{ ($candidate_data->domisili_city_id != NULL) ? $candidate_data->domisili_city_id : '0' }}" {{ ($candidate_data->domisili_city_id == $propinsi_item->id) ? 'selected' : '' }}>{{ ($candidate_data->domisili_city_id != NULL) ? $candidate_data->domisili_city_id : 'Kabupaten/Kota' }}</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-sm-2 control-label">No. HP</label>
						<div class="col-sm-10">
							<input type="number" name="phone" class="form-control" value="{{ $candidate_data->phone}}"></input>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="text" name="email" value="{{ isset($email) ? $email : Auth::user()->email}}" class="form-control"></input>
						</div>
					</div>
					<div class="form-group">
						<label for="ktp" class="col-sm-2 control-label">No. KTP</label>
						<div class="col-sm-10">
							<input type="number" name="KTP" class="form-control" value="{{ $candidate_data->KTP}}"></input>
						</div>
					</div>
					<div class="form-group">
						<label for="npwp" class="col-sm-2 control-label">NPWP</label>
						<div class="col-sm-10">
							<input type="text" name="npwp" class="form-control" value="{{ $candidate_data->NPWP}}"></input>
						</div>
					</div>
					<div class="form-group">
						<label for="sekolah_id" class="col-sm-2 control-label">Pendidikan</label>
						<div class="col-sm-10">
							<select name="sekolah_id" data-placeholder="Instansi Pendidikan" class="chosen-sekolah" id="sekolahId">
								<option value=""></option>
								@foreach($schools as $school)
								<option value="{{$school->id}}">{{$school->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="jurusan_id" class="col-sm-2 control-label">&nbsp;</label>
						<div class="col-sm-10">
							<select name="jurusan_id" data-placeholder="Jurusan" class="chosen-select form-control">
								@foreach($majors as $major)
								<option value="{{$major->id}}">{{$major->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
					<div class="form-inline">
						<label for="pendidikan" class="col-sm-2 control-label">&nbsp</label>
						<div class="col-sm-10">
							<select name="pendidikan" class="form-control">
								<option value="SMA">SMA</option>
								<option value="SMK">SMK</option>
								<option value="D3">D3</option>
								<option value="S1">S1</option>
								<option value="S2">S2</option>
							</select>
							<input type="text" name="tahun_lulus" class="form-control" placeholder="Tahun Lulus" value="{{ $candidate_data->tahun_lulus }}"></input>
							<input type="number" name="average_ipk" class="form-control" placeholder="IPK" step="0.01" value="{{ $candidate_data->average_ipk}}"></input>
						</div>
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
					<h3>Pengalaman Kerja</h3>
					<div class="form-group">
						<label for="company_id" class="col-sm-2 control-label" id="label-pengalaman">Pekerjaan</label>
						<div class="col-sm-10">
							<input type="text" name="position_id" class="form-control" placeholder="Posisi" value="{{ (isset($history->what_he_did)) ? $history->what_he_did : '' }}"></input>
							<p></p>
							<select name="company_id" data-placeholder="Instansi/Perusahaan" class="form-control">
								@foreach($companies as $company)
								<option value="{{$company->id}}">{{$company->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="level" class="col-sm-2 control-label">&nbsp;</label>
						<div class="col-sm-10">
							<div class="form-inline">
							<select name="level" data-placeholder="Level" class="form-control">
								@foreach($levels as $level)
								<option value="{{$level->id}}">{{$level->name}}</option>
								@endforeach
							</select>
							<input type="text" id="tahunmulai" name="from" class="form-control" placeholder="Tahun Mulai" value="{{ (isset($history->from)) ? $history->from : '' }}"></input>
							<input type="text" id="tahunselesai" name="until" class="form-control" placeholder="Tahun Selesai" value="{{ (isset($history->until)) ? $history->until : '' }}"></input>
							</div>
						</div>
					</div>
					<div>
						
					</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!--about-->
@endsection
@section('custom-script')

	@parent
		<script>
		 
			$('#sPropinsi').on('change', function(){				
			    $.get('{{ URL::to('location/data') }}/kabupatens/'+$('#sPropinsi').val(), function(e){
			        $('#sKota').html(e);
			    });
			     
			    $('#sKecamatan').html('<option value="0">Kecamatan</option>');
			     
			});
			$('#tPropinsi').on('change', function(){				
			    $.get('{{ URL::to('location/data') }}/kabupatens/'+$('#tPropinsi').val(), function(e){
			        $('#tKota').html(e);
			    });
			     
			    //$('#tKecamatan').html('<option value="0">Kecamatan</option>');
			     
			});
			$( function() {
				$(".chosen-skills").chosen().val();
				$(".chosen-select").chosen();
				$(".chosen-sekolah").chosen({no_results_text: "Tambahkan "}); 
				$('.chosen-sekolah').append('<option>test</option>');
				$('.chosen-sekolah').trigger('chosen:updated'); 
				
				$( "#datetimepicker" ).datetimepicker({
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
