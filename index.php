<?php
require_once('couch/cms.php'); ?>
<cms:template title='Products' clonable='1' dynamic_folders='1' gallery='1'>

	<cms:editable name="gg_image" label="Image" desc="Upload your main image here" width="500" show_preview='1'
		preview_height='200' type="image" />
	<cms:editable name="price" type="text" />
	<cms:editable name="min_ord_qty" type="text" />
	<cms:editable name="usage_application" type="dropdown"
		opt_values='Garden | Fruits | Medicinal | Vegetable | Cultivation | Decorative | Flower Bulb |' />
	<cms:editable name="botanical_name" type="text" />
	<cms:editable name="soil_specific" type="text" />

	<cms:editable name="gg_thumb" assoc_field="gg_image" label="Image Thumbnail" desc="Thumbnail of image above"
		width='115' height='115' enforce_max='1' type="thumbnail" />

</cms:template>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<?php require_once 'partials/head.php' ?>

</head>

<body>
	<div onclick="document.querySelector('.popup_backdrop').style.display='none'"
		class="popup_backdrop tw-z-[1000] tw-flex tw-justify-center tw-items-center tw-bg-black tw-fixed  tw-w-full tw-h-full tw-bg-opacity-50 tw-backdrop-blur-md ">
		<div class="popup tw-p-2  tw-bg-white tw-w-fit tw-h-fit">
			<div class="head flex flex-row tw-justify-between tw-items-center gap-5">
				<h2 class="tw-font-bold tw-text-black">News</h2>
				<button class="close"
					onclick="document.querySelector('.popup_backdrop').style.display='none'">&times;</button>
			</div>
			<div class="notice">
				<img class='' style="max-height: 500px;" src="img/new/popup.png" alt="">
			</div>
		</div>
	</div>


	<?php require_once 'partials/navbar.php' ?>

	<!-- Slider Area -->
	<section class="slider">
		<div class="hero-slider">
			<?php
			$images = glob("img/banner/*.*");
			foreach ($images as $image) {
				echo '<div class="tw-w-full single-slider"><img src="' . $image . '" alt=""></div>';
			}
			?>
		</div>
	</section>
	<!--/ End Slider Area -->

	<!-- product Category section -->
	<section class="primary-bg" style="padding-top: 30px; padding-bottom: 30px;">
		<div class="container">
			<div class="d-flex flex-wrap justify-content-between" style="padding: 10px;"
				onclick="location.href='categories.php?category=Health Care'">
				<div class="col-sm-12 col-md-4 col-lg-4 my-2" style="border-radius: 10px;overflow: hidden;">
					<div class="health-care"><a href="#" class="block d-flex align-items-center"
							style="border-radius:20px;background-image:url('img/categories/new/health.png'); background-repeat: no-repeat;background-size:cover;height: 180px;">
						</a></div>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4 my-2" style="border-radius: 10px;overflow: hidden;"
					onclick="location.href='categories.php?category=Personal Care'">
					<div class="personal-care"><a href="#" class="block d-flex align-items-center"
							style="border-radius:20px;background-image:url('img/categories/new/personal.png'); background-repeat: no-repeat;background-size:cover;height: 180px;">

						</a>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4 my-2" style="border-radius: 10px;overflow: hidden;"
					onclick="location.href='categories.php?category=Agro Care'">
					<div class="agriculture-care"><a href="#" class="block d-flex align-items-center"
							style="border-radius:20px;background-image:url('img/categories/new/agro.png'); background-repeat: no-repeat;background-size:cover;height: 180px;">

						</a>
					</div>
				</div>
			</div>


		</div>
	</section>

	<!-- product Category section ends -->

	<!-- Featured Product section  -->
	<section class="section"
		style="background-image:url('img/bg-featured.jpg');background-repeat: no-repeat;	background-attachment: fixed;">
		<style>
			.p-img img:hover {
				opacity: 0.5;
			}
		</style>
		<div class="">
			<div class=" wrapper">
				<div class="head">
					<h2 class="tw-font-bold tw-text-3xl text-center tw-py-5">Featured Products</h2>

				</div>
				<div class="tw-flex tw-gap-10 flex-col tw-mx-auto tw-justify-center tw-items-center md:tw-flex-row">
					<div
						class="item tw-flex tw-flex-col sm:tw-flex-row tw-flex-wrap tw-gap-3 tw-justify-center tw-items-center">
						<?php
						$products = array(
							array('name' => 'Alexis Trufit', 'price' => '1600', 'img' => 'alexis trufit.jpg', 'category' => 'Personal Care', 'description' => 'Alexis Trufit is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Alexis Trufit is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Alexis Trufit is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Alexis Trufit is a great choice for women who are looking for a convenient and effective way to support their health and wellness.'),
							array('name' => 'Mr. Alexis ', 'price' => '933', 'img' => 'mr_alexis.jpg', 'category' => 'Personal Care', 'description' => 'Mr. Alexis is a dietary supplement in the form of a tablet that is designed for men. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Mr. Alexis is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Mr. Alexis is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Mr. Alexis is a great choice for men who are looking for a convenient and effective way to support their health and wellness.'),
							array('name' => 'Alexis Vama', 'price' => '1350', 'img' => 'alexi8.png', 'category' => 'Personal Care', 'description' => 'Alexis Vama is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Alexis Vama is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Alexis Vama is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Alexis Vama is a great choice for women who are looking for a convenient and effective way to support their health and wellness.'),
							array('name' => 'Chloro Alexis', 'price' => '2499', 'img' => 'chloro.png', 'category' => 'Personal Care', 'description' => 'Chloro Alexis is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Chloro Alexis is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Chloro Alexis is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Chloro Alexis is a great choice for women who are looking for a convenient and effective way to support their health and wellness.'),
							array('name' => 'Alexis Juice', 'price' => '2500', 'img' => 'omega-rich.png', 'category' => 'Personal Care', 'description' => 'Alexis Juice is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Alexis Juice is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Alexis Juice is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Alexis Juice is a great choice for women who are looking for a convenient and effective way to support their health and wellness.'),
							array('name' => 'Alexis Dibo', 'price' => '3200', 'img' => 'dibo.png', 'category' => 'Personal Care', 'description' => 'Alexis Dibo is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Alexis Dibo is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Alexis Dibo is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Alexis Dibo is a great choice for women who are looking for a convenient and effective way to support their health and wellness.'),
							array('name' => 'Ortho Cap', 'price' => '684', 'img' => 'ortho capsule.jpg', 'category' => 'Personal Care', 'description' => 'Ortho Cap is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Ortho Cap is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Ortho Cap is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Ortho Cap is a great choice for women who are looking for a convenient and effective way to support their health and wellness.'),
							array('name' => 'Ortho Oil', 'price' => '249', 'img' => 'oil.jpg', 'category' => 'Personal Care', 'description' => 'Ortho Oil is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Ortho Oil is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Ortho Oil is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Ortho Oil is a great choice for women who are looking for a convenient and effective way to support their health and wellness.'),
							array('name' => 'Diffender', 'price' => '749', 'img' => 'defender.png', 'category' => 'Personal Care', 'description' => 'Diffender is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Diffender is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Diffender is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Diffender is a great choice for women who are looking for a convenient and effective way to support their health and wellness.'),
							array('name' => 'Sliming Tea', 'price' => '699', 'img' => 'vema-tea.jpg', 'category' => 'Personal Care', 'description' => 'Sliming Tea is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Sliming Tea is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Sliming Tea is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Sliming Tea is a great choice for women who are looking for a convenient and effective way to support their health and wellness.'),
							array('name' => 'Vama Senetary', 'price' => '290', 'img' => 'vama sanitary.jpg', 'category' => 'Personal Care', 'description' => 'Vama Senetary is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Vama Senetary is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Vama Senetary is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Vama Senetary is a great choice for women who are looking for a convenient and effective way to support their health and wellness.'),
						);
						foreach ($products as $product) {
							?>

							<div class="item rounded tw-p-2 tw-shadow  tw-min-w-[300px] tw-bg-white tw-bg-opacity-70 tw-transition tw-duration-300 hover:tw-bg-opacity-100"
								onclick="location.href='product-details.php?title=<?php echo $product['name']; ?>&img=<?php echo $product['img']; ?>&description=<?php echo $product['description']; ?>&price=<?php echo $product['price']; ?>&category=<?php echo $product['category']; ?>'">
								<div class="p-img tw-p-2 tw-relative">
									<img class="tw-object-contain tw-w-full hover:tw-bg-opacity-40 tw-object-center"
										style='height: 200px;' src="img/products/plain/<?php echo $product['img']; ?>"
										height="200" alt="">
									<div
										class="tw-absolute tw-inset-0 tw-flex tw-gap-5 tw-items-center tw-justify-center tw-opacity-0 hover:tw-opacity-100 tw-transition tw-duration-300">
										<div class="">
											<a href="#" class="tw-bg-white tw-rounded-full tw-p-2 tw-shadow ">
												<i style="" class="tw-text-xl icofont-eye"></i>
											</a>
										</div>
										<div class="">
											<a href="#" class="tw-bg-white tw-rounded-full tw-p-2 tw-shadow">
												<i class="tw-text-xl icofont-shopping-cart"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="text tw-text-center">
									<p class="tw-font-normal tw-text-black tw-text-md tw-text-center">
										<?php echo $product['name']; ?>
									</p>
									<p class="tw-font-bold tw-text-green-600  tw-text-sm tw-text-center">
										Rs. <?php echo $product['price']; ?>
									</p>
									<small class=" tw-mx-auto tw-text-center tw-w-full">Inclusive of all taxes</small>
								</div>
							</div>
							<?php
						}
						?>

					</div>

				</div>

			</div>

	</section>
	<!-- Featured Product section ends -->

	<!-- Start Feautes -->
	<section class=" Feautess section" style="padding:0; padding-top: 20px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>Transforming Lives through Wellness and Opportunity</h2>
						<p style="text-align: justify">Bioalexis is a Direct selling company
							founded in November 2021
							based in Raipur C.G. Founded on the principle of changing lives
							through its remarkable
							wellness products and Proven compensation income plan. With
							extensive experience as network
							leaders of our board of directors and their innovative spirit
							and visionary leadership,
							opening the doors of opportunity and prosperity by empowering
							distributors to achieve
							financial independence and economic stability by maximizing the
							wealth of the market through
							our products and services.
						</p>
					</div>
				</div>
			</div>

	</section>
	<!--/ End Feautes -->


	<!-- Start Why choose -->
	<section class="why-choose section" style="padding:0; padding-top: 40px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>Our goal: transforming
							lives, globally, through financial freedom and limitless growth.</h2>
						<!-- <img src="img/section-img.png" alt="#"> -->
						<p>
							Empowering entrepreneurs, one connection at a time, through
							innovative strategies and unstoppable teamwork
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-12">
					<!-- Start Choose Left -->
					<div class="choose-left">
						<h3>Our Mission</h3>


						<p style="color:black">Our methodology begins with our lasting mission of asserting our purpose
							as a company and
							serves a benchmark for our actions and decisions.</p>
						<ol style="padding-left: 20px;list-style: disc;color:black">
							<li>To empower the world.</li>
							<li>To encourage confidence, optimism and happiness.</li>
							<li>To create worth and make a distinction.</li>
						</ol>

						<h3>Our Vision</h3>
						<p style="color:black">Our vision serves as the outline of our methodology and directs every
							aspect of our business
							by unfolding what we need to achieve in order to continue sustainable and quality growth.
						</p>
						<ol style="padding-left: 20px;color:black">
							<li><b>Distributors</b>: To have a great place to work where distributors are inspired to be
								the
								best that they can be.</li>
							<li><b>Products</b>: Bring to the world a portfolio of quality revolutionary products that
								anticipate and satisfy people’s health desires and needs.</li>
							<li><b>Partners</b>: Nurture a winning network of customers and distributors, together we
								creat
								joint,long term value.</li>
							<li><b>Efficiency</b>: Be a highly exciting and dynamic organization that will be flexible
								to
								furnish the trending needs and desires of the market..</li>
						</ol>


					</div>
					<!-- End Choose Left -->
				</div>
				<div class="col-lg-6 col-12">
					<!-- Start Choose Rights -->
					<div class="choose-right">
						<div class="video-image">
							<!-- Video Animation -->
							<div class="promo-video">
								<div class="waves-block">
									<div class="waves wave-1"></div>
									<div class="waves wave-2"></div>
									<div class="waves wave-3"></div>
								</div>
							</div>
							<!--/ End Video Animation -->
							<a href="https://www.youtube.com/watch?v=De_-bXyBBOc"
								class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
						</div>
					</div>
					<!-- End Choose Rights -->
				</div>
			</div>
		</div>
	</section>
	< <!-- Start Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Our Creative Talents</h2>
							<p>Great things in business are never done by one person. They’re done by a team of people.
								We have that dynamic group of peoples</p>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head"><a href="#">
									<img src="img/tarun_yadav.jpg" alt="#"></a>
							</div>
							<div class="news-body">
								<div class="news-content">

									<h2><a style="" href="#">
											Tarun Yadav
										</a></h2>
									<p class="text">
										Director
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head"><a href="#">
									<img style="max-height:360px;" src="img/deepak_dewangan.jpg" alt="#"></a>
							</div>
							<div class="news-body">
								<div class="news-content">

									<h2><a style="" href="#">
											Deepak Dewangan
										</a></h2>
									<p class="text">
										Director
									</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->

		<!-- Start Video Area -->
		<section class="video-section">
			<div class="container">
				<div class="">
					<div class="tw-flex tw-flex-col sm:tw-flex-row tw-gap-10">
						<div class="video-content">
							<div class="video-image">
								<iframe class="w-full" width="560" height="315"
									src="https://www.youtube.com/embed/De_-bXyBBOc" title="YouTube video player"
									frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
									allowfullscreen></iframe>
							</div>
							<div class="video-text text-center">
								<h2 class="text-white">Watch Video</h2>
								<a href="https://www.youtube.com/watch?v=De_-bXyBBOc"
									class="video video-popup mfp-iframe"><i class="fa fa-play text-white"></i></a>
							</div>
						</div>
						<div class="video-content">
							<div class="video-image">
								<iframe class="w-full" width="560" height="315"
									src="https://www.youtube.com/embed/De_-bXyBBOc" title="YouTube video player"
									frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
									allowfullscreen></iframe>
							</div>
							<div class="video-text text-center">
								<h2 class="text-white">Watch Video</h2>
								<a href="https://www.youtube.com/watch?v=De_-bXyBBOc"
									class="video video-popup mfp-iframe"><i class="fa fa-play text-white"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Video Area -->

		<section class="Feautes section">
			<div class="container">
				<h2 class="text-center"> Now is the time to do something! Becoming a distributor is simple and easy
					awesome
				</h2>
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont-user"></i>
							</div>
							<h3>Register Yourself</h3>
							<p>Register yourself as a Distributor !</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont-cart"></i>
							</div>
							<h3>Buy Products</h3>
							<p>Buy Products at DP Price </p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
							<div class="signle-icon">
								<i class="icofont-money"></i>
							</div>
							<h3>Sell and earn</h3>
							<p> Sell and Earn Extra Income </p>
						</div>
						<!-- End Single features -->
					</div>

				</div>
			</div>
		</section>


		<!-- Start Appointment -->
		<section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Got Questions? Reach Out for our Guidance!</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<form class="form" action="#">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="name" type="text" placeholder="Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="email" type="email" placeholder="Email">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="phone" type="text" placeholder="Phone">
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input type="text" placeholder="Date" id="datepicker">
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea name="message" placeholder="Write Your Message Here....."></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn">Send</button>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-8 col-12">
									<p>( We will be confirm by an Text Message )</p>
								</div>
							</div>
						</form>
					</div>
					<!-- <div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img src="img/contact-img.png" alt="#">
						</div>
					</div> -->
				</div>
			</div>
		</section>
		<!-- End Appointment -->

		<!-- Start Newsletter Area -->
		<section class="newsletter section">
			<div class="container">
				<div class="row ">
					<div class="col-lg-6  col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-text ">
							<h6>Sign up for newsletter</h6>
							<p class="">Subscribe for our newsletter and always stay up to date<br> </p>
						</div>
						<!-- End Newsletter Form -->
					</div>
					<div class="col-lg-6  col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-form ">
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" class="common-input"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
									required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Form -->
					</div>
				</div>
			</div>
		</section>
		<!-- /End Newsletter Area -->
		<?php require_once 'partials/footer.php'; ?>
		<?php require_once 'partials/scripts.php'; ?>
</body>

</html>
<?php COUCH::invoke(); ?>