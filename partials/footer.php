<!-- Footer Area -->
<footer id="footer" class="footer ">
	<!-- Footer Top -->
	<div class="footer-top">
		<div class=" tw-mx-10 sm:tw-ml-[4rem] " style="">
			<div class="tw-flex tw-justify-evenly tw-gap-7 tw-flex-wrap">
				<div class="tw-w-full sm:tw-w-[270px]  tw-flex-initial">
					<div class="single-footer">
						<h2>About Us</h2>
						<p class="tw-capitalize tw-text-justify">Bioalexis Trading India Private Limited registered
							under The Companies Act 2013 in INDIA.
						</p>
						<!-- Social -->
						<ul class="social">
							<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
						</ul>
						<!-- End Social -->
					</div>
				</div>

				<div class="">
					<div class="single-footer f-link">
						<h2>Company</h2>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<ul>
									<li><a href="index.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a>
									</li>
									<li class="tw-text-nowrap"><a href="about.php"><i class="fa fa-caret-right"
												aria-hidden="true"></i>About
											Us</a>


									<li class="tw-text-nowrap"> <a href="dir_message.php" style="width: 100%;"><i
												class="fa fa-caret-right" aria-hidden="true"></i>Director's Message</a>
									</li>
									<li class="tw-text-nowrap"><a href="about.php"><i class="fa fa-caret-right"
												aria-hidden="true"></i> Mission
											& Vision
										</a></li>
									<li class="tw-text-nowrap"><a href="bussiness-plan.php"><i class="fa fa-caret-right"
												aria-hidden="true"></i> Bussiness Plan
										</a></li>
									<li class="tw-text-nowrap"><a href="bank.php"><i class="fa fa-caret-right"
												aria-hidden="true"></i> Banking Details
										</a></li>
									<!-- <li><a href="contact.php"><i class="fa fa-caret-right" aria-hidden="true"></i>
											Contact Us </a></li> -->
								</ul>
							</div>

						</div>
					</div>
				</div>
				<?php
				$products = array(
					array('name' => 'Alexis Trufit', 'price' => '1600', 'img' => 'alexis trufit.jpg', 'category' => 'Personal Care', 'description' => 'Alexis Trufit is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Alexis Trufit is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Alexis Trufit is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Alexis Trufit is a great choice for women who are looking for a convenient and ef	ctive way to support their health and wellness.'),
					array('name' => 'Mr. Alexis ', 'price' => '933', 'img' => 'mr_alexis.jpg', 'category' => 'Personal Care', 'description' => 'Mr. Alexis is a dietary supplement in the form of a tablet that is designed for men. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Mr. Alexis is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Mr. Alexis is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Mr. Alexis is a great choice for men who are looking for a convenient and effective way to support their health and wellness.'),
					array('name' => 'Alexis Vama', 'price' => '1350', 'img' => 'alexi8.png', 'category' => 'Personal Care', 'description' => 'Alexis Vama is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Alexis Vama is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Alexis Vama is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Alexis Vama is a great choice for women who are looking for a convenient and effective way to support their health and wellness.'),
					array('name' => 'Chloro Alexis', 'price' => '2499', 'img' => 'chloro.png', 'category' => 'Personal Care', 'description' => 'Chloro Alexis is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Chloro Alexis is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Chloro Alexis is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Chloro Alexis is a great choice for women who are looking for a convenient and effective way to support their health and wellness.'),
					array('name' => 'Alexis Juice', 'price' => '2500', 'img' => 'omega-rich.png', 'category' => 'Personal Care', 'description' => 'Alexis Juice is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Alexis Juice is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Alexis Juice is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Alexis Juice is a great choice for women who are looking for a convenient and effective way to support their health and wellness.'),
				);
				?>
				<div class="">
					<div class="single-footer f-link">
						<h2>Our Products</h2>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<ul>
									<?php foreach ($products as $product): ?>

										<li><a class="tw-text-nowrap"
												href="product-details.php?title=<?php echo $product['name']; ?>&price=<?php echo $product['price']; ?>&img=<?php echo $product['img']; ?>&category=<?php echo $product['category']; ?>&description=<?php echo $product['description']; ?>">
												<i class="fa fa-caret-right" aria-hidden="true"></i>
												<?php echo $product['name']; ?>
											</a>
										</li>
									<?php endforeach; ?>

								</ul>
							</div>

						</div>
					</div>
				</div>
				<div class="">
					<div class="single-footer f-link ">
						<h2>Quick Links</h2>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<ul>
									<li class="tw-text-nowrap"> <a href="terms.php" class="tw-text-nowrap"
											style="width: 100%;"><i class="fa fa-caret-right"
												aria-hidden="true"></i>Terms & Conditions</a>
									</li>
									<li class="tw-text-nowrap"><a href="legal.php" class="tw-text-nowrap"><i
												class="fa fa-caret-right" aria-hidden="true"></i>Legal</a>

									<li class="tw-text-nowrap"><a href="http://login.bioalexis.com/"><i
												class="fa fa-caret-right" aria-hidden="true"></i>Login</a></li>
									<li class="tw-text-nowrap"><a href="download.php"><i class="fa fa-caret-right"
												aria-hidden="true"></i>Download
										</a></li>
									<li class="tw-text-nowrap"><a href="gallery.php"><i class="fa fa-caret-right"
												aria-hidden="true"></i>
											Gallery</a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>
				<div class="">
					<div class="single-footer f-link ">
						<h2>Contact</h2>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12 tw-w-[205px] sm:tw-w-full">
								<ul>
									<li> <a href="contact.php" style="width: 100%;"><i class="fa fa-location-dot"
												aria-hidden="true"></i> Office no 201, (Second floor), National
											Corporate Park,GE Road , Raipur 492001</a>
									</li>
									<li class="tw-text-nowrap"><a href="tel:07713501272" class="tw-text-nowrap"><i
												class="fa fa-phone" aria-hidden="true"></i> 0771-3501272


									<li class="tw-text-nowrap"><a href="https://wa.me/918827268754" target="_blank"><i
												class="fab fa-whatsapp" aria-hidden="true"></i>+(91)
											8827268754</a></li>
									<li class="tw-text-nowrap"><a href="mailto:support@bioalexis.com"
											class="tw-lowercase"><i class="fa fa-envelope"
												aria-hidden="true"></i>support@bioalexis.com
										</a></li>

								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Footer Top -->
	<!-- Copyright -->
	<div class=" copyright">
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


<script>
	lightbox.option({
		'resizeDuration': 200,
		'wrapAround': true,

	})
</script>