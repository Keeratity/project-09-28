@extends('layouts.promote')
@section('search.target', route('promote.index'))

@section('content')

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tasty &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords"
		content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FreeHTML5.co

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

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

	<div class="fh5co-loader"></div>

	<div id="page">


		<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner"
            style="background-image: url('{{ asset('promote/images/PP4.JPG') }}');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="display-t js-fullheight">
							<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">

								<h2>Wedding cafe<a href="https://www.facebook.com/profile.php?id=100070443751850"
										target="_blank"> @The land of love</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>


		<div id="fh5co-gallery" class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 fh5co-heading animate-box">
						<h2>ภาพบรรยากาศ</h2>
						<div class="row">
							<div class="col-md-6">
							</div>
						</div>
					</div>


					<div class="col-md-3 col-sm-3 fh5co-gallery_item">
						<div class="fh5co-bg-img" style="background-image: url('{{ asset('promote/images/G1.JPG') }}');"
							data-trigger="zoomerang"></div>
						<div class="fh5co-bg-img" style="background-image: url('{{ asset('promote/images/G2.JPG') }}');"
							data-trigger="zoomerang"></div>
					</div>
					<div class="col-md-6 col-sm-6 fh5co-gallery_item">
						<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url('{{ asset('promote/images/G8.JPG') }}');"
							data-trigger="zoomerang"></div>
					</div>
					<div class="col-md-3 col-sm-3 fh5co-gallery_item">
						<div class="fh5co-bg-img" style="background-image: url('{{ asset('promote/images/G3.JPG') }}');"
							data-trigger="zoomerang"></div>
						<div class="fh5co-bg-img" style="background-image: url('{{ asset('promote/images/G4.JPG') }}');"
							data-trigger="zoomerang"></div>
					</div>

					<div class="col-md-3 col-sm-3 fh5co-gallery_item">
						<div class="fh5co-bg-img" style="background-image: url('{{ asset('promote/images/G5.JPG') }}');"
							data-trigger="zoomerang"></div>
						<div class="fh5co-bg-img" style="background-image: url('{{ asset('promote/images/G6.JPG') }}');"
							data-trigger="zoomerang"></div>
					</div>
					<div class="col-md-3 col-sm-3 fh5co-gallery_item">
						<div class="fh5co-bg-img" style="background-image: url('{{ asset('promote/images/G7.JPG') }}');"
							data-trigger="zoomerang"></div>
						<div class="fh5co-bg-img" style="background-image: url('{{ asset('promote/images/G8.JPG') }}');"
							data-trigger="zoomerang"></div>
					</div>
					<div class="col-md-6 col-sm-6 fh5co-gallery_item">
						<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url('{{ asset('promote/images/G10.JPG') }}');"
							data-trigger="zoomerang"></div>
					</div>

					<div class="col-md-3 col-sm-3 fh5co-gallery_item">
						<div class="fh5co-bg-img" style="background-image: url('{{ asset('promote/images/G9.JPG') }}');"
							data-trigger="zoomerang"></div>
						<div class="fh5co-bg-img" style="background-image: url('{{ asset('promote/images/G7.JPG') }}');"
							data-trigger="zoomerang"></div>
					</div>
					<div class="col-md-6 col-sm-6 fh5co-gallery_item">
						<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url('{{ asset('promote/images/G12.JPG') }}');"
							data-trigger="zoomerang"></div>
					</div>
					<div class="col-md-3 col-sm-3 fh5co-gallery_item">
						<div class="fh5co-bg-img" style="background-image: url('{{ asset('promote/images/G11.JPG') }}');"
							data-trigger="zoomerang"></div>
						<div class="fh5co-bg-img" style="background-image: url('{{ asset('promote/images/G13.JPG') }}');"
							data-trigger="zoomerang"></div>
					</div>

					<div class="col-md-3 col-sm-3 fh5co-gallery_item">
						<div class="fh5co-bg-img" style="background-image: url('{{ asset('promote/images/G3.JPG') }}');"
							data-trigger="zoomerang"></div>
						<div class="fh5co-bg-img" style="background-image: url('{{ asset('promote/images/G6.JPG') }}');"
							data-trigger="zoomerang"></div>
					</div>
					<div class="col-md-3 col-sm-3 fh5co-gallery_item">
						<div class="fh5co-bg-img" style="background-image: url('{{ asset('promote/images/G9.JPG') }}');"
							data-trigger="zoomerang"></div>
						<div class="fh5co-bg-img" style="background-image: url('{{ asset('promote/images/G9.JPG') }}');"
							data-trigger="zoomerang"></div>
					</div>
					<div class="col-md-6 col-sm-6 fh5co-gallery_item">
						<div class="fh5co-bg-img fh5co-gallery_big" style="background-image:  url('{{ asset('promote/images/G5.JPG') }}');"
							data-trigger="zoomerang"></div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-featured-testimony" class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 fh5co-heading animate-box">

					</div>

					<div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInLeft">
						<img src="{{ asset('promote/images/person_1.jpg')}}" alt="" width="1000" height="600">
					</div>
					<div class="col-md-7 animate-box" data-animate-effect="fadeInRight">
						<blockquote>

						</blockquote>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url('{{('images/hero_1.jpeg') }} ');"
			data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						
					</div>
				</div>
			</div>
		</div>


	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/zoomerang.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script>
		Zoomerang
			.config({
				maxHeight: 600,
				maxWidth: 900,
				bgColor: '#000',
				bgOpacity: .85
			})
			.listen('[data-trigger="zoomerang"]')
	</script>

</body>

@endsection

