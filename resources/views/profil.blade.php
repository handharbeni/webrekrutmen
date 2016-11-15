@extends('layout.master')
@section('content')

<!--about-->
	<div class="about" id="about">
		<div class="container">
			<div class="col-md-4 about-left">
				<div class="ab-top">
					<div class="list-group">
					  <button type="button" class="list-group-item">Profil Saya</button>
					  <button type="button" class="list-group-item">Lamaran Saya</button>
					</div>
				</div>
			</div>
			<div class="col-md-8 about-right">
				<h3>Profil</h3>
				<div class="col-md-12 ab-lft  contact-grids">
					<form action="#" method="post">
						<input type="text" placeholder="Nama Lengkap" name="nama" required="">						
						<input type="text" placeholder="Tempat Lahir" name="tempatlahir" required="">
						<div class="form-inline">
							<div class="form-group">
								<select name="tanggal" class="form-control">
									<option value="">Tanggal</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
							</div>
							<div class="form-group">
								<select name="bulan" class="form-control">
									<option value="">Bulan</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
							</div>
							<div class="form-group">
								<select name="tahun" class="form-control">
									<option value="">Tahun</option>
									<option value="2000">2000</option>
									<option value="1999">1999</option>
									<option value="1998">1998</option>
								</select>
							</div>
						</div>
						<input type="text" name="noktp" placeholder="Nomor KTP" required="">
						<input type="text" name="pendidikan" placeholder="Pendidikan" required="">
						<input type="text" name="noktp" placeholder="Nomor KTP" required="">
						<hr />
						<h4 class="text-left">Kontak Saya</h4>
						<br/>
						<input type="text" name="nomor" placeholder="Nomor Telepon" required="">
						<textarea name="alamat" required="">Domisili</textarea>
						<input type="submit" value="Simpan">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!--about-->
@endsection
</body>
</html>