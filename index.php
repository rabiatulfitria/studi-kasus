<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Toko &mdash; Donat</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />
	<link rel="icon" href="images/logo_donat.png">

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<nav class="fh5co-nav" role="navigation" id="h">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo">
						<img src="images/logo_donat.png" alt="logo" width="70" height="64" class="d-inline-block align-text-top">
						<a href="index.php">Toko Donat</a>
					</div>
				</div>
				<div class="col-md-3 col-xs-2" style="padding-top: 20px; padding-bottom: 20px; margin-left: 200px;">
				    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 18px;" href="#h">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 18px;" href="#fh5co-product">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 18px;" href="#about">About</a>
                        </li>
                    </ul>
				</div>
			</div>
		</div>
	</nav>                                                   
	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-heart"></i>
						</span>
						<h3>Cita Rasa</h3>
						<p>Toko Donat, didedikasikan untuk para pecinta donat kentang yang sehat dengan varian yang penuh cita rasa</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-wallet"></i>
						</span>
						<h3>Hemat</h3>
						<p>Menyediakan harga yang terjangkau dan pastinya pas dikonsumsi</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-shopping-cart"></i>
						</span>
						<h3>Gratis Pengantaran</h3>
						<p>Menyediakan gratis pengantaran apabila pembeli sudah membeli donat sebanyak yang telah ditentukan</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Products</h2>
					<p>Dibawah ini adalah beberapa produk dari Toko Donat</p>
				</div>
			</div>
			<div class="row">
				<?php
					require('koneksi.php');
					$sql	= "SELECT * FROM produk_donat";
					$query  = mysqli_query($db_con, $sql);
					WHILE ($data = mysqli_fetch_array($query)){
				?>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/<?php echo $data['gambar']; ?>);">
						</div>
						<div class="desc">
							<h3><a href="index.php"><?php echo $data['nama_donat']; ?></a></h3>
							<span class="price">Rp<?php echo $data['harga']; ?></span><br>
							<span><?php echo $data['nama_kategori']; ?></span><br>
							<span><?php echo $data['status']; ?></span>
						</div>
					</div>
				</div>
				<?php } ?>	
			</div>
		</div>
	</div>
	
	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>TESTIMONI</span>
					<h2>Toko Donat</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/gambar3.png" alt="user" style="width: 100px; height:100px">
									</figure>
									<span>Fatimatuz Zahro</span>
									<blockquote>
										<p>&ldquo;Donat kentang ini bisa mengganjal lapar dengan porsi yang pas, camilan cocok untuk yang kawatir gendut :D &rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/gambar4.png" alt="user" style="width: 100px; height:100px">
									</figure>
									<span>Deoo Andica</span>
									<blockquote>
										<p>&ldquo;Donat ini sangat enak dan harganya terjangkau, menurut saya varian rasa 'Dont Cry' yang sangat saya sukai karena tekstur donat yang lembut dipadu dengan toping crispy, kalian wajib coba.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="col-md-8 col-md-offset-2 text-center fh5co-heading" id="about">
					<h2>About</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-4 animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff" style="margin-left: 10%">
                        <div class="heading_container">
                            <h2>
                                Toko Donat Kentang
                            </h2>
                        </div>
						<img src="images/colorfultastydonuts.jpg">
						<p>
                            There are many variations of passages of Lorem Ipsum available,
							but the majority have suffered alteration
                            in some form, by injected humour,
							or randomised words which don't look even slightly believable.
                        </p>
					</div>
				</div>		
				<div class="col-md-6 col-sm-4 animate-box" data-animate-effect="fadeIn" style="display: flex;">
					<div class="fh5co-staff"  style="margin-left: 30%">
						<img src="images/robiatul.jpg">
						<h3>Rabiatul Fitria SP</h3>
						<strong class="role">Owner Toko Donat</strong>
					</div>
				</div>
			</div>
	</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

