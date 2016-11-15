@extends('layouts.app')
@section('content')

<!--about-->
	<div class="about" id="about">
		<div class="container">
			<div class="col-md-3 about-left">
				<div class="ab-top">
					<div class="list-group">
						<button type="button" class="list-group-item">Data Pribadi</button>
						<button type="button" class="list-group-item">Profil 1</button>
						<button type="button" class="list-group-item">Profil 2</button>
					</div>
				</div>
			</div>
			<div class="col-md-9 about-right">
				<p><em>Syarat dan ketentuan: Isi data dengan sebenar-benarnya dan akan diperiksa saat proses interview.</em></p>
				<form class="form-horizontal">
					<div class="form-group">
						<label for="nama" class="col-sm-2 control-label">Nama</label>
						<div class="col-sm-10">
							<input type="text" name="nama" class="form-control"></input>
						</div>
					</div>
					<div class="form-group">
						<label for="tempat-lahir" class="col-sm-2 control-label">Tempat Lahir</label>
						<div class="col-sm-10">
							<input type="text" name="tempat-lahir" class="form-control"></input>
						</div>
					</div>
					<div class="form-group">
						<label for="tanggal-lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
						<div class="col-sm-10">
							<input type="text" name="tanggal-lahir" class="form-control" id="datetimepicker"></input>
						</div>	
						<script>
							$( function() {
								$( "#datetimepicker" ).datetimepicker({
									format: 'YYYY-MM-DD'
								});
							} );
						</script>
					</div>
					<div class="form-group">
						<label for="gender" class="col-sm-2 control-label">Jenis Kelamin</label>
						<div class="col-sm-10">										
							<select name="gender" class="form-control">
								<option value="Pria">Pria</option>
								<option value="Wanita">Wanita</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="tinggi" class="col-sm-2 control-label">Tinggi Badan</label>
						<div class="col-sm-10">
							<input type="text" name="tinggi" class="form-control" placeholder="Isi dalam satuan cm"></input>
						</div>
					</div>
					<div class="form-group">
						<label for="berat" class="col-sm-2 control-label">Berat Badan</label>
						<div class="col-sm-10">
							<input type="text" name="berat" class="form-control" placeholder="Isi dalam satuan kg"></input>
						</div>
					</div>
					<div class="form-group">
						<label for="agama" class="col-sm-2 control-label">Agama</label>
						<div class="col-sm-10">										
							<select name="agama" class="form-control">
								<option value="Islam">Islam</option>
								<option value="Kristen">Kristen</option>
								<option value="Katolik">Katolik</option>
								<option value="Hindu">Hindu</option>
								<option value="Buddha">Buddha</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="status" class="col-sm-2 control-label">Status Pernikahan</label>
						<div class="col-sm-10">										
							<select name="status" class="form-control">
								<option value="Belum Menikah">Belum Menikah</option>
								<option value="Menikah">Menikah</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="alamat" class="col-sm-2 control-label">Domisili</label>
						<div class="col-sm-10">
							<textarea name="alamat" class="form-control" width="100%"></textarea>
						</div>
					</div> 
 					<div class="form-group">
						<label for="propinsi" class="col-sm-2 control-label">&nbsp;</label>
						<div class="col-sm-10">
							<select name="propinsi" class="form-control chosen-propinsi" id="sPropinsi">
								<option value="0">PILIH PROPINSI</option>
								@foreach ($propinsi as $propinsi)
								    <option value="{{ $propinsi->id }}">{{ $propinsi->name }}</option>
								@endforeach
							</select>
<!-- 							<input type="text" name="propinsi" class="form-control" placeholder="Propinsi"></input>
 -->						</div>
					</div>
 					<div class="form-group">
						<label for="kota" class="col-sm-2 control-label">&nbsp;</label>
						<div class="col-sm-10">
							<select name="kota" class="form-control chosen-kabupaten" id="sKota">
								<option value="0">PILIH KABUPATEN</option>
							</select>
<!-- 							<input type="text" name="propinsi" class="form-control" placeholder="Propinsi"></input>
 -->						</div>
					</div>
 					<div class="form-group">
						<label for="kecamatan" class="col-sm-2 control-label">&nbsp;</label>
						<div class="col-sm-10">
							<select name="kecamatan" class="form-control chosen-kecamatan" id="sKecamatan">
								<option value="0">PILIH KECAMATAN</option>
							</select>
<!-- 							<input type="text" name="propinsi" class="form-control" placeholder="Propinsi"></input>
 -->						</div>
					</div>
<!--  					<div class="form-group">
						<label for="desa" class="col-sm-2 control-label">&nbsp;</label>
						<div class="col-sm-10">
							<select name="desa" class="form-control" id="sDesa">
								<option value="0">PILIH DESA</option>
							</select>
							<input type="text" name="desa" class="form-control" placeholder="Propinsi"></input>
					</div>
					</div> -->
