<?php $url = $_SERVER['REQUEST_URI'];
$name = basename($url); ?><!-- Preloader -->
<!-- <div class="preloader">
	<div class="loader">
		<div class="loader-outter"></div>
		<div class="loader-inner"></div>

		<div class="indicator">
			<svg width="16px" height="12px">
				<polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
				<polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
			</svg>
		</div>
	</div>
</div> -->
<!-- End Preloader -->
<!-- Header Area -->
<header class="header">
	<!-- Topbar -->
	<div class="topbar primary-bg">
		<div class=" tw-flex tw-justify-around tw-flex-col sm:tw-flex-row tw-items-center tw-gap-2 w-full">
			<!-- Social Icons -->
			<div class="tw-flex tw-gap-5">
				<span><a href="https://www.facebook.com/boialexis/" target="_blank"><i
							class="fa fa-facebook"></i></a></span>
				<span><a href="https://www.instagram.com/boialexis/" target="_blank"><i
							class="fa fa-instagram"></i></a></span>
				<span><a href="https://twitter.com/boialexis" target="_blank"><i class="fa fa-twitter"></i></a></span>
				<span><a href="https://www.linkedin.com/company/boialexis/" target="_blank"><i
							class="fa fa-linkedin"></i></a></span>
				<span><a href="https://www.youtube.com/channel/boialexis" target="_blank"><i
							class="fa fa-youtube"></i></a></span>
			</div>
			<!-- End Social Icons -->
			<!-- Top Contact -->
			<div class="top-contact ">
				<span class="><a href=" tel:+917974041441"><i class="fa fa-phone"></i>+(91)
					9876543210</a></span>
				<span class="><i class=" fa fa-envelope"></i><a
						href="mailto:agrisoulind@gmail.com">boialexis@gmail.com</a></span>
			</div>
			<!-- End Top Contact -->
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
							<a href="index.php"><img src="img/logo.png" alt="#" style="width:125px"></a>
						</div>
						<!-- End Logo -->
						<!-- Mobile Nav -->
						<div class="mobile-nav"></div>
						<!-- End Mobile Nav -->
					</div>
					<style>
						.dropdown:hover .dropdown-menu {
							display: block;
						}
					</style>
					<div class="col-lg-7 col-md-9 col-12 ">
						<!-- Main Menu -->
						<div class="main-menu">
							<nav class="navigation">
								<ul class="nav menu">
									<li class="<?php ($name == "index.php") ? print ("active") : $c = "ac"; ?>"><a
											href="index.php">Home </i></a></li>
									<li
										class="dropdown <?php ($name == 'about.php') ? print ('active') : $c = 'ac'; ?>">
										<a href="#" class="dropdown-toggle">
											About Us
										</a>
										<ul class="dropdown-menu active">
											<li class="hover:tw-bg-white hover:tw-text-white" style="width: 100%;">
												<a href="about.php" style="width: 100%;">About</a>
											</li>
											<li class="hover:tw-bg-white hover:tw-text-white" style="width: 100%;">
												<a href="bussiness-plan.php" style="width: 100%;">Bussiness Plans</a>
											</li>
											<li class="hover:tw-bg-white hover:tw-text-white" style="width: 100%;">
												<a href="terms.php" style="width: 100%;">Terms & Conditions</a>
											</li>
											<li class="hover:tw-bg-white hover:tw-text-white" style="width: 100%;">
												<a href="legal.php" style="width: 100%;">Legal</a>
											</li>
											<li class="hover:tw-bg-white hover:tw-text-white" style="width: 100%;">
												<a href="bank.php" style="width: 100%;">Our Bankers</a>
											</li>
										</ul>
									</li>
									<li
										class="<?php ($name == "categories.php?category=All") ? print ('active') : $c = 'ac'; ?>">
										<a href="categories.php?category=All ">Products </a>
									</li>
									<li class="<?php ($name == 'blogs.php') ? print ('active') : $c = 'ac'; ?>"><a
											href="blogs.php">Blogs </a>
									<li class="<?php ($name == 'contact.php') ? print ('active') : $c = 'ac'; ?>"><a
											href="contact.php">Contact Us</a></li>
								</ul>
							</nav>
						</div>
						<!--/ End Main Menu -->
					</div>
					<div class="col-lg-2 col-12">
						<div class="get-quote">
							<a href="tel:+919876543210" class="btn">Call Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Header Inner -->
</header>
<!-- End Header Area -->