<!doctype html>
<html class="no-js" lang="zxx">
<head>
		<?php require_once 'partials/head.php' ?>
		<link rel="stylesheet" href="css/my-style.css"/>
    </head>
    <body>
	<?php require_once 'partials/navbar.php' ?>
		<!-- Start Gallery Us -->
		<section class="news section">
			<div class=" container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="row">
							<div class="col-12">
								<div class="main">
									<cms:pages masterpage='blogs.php' paginate='1' limit='3'>
									<div class="row">

											<div class="col-lg-4">
												<!-- News thumbnail -->
												<div class="fill news-thumbnail">
													<img src="<cms:show blog_image/>" alt="#">
												</div>
											</div>
											<div class="col-lg-8">
												<h1 class="news-title"><a href="<cms:show k_page_link/>"><b> <cms:show k_page_title/> </b> </a></h1>
												<br>
												<cms:excerpt count="10" ignore="img" ><cms:show blog_content /> </cms:excerpt>
												<!-- Meta -->
												<div class="meta">
													<div class="meta-left">
														<span class="author"><a href="#"><img src="img/author1.jpg" alt="#">Admin</a></span>
														<span class="date"><i class="fa fa-clock-o"></i> <cms:date k_page_date format='jS M, y'/> </span>
														<span class="comments"><a href="#"><i class="fa fa-comments"></i> <cms:show k_comment_count /></a></span>
														<!-- <span class="views"><i class="fa fa-eye"></i> 33K </span> -->
													</div>
												</div>
											</div>
											
											<hr/>
										</div>
										<cms:if k_paginated_bottom >
											<div style="width:100%; text-align:center; padding:20px;color:green;"> 
												<span style="">
													<cms:if k_paginated_link_prev ><a href="<cms:show k_paginated_link_next/>"> < Previous Posts</a> | </cms:if>
													<cms:if k_paginated_link_next><a href="<cms:show k_paginated_link_prev/>"> Newer Posts ></a></cms:if>
												</span>
											</div>
										</cms:if>
									</cms:pages>
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
											<h5><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></h5>
											<ul class="comment">
												<li><i class="fa fa-calendar" aria-hidden="true"></i><cms:date k_page_date format='jS M, Y'/></li>
												<li><i class="fa fa-commenting-o" aria-hidden="true"></i><cms:show k_comment_count /></li>
											</ul>
										</div>
									</div>
								</cms:pages>
								<!-- End Single Post -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Gallery Us -->
		
	<!-- Footer Area -->
	<footer id="footer" class="footer ">
		<!-- Footer Top -->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<div class="single-footer">
							<h2>About Us</h2>
							<p>AgriSoul is a leading provider of innovative agricultural solutions dedicated to advancing sustainable farming practices and fostering a healthier planet.</p>
							<!-- Social -->
							<ul class="social">
								<li><a href="#"><i class="icofont-facebook"></i></a></li>
								<li><a href="#"><i class="icofont-google-plus"></i></a></li>
								<li><a href="#"><i class="icofont-twitter"></i></a></li>
								<li><a href="#"><i class="icofont-vimeo"></i></a></li>
								<li><a href="#"><i class="icofont-pinterest"></i></a></li>
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
										<li><a href="index.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a>
										</li>
										<li><a href="about.php"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a>
										
										<li><a href="products.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Products</a></li>
										<li><a href="blogs.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Blogs </a></li>
										<li><a href="contact.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Contact Us </a></li>
									</ul>
								</div>
								
							</div>
						</div>
					</div>
					<!--<div class="col-lg-3 col-md-6 col-12">-->
					<!--	<div class="single-footer">-->
					<!--		<h2>Open Hours</h2>-->
					<!--		<p>Our Opening Hours.</p>-->
					<!--		<ul class="time-sidual">-->
					<!--			<li class="day">Monday - Friday <span>10.00-20.00</span></li>-->
					<!--			<li class="day">Saturday <span>10.00-18.30</span></li>-->
					<!--		</ul>-->
					<!--	</div>-->
					<!--</div>-->
					<div class="col-lg-3 col-md-6 col-12">
						<div class="single-footer">
							<h2>Newsletter</h2>
							<p>subscribe to our newsletter to get all our news in your inbox.. </p>
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
							<p>© Copyright 2018 | All Rights Reserved by <a href="http://www.pathideamultiskill.com"
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
		<!-- Google Map API Key JS -->
		<script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>
		<!-- Gmaps JS -->
		<script src="js/gmaps.min.js"></script>
		<!-- Map Active JS -->
		<script src="js/map-active.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
    </body>
</html>