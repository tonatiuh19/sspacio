<?php
session_start();
require_once('admin/cnn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>sspacio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="css/fontawesome/css/all.css" rel="stylesheet">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">ss<span>pacio</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">

					<li class="nav-item"><a href="#" class="nav-link">Explora</a></li>
					<li class="nav-item"><a href="sign-in/" class="nav-link">Publica un espacio</a></li>
					<?php
					if (isset($_SESSION['email'])){
						if($_SESSION["type_user"] == "1"){
							echo '<li class="nav-item"><button data-toggle="collapse" data-target="#demo" class="nav-link btn btn-success btn-sm"><i class="fas fa-user-astronaut fa-1x"></i></button></li>
							<div id="demo" class="collapse">
								<div class="btn-group-vertical">
								<a href="dashboard/" class="btn btn-success btn-sm">Mis Espacios</a>
								<a href="profile/" class="btn btn-success btn-sm">Mi Perfil</a>
								<a href="admin/fin.php" class="btn btn-success btn-sm"><i class="fas fa-times-circle"></i> sesion</a>
								</div>
							</div>';
						}elseif($_SESSION["type_user"] == "2"){
							echo '<li class="nav-item"><button data-toggle="collapse" data-target="#demo" class="nav-link btn btn-success btn-sm"><i class="fas fa-user-astronaut fa-1x"></i></button></li>
							<div id="demo" class="collapse">
								<div class="btn-group-vertical">
								<a href="dashboard/" class="btn btn-success btn-sm">Ver mis espacios</a>
								<a href="profile/" class="btn btn-success btn-sm">Mi Perfil</a>
								<a href="admin/fin.php" class="btn btn-success btn-sm"><i class="fas fa-times-circle"></i> sesion</a>
								</div>
							</div>';
						}
					}else{
						echo '<li class="nav-item"><a href="sign-in/" class="nav-link btn-primary">Tu cuenta</a></li>';
					}
					?>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<div class="hero-wrap ftco-degree-bg" style="background-image: url('https://media.giphy.com/media/3o7buftlJqFZVXVe5a/giphy.gif');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
				<div class="col-lg-8 ftco-animate">
					<div class="text w-100 text-center mb-md-5 pb-md-5">
						<h1 class="mb-4">Encuentra ese espacio</h1>
						<p style="font-size: 18px;">Detrás de cada espacio hay un anfitrión, una persona que te dará la información que necesitas para facilitarte tu mejor experiencia.</p>
						<!--<a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="ion-ios-play"></span>
							</div>
							<div class="heading-title ml-5">
								<span>Easy steps for renting a car</span>
							</div>
						</a>-->
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section ftco-no-pt bg-light">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-12	featured-top">
					<div class="row no-gutters">
						<div class="col-md-4 d-flex align-items-center">
							<form action="#" class="request-form ftco-animate bg-primary">
								<h2>Renta tu espacio</h2>
								<div class="form-group">
									<label for="" class="label">¿Donde lo necesitas?</label>
									<input type="text" class="form-control" placeholder="City, Airport, Station, etc">
								</div>
								<div class="form-group">
									<label for="exampleFormControlSelect1" class="label">¿Que tipo de espacio buscas?</label>
									<select class="form-control" id="exampleFormControlSelect1">
										<option class="text-dark">Espacio para un evento</option>
										<option class="text-dark">Espacio para guardar cosas</option>
										<option class="text-dark">Espacio para almacenar</option>
									</select>
								</div>
								<div class="d-flex">
									<div class="form-group mr-2">
										<label for="" class="label">¿Para que dia?</label>
										<input type="text" class="form-control" id="book_pick_date" placeholder="Date">
									</div>
									<div class="form-group ml-2">
										<label for="" class="label">¿Que dia lo dejarias?</label>
										<input type="text" class="form-control" id="book_off_date" placeholder="Date">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="label">¿A que hora?</label>
									<input type="text" class="form-control" id="time_pick" placeholder="Time">
								</div>
								<div class="form-group">
									<input type="submit" value="Buscar" class="btn btn-secondary py-3 px-4">
								</div>
							</form>
						</div>
						<div class="col-md-8 d-flex align-items-center">
							<div class="services-wrap rounded-right w-100">
								<h3 class="heading-section mb-4">Facil, rapido, seguro</h3>
								<div class="row d-flex mb-4">
									<div class="col-md-4 d-flex align-self-stretch ftco-animate">
										<div class="services w-100 text-center">
											<div class="icon d-flex align-items-center justify-content-center"><i class="fas fa-map-marked-alt fa-2x text-primary"></i></div>
											<div class="text w-100">
												<h3 class="heading mb-2">Encuentra tu espacio</h3>
											</div>
										</div>      
									</div>
									<div class="col-md-4 d-flex align-self-stretch ftco-animate">
										<div class="services w-100 text-center">
											<div class="icon d-flex align-items-center justify-content-center"><i class="fas fa-wallet fa-2x text-primary"></i></div>
											<div class="text w-100">
												<h3 class="heading mb-2">Pagalo como tu decidas (horas, dias)</h3>
											</div>
										</div>      
									</div>
									<div class="col-md-4 d-flex align-self-stretch ftco-animate">
										<div class="services w-100 text-center">
											<div class="icon d-flex align-items-center justify-content-center"><i class="far fa-handshake fa-2x text-primary"></i></div>
											<div class="text w-100">
												<h3 class="heading mb-2">Ocupalo</h3>
											</div>
										</div>      
									</div>
								</div>
								<p><a href="#" class="btn btn-primary py-3 px-4"><i class="fas fa-search"></i> Explora</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="ftco-section ftco-no-pt bg-light">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 heading-section text-center ftco-animate mb-5">
						<span class="subheading">¿Que espacio necesitas?</span>
						<h2 class="mb-2">Espacios destacados</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="carousel-car owl-carousel">
							<div class="item">
								<div class="car-wrap rounded ftco-animate">
									<div class="img rounded d-flex align-items-end" style="background-image: url(https://s1.eestatic.com/2018/12/18/invertia/Invertia_361728082_145095098_1706x960.jpg);">
									</div>
									<div class="text">
										<h2 class="mb-0"><a href="#">Terraza bonita</a></h2>
										<div class="d-flex mb-3">
											<span class="cat">Para eventos</span>
											<p class="price ml-auto">$500 <span>/hora</span></p>
										</div>
										<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Apartar</a> <a href="#" class="btn btn-secondary py-2 ml-1">Detalles</a></p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="car-wrap rounded ftco-animate">
									<div class="img rounded d-flex align-items-end" style="background-image: url(https://tecnolite.lat/blog/especialistas/files/2017/02/Luz-para-la-cochera-tecnolite-3.jpg);">
									</div>
									<div class="text">
										<h2 class="mb-0"><a href="#">Cochera para almacen</a></h2>
										<div class="d-flex mb-3">
											<span class="cat">Para almacen</span>
											<p class="price ml-auto">$500 <span>/dia</span></p>
										</div>
										<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Apartar</a> <a href="#" class="btn btn-secondary py-2 ml-1">Detalles</a></p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="car-wrap rounded ftco-animate">
									<div class="img rounded d-flex align-items-end" style="background-image: url(https://www.sergiogisbertfotografia.com/wp-content/uploads/2018/03/elige-el-lugar-perfecto-para-tu-boda-1280x853.jpg);">
									</div>
									<div class="text">
										<h2 class="mb-0"><a href="#">Espacio para Boda</a></h2>
										<div class="d-flex mb-3">
											<span class="cat">Para eventos</span>
											<p class="price ml-auto">$500 <span>/hora</span></p>
										</div>
										<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Apartar</a> <a href="#" class="btn btn-secondary py-2 ml-1">Detalles</a></p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="car-wrap rounded ftco-animate">
									<div class="img rounded d-flex align-items-end" style="background-image: url(https://q-cf.bstatic.com/images/hotel/max1024x768/205/205670779.jpg);">
									</div>
									<div class="text">
										<h2 class="mb-0"><a href="#">Espacio en tu corazon</a></h2>
										<div class="d-flex mb-3">
											<span class="cat">Para guardar cosas</span>
											<p class="price ml-auto">$500 <span>/dia</span></p>
										</div>
										<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Apartar</a> <a href="#" class="btn btn-secondary py-2 ml-1">Detalles</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--<section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
						<div class="heading-section heading-section-white pl-md-5">
							<span class="subheading">About us</span>
							<h2 class="mb-4">Welcome to Carbook</h2>

							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							<p><a href="#" class="btn btn-primary py-3 px-4">Search Vehicle</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>-->

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
					<div class="col-md-7 text-center heading-section ftco-animate">
						<span class="subheading">Espacios</span>
						<h2 class="mb-3">¿Que tipo de espacio puedes ocupar?</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="services services-2 w-100 text-center">
							<div class="icon d-flex align-items-center justify-content-center"><i class="fas fa-glass-cheers fa-2x text-white"></i></div>
							<div class="text w-100">
								<h3 class="heading mb-2">Espacio para tu evento</h3>
								<p>¿Te casas?, Espacio para un evento, coctel, fiesta, etc.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="services services-2 w-100 text-center">
							<div class="icon d-flex align-items-center justify-content-center"><i class="fas fa-truck fa-2x text-white"></i></div>
							<div class="text w-100">
								<h3 class="heading mb-2">Espacio para guardar</h3>
								<p>¿Te mudas de la ciudad y no encuentras donde dejar tus cosas?, Espacio para guardar tus cosas por tiempo temporal o indefinido.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="services services-2 w-100 text-center">
							<div class="icon d-flex align-items-center justify-content-center"><i class="fas fa-boxes fa-2x text-white"></i></div>
							<div class="text w-100">
								<h3 class="heading mb-2">Espacio para almacenar</h3>
								<p>Espacio para almacenar tus productos.</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-intro" style="background-image: url(https://mexicodesign.com/wp-content/uploads/2018/09/terrazas-en-las-casas-1-1100x550.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-6 heading-section heading-section-white ftco-animate">
						<h2 class="mb-3">Genera ingresos extra rentando tu espacio.</h2>
						<a href="#" class="btn btn-primary btn-lg"><i class="far fa-hand-point-right"></i> Publica tu espacio</a>
					</div>
				</div>
			</div>
		</section>


		<section class="ftco-section testimony-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5">
					<div class="col-md-7 text-center heading-section ftco-animate">
						<span class="subheading">Testimoniales</span>
						<h2 class="mb-3">El feedback recibido es mas que satisfactorio</h2>
					</div>
				</div>
				<div class="row ftco-animate">
					<div class="col-md-12">
						<div class="carousel-testimony owl-carousel ftco-owl">
							<div class="item">
								<div class="testimony-wrap rounded text-center py-4 pb-5">
									<div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
									</div>
									<div class="text pt-4">
										<p class="mb-4">Lo mejor del mundo.</p>
										<p class="name">Roger Scott</p>
										<!--<span class="position">Marketing Manager</span>-->
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap rounded text-center py-4 pb-5">
									<div class="user-img mb-2" style="background-image: url(images/person_2.jpg)">
									</div>
									<div class="text pt-4">
										<p class="mb-4">Encontre el mejor lugar para mi evento del trabajo.</p>
										<p class="name">Roger Scott</p>
										<!--<span class="position">Interface Designer</span>-->
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap rounded text-center py-4 pb-5">
									<div class="user-img mb-2" style="background-image: url(images/person_3.jpg)">
									</div>
									<div class="text pt-4">
										<p class="mb-4">Pude guardar mis cosas mientras la cuarentena esta en proceso.</p>
										<p class="name">Roger Scott</p>
										<!--<span class="position">UI Designer</span>-->
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
					<div class="col-md-7 heading-section text-center ftco-animate">
						<span class="subheading">Blog</span>
						<h2>Nuestro Blog</h2>
					</div>
				</div>
				<div class="row d-flex">
					<div class="col-md-4 d-flex ftco-animate">
						<div class="blog-entry justify-content-end">
							<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
							</a>
							<div class="text pt-4">
								<div class="meta mb-3">
									<div><a href="#">Oct. 29, 2019</a></div>
									<div><a href="#">Admin</a></div>
									<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
								</div>
								<h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
								<p><a href="#" class="btn btn-primary">Read more</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="blog-entry justify-content-end">
							<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
							</a>
							<div class="text pt-4">
								<div class="meta mb-3">
									<div><a href="#">Oct. 29, 2019</a></div>
									<div><a href="#">Admin</a></div>
									<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
								</div>
								<h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
								<p><a href="#" class="btn btn-primary">Read more</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="blog-entry">
							<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
							</a>
							<div class="text pt-4">
								<div class="meta mb-3">
									<div><a href="#">Oct. 29, 2019</a></div>
									<div><a href="#">Admin</a></div>
									<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
								</div>
								<h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
								<p><a href="#" class="btn btn-primary">Read more</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	

		<section class="ftco-counter ftco-section img bg-light" id="section-counter">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<!--<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="text text-border d-flex align-items-center">
								<strong class="number" data-number="60">0</strong>
								<span>Year <br>Experienced</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="text text-border d-flex align-items-center">
								<strong class="number" data-number="1090">0</strong>
								<span>Total <br>Cars</span>
							</div>
						</div>
					</div>-->
					<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="text text-border d-flex align-items-center">
								<strong class="number" data-number="2590">0</strong>
								<span>Ususarios <br>Felices</span>
							</div>
						</div>
					</div>
					<!--<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="text d-flex align-items-center">
								<strong class="number" data-number="67">0</strong>
								<span>Total <br>Branches</span>
							</div>
						</div>
					</div>-->
				</div>
			</div>
		</section>	

		<footer class="ftco-footer ftco-bg-dark ftco-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2"><a href="#" class="logo">ss<span>pacio</span></a></h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
								<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4 ml-md-5">
							<h2 class="ftco-heading-2">Information</h2>
							<ul class="list-unstyled">
								<li><a href="#" class="py-2 d-block">About</a></li>
								<li><a href="#" class="py-2 d-block">Services</a></li>
								<li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
								<li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
								<li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Customer Support</h2>
							<ul class="list-unstyled">
								<li><a href="#" class="py-2 d-block">FAQ</a></li>
								<li><a href="#" class="py-2 d-block">Payment Option</a></li>
								<li><a href="#" class="py-2 d-block">Booking Tips</a></li>
								<li><a href="#" class="py-2 d-block">How it works</a></li>
								<li><a href="#" class="py-2 d-block">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Have a Questions?</h2>
							<div class="block-23 mb-3">
								<ul>
									
									<li><a href="#"><span class="icon icon-envelope"></span><span class="text">dihola@sspacio.com</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">

						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="#">sspacio</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						</div>
					</div>
				</div>
			</footer>



			<!-- loader -->
			<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


			<script src="js/jquery.min.js"></script>
			<script src="js/jquery-migrate-3.0.1.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.easing.1.3.js"></script>
			<script src="js/jquery.waypoints.min.js"></script>
			<script src="js/jquery.stellar.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/aos.js"></script>
			<script src="js/jquery.animateNumber.min.js"></script>
			<script src="js/bootstrap-datepicker.js"></script>
			<script src="js/jquery.timepicker.min.js"></script>
			<script src="js/scrollax.min.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
			<script src="js/google-map.js"></script>
			<script src="js/main.js"></script>

		</body>
		</html>