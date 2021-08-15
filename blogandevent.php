<!DOCTYPE html>
<html>
<head>
	<title>Blogs & Events</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/anim.css">
	<link rel="stylesheet" type="text/css" href="assets/css/loader.css">
	<link rel="stylesheet" type="text/css" href="assets/css/blog.css">
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

	<div class="blog-events" data-scroll-section>
		<div class="hero">
			<h4>Blogs & Events</h4>
			<h2>Perfect place to dinein</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
			<div class="video-box" data-scroll data-scroll-class="active">
				<img src="assets/img/inside/2.jpg">
				<i class="fas fa-play"></i>
			</div>
		</div>

		<div class="blogs-container">
			<div class="row">

				<!-- single blog -->
				<div class="col-sm-4" style="--delay: 0.5s;" data-scroll data-scroll-class="active">
					<img src="assets/img/food/1.jpg">
					<a href="single-blog">
						<h3>Lorem ipsum dolor sit amet, consecte adipiscing</h3>
					</a>
					<span class="date-post">21 May, 2021</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

					<a href="single-blog" class="read-btn">Read More <i class="fas fa-chevron-right"></i></a>
				</div>
				<!-- single blog -->

				<!-- single blog -->
				<div class="col-sm-4" style="--delay: 1s;" data-scroll data-scroll-class="active">
					<img src="assets/img/food/22.jpeg">
					<a href="#">
						<h3>Lorem ipsum dolor sit amet, consecte adipiscing</h3>
					</a>
					<span class="date-post">23 July, 2021</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

					<a href="#" class="read-btn">Read More <i class="fas fa-chevron-right"></i></a>
				</div>
				<!-- single blog -->

				<!-- single blog -->
				<div class="col-sm-4" style="--delay: 1.5s;" data-scroll data-scroll-class="active">
					<img src="assets/img/food/bowl1.jpg">
					<a href="#">
						<h3>Lorem ipsum dolor sit amet, consecte adipiscing</h3>
					</a>
					<span class="date-post">14 Feb, 2021</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

					<a href="#" class="read-btn">Read More <i class="fas fa-chevron-right"></i></a>
				</div>
				<!-- single blog -->

			</div>

			<button class="more-blog-btn">See More</button>

		</div>
	</div>

	<?php include "assets/public/footer.php" ?>

	</section>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
	<script src="assets/js/locomotive-scroll.js"></script>
	<script src="assets/js/splitting.min.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>
</html>