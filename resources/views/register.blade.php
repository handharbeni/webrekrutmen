@extends('layout.master')
@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div class="contact">
		<div class="container">
			<div class="contact-info">
				<div class="col-md-6 contact-grids">
					<h4>Daftar Sekarang</h4>
					<p>&nbsp;</p>
					<form action="register/add" method="post">
						<input type="text" placeholder="Nama Lengkap" name="nama" required="">
						<input type="text" name="email" placeholder="Email" required="">
						<input type="password" name="pass" placeholder="Password" required="">
						<input type="submit" value="Daftar"> Sudah memiliki akun? <a href="login">Login</a>
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
@endsection
</body>
</html>