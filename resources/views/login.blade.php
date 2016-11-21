@extends('layout.master')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="login">
		<div class="container">
			<div class="login-info">
				<div class="col-md-4 login-grids">
					<h4>Masuk dengan Akun Anda</h4>
					<p>&nbsp;</p>
					<form action="#" method="post">
						<input type="text" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="text" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
						<input type="submit" value="Login"> Belum memiliki akun? <a href="register">Daftar</a>
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
@endsection
</body>
</html>