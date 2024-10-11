<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php require_once '../../partials/head.php' ?>
    <link rel="stylesheet" href="css/my-style.css" />
</head>

<body>
    <?php $url = $_SERVER['REQUEST_URI'];
    $name = basename($url); ?>
    <style>
        /* Remove extra dropdown arrows */
        .slicknav_menu .slicknav_nav .dropdown-toggle::before {
            display: none;
        }

        .slicknav_menu .slicknav_nav .dropdown-toggle::after {
            content: "\f078";
            /* FontAwesome down arrow */
            font-family: FontAwesome;
            font-size: 12px;
            /* margin-left: 10px; */
            color: #000;
        }

        /* Align dropdown items properly */
        .slicknav_menu .slicknav_nav ul li {
            /* padding: 10px 15px; */
            /* border-bottom: 1px solid #ddd; */
        }

        .slicknav_menu .slicknav_nav ul li:last-child {
            border-bottom: none;
        }

        /* Adjust font size and spacing for better readability */
        .slicknav_menu .slicknav_nav a {
            font-size: 16px;
            color: #000;
        }

        /* Add custom padding and margins */
        .slicknav_menu .slicknav_nav ul li a {
            padding: 10px 20px;
            display: block;
            /* margin-left: 40px; */
            border: 1px solid #e4e4e4;
        }

        /* Custom border-radius for dropdown */
        .slicknav_menu .slicknav_nav ul li:first-child a {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .slicknav_menu .slicknav_nav ul li:last-child a {
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        /* Dropdown hover effect */
        .slicknav_menu .slicknav_nav ul li a:hover {
            background-color: #0a3b3f;
            color: #fff;
        }

        /* Remove arrow for submenus */
        .dropdown-toggle::after {
            display: none;
        }

        /* Custom menu layout adjustments */
        .slicknav_nav li,
        .slicknav_nav ul {
            display: contents;
            margin-left: 20px;
        }

        /* Hide dropdown by default */
        .dropdown-menu {
            display: none;
        }

        .dropdown:hover .dropdown-menu li {
            display: block;
            width: 100%;
        }



        .header .nav li {
            margin: auto;
        }

        /* Show dropdown on hover on mobile */
        @media (min-width: 767px) {
            .dropdown:hover .dropdown-menu li:hover {
                background-color: #0a3b3f;
                color: white;

            }

            .dropdown:hover .dropdown-menu {
                display: flex;
                justify-content: center;
                align-items: center;
                position: absolute;
                top: 80%;
                left: 0;
                width: 100%;
                flex-direction: column;
            }
        }
    </style>

    <?php
    $url = $_SERVER['REQUEST_URI'];
    $name = basename($url);
    ?>

    <!-- Header Area -->
    <header class="header">
        <!-- Topbar -->
        <div class="topbar tw-bg-primary">
            <div class="tw-flex tw-justify-around tw-flex-col sm:tw-flex-row tw-items-center tw-gap-2 w-full">
                <span class="text-white tw-text-2xl tracking-widest tw-font-bold tw-uppercase tw-px-0">Improving Lives
                    Together
                </span>
            </div>
        </div>
        <!-- End Topbar -->

        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <!-- Logo Section -->
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="logo">
                                <a href="index.php"><img src="img/logo.png" alt="Bioalexis Trading Pvt. Ltd."
                                        style="width:125px"></a>
                            </div>
                            <div class="mobile-nav"></div>
                        </div>

                        <!-- Main Menu Section -->
                        <div class="col-lg-7 col-md-9 col-12">
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li class="">
                                            <a href="index.php">Home</a>
                                        </li>

                                        <li class="dropdown ">
                                            <a href="#" class="dropdown-toggle">About Us</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="bussiness-plan.php">Business Plan</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown ">
                                            <a href="#" class="dropdown-toggle">Company</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="disclaimer.php">Disclaimer</a></li>
                                                <li><a href="director_msg.php">Director's Message</a></li>
                                                <li><a href="achievers.php">Achievers</a></li>
                                                <li><a href="legal.php">Legal</a></li>
                                                <li><a href="bank.php">Our Bankers</a></li>
                                            </ul>
                                        </li>

                                        <li class="">
                                            <a href="categories.php?category=All">Products</a>
                                        </li>
                                        <li class="<?php echo ($name == 'awards.php') ? 'active' : ''; ?>">
                                            <a href="awards.php">Awards</a>
                                        </li>
                                        <li class="<?php echo ($name == 'contact.php') ? 'active' : ''; ?>">
                                            <a href="contact.php">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!-- Login/Register Button -->
                        <div class="col-lg-2 col-12">
                            <div class="get-quote">
                                <a href="http://login.bioalexis.com/" class="btn">Login/Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->

    <?php require_once 'partials/breadcrumbs.php'; ?>


    <section class="section">
        <div class="container">
            <div class="row">
                <cms:pages masterpage='products.php' paginate='1' limit='3'>
                    <div class="col-md-6">

                        <a href="img/products/plain/<?php echo $product['img']; ?>" data-toggle="lightbox"
                            data-gallery="product-gallery">
                            <img src="<cms:show gg_image/>" alt="<cms:show k_page_title />" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <h2 class="tw-text-3xl tw-font-bold tw-mb-4">
                            <cms:show k_page_title />
                        </h2>
                        <p class="tw-mb-4">
                            <cms:show description />
                        </p>
                        <p class="tw-text-2xl tw-font-bold tw-text-black tw-my-2">MRP:
                            <cms:show price />.00
                        </p>
                        <p class="tw-text-xl tw-font-bold tw-text-black tw-my-2">Availability:<span
                                class="tw-text-green-500">In
                                Stock</span></p>
                        <small class="tw-mx-auto tw-text-center tw-w-full tw-mb-4">(Inclusive of all taxes)</small>
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
                        <div class="tw-flex tw-flex-col tw-gap-5 tw-mt-8 tw-py-10">
                            <div class="scroll-container">
                                <div class="tw-flex tw-gap-5 tw-overflow-x-scroll ">
                                    <cms:show_repeatable 'videos'>
                                        <div class="tw-mb-4 card">
                                            <!-- Display the Video Title -->
                                            <!-- Display the Video using the ID in an iframe -->
                                            <iframe width="300" height="200"
                                                src="https://www.youtube.com/embed/<cms:show video_id />"
                                                title="<cms:show video_title />" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                            <h3 class="tw-text-lg tw-font-semibold">
                                                <cms:show video_title />
                                            </h3>
                                        </div>
                                    </cms:show_repeatable>
                                </div>
                            </div>

                            <!-- <?php $embedLink = converToEmbed($product['youtube']) ?>
                            <div class="tw-flex tw-overflow-x-auto">
                                <div class="tw-flex tw-gap-3 tw-whitespace-nowrap">
                                    <?php if (isset($product['youtube'])): ?>
                                        <iframe width="300px" height="200" src="<?php echo $embedLink; ?>"
                                            title="<cms:show k_page_title />" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    <?php endif; ?>
                                </div>
                            </div> -->

                            <a href="https://wa.me/+918827268754?text=Hi!%20I'm%20interested%20in%20your%20product%20<cms:show k_page_title /> "
                                target="_blank" class="btn btn-success tw-p-5">
                                <i class="fab fa-whatsapp" aria-hidden="true"></i> Chat on WhatsApp
                            </a>
                        </div>
                    </div>
                </cms:pages>

            </div>
        </div>
    </section>



    <?php require_once 'partials/scripts.php'; ?>
    <?php require_once 'partials/footer.php'; ?>
</body>

</html>