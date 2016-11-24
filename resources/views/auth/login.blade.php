@extends('layouts.app')
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
					<form action="login" method="post">
						{{ csrf_field() }}
						<div class="form-group">
						<input type="text" value="" name="email" required placeholder="Email">
							@if ($errors->has('email'))
								<span class="help-block">
									<em>{{ $errors->first('email') }}</em>
								</span>
							@endif
						</div>
						<div class="form-group">
						<input type="password" value="" name="password" required placeholder="Password">
							@if ($errors->has('password'))
								<p class="help-block">
									<em>{{ $errors->first('password') }}</em>
								</p>
							@endif
						</div>
						<input type="submit" value="Login"> Belum memiliki akun? <a href="register">Daftar</a>
					</form>
					<p> <a href="company-register">Daftar Sebagai Perusahaan</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
</div>
@endsection
</body>
</html>