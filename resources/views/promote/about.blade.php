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
	<link rel="stylesheet" href="{{ asset('promote/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('promote/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('promote/css/bootstrap.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('promote/css/flexslider.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('promote/css/style.css')}}">

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
            style="background-image: url('{{ asset('promote/images/PP5.JPG') }}');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="display-t js-fullheight">
							<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">ก
								<h2>Wedding cafe<a href="https://www.facebook.com/profile.php?id=100070443751850"
										target="_blank"> @The land of love</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="fh5co-about" class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-1 img-wrap animate-box" data-animate-effect="fadeInLeft">
						<img src="{{ asset('promote/images/IMG_0116.JPG')}}" alt="" class="custom-image">
					</div>
					<div class="col-md-5 col-md-push-1 animate-box">
						<div class="section-heading">
							<h2>Wedding Cafe</h2>
							<p>คาเฟ่ในสถานที่จัดงานแต่งงานที่มีบรรยากาศร่มรื่น เต็มไปด้วยมนต์เสน่ห์ของความรักและโรแมติก
							</p>
							<p>ร้าน "ดินแดนแห่งความรัก Wedding Cafe" ตั้งอยู่ในย่านติวานนท์ จังหวัดนนทบุรี เป็นคาเฟ่ที่ตกแต่งอย่างสวยงามในธีมความรักและงานแต่งงาน เหมาะสำหรับคู่รักและผู้ที่สนใจในบรรยากาศโรแมนติก ร้านนี้ไม่เพียงเป็นคาเฟ่เท่านั้น แต่ยังมีบริการจัดงานแต่งงานแบบครบวงจร ไม่ว่าจะเป็นการถ่ายพรีเวดดิ้ง การจัดพิธี และการเลี้ยงรับรอง ทำให้เป็นจุดหมายปลายทางยอดนิยมสำหรับคู่บ่าวสาวที่มองหาสถานที่ที่สวยงามและอบอุ่นในการเฉลิมฉลองความรักของพวกเขา</p>
							
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
	<!-- Main -->
	<script src="js/main.js"></script>

</body>

@endsection
