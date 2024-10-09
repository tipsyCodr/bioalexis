<?php require_once('couch/cms.php'); ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<?php require_once 'partials/head.php' ?>

</head>

<body>
	<?php require_once 'partials/navbar.php' ?>

	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Our Products</h2>
						<ul class="bread-list">
							<li><a href="index.html">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Products</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
	<style>
		.flex {
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
		}

		.img-cont img {
			width: 100%;

		}

		.img-cont {
			height: 490px;
			overflow: hidden;
			width: 333px;
			background-color: white;
			margin: 10px;
			border-radius: 30px;
			box-shadow: 6px 4px 5px 2px #efefef;
		}

		.desc {
			padding: 10px;
		}

		.thumb img {
			height: 300px;
		}

		.img-cont:hover {
			transform: scale(1.02);
			z-index: 60;
		}

		.footer>div.footer-top>div>div>div:nth-child(2)>div>ul>li:nth-child(4)>a:nth-child(1)a {
			display: none;
		}
	</style>
	<!-- Start Products Us -->

	<section class=" section">
		<div id="lightgallery">
			<div class="container flex">
				<cms:pages masterpage='index.php' paginate='1' limit='30'>
					<div class="img-cont" id="<cms:show k_page_name />">
						<div class="thumb">
							<a href="<cms:show gg_image />" data-lg-size="1600-2400">
								<img alt="img1" src="<cms:show gg_image />" />
							</a>
							<!-- style="height:200px;width:200px"  -->
						</div>
						<div class="desc">
							<p class="" style="width:204px"><b class='clamp-text' style="font-size:1.5rem ">
									<cms:show k_page_title />
								</b></p>
							<!-- <p class="clamp-text"><b>Botanical Name:</b>
								<cms:show botanical_name />
							</p> -->
							<p style="padding-top: 10px;font-size:.9	rem"><b>Price: </b>₹
								<cms:show price />
							</p>
							<!-- <p><b>Min. Order Quantity:</b>
								<cms:show min_ord_qty /> pcs
							</p>
							<p><b>Soil Specific:</b>
								<cms:show soil_specific />
							</p> -->
							<a aria-label="Chat " target="_blank"
								href="https://wa.me/+918062245974?text=Hi!%20I'm%20interested%20in%20your%20product%20<cms:show k_page_title />">
								<img alt="Chat " src="img/WhatsAppButtonGreenMedium.svg"
									style="width: 189px;margin-left: 70px;margin-top:42px;" /><a />
						</div>
					</div>
				</cms:pages>
			</div>
		</div>
	</section>

	<!--/ End Gallery Us -->
	<?php require_once 'partials/footer.php'; ?>
	<?php require_once 'partials/scripts.php'; ?>
	<!-- lightgallery plugin -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js"
		integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Counter Up CDN JS -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<!-- Google Map API Key JS -->
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>
	<!-- Gmaps JS -->
	<script src="js/gmaps.min.js"></script>
	<!-- Map Active JS -->
	<script src="js/map-active.js"></script>

	<script type="text/javascript">
		lightGallery(document.getElementById('lightgallery'), {
			plugins: [lgZoom, lgThumbnail],
			licenseKey: 'your_license_key',
			speed: 500,
			// ... other settings
		});
	</script>
</body>

</html>
<?php COUCH::invoke(); ?>