<!-- 					<div class="form-group">
						<label for="kota" class="col-sm-2 control-label">&nbsp;</label>
						<div class="col-sm-10">
							<input type="text" name="kota" class="form-control" placeholder="Kota"></input>
						</div>
					</div> -->
					<div class="form-group">
						<label for="ktp" class="col-sm-2 control-label">No. HP</label>
						<div class="col-sm-10">
							<input type="number" name="nohp" class="form-control"></input>
						</div>
					</div>
					<div class="form-group">
						<label for="ktp" class="col-sm-2 control-label">No. KTP</label>
						<div class="col-sm-10">
							<input type="number" name="ktp" class="form-control"></input>
						</div>
					</div>
					<div class="form-group">
						<label for="npwp" class="col-sm-2 control-label">NPWP</label>
						<div class="col-sm-10">
							<input type="text" name="npwp" class="form-control"></input>
						</div>
					</div>
					<div class="form-group">
						<label for="pendidikan" class="col-sm-2 control-label">Pendidikan</label>
						<div class="col-sm-10">
							<!--select name="sekolah" data-placeholder="Masukkan nama instansi pendidikan..." class="form-control chosen-select" multiple>
								<option value="SMA">SMA</option>
								<option value="SMK">SMK</option>
								<option value="D3">D3</option>
								<option value="S1">S1</option>
								<option value="S2">S2</option>
							</select-->
							
							<input type="text" name="pendidikan" class="form-control" placeholder="Nama instansi pendidikan"></input>
						</div>
					</div>
					<div class="form-group">
						<label for="pendidikan" class="col-sm-2 control-label">&nbsp;</label>
						<div class="col-sm-10">
							<input type="text" name="jurusan" class="form-control" placeholder="Jurusan"></input>
							<!--<select name="jurusan" data-placeholder="Jurusan" class="form-control chosen-select" multiple>
								<option value="SMA">SMA</option>
								<option value="SMK">SMK</option>
								<option value="D3">D3</option>
								<option value="S1">S1</option>
								<option value="S2">S2</option>
							</select>-->
						</div>
					</div>
					<div class="form-group">
					<div class="form-inline">
						<label for="" class="col-sm-2 control-label">&nbsp</label>
						<div class="col-sm-10">
							<select name="tingkat" class="form-control">
								<option value="SMA">SMA</option>
								<option value="SMK">SMK</option>
								<option value="D3">D3</option>
								<option value="S1">S1</option>
								<option value="S2">S2</option>
							</select>
							<input type="text" name="tahun-lulus" class="form-control" placeholder="Tahun Lulus"></input>
							<input type="number" name="ipk" class="form-control" placeholder="IPK" step="0.01"></input>
						</div>
					</div>
					</div>
					<div class="form-group">
						<label for="keahlian" class="col-sm-2 control-label">Keahlian</label>
						<div class="col-sm-10">
							<select name="keahlian" data-placeholder="Masukkan keahlian..." class="form-control chosen-select" multiple>
								@foreach($skills as $skill)
								<option value="{{$skill->id}}">{{$skill->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					 Posisi, Tingkat (table levels), Divisi, Perusahaan
					<div class="form-group">
						<label for="keahlian" class="col-sm-2 control-label">Pengalaman Kerja</label>
						<div class="col-sm-10">
							<div class="form-inline">
							<select name="level" data-placeholder="Level" class="form-control chosen-select" multiple>
								@foreach($levels as $level)
								<option value="{{$level->id}}">{{$level->name}}</option>
								@endforeach
							</select>
							<input type="text" name="divisi" class="form-control" placeholder="Divisi"></input>
							</div>
						</div>
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
			$('#sPropinsi').on('change', function(){				
			    $.get('{{ URL::to('location/data') }}/kabupatens/'+$('#sPropinsi').val(), function(e){
			        $('#sKota').html(e);
			    });
			     
			    $('#sKecamatan').html('<option value="0">PILIH KECAMATAN</option>');
			    $('#sDesa').html('<option value="0">PILIH DESA</option>');
			     
			});
			$('#sKota').on('change', function(){
			    $.get('{{ URL::to('location/data') }}/cities/'+$('#sKota').val(), function(e){
			        $('#sKecamatan').html(e);
			    });
			    $('#sDesa').html('<option value="0">PILIH DESA</option>');
			});		
			$( function() {
				 $(".chosen-select").chosen();
				 $(".chosen-sekolah").chosen({max_selected_options: 1});
				 $(".chosen-propinsi").chosen({max_selected_options: 1});
				 // $(".chosen-kabupaten").chosen({max_selected_options: 1});
				 // $(".chosen-kecamatan").chosen({max_selected_options: 1});
			} );
		</script>

@endsection
