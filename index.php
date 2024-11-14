<?php
require_once('couch/cms.php'); ?>
<cms:template title='Products' clonable='1' dynamic_folders='1' gallery='1'>

	<cms:editable name="gg_image" label="Image" desc="Upload your main image here" width="500" show_preview='1'
		preview_height='200' type="image" />
	<cms:editable name="price" type="text" />
	<!-- <cms:editable name="joining" label="Best for Joining? " type="radio" opt_values='Yes==1|No==0' />
	<cms:editable name="featured" label="Featured Product?" type="radio" opt_values='Yes==1|No==0' /> -->

	<cms:editable name="featured" label="Featured Product" desc="Select one from these" opt_values='No=0 | Yes=1'
		type='dropdown' />
	<cms:editable name="joining" label="Joining Product" desc="Select one from these" opt_values='No=0 | Yes=1'
		type='dropdown' />

	<cms:editable name="description" label="Description" type="richtext" />
	<cms:repeatable name='videos' label="Add YouTube Videos" label='Videos' order='1'>

		<cms:editable name="video_id" label="Video ID" desc="Enter the id of the video" type="text" />
		<cms:editable name="video_title" label="Video Title" desc="Enter the title of the video" type="text" />

	</cms:repeatable>

	<cms:editable name="gg_thumb" assoc_field="gg_image" label="Image Thumbnail" desc="Thumbnail of image above"
		width='115' height='115' enforce_max='1' type="thumbnail" />

</cms:template>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<?php require_once 'partials/head.php' ?>

</head>


<style>
	.section {
		padding: 50px 0;
	}

	.scroll-container {
		display: flex;
		overflow-x: auto;
		scroll-behavior: smooth;
		/* Optional, for smooth scrolling */
		gap: 16px;
		/* Optional, space between cards */
		padding: 10px;
		/* Optional, add padding */
	}

	.card {
		min-width: 200px;
		max-width: 332px;
		/* Ensure each card has a minimum width */
		height: 210px;
		/* Set height of each card */
		background-color: #f0f0f0;
		/* Card styling */
		flex-shrink: 0;
		/* Prevent cards from shrinking */
		border-radius: 8px;
		padding: 20px;
		box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
	}
</style>

