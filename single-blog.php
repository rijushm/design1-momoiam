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

	<div class="main-single-blog-container" data-scroll-section>
		<div class="cumb">
			<a href="blogandevent"><i class="fas fa-chevron-left"></i> Blogs & Events</a>
		</div>

		<div class="content-row">

			<div class="blog-content left" id="blog-content">
				<h1>Lorem ipsum dolor sit amet, consecte adipiscing</h1>
				<img src="assets/img/food/1.jpg" class="blog-img" alt="blog-name-here">
				<div class="blog-content-text">
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo <a href="#">voluptas nulla</a> pariatur?</p>

					<h3>dolores eos qui ratione voluptatem sequi nesciunt</h3>
					<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
				</div>
			</div>

			<!-- sidebar -->
			<div class="blog-sidebar right" data-scroll-sticky data-scroll data-scroll-target="#blog-content">
				<h2>Related Blogs</h2>

				<div class="rel-blog-row">
					<img src="assets/img/food/2.jpg">
					<div class="rel-blog-content">
						<a href="#">
							<h4 class="blog-title">Lorem ipsum dolor sit amet, consecte adipiscing</h4>
						</a>
					</div>
				</div>

				<div class="rel-blog-row">
					<img src="assets/img/food/3.jpg">
					<div class="rel-blog-content">
						<a href="#">
							<h4 class="blog-title">Lorem ipsum dolor sit amet, consecte adipiscing</h4>
						</a>
					</div>
				</div>

				<div class="rel-blog-row">
					<img src="assets/img/food/4.jpg">
					<div class="rel-blog-content">
						<a href="#">
							<h4 class="blog-title">Lorem ipsum dolor sit amet, consecte adipiscing</h4>
						</a>
					</div>
				</div>

				<!-- events -->

				<h2 style="margin-top: 40px;">Recent Events</h2>
				<div class="event-sidebox">
					<div class="video-box" data-scroll data-scroll-class="active">
						<img src="assets/img/inside/2.jpg">
						<i class="fas fa-play"></i>
					</div>
					<div class="video-box" data-scroll data-scroll-class="active">
						<img src="assets/img/inside/1.jpg">
						<i class="fas fa-play"></i>
					</div>
				</div>
				<!-- events -->

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