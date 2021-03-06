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
				<div class="col-md-6 login-grids">
					<h4>Daftarkan Perusahaan Anda</h4>
					<p>&nbsp;</p>
					<form action="{{ url('/company-register') }}" method="post">
                        {{ csrf_field() }}
						
						<input type="text" placeholder="Nama Perusahaan" name="name" required="">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <em>{{ $errors->first('name') }}</em>
                                    </span>
                                @endif
						<textarea name="description">Deskripsikan tentang perusahaan Anda</textarea>
						<input type="text" placeholder="Contact Person" name="contact_person" required="">
						<input type="number" name="phone" placeholder="No. Telp" required="">
						<input type="text" name="email" placeholder="Email" required="">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <em>{{ $errors->first('email') }}</em>
                                    </span>
                                @endif
						<input type="password" name="password" placeholder="Password" required="">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <em>{{ $errors->first('password') }}</em>
                                    </span>
                                @endif
						<input type="submit" value="Daftar"> Sudah memiliki akun? <a href="login">Login</a>
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
@endsection
</body>
</html>