<body>



	<?php require_once 'partials/navbar.php' ?>


	<cms:if k_is_page>

		<cms:embed 'products.php' />
		<cms:else />

		<div onclick="document.querySelector('.popup_backdrop').style.display='none'"
			class="popup_backdrop tw-z-[1000] tw-flex tw-justify-center tw-items-center tw-bg-black tw-fixed  tw-w-full tw-h-full tw-bg-opacity-50 tw-backdrop-blur-md "
			style="top:0;">
			<div class="popup tw-p-2 tw-bg-white tw-w-fit tw-h-fit">
				<div class="flex flex-row gap-5 head tw-justify-between tw-items-center">
					<h2 class="tw-font-bold tw-text-black">News</h2>
					<button class="close"
						onclick="document.querySelector('.popup_backdrop').style.display='none'">&times;</button>
				</div>
				<cms:pages masterpage='popup.php'>
					<div class="notice">
						<img class='' style="max-height: 500px;" src="<cms:show image/>" alt="<cms:show k_page_title/>">
					</div>
				</cms:pages>
			</div>

		</div>
		<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<cms:pages masterpage='slider.php'>
					<cms:show_repeatable 'banner_images'>
						<div class="single-slider">
							<img src="<cms:show image />" alt="">

						</div>
					</cms:show_repeatable>
				</cms:pages>
			</div>
		</section>
		<!--/ End Slider Area -->

		<!-- product Category section -->
		<section class="primary-bg" style="padding-top: 30px; padding-bottom: 30px;">

			<div class="tw-mx-2 sm:tw-ml-[4rem]">
				<div class="row">
					<div class="my-2 col-12 col-sm-6 col-md-3 col-lg-3">
						<a href="products.php?category=Health">
							<div class="health-care tw-bg-cover tw-bg-no-repeat tw-bg-center tw-h-[180px]"
								style="border-radius: 10px; overflow: hidden;">
								<img src="img/categories/new/health.png" class="tw-h-full tw-w-full tw-object-contain"
									alt="">
							</div>
						</a>
					</div>
					<div class="my-2 col-12 col-sm-6 col-md-3 col-lg-3">
						<a href="products.php?category=Personal">
							<div class="personal-care tw-bg-contain tw-bg-no-repeat tw-bg-center tw-h-[180px]"
								style="border-radius: 10px; overflow: hidden;">
								<img src="img/categories/new/personal.png" class="tw-h-full tw-w-full tw-object-contain"
									alt="">
							</div>
						</a>
					</div>
					<div class="my-2 col-12 col-sm-6 col-md-3 col-lg-3">
						<a href="products.php?category=Agriculture">
							<div class="agriculture-care tw-bg-cover tw-bg-no-repeat tw-bg-center tw-h-[180px]"
								style="border-radius: 10px; overflow: hidden;">
								<img src="img/categories/new/agro.png" class="tw-h-full tw-w-full tw-object-contain"
									alt="">
							</div>
						</a>
					</div>
					<div class="my-2 col-12 col-sm-6 col-md-3 col-lg-3">
						<a href="products.php?category=Lifestyle">
							<div class="lifestyle-care tw-bg-cover tw-bg-no-repeat tw-bg-center tw-h-[180px]"
								style="border-radius: 10px; overflow: hidden;">
								<img src="img/categories/new/lifestyle.png"
									class="tw-h-full tw-w-full tw-object-contain" alt="">
							</div>
						</a>
					</div>
				</div>

			</div>
		</section>

		<!-- product Category section ends -->


		<!-- Joining Product Section -->
		<section class="" style="padding-top:20px"
			style="background-image:url('img/bg-featured.jpg');background-repeat: no-repeat;	background-attachment: fixed;">
			<style>
				.p-img img:hover {
					opacity: 0.5;
				}
			</style>
			<div class="">
				<div class=" wrapper">
					<div class="head">
						<h2 class="text-center tw-font-bold tw-text-3xl tw-py-5">Joining Products</h2>
					</div>
					<div class="flex-col tw-flex tw-gap-10 tw-mx-auto tw-justify-center tw-items-center md:tw-flex-row">
						<div
							class="item tw-flex tw-flex-col sm:tw-flex-row tw-flex-wrap tw-gap-3 tw-justify-center tw-items-center ">
							<cms:pages masterpage='index.php' custom_field="joining=1"
								folder='<?php echo strtolower($category) ?>' paginate='1' limit='30'>
								<div class="item rounded tw-p-2 tw-shadow tw-min-w-[300px] tw-bg-white tw-bg-opacity-70 hover:tw-bg-opacity-100 hover:-tw-translate-y-2 tw-transition-all tw-duration-1000 tw-cursor-pointer "
									onclick="location.href='<cms:show k_page_link />'">
									<div class="p-img tw-p-2 tw-relative">
										<img class="tw-object-contain tw-w-full hover:tw-bg-opacity-40 tw-object-center"
											style='height: 200px;' src="<cms:show gg_image />" height="200" alt="">
									</div>
									<div class="text tw-text-center">
										<p class="tw-font-semibold tw-text-black tw-text-md tw-text-center">
											<cms:show k_page_title />
										</p>


									</div>
								</div>
							</cms:pages>
						</div>

					</div>

				</div>

		</section>
		<!-- Joining Product Section ends -->

		<!-- Register Yourself Section -->
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
		<!-- Register Yourself Ends Section -->

		<!-- Product Testimony -->
		<section class="" style="padding-top:20px"
			style="background-image:url('img/bg-featured.jpg');background-repeat: no-repeat;	background-attachment: fixed;">
			<style>
				.p-img img:hover {
					opacity: 0.5;
				}
			</style>
			<div class="">
				<div class=" tw-mx-7">
					<div class="head tw-hidden">
						<h2 class="text-center tw-font-bold tw-text-3xl tw-py-5">Products Testimonies</h2>
					</div>
					<?php
					$testimonials = array(
						array('author' => 'Rahul Kumar', 'testimonial' => 'I have been using Alexis Vama for the past year and I have seen a significant improvement in my overall health and vitality. The product is easy to use and the customer service is top notch.'),
						array('author' => 'Priya Singh', 'testimonial' => 'I was a bit skeptical about trying Alexis Vama at first, but after using it for a few months I noticed a huge difference in my energy levels. I feel more confident and motivated to take on the day.'),
						array('author' => 'Vikram Singh', 'testimonial' => 'I have tried many different dietary supplements in the past, but none of them have delivered the same level of results as Alexis Vama. The product is easy to use and the benefits are undeniable.'),
						array('author' => 'Anjali Yadav', 'testimonial' => 'I have been using Alexis Vama for the past six months and I have seen a significant improvement in my skin and hair health. The product is easy to use and the customer service is very helpful.'),
						array('author' => 'Rajeev Kumar', 'testimonial' => 'I was a bit hesitant to try Alexis Vama at first, but after using it for a few months I noticed a huge improvement in my overall health and well being. The product is easy to use and the benefits are undeniable.')
					);
					?>
					<div class="scroll-containers tw-hidden">
						<?php
						foreach ($testimonials as $testimonial) {
							?>
							<div class="card">
								<div class="text-center card-body">
									<img src="img/author2.jpg"
										class="tw-h-[50px] tw-w-[50px] tw-rounded-full tw-mr-3 tw-mb-3 tw-inline-block"
										alt="profile image">
									<h5 class="card-title"><?php echo $testimonial['author']; ?></h5>
									<?php
									if (empty($testimonial['testimonial']) || is_null($testimonial['testimonial'])) {
										$testimonial['testimonial'] = 'No testimonial available.';
									}
									?>
									<p class="tw-block card-text tw-max-h-[50px] tw-overflow-hidden">
										<?php echo $testimonial['testimonial']; ?>
									</p>
									<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
								</div>
							</div>
							<?php
						}
						?>
					</div>


					<!-- Video Testimony section  -->
					<section class="">
						<h2 class="text-center tw-font-bold tw-text-3xl tw-py-5">Videos Testimonies</h2>

						<div class="tw-mx-7">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="">
										<div class="scroll-container">
											<cms:pages masterpage='testimonials.php' folder="videos_testimonials"
												paginate='1' limit='4'>
												<div style=" flex-shrink: 0;border-radius: 8px;padding-left: 20px; padding-right: 20px; padding-bottom: 10px;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);"
													class="tw-px-4 tw-bg-gray-400 testimonial-item tw-shadow tw-rounded tw-mb-4 ">

													<h3 class="tw-text-lg tw-font-semibold tw-mt-2">
													</h3>
													<div class="tw-mt-2">
														<cms:show_repeatable 'videos' start="1" limit="1">
															<script>
																url = '<cms:show video_link />';
																// Assuming you have a function like this elsewhere in your JS to handle the URL conversion
																convertToEmbedLink(url);
															</script>
														</cms:show_repeatable>
													</div>
												</div>
											</cms:pages>
											<a href="videos_testimonials.php" class=" tw-text-white">
												<div style=" flex-shrink: 0;border-radius: 8px;padding-left: 20px; padding-right: 20px; padding-bottom: 10px;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);"
													class="tw-px-4 tw-flex tw-items-center tw-justify-center tw-bg-gray-400 testimonial-item tw-shadow tw-rounded tw-mb-4 ">
													View More
												</div>
											</a>

										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

				</div>

		</section>

		<!-- Product Testimony Ends -->

		<!-- Achievers section  -->
		<section class="">
			<h2 class="text-center tw-font-bold tw-text-3xl tw-py-5">Achievers</h2>
			<div class="tw-mx-7">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="">
							<div class="scroll-container tw-overflow-x-auto tw-whitespace-nowrap tw-py-4">
								<div class="tw-flex tw-justify-center tw-items-center tw-gap-5">
									<cms:pages masterpage='achievers.php' paginate='1' limit="5">
										<!-- Card -->
										<div class=" tw-bg-gray-200 tw-rounded-xl tw-inline-block"
											style="width:250px; height:250px;">
											<div class="">
												<div class="">
													<a href="<cms:show k_page_link/>">
														<img src="<cms:show achievers_image />"
															class="tw-h-[200px] tw-w-full" alt="">
														<h5
															class="text-center tw-px-4 card-title tw-capitalize tw-py-4 tw-text-ellipsis tw-overflow-hidden">
															<b>
																<cms:show k_page_title />
															</b>
														</h5>

													</a>
												</div>
											</div>
										</div>
									</cms:pages>
									<!-- View More Link -->
									<div class="tw-bg-gray-200 tw-rounded-xl hover:tw-bg-primary hover:tw-text-white tw-flex tw-justify-center tw-items-center"
										style="width:250px; height:250px;">


										<a href="achievers.php"
											class="tw-w-full tw-h-full tw-flex tw-items-center tw-justify-center">
											<b>View More <i class="fa-solid fa-angles-right"></i></b>
										</a>


									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



		<!-- Featured Product section  -->
		<section class="section"
			style="background-image:url('img/bg-featured.jpg');background-repeat: no-repeat;	background-attachment: fixed;">
			<style>
				.p-img img:hover {
					opacity: 0.5;
				}
			</style>
			<div class="">
				<div class="head">
					<h2 class="text-center tw-font-bold tw-text-3xl tw-py-5">Featured Products</h2>

				</div>
				<div class="wrapper">
					<div class="flex-col tw-flex tw-gap-10 tw-mx-auto tw-justify-center tw-items-center md:tw-flex-row">
						<div
							class=" tw-flex tw-flex-col sm:tw-flex-row tw-flex-wrap tw-gap-3 tw-justify-center tw-items-center">
							<cms:pages masterpage='index.php' custom_field="featured=1"
								folder='<?php echo strtolower($category) ?>' paginate='1' limit='30'>
								<div class="item rounded tw-p-2 tw-shadow tw-min-w-[300px] tw-bg-white tw-bg-opacity-70 tw-transition-all hover:tw-bg-opacity-100 hover:-tw-translate-y-2 tw-cursor-pointer tw-duration-1000"
									onclick="location.href='<cms:show k_page_link />'">
									<div class="p-img tw-p-2 tw-relative">
										<img class="tw-object-contain tw-w-full hover:tw-bg-opacity-40 tw-object-center"
											style='height: 200px;' src="<cms:show gg_image />" height="200" alt="">
									</div>
									<div class="text tw-text-center">
										<p class="tw-font-semibold tw-text-black tw-text-md tw-text-center">
											<cms:show k_page_title />
										</p>

									</div>
								</div>
							</cms:pages>
						</div>

					</div>

				</div>

		</section>
		<!-- Featured Product section ends -->



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
	</cms:if>

	<!-- /End Newsletter Area -->
	<?php require_once 'partials/footer.php'; ?>
	<?php require_once 'partials/scripts.php'; ?>

</body>

</html>
<?php COUCH::invoke(); ?>