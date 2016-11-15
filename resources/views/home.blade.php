@extends('layouts.app')
@section('content')
<!--banner start here-->
<div class="banner">
	<h1>Cari Lowongan Kerja <small>Bekasi</small></h1>
	<form class="form-inline">
		<div class="form-group input-group">
		  <span class="input-group-addon" id="pencarian-addon">Pekerjaan</span>
		  <input type="text" class="form-control" id="pencarian" aria-describedby="pencarian-addon" placeholder="Ketik Pekerjaan">
		</div>
		<div class="form-group">
		  <select name="filter-hari" class="form-control">
			<option value="1">Hari Ini</option>
			<option value="2">Minggu Lalu</option>
		  </select>
		</div>
		<div class="form-group">
			<input type="submit" value="Cari" class="btn btn-default" />
		</div>
	</form>
</div>
<!--banner end here-->

<!--about-->
	<div class="about" id="about">
		<div class="container">
			<div class="col-md-4 about-left">
				<div class="ab-top">
					<h5>Temukan Lowongan Kerja Terbaik</h5>
					<p>METAJOBS merupakan perusahaan jasa penyedia atau suplai tenaga kerja untuk memenuhi kebutuhan perusahaan. Jasa layanan kerja ini beragam, dimulai dari operator hingga tingkat supervisor dan staf. Saat ini METAJOBS memiliki database pencari kerja lebih dari 180.000 anggota lulusan SMK/sederajat, dan siap disalurkan ke perusahaan atau industri yang membutuhkan. Selain itu secara berkala METAJOBS menyelenggarakan Job Fair yang dapat dimanfaatkan perusahaan untuk mencari tenaga kerja yang berkualitas</p>
					<a href="#" data-toggle="modal" data-target="#myModal">Cari Lowongan</a>

				</div>
			</div>
			<div class="col-md-8 about-right">
				<h3>Mengapa MetaJobs?</h3>
				<div class="col-md-6 ab-lft">
					<h4 class="text-uppercase">Recruitment Free</h4>
					<p>Perusahaan dapat meminta kami menyediakan kandidat untuk level operator tanpa dipungut biaya.</p>
				</div>
				<div class="col-md-6 ab-lft">
					<h4 class="text-uppercase">Recruitment + Psikotest & MCU</h4>
					<p>Dalam program ini, kami menyediakan karyawan yang sudah melalui ujian psikotest, dan MCU (Medical Check Up).</p>
				</div>
				<div class="clearfix"></div>
				<div class="abt-bottom">
					<div class="col-md-6 ab-lft">
						<h4 class="text-uppercase">Recruitment + Psikotest + 1 Day Training : Safety & Basic Mentality</h4>
						<p>Kami dapat membekali karyawan Anda dengan pengetahuan mengenai basic mentality, dan safety.</p>
					</div>
					<div class="col-md-6 ab-lft">
						<h4 class="text-uppercase">Recruitment + Psikotest & MCU + 2 Days Training : Safety, Basic Mentality & 5R</h4>
						<p>Program ini adalah program terlengkap. Dalam program ini kami akan memberikan karyawan yang telah siap bekerja. Sebelum menerapkan aktivitas lain, akan lebih baik apabila aktivitas 5R (1.Ringkas, 2.Rapi, 3.Resik, 4.Rawat dan 5.Rajin) sudah diimplementasikan. Hasilnya sangat efektif dan mampu menurunkan biaya produksi atau menaikkan produktivitas</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!--about-->
  <!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Pellentesque vehicula</h4>
		  </div>
		  <div class="modal-body">
			<p>In varius sem id aliquet rutrum. Pellentesque ut neque ligula. Fusce dapibus volutpat magna, ac feugiat dolor bibendum et. Integer dignissim gravida nunc, eget hendrerit enim. Quisque dapibus mollis finibus. Curabitur nulla enim, aliquet ac ultricies luctus, lacinia ut felis. Etiam aliquam massa nec lorem pulvinar porttitor. Maecenas in rutrum purus, eget consectetur arcu. Sed id pretium ligula, id hendrerit nunc. Nam ut tincidunt erat, sit amet accumsan risus..</p>
		  </div>
		</div>
	</div>
  </div>
  <!--// Modal -->

<!--services>
	<div class="services w3agile" id="services">
		<div class="container">
			<h3>Tingkat Pekerjaan</h3>
			<div class="col-md-2 services-left">
				<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
				<h4>Staff Level</h4>
			</div>
			<div class="col-md-2 services-left">
				<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
				<h4>Supervisor</h4>
			</div>
			<div class="col-md-2 services-left">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
				<h4>Manager</h4>
			</div>
			<div class="col-md-2 services-left">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<h4>Operator</h4>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!--services-->

