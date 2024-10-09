<?php require_once('couch/cms.php'); ?>
<cms:template title='Blog' clonable="1" commentable='1'>
	<!-- <cms:editable name="blog_title" type="text" /> -->
	<cms:editable name="blog_image" crop="1" width="670" height="448" type="image" />
	<cms:editable name="blog_content" type="richtext" />
</cms:template>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Site keywords here">
	<meta name="description" content="">
	<meta name='copyright' content=''>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title -->
	<title>AgriSoul - Harmony with the Earth, Nurtured by AgriSoul.</title>

	<!-- Favicon -->
	<link rel="icon" href="img/favicon.png">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
		rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="css/nice-select.css">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- icofont CSS -->
	<link rel="stylesheet" href="css/icofont.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="css/slicknav.min.css">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="css/datepicker.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="css/animate.min.css">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Medipro CSS -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">

</head>

<body>

	<!-- Header Area -->
	<header class="header">
		<!-- Topbar -->
		<div class="topbar primary-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-5 col-12">
						<!-- Contact -->
						<ul class="top-link">
							<li><a href="about.php">About</a></li>
							<li><a href="products.php">Products</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="couch/">Login</a></li>
						</ul>
						<!-- End Contact -->
					</div>
					<div class="col-lg-6 col-md-7 col-12">
						<!-- Top Contact -->
						<ul class="top-contact">
							<li><a href="tel:+917974041441"><i class="fa fa-phone"></i>+(91) 79740 41441</a></li>
							<li><i class="fa fa-envelope"></i><a
									href="mailto:support@agrisoul.com">agrisoulind@gmail.com</a></li>
						</ul>
						<!-- End Top Contact -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-12">
							<!-- Start Logo -->
							<div class="logo">
								<a href="index.php"><img src="img/logo.png" alt="#"></a>
							</div>
							<!-- End Logo -->
							<!-- Mobile Nav -->
							<div class="mobile-nav"></div>
							<!-- End Mobile Nav -->
						</div>
						<div class="col-lg-7 col-md-9 col-12">
							<!-- Main Menu -->
							<div class="main-menu">
								<nav class="navigation">
									<ul class="nav menu">
										<li class="<?php ($name == "index.php") ? print ("active") : $c = "ac"; ?>"><a
												href="index.php">Home </i></a></li>
										<li class="<?php ($name == 'about.php') ? print ('active') : $c = 'ac'; ?>"><a
												href="about.php">About Us </a></li>
										<li class="<?php ($name == 'products.php') ? print ('active') : $c = 'ac'; ?>">
											<a href="products.php">Products </a></li>
										<li
											class="active<?php ($name == 'blogs.php') ? print ('active') : $c = 'ac'; ?>">
											<a href="blogs.php">Blogs </a>
										<li class="<?php ($name == 'contact.php') ? print ('active') : $c = 'ac'; ?>"><a
												href="contact.php">Contact Us</a></li>
									</ul>
								</nav>
							</div>
							<!--/ End Main Menu -->
						</div>
						<div class="col-lg-2 col-12">
							<div class="get-quote">
								<a href="tel:+917974041441" class="btn">Call Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!-- End Header Area -->

	<cms:if k_is_page>
		<!-- Single News -->
		<section class="news-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="row">
							<div class="col-12">
								<div class="single-main">
									<!-- News Head -->
									<div class="news-head">
										<img src="<cms:show blog_image />" alt="#">

									</div>
									<!-- News Title -->
									<h1 class="news-title"> <a href="<cms:show k_page_link/>">
											<cms:show k_page_title />
										</a></h1>
									<!-- Meta -->
									<div class="meta">
										<div class="meta-left">
											<span class="author"><a href="#"><img src="img/author1.jpg"
														alt="#">Admin</a></span>
										</div>
										<div class="meta-right">
											<span class="date"><i class="fa fa-clock-o"></i>
												<cms:date k_page_date format='jS M, y' />
											</span>
											<span class="comments"><a href="#"><i class="fa fa-comments"></i>
													<cms:show k_comment_count /> Comments
												</a></span>
											<!-- <span class="views"><i class="fa fa-eye"></i>33K Views</span> -->
										</div>
									</div>
									<!-- News Text -->
									<div class="news-text">
										<cms:show blog_content />
									</div>
									<div class="blog-bottom">
										<!-- Social Share -->
										<ul class="social-share">
											<li class="facebook"><a href="#"><i
														class="fa fa-facebook"></i><span>Facebook</span></a></li>
											<li class="twitter"><a href="#"><i
														class="fa fa-twitter"></i><span>Twitter</span></a></li>
											<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a>
											</li>
											<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
										</ul>
										<!-- Next Prev -->
										<ul class="prev-next">
											<li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a>
											</li>
											<li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a>
											</li>
										</ul>
										<!--/ End Next Prev -->
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="blog-comments">
									<h2>No Comments Yet</h2>
									<div class="comments-body">
										<!-- Single Comments -->
										<!-- <div class="single-comments">
											<div class="main">
												<div class="head">
													<img src="img/author1.jpg" alt="#"/>
												</div>
												<div class="body">
													<h4>Afsana Mimi</h4>
													<div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
													<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
													<a href="#"><i class="fa fa-reply"></i>replay</a>
												</div>
											</div>
										</div>		 -->
										<!--/ End Single Comments -->
										<!-- Single Comments -->
										<!-- <div class="single-comments left">
											<div class="main">
												<div class="head">
													<img src="img/author2.jpg" alt="#"/>
												</div>
												<div class="body">
													<h4>Naimur Rahman</h4>
													<div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
													<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
													<a href="#"><i class="fa fa-reply"></i>replay</a>
												</div>
											</div>
										</div>		 -->
										<!--/ End Single Comments -->
										<!-- Single Comments -->
										<!-- <div class="single-comments">
											<div class="main">
												<div class="head">
													<img src="img/author3.jpg" alt="#"/>
												</div>
												<div class="body">
													<h4>Suriya Molharta</h4>
													<div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
													<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
													<a href="#"><i class="fa fa-reply"></i>replay</a>
												</div>
											</div>
										</div>		 -->
										<!--/ End Single Comments -->
									</div>
								</div>
							</div>


						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget recent-post">
								<h3 class="title">Recent post</h3>
								<!-- Single Post -->
								<cms:pages>
									<div class="single-post">
										<div class="image">
											<img src="<cms:show blog_image />" alt="#">
										</div>
										<div class="content">
											<h5><a href="<cms:show k_page_link />">
													<cms:show k_page_title />
												</a></h5>
											<ul class="comment">
												<li><i class="fa fa-calendar" aria-hidden="true"></i>
													<cms:date k_page_date format='jS M, y' />
												</li>
												<li><i class="fa fa-commenting-o" aria-hidden="true"></i>
													<cms:show k_comment_count />
												</li>
											</ul>
										</div>
									</div>
								</cms:pages>
								<!-- End Single Post -->
							</div>
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Single News -->


		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>AgriSoul is a leading provider of innovative agricultural solutions dedicated to
									advancing sustainable farming practices and fostering a healthier planet.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-youtube"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a>
											</li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About
													Us</a>
											</li>
											<li><a href="#"><i class="fa fa-caret-right"
														aria-hidden="true"></i>Services</a>
											</li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our
													Cases</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other
													Links</a></li>
										</ul>
									</div>

								</div>
							</div>
						</div>
						<!--<div class="col-lg-3 col-md-6 col-12">-->
						<!--	<div class="single-footer">-->
						<!--		<h2>Open Hours</h2>-->
						<!--		<p>Our Opening Hours.-->
						<!--		</p>-->
						<!--		<ul class="time-sidual">-->
						<!--			<li class="day">Monday - Friday <span>10.00- 8.00</span></li>-->
						<!--<li class="day">Saturday <span>9.00-18.30</span></li>-->
						<!--<li class="day">Monday - Thusday <span>9.00-15.00</span></li>-->
						<!--		</ul>-->
						<!--	</div>-->
						<!--</div>-->
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Newsletter</h2>
								<p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit
									amet, consectetur adipisicing elit,</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
										required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2024 | All Rights Reserved by <a href="http://www.pathideamultiskill.com"
										target="_blank">Path Idea Multi Skill</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->

		<!-- jquery Min JS -->
		<script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
		<script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
		<script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
		<script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
		<script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
		<cms:else />
		<cms:embed 'blogs.php' />

	</cms:if>
</body>

</html>
<?php COUCH::invoke(); ?>