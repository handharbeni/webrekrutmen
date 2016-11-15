@extends('layouts.app')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="contact">
		<div class="container">
			<div class="contact-info">
				<div class="contact-grids col-md-6 ">
					<form action="contact" method="post">
						<input type="text" placeholder="Nama Lengkap" name="nama" required>
						<input type="text" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required placeholder="Email">
						<textarea name="pesan" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pesan';}" >
						</textarea>
						<input type="submit" value="Kirim">
					</form>
				</div>
				<div class="col-md-6">
				<p>Cikarang Technopark</p>
				<p>Jl. Inti 1 Blok C1 No. 7 Lippo Cikarang Bekasi 17550,</p>
				<p>West Java – Indonesia</p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15861.850931676561!2d107.1336054!3d-6.3340509!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf58faef267aec258!2sMBV+Cikarang+Techno+Park!5e0!3m2!1sid!2s!4v1477990348350" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
@endsection
</body>
</html>