<!--gallery>
<div class="gallery" id="gallery">
		<div class="container">
			<h3>Partner Kami</h3>
			<div class="gallery-grids">
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					<li>
						<a href="images/2.jpg"  class="b-link-stripe b-animate-go  thickbox">
							<img src="images/2.jpg" alt="">
							<div style="display: block; left: 0px; top: -100%; overflow: hidden; transition: all 300ms ease;">
								<h5>project</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/3.jpg"  class="b-link-stripe b-animate-go  thickbox">
							<img src="images/3.jpg" alt="">
							<div style="display: block; left: 100%; top: 0px; overflow: hidden; transition: all 300ms ease;">
								<h5>project</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/4.jpg" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/4.jpg" alt="">
							<div style="display: block; left: 0px; top: 100%; overflow: hidden; transition: all 300ms ease;">
								<h5>project</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/5.jpg"  class="b-link-stripe b-animate-go  thickbox">
							<img src="images/5.jpg" alt="">
							<div style="display: block; left: 0px; top: -100%; overflow: hidden; transition: all 300ms ease;">
								<h5>project</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>	
						<a href="images/6.jpg"  class="b-link-stripe b-animate-go  thickbox">
							<img src="images/6.jpg" alt="">
							<div style="display: block; left: 0px; top: 100%; overflow: hidden; transition: all 300ms ease;">
								<h5>project</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/7.jpg"  class="b-link-stripe b-animate-go  thickbox">
							<img src="images/7.jpg" alt="">
							<div style="display: block; left: 0px; top: 100%; overflow: hidden; transition: all 300ms ease;">
								<h5>project</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/8.jpg"  class="b-link-stripe b-animate-go  thickbox">
							<img src="images/8.jpg" alt="">
							<div style="display: block; left: 0px; top: 100%; overflow: hidden; transition: all 300ms ease;">
								<h5>project</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/9.jpg"  class="b-link-stripe b-animate-go  thickbox">
							<img src="images/9.jpg" alt="">
							<div style="display: block; left: 0px; top: 100%; overflow: hidden; transition: all 300ms ease;">
								<h5>project</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
				</ul>
			</section>
			<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

			});
		</script>
        </div>
	</div>
</div>
<!--gallery-->

<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<h3>Testimonial</h3>
			<div class="agile_team_grids">
				<div class="col-md-3 agile_team_grid agile1">
					<div class="agile_team_grid_main">
						<img src="images/t1.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<ul class="social-icons">
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h3>Linda Carl</h3>
						<p>Business Man</p>
						<hr/>
						<p class="desc">"Website ini sangat membantu untuk menemukan pekerjaan yang saya inginkan. Mudah digunakan dan sangat bermanfaat."</p>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid agile2">
					<div class="agile_team_grid_main">
						<img src="images/t2.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<ul class="social-icons">
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h3>Williamson </h3>
						<p>Business Woman</p><hr/>
						<p class="desc">"Saya dapat menemukan kandidat terbaik untuk posisi yang dibutuhkan di perusahaan saya melalui website ini."</p>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid agile3">
					<div class="agile_team_grid_main">
						<img src="images/t3.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<ul class="social-icons">
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h3>Laura Crisp</h3>
						<p>Business Woman</p><hr/>
						<p class="desc">"Saya menyukai website ini karena sangat mudah digunakan"</p>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid agile4">
					<div class="agile_team_grid_main">
						<img src="images/t4.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<ul class="social-icons">
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h3>Rosy Paul</h3>
						<p>Business Man</p><hr/>
						<p class="desc">"Perusahaan kami telah mendapatkan 100 pekerja melalui website ini."</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->

<!--news-->
<div class="news" id="news">
		<div class="container">
			<h3>News &amp; Events</h3>
			<div class="news-info agileits">	
				<div class="col-md-4 news-grids">
					<h4><span>14/07</span></h4>
					<p>Cras justo odioda pibus facilisis dignissimos Sed ut perspiciatis unde omnis iste natus error sit voluptatem inventore veritatis</p>
					<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>

				</div>
				<div class="col-md-4 news-grids agileinfo">
					<h4><span>10/15</span>August</h4>
					<p>Cras justo odioda pibus facilisis dignissimos Sed ut perspiciatis unde omnis iste natus error sit voluptatem inventore veritatis</p>
					<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>

				</div>
				<div class="col-md-4 news-grids">
					<h4><span>05/15</span>August</h4>
					<p>Cras justo odioda pibus facilisis dignissimos Sed ut perspiciatis unde omnis iste natus error sit voluptatem inventore veritatis</p>
					<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>

				</div>				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!--news-->

<div class="contact" id="register">
		<div class="container">
			<div class="contact-info">
				<div class="contact-grids">
					<h4>Bergabung dengan MetaJobs</h4>
					<p>&nbsp;</p>
					<form action="{{ url('/register') }}" method="post">
                        {{ csrf_field() }}
						
						<input type="text" placeholder="Nama Lengkap" name="name" required="">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <em>{{ $errors->first('name') }}</em>
                                    </span>
                                @endif
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
						<input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required="">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <em>{{ $errors->first('password_confirmation') }}</em>
                                    </span>
                                @endif
						<input type="submit" value="Daftar"> Sudah memiliki akun? <a href="login">Login</a>
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
@endsection
@section('custom-script')
	@parent
	<!--light-box-files -->
	<script type="text/javascript">
		$(function() {
			$('.gallery a').Chocolat();
		});
	</script>
@endsection
</body>
</html>