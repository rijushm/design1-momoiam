<!DOCTYPE html>
<html>
<head>
	<title>Find a store | MOMO I AM</title>
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

	<div class="find-a-store" data-scroll-section>
		<div class="row">
			<div class="col-sm-6 left">
				<div class="img-back"></div>
			</div>
			<div class="col-sm-6 right">
				<div class="content">
					<h2>Find a MOMO I AM</h2>
					<p>use our device location to find restaurant near you or <a href="#">browse by city</a>.</p>
					<button class="store-locator-btn">Use your location <i class="fas fa-street-view"></i></button>
				</div>
			</div>
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