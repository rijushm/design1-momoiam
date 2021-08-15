<!DOCTYPE html>
<html>
<head>
	<title>MOMO I AM</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/anim.css">
	<link rel="stylesheet" type="text/css" href="assets/css/loader.css">
	<link rel="stylesheet" type="text/css" href="assets/css/locomotive-scroll.css">
	<link rel="stylesheet" type="text/css" href="assets/css/splitting.css">
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>

	<div class="screen_loader show">
		<img src="assets/img/logo/logo.png">
		<div class="preloader">
		  <div class="preloader_inner">100%</div>
		</div>
	</div>

	<section data-scroll-container>

	<?php include "assets/public/header.php" ?>

	<div class="hero_container" data-scroll-section>
		<div class="content_body">
			<p data-scroll data-scroll-speed="1.5">Fresh innovative recipes</p>
			<h2 data-scroll data-scroll-speed="1">Asian, Tibetan<br> delicacies at its best</h2>
		</div>
		<div class="graphic_body" data-scroll data-scroll-speed="1" onclick="scrollSmoothTo('about')">>
			<!-- <a href="javascript:void(0)"> -->
				<lottie-player  src="https://assets8.lottiefiles.com/packages/lf20_kkjr5ggm.json"  background="transparent"  speed="1" loop autoplay></lottie-player>
			<!-- </a> -->
			<!-- <img src="assets/img/gif/2.gif"> -->
		</div>
	</div>

	<div class="story_container" data-scroll-section id="about">
		<div class="">
			<div class="conBox" data-scroll data-scroll-speed="4">
					<h2 style="font-weight:500;">Our Story</h2>
					<p>When it comes to tibetan delicacies, thai inspired stir fries, hand made noodles and home made sauces- 'momo i am' is on top of its game...
					a place where u can catch up with your loved ones and at the same time fill your stomach with delicious momos .
					good music, great food and chilled out ambience is what we r all about.
					street food its best- we use low cholestrol heart smart oil for cooking and the freshest poultry and vegetables available in the local markets in a very hygienic working environment... come check us out, u won't be disappointed- GURANTEED</p>
				</div>
		</div>

		<div class="imgGlobe" data-scroll data-scroll-speed="-2" data-scroll-direction="horizontal">
			<img src="assets/img/inside/4.jpg">
		</div>

		<div class="imgGlobeUp" data-scroll data-scroll-speed="2" data-scroll-direction="horizontal">
			<img src="assets/img/inside/5.jpg">
		</div>
	</div>

	<div class="feature_container" data-scroll-section>
		<div class="content">
			<div class="left">
				<p data-scroll data-scroll-speed="2">Welcome to MOMO I AM</p>
				<h2 data-scroll data-scroll-speed="2" data-scroll-class="active" data-scroll-repeat data-splitting>Stylish and<br> Flavorful<br> Components</h2>
			</div>
			<div class="imgBox" data-scroll data-scroll-speed="0">
				<img src="assets/img/food/plate2.png" class="plate p1">
				<img src="assets/img/food/plate3.png" class="plate p2">
				<img src="assets/img/food/plate1.png" class="plate p3">
			</div>
		</div>
	</div>

	<div class="menu_container" data-scroll-section>
		<h2>View our menu</h2>

		<div class="row">
			<div class="col-2" data-scroll data-scroll-speed="1">
				<div class="menuBox">
					<img src="assets/img/food/17-1.jpg">
					<img src="assets/img/food/17.jpg">
					<h4>Momos</h4>
					<a href="">View more</a>
				</div>
			</div>
			<div class="col-2">
				<div class="menuBox" data-scroll data-scroll-speed="-1">
					<img src="assets/img/food/18-1.jpg">
					<img src="assets/img/food/18.jpg">
					<h4>Noodles</h4>
					<a href="">View more</a>
				</div>
			</div>
			<div class="col-2" data-scroll data-scroll-speed="1">
				<div class="menuBox">
					<img src="assets/img/food/20-1.jpg">
					<img src="assets/img/food/20.jpg">
					<h4>Bao</h4>
					<a href="">View more</a>
				</div>
			</div>
			<div class="col-2">
				<div class="menuBox" data-scroll data-scroll-speed="-1">
					<img src="assets/img/drink/7-1.jpg">
					<img src="assets/img/drink/7.jpg">
					<h4>Drinks</h4>
					<a href="">View more</a>
				</div>
			</div>
			<div class="col-2">
				<div class="menuBox" data-scroll data-scroll-speed="1">
					<img src="assets/img/dessert/2-1.jpg">
					<img src="assets/img/dessert/2.jpg">
					<h4>Dessert</h4>
					<a href="">View more</a>
				</div>
			</div>
		</div>
	</div>

	<footer data-scroll-section class="home-footer">
		<div class="content">
			<div class="top">
				<img src="assets/img/logo/logo.png" class="logo">
				<ul class="social_ul">
					<li><a href=""><i class="fab fa-facebook"></i></a></li>
					<li><a href=""><i class="fab fa-instagram"></i></a></li>
					<li><a href=""><i class="fab fa-twitter"></i></a></li>
					<li><a href=""><i class="fab fa-youtube"></i></a></li>
				</ul>
				<div class="con">
					<ul>
						<li class="nav_li_footer active"><a href="index.html">Home</a></li>
						<li class="nav_li_footer"><a href="">About</a></li>
						<li class="nav_li_footer"><a href="">Menu</a></li>
						<li class="nav_li_footer"><a href="">Reviews</a></li>
						<li class="nav_li_footer"><a href="">Career</a></li>
						<li class="nav_li_footer"><a href="">Blog & event</a></li>
					</ul>

					<ul>
						<li>Sector 1, Salt Lake, Kolkata</li>
						<li class="break">|</li>
						<li class="nav_li_footer"><a href="">+91 9999988888</a></li>
						<li class="break">|</li>
						<li class="nav_li_footer"><a href="">support@momoiam.com</a></li>
						<li class="nav_li_footer btn"><a href="">store Location</a></li>
						<li class="nav_li_footer btn"><a href="">Contact us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	</section>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
	<script src="assets/js/locomotive-scroll.js"></script>
	<script src="assets/js/splitting.min.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	

</body>
</html>