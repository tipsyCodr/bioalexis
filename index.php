<?php
require_once('couch/cms.php'); ?>
<cms:template title='Products' clonable='1' dynamic_folders='1' gallery='1'>

	<cms:editable name="gg_image" label="Image" desc="Upload your main image here" width="500" show_preview='1'
		preview_height='200' type="image" />
	<cms:editable name="price" type="text" />
	<cms:editable name="joining" label="Best for Joining? " type="radio" opt_values='Yes==1|No==0' />
	<cms:editable name="featured" label="Featured Product?" type="radio" opt_values='Yes==1|No==0' />
	<cms:editable name="description" label="Description" type="textarea" />
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

		<div class="tw-mx-2 sm:tw-ml-[4rem]">
			<div class="row">
				<div class="col-12 col-sm-6 col-md-3 col-lg-3 my-2">
					<a href="products.php?category=Health">
						<div class="health-care tw-bg-cover tw-bg-no-repeat tw-bg-center tw-h-[180px]"
							style="border-radius: 10px; overflow: hidden;">
							<img src="img/categories/new/health.png" class="tw-h-full tw-w-full tw-object-contain"
								alt="">
						</div>
					</a>
				</div>
				<div class="col-12 col-sm-6 col-md-3 col-lg-3 my-2">
					<a href="products.php?category=Personal">
						<div class="personal-care tw-bg-contain tw-bg-no-repeat tw-bg-center tw-h-[180px]"
							style="border-radius: 10px; overflow: hidden;">
							<img src="img/categories/new/personal.png" class="tw-h-full tw-w-full tw-object-contain"
								alt="">
						</div>
					</a>
				</div>
				<div class="col-12 col-sm-6 col-md-3 col-lg-3 my-2">
					<a href="products.php?category=Agriculture">
						<div class="agriculture-care tw-bg-cover tw-bg-no-repeat tw-bg-center tw-h-[180px]"
							style="border-radius: 10px; overflow: hidden;">
							<img src="img/categories/new/agro.png" class="tw-h-full tw-w-full tw-object-contain" alt="">
						</div>
					</a>
				</div>
				<div class="col-12 col-sm-6 col-md-3 col-lg-3 my-2">
					<a href="products.php?category=Lifestyle">
						<div class="lifestyle-care tw-bg-cover tw-bg-no-repeat tw-bg-center tw-h-[180px]"
							style="border-radius: 10px; overflow: hidden;">
							<img src="img/categories/new/lifestyle.png" class="tw-h-full tw-w-full tw-object-contain"
								alt="">
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
					<h2 class="tw-font-bold tw-text-3xl text-center tw-py-5">Joining Products</h2>
				</div>
				<div class="tw-flex tw-gap-10 flex-col tw-mx-auto tw-justify-center tw-items-center md:tw-flex-row">
					<div
						class="item tw-flex tw-flex-col sm:tw-flex-row tw-flex-wrap tw-gap-3 tw-justify-center tw-items-center">
						<?php
						$products = array(
							array('name' => 'Alexis Trufit', 'price' => '1600', 'img' => 'alexis trufit.jpg', 'category' => 'Personal Care', 'description' => 'Alexis Trufit is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Alexis Trufit is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Alexis Trufit is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Alexis Trufit is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://www.youtube.com/watch?v=mbAu5Iaa6rc&t=79s'),
							array('name' => 'Mr. Alexis ', 'price' => '933', 'img' => 'mr_alexis.jpg', 'category' => 'Personal Care', 'description' => 'Mr. Alexis is a dietary supplement in the form of a tablet that is designed for men. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Mr. Alexis is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Mr. Alexis is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Mr. Alexis is a great choice for men who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://www.youtube.com/watch?v=Iuq5JgmDWdw&t=36s'),
							array('name' => 'Alexis Vama', 'price' => '1350', 'img' => 'alexi8.png', 'category' => 'Personal Care', 'description' => 'Alexis Vama is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Alexis Vama is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Alexis Vama is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Alexis Vama is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://www.youtube.com/watch?v=AY797RWRWfY&t=37s'),
						);
						foreach ($products as $product) {
							?>

							<div class="item rounded tw-p-2 tw-shadow  tw-min-w-[300px] tw-bg-white tw-bg-opacity-70 tw-transition tw-duration-300 hover:tw-bg-opacity-100"
								onclick="location.href='product-details.php?title=<?php echo $product['name']; ?>&img=<?php echo $product['img']; ?>&description=<?php echo $product['description']; ?>&price=<?php echo $product['price']; ?>&category=<?php echo $product['category']; ?>&youtube=<?php echo $product['youtube']; ?>'">
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
									<!-- <p class="tw-font-bold tw-text-green-600  tw-text-sm tw-text-center">
										Rs. <?php echo $product['price']; ?>
									</p> -->
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
	<!-- Joining Product Section ends -->
	<style>
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
					<h2 class="tw-font-bold tw-text-3xl text-center tw-py-5">Products Testimonies</h2>
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
							<div class="card-body text-center">
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
				<?php
				$videos = array(
					array('id' => 'jbDl4S3gzSw?si=_SAr1U4ILqmHqfT0', 'title' => 'Juice ka Testomoni'),
					array('id' => 'pdQzf6EBxVY?si=oQVSXID-r0FWtZ26', 'title' => 'Vama ka Testomoni'),
					array('id' => '3RA4DqEQe0w?si=-buh8ZiVaCQSqzJh', 'title' => 'Alexis Trufit ka Result'),
					array('id' => 'Ics7ucgk1Xc?si=_w4gX7-Oea-RUg0r', 'title' => 'Ortho Capsule & Oil ka Result'),
					array('id' => 'CND36CGCSBk?si=oE1F9qGmtn8kq2zK', 'title' => 'Defender ka Result'),
					array('id' => 'N9poFF0f_0A?si=-qvHz6i910wjMGjF', 'title' => 'Alexis Dibo ka Result'),
					array('id' => '6WWNv2r0U9U?si=J4HVphqgRzi3nabU', 'title' => 'Slimming Green Tea Result'),
				);
				?>

				<!-- Video Testimony section  -->
				<section class="">
					<h2 class="tw-font-bold tw-text-3xl text-center tw-py-5">Videos Testimonies</h2>

					<div class="tw-mx-7">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="">
									<div class="scroll-container">
										<?php
										foreach ($videos as $video) {
											?>
											<div class="card">
												<iframe width="300" height="150"
													src="https://www.youtube.com/embed/<?php echo $video['id']; ?>"
													title="<?php echo $video['title']; ?>" frameborder="0"
													allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
													allowfullscreen></iframe>
												<!-- <div class="tw-text-center tw-py-2">
													<?php echo $video['title']; ?>
												</div> -->
											</div>
											<?php
										}
										?>

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
		<h2 class="tw-font-bold tw-text-3xl text-center tw-py-5">Achievers</h2>

		<div class="tw-mx-7">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="">
						<div class="scroll-container">
							<cms:pages masterpage='achievers.php' paginate='1' limit='3'>
								<!-- Card -->
								<div class="tw-p-2 tw-bg-gray-200 tw-rounded-xl">
									<div class="">
										<div class="">

											<img src="<cms:show achievers_image />" class="tw-h-[200px] tw-w-full "
												alt="">
											<h5 class="card-title"><a href="<cms:show k_page_link/>"><b>
														<cms:show k_page_title />
													</b> </a></h5>
											<cms:excerpt count="10" ignore="img">
												<cms:show achievers_content />
											</cms:excerpt>

										</div>
									</div>

								</div>

							</cms:pages>

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
			<div class=" wrapper">
				<div class="head">
					<h2 class="tw-font-bold tw-text-3xl text-center tw-py-5">Featured Products</h2>

				</div>
				<div class="tw-flex tw-gap-10 flex-col tw-mx-auto tw-justify-center tw-items-center md:tw-flex-row">
					<div
						class="item tw-flex tw-flex-col sm:tw-flex-row tw-flex-wrap tw-gap-3 tw-justify-center tw-items-center">
						<?php
						$products = array(
							array('name' => 'Alexis Trufit', 'price' => '1600', 'img' => 'alexis trufit.jpg', 'category' => 'Personal Care', 'description' => 'Alexis Trufit is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Alexis Trufit is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Alexis Trufit is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Alexis Trufit is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://www.youtube.com/watch?v=mbAu5Iaa6rc&t=79s'),
							array('name' => 'Mr. Alexis ', 'price' => '933', 'img' => 'mr_alexis.jpg', 'category' => 'Personal Care', 'description' => 'Mr. Alexis is a dietary supplement in the form of a tablet that is designed for men. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Mr. Alexis is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Mr. Alexis is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Mr. Alexis is a great choice for men who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://www.youtube.com/watch?v=Iuq5JgmDWdw&t=36s'),
							array('name' => 'Alexis Vama', 'price' => '1350', 'img' => 'alexi8.png', 'category' => 'Personal Care', 'description' => 'Alexis Vama is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Alexis Vama is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Alexis Vama is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Alexis Vama is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://www.youtube.com/watch?v=AY797RWRWfY&t=37s'),
							array('name' => 'Chloro Alexis', 'price' => '2499', 'img' => 'chloro.png', 'category' => 'Personal Care', 'description' => 'Chloro Alexis is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Chloro Alexis is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Chloro Alexis is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Chloro Alexis is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://youtu.be/LoXbYBgj4MI?si=1Gcll1iRBX6FMWOQ'),
							array('name' => 'Alexis Juice', 'price' => '2500', 'img' => 'omega-rich.png', 'category' => 'Personal Care', 'description' => 'Alexis Juice is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Alexis Juice is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Alexis Juice is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Alexis Juice is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://youtu.be/QDgtI3S0zf8?si=mN3D3EIWHKZ0c-Pr'),
							array('name' => 'Alexis Dibo', 'price' => '3200', 'img' => 'dibo.png', 'category' => 'Personal Care', 'description' => 'Alexis Dibo is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Alexis Dibo is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Alexis Dibo is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Alexis Dibo is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://youtu.be/EZ_ZHHHOPzw?si=ZBeQLSVqqJvD5VR7'),
							array('name' => 'Ortho Cap', 'price' => '684', 'img' => 'ortho capsule.jpg', 'category' => 'Personal Care', 'description' => 'Ortho Cap is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Ortho Cap is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Ortho Cap is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Ortho Cap is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://www.youtube.com/watch?v=qhiLRk5LCCs&t=7s'),
							array('name' => 'Ortho Oil', 'price' => '249', 'img' => 'oil.jpg', 'category' => 'Personal Care', 'description' => 'Ortho Oil is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Ortho Oil is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Ortho Oil is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Ortho Oil is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://www.youtube.com/watch?v=qhiLRk5LCCs&t=7s'),
							array('name' => 'Diffender', 'price' => '749', 'img' => 'defender.png', 'category' => 'Personal Care', 'description' => 'Diffender is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Diffender is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Diffender is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Diffender is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://youtu.be/CND36CGCSBk?si=oE1F9qGmtn8kq2zK'),
							array('name' => 'Sliming Tea', 'price' => '699', 'img' => 'vema-tea.jpg', 'category' => 'Personal Care', 'description' => 'Sliming Tea is a dietary supplement in the form of a tablet that is designed for women. To use, simply drop one tablet into a glass of water, watch it fizz, and then drink. Sliming Tea is a convenient and easy way to support your overall health and wellness. The tablets are easy to take on-the-go, and can be taken at any time of day. The unique formula of Sliming Tea is designed to provide a range of benefits, including supporting energy and vitality, and promoting a healthy metabolism. Sliming Tea is a great choice for women who are looking for a convenient and effective way to support their health and wellness.', 'youtube' => 'https://youtu.be/6WWNv2r0U9U?si=J4HVphqgRzi3nabU'),
							array(
								'name' => 'Sanitary Napkin',
								'price' => '299',
								'img' => 'sanitary-napkin.png',
								'category' => 'Personal Care',
								'description' => 'Anion sanitary pads are feminine hygiene products that incorporate anion (negative ion) technology, which is believed to offer various health benefits. The concept behind these pads is that they release negative ions (anions) when in use, which can help improve comfort, hygiene, and overall health.

Benefit -
Reduce Pain
Improve Hormonal balance
Decrease Stress
No Risk of Infections
Decrease odor
Increase levels of Serotonin
Boost Immune System',
								'youtube' => 'https://youtu.be/CND36CGCSBk?si=oE1F9qGmtn8kq2zK'
							),
						);
						foreach ($products as $product) {
							?>

							<div class="item rounded tw-p-2 tw-shadow  tw-min-w-[300px] tw-bg-white tw-bg-opacity-70 tw-transition tw-duration-300 hover:tw-bg-opacity-100"
								onclick="location.href='product-details.php?title=<?php echo $product['name']; ?>&img=<?php echo $product['img']; ?>&description=<?php echo $product['description']; ?>&price=<?php echo $product['price']; ?>&category=<?php echo $product['category']; ?>&youtube=<?php echo $product['youtube']; ?>'">
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
									<!-- <p class="tw-font-bold tw-text-green-600  tw-text-sm tw-text-center">
										Rs. <?php echo $product['price']; ?>
									</p> -->
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

	<!-- /End Newsletter Area -->
	<?php require_once 'partials/footer.php'; ?>
	<?php require_once 'partials/scripts.php'; ?>
</body>

</html>
<?php COUCH::invoke(); ?>