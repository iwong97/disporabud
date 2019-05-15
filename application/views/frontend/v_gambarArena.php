<!DOCTYPE html>
<html lang="en">
<head>
<title>Fasilitas Prasarana</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Major - 5* Hotel template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/frontend/assets/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="<?php echo base_url() ?>assets/frontend/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/frontend/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/frontend/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/frontend/assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link href="<?php echo base_url() ?>assets/frontend/assets/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/frontend/assets/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/frontend/assets/styles/responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/frontend/assets/styles/rooms.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/frontend/assets/styles/rooms_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
					<!-- <div class="logo_img">
						<img src="<?php echo base_url() ?>assets/frontend/assets/logoDinas.PNG" width="" height="">	
					</div> -->
					<div class="logo">
							<a href="<?php echo base_url() ?>c_disporabud/beranda">
								<div> DISPORAPARBUD </div>
								<div> Dinas Kepemudaan Olahraga Pariwisata <br></br>
								dan Kebudayaan </div>
							</a>
						</div>
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="<?php echo base_url() ?>c_disporabud/beranda">Beranda</a></li>
                				<li><a href="<?php echo base_url() ?>c_disporabud/profil">Profil</a></li>
                				<li><a href="<?php echo base_url() ?>c_disporabud/prosedur">Prosedur</a></li>
                				<li class="active"><a href="<?php echo base_url() ?>c_disporabud/fasilitas">Fasilitas Prasarana</a></li>  
                				<li><a href="<?php echo base_url() ?>c_disporabud/kontak">Kontak</a></li>
                				<li><a href="<?php echo base_url() ?>c_disporabud/daftar/masyarakat">Register</a></li>
                				<li><a href="<?php echo base_url() ?>c_disporabud/v_login">Login</a></li>
							</ul>
						</nav>
						
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="background_image" style="background-image:url(images/menu.jpg)"></div>
		<div class="menu_content d-flex flex-column align-items-center justify-content-center">
			<ul class="menu_nav_list text-center">
				<li><a href="<?php echo base_url() ?>c_disporabud/beranda">Beranda</a></li>
                <li><a href="<?php echo base_url() ?>c_disporabud/profil">Profil</a></li>
                <li><a href="<?php echo base_url() ?>c_disporabud/prosedur">Prosedur</a></li>
                <li class="active"><a href="<?php echo base_url() ?>c_disporabud/fasilitas">Fasilitas</a></li>  
                <li><a href="<?php echo base_url() ?>c_disporabud/kontak">Kontak</a></li>
                <li><a href="<?php echo base_url() ?>c_disporabud/daftar/masyarakat">Register</a></li>
                <li><a href="<?php echo base_url() ?>c_disporabud/v_login">Login</a></li>
			</ul>
		</div>
	</div>

	<!-- Rooms -->

	<div class="rooms">
		<div class="container">
			<div class="row rooms_row">
				
				<!-- Room -->
				<div class="col-lg-4">
					<div class="rooms_item">
						<div class="rooms_image"><img src="<?php echo base_url() ?>assets/frontend/assets/images/sepakbola.jpg" alt="https://unsplash.com/@jonathan_percy"></div>
						<div class="rooms_title_container text-center">
							<div class="rooms_title"><h1>Stadion Bola </h1></div>
							<div class="rooms_price"> Event Khusus - </span><span> Rp. 5.0000.000</span> /Hari</div>
						</div>
						<!-- <div class="rooms_list">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Panjang Lapangan:</div></div>
									<div>120 m²</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Lebar Lapangan:</div></div>
									<div>90 m²</div>
								</li>
							</ul>
						</div> -->
						<div class="button rooms_button ml-auto mr-auto"><a href="<?php echo base_url() ?>c_disporabud/detailBolaKhusus">Lihat Detail</a></div>
					</div>
				</div>

				<!-- Room -->
				<div class="col-lg-4">
					<div class="rooms_item">
						<div class="rooms_image"><img src="<?php echo base_url() ?>assets/frontend/assets/images/sepakbola.jpg" alt="https://unsplash.com/@jonathan_percy"></div>
						<div class="rooms_title_container text-center">
							<div class="rooms_title"><h1>Stadion Bola </h1></div>
							<div class="rooms_price"> Event Biasa - </span><span> Rp. 1.0000.000</span> /Hari</div>
						</div>
						<!-- <div class="rooms_list">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Panjang Lapangan:</div></div>
									<div>120 m²</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Lebar Lapangan:</div></div>
									<div>90 m²</div>
								</li>
							</ul>
						</div> -->
						<div class="button rooms_button ml-auto mr-auto"><a href="<?php echo base_url() ?>c_disporabud/detailBolaKhusus">Lihat Detail</a></div>
					</div>
				</div>

				<!-- Room -->
				<div class="col-lg-4">
					<div class="rooms_item">
						<div class="rooms_image"><img src="<?php echo base_url() ?>assets/frontend/assets/images/GorBasket.jpeg" alt="https://unsplash.com/@jonathan_percy"></div>
						<div class="rooms_title_container text-center">
							<div class="rooms_title"><h1>Gor Basket </h1></div>
							<div class="rooms_price"> <span>Rp. 750.000</span> /Hari</div>
						</div>
						<!-- <div class="rooms_list">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Panjang Lapangan:</div></div>
									<div>120 m²</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Lebar Lapangan:</div></div>
									<div>90 m²</div>
								</li>
							</ul>
						</div> -->
						<div class="button rooms_button ml-auto mr-auto"><a href="<?php echo base_url() ?>c_disporabud/detailBasket">Lihat Detail</a></div>
					</div>
				</div>

				<!-- Room -->
				<div class="col-lg-4">
					<div class="rooms_item">
						<div class="rooms_image"><img src="<?php echo base_url() ?>assets/frontend/assets/images/GorFutsal.jpeg" alt="https://unsplash.com/@niklanus"></div>
						<div class="rooms_title_container text-center">
							<div class="rooms_title"><h1>Gor Futsal</h1></div>
							<div class="rooms_price"> <span>Rp. 750.000</span> /Hari</div>
						</div>
						<!-- <div class="rooms_list">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Panjang Lapangan:</div></div>
									<div>120 m²</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Lebar Lapangan:</div></div>
									<div>90 m²</div>
								</li>
							</ul>
						</div> -->
						<div class="button rooms_button ml-auto mr-auto"><a href="<?php echo base_url() ?>c_disporabud/detailFutsal">Lihat Detail</a></div>
					</div>
				</div>

				<!-- Room -->
				<div class="col-lg-4">
					<div class="rooms_item">
						<div class="rooms_image"><img src="<?php echo base_url() ?>assets/frontend/assets/images/GorTennis.jpeg" alt="https://unsplash.com/@niklanus"></div>
						<div class="rooms_title_container text-center">
							<div class="rooms_title"><h1>Gor Tennis Lapang</h1></div>
							<div class="rooms_price"> <span>Rp. 750.000	</span> /Hari</div>
						</div>
						<!-- <div class="rooms_list">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Panjang Lapangan:</div></div>
									<div>120 m²</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Lebar Lapangan:</div></div>
									<div>90 m²</div>
								</li>
							</ul>
						</div> -->
						<div class="button rooms_button ml-auto mr-auto"><a href="<?php echo base_url() ?>c_disporabud/detailTennis">Lihat Detail</a></div>
					</div>
				</div>

				<!-- Room -->
				<div class="col-lg-4">
					<div class="rooms_item">
						<div class="rooms_image"><img src="<?php echo base_url() ?>assets/frontend/assets/images/GorGalaTangkas.jpeg" alt="https://unsplash.com/@niklanus"></div>
						<div class="rooms_title_container text-center">
							<div class="rooms_title"><h1>Gor Laga Tangkas</h1></div>
							<div class="rooms_price"> <span>Rp. 750.000</span> /Hari</div>
						</div>
						<!-- <div class="rooms_list">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Panjang Lapangan:</div></div>
									<div>120 m²</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Lebar Lapangan:</div></div>
									<div>90 m²</div>
								</li>
							</ul>
						</div> -->
						<div class="button rooms_button ml-auto mr-auto"><a href="<?php echo base_url() ?>c_disporabud/detailLagaTangkas">Lihat Detail</a></div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url() ?>assets/frontend/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/assets/styles/bootstrap-4.1.2/popper.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/assets/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/assets/plugins/greensock/TweenMax.min.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/assets/plugins/greensock/animation.gsap.min.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/assets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/assets/plugins/easing/easing.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/assets/plugins/progressbar/progressbar.min.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/assets/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/assets/https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="<?php echo base_url() ?>assets/frontend/assets/js/custom.js"></script>
</body>
</html>