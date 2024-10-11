<!-- Meta Tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Farming, Agriculture">
<meta name="description" content="">
<meta name='copyright' content=''>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Title -->
<title>Bioalexis Trading Company Ltd. Pvt. | IMPROVING LIVES TOGETHER… </title>

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
<!-- CDN <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/icofont@1.0.1-alpha.1/icofont.min.css"> -->

<!-- fa icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
	integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />

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
<link rel="stylesheet" href="src/output.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/css/lightbox.min.css"
	integrity="sha512-xtV3HfYNbQXS/1R1jP53KbFcU9WXiSA1RFKzl5hRlJgdOJm4OxHCWYpskm6lN0xp0XtKGpAfVShpbvlFH3MDAA=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
	/* Remove extra dropdown arrows */
	.slicknav_menu .slicknav_nav .dropdown-toggle::before {
		display: none;
		/* Removes the additional arrow before the submenu */
	}

	.slicknav_menu .slicknav_nav .dropdown-toggle::after {
		content: "\f078";
		/* FontAwesome down arrow */
		font-family: FontAwesome;
		font-size: 12px;
		/* Adjust size as needed */
		margin-left: 10px;
		color: #000;
		/* Customize color */
	}

	/* Align dropdown items properly */
	/* .slicknav_menu .slicknav_nav ul {
		padding-left: 0;
		margin-left: 0;
	} */

	.slicknav_menu .slicknav_nav ul li {
		padding: 10px 15px;
		border-bottom: 1px solid #ddd;
	}

	.slicknav_menu .slicknav_nav ul li:last-child {
		border-bottom: none;
		/* Remove border from the last item */
	}

	/* Adjust font size and spacing for better readability */
	.slicknav_menu .slicknav_nav a {
		font-size: 16px;
		color: #000;
	}

	/* Optional: Adjust spacing between dropdown items */
	.slicknav_menu .slicknav_nav ul li a {
		padding: 10px 20px;
		display: block;
	}

	.dropdown-toggle::after {
		display: none;
	}

	.slicknav_menu .slicknav_nav ul li a {
		margin-left: 40px;
		border: 1px #e4e4e4 solid;
		/* display: block; */
	}

	.slicknav_menu .slicknav_nav ul li:first-child a {
		border-top-left-radius: 10px;
		border-top-right-radius: 10px;
	}

	.slicknav_menu .slicknav_nav ul li:last-child a {
		border-bottom-left-radius: 10px;
		border-bottom-right-radius: 10px;
	}

	.slicknav_nav li,
	.slicknav_nav ul {
		display: contents;
		margin-left: 20px;
	}
</style>
<?php
function converToEmbed($url)
{
	// The original YouTube link
	$youtube_url = $url;
	// $youtube_url = "https://youtu.be/_VkkH1j3nTQ?si=Z3HFAantgCK8UKdg";

	// Initialize the video ID variable
	$video_id = '';

	// Check if the URL contains 'youtu.be' or 'youtube.com'
	if (strpos($youtube_url, 'youtu.be') !== false) {
		// Handle the shortened URL format
		$parsed_url = parse_url($youtube_url);
		// Extract the video ID from the path (removes the leading "/")
		$video_id = ltrim($parsed_url['path'], '/');
	} elseif (strpos($youtube_url, 'youtube.com') !== false) {
		// Handle the full URL format
		$parsed_url = parse_url($youtube_url);

		// Check if the query key exists
		if (isset($parsed_url['query'])) {
			// Parse the query string to get the video ID
			parse_str($parsed_url['query'], $query_params);

			// Check if 'v' key exists in the query parameters
			if (isset($query_params['v'])) {
				$video_id = $query_params['v'];
			}
		}
	}

	// Generate the embed URL only if we have a valid video ID
	$embed_url = !empty($video_id) ? "https://www.youtube.com/embed/" . $video_id : '';


	// echo "The embed URL is: " . $embed_url . "<br>";
	return $embed_url;
}
?>