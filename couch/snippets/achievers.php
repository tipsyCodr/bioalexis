<!-- Start Gallery Us -->
<section class="news section">
    <div class=" container">
        <h2 class="tw-font-bold tw-text-3xl ">All Achievers</h2>

        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="main">

                            <cms:pages masterpage='achievers.php' paginate='1' limit='3'>
                                <div class="row">

                                    <div class="col-lg-4">
                                        <!-- News thumbnail -->
                                        <div class="fill news-thumbnail">
                                            <a href="<cms:show k_page_link/>">
                                                <img src="<cms:show achievers_image/>" alt="#">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <h1 class="news-title"><a href="<cms:show k_page_link/>"><b>
                                                    <cms:show k_page_title />
                                                </b> </a></h1>
                                        <br>
                                        <cms:excerpt count="10" ignore="img">
                                            <cms:show achievers_content />
                                        </cms:excerpt>
                                        <!-- Meta -->
                                        <div class="meta">
                                            <div class="meta-left">
                                                <span class="author"><a href="#"><img src="img/author1.jpg"
                                                            alt="#">Admin</a></span>
                                                <span class="date"><i class="fa fa-clock-o"></i>
                                                    <cms:date k_page_date format='jS M, y' />
                                                </span>
                                                <span class="comments"><a href="#"><i class="fa fa-comments"></i>
                                                        <cms:show k_comment_count />
                                                    </a></span>
                                                <!-- <span class="views"><i class="fa fa-eye"></i> 33K </span> -->
                                            </div>
                                        </div>
                                    </div>

                                    <hr />
                                </div>
                                <cms:if k_paginated_bottom>
                                    <div style="width:100%; text-align:center; padding:20px;color:green;">
                                        <span style="">
                                            <cms:if k_paginated_link_prev><a href="<cms:show k_paginated_link_next/>">
                                                    < Previous Posts</a> | </cms:if>
                                            <cms:if k_paginated_link_next><a href="<cms:show k_paginated_link_prev/>">
                                                    Newer Posts ></a>
                                            </cms:if>
                                        </span>
                                    </div>
                                </cms:if>
                            </cms:pages>
                        </div>
                    </div>
                </div>
                <?php
                $car = false;
                $tour = false;
                ?>
                <h2 class="tw-font-bold tw-mt-10 tw-text-3xl ">Cars Achievers</h2>
                <div class="row">
                    <cms:php>
                        $car = true;
                    </cms:php>

                    <div class="col-12">
                        <div class="main">
                            <cms:pages masterpage='achievers.php' paginate='1' folder="car" limit='3'>
                                <div class="row">

                                    <div class="col-lg-4">
                                        <!-- News thumbnail -->
                                        <div class="fill news-thumbnail">
                                            <img src="<cms:show achievers_image/>" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <h1 class="news-title"><a href="<cms:show k_page_link/>"><b>
                                                    <cms:show k_page_title />
                                                </b> </a></h1>
                                        <br>
                                        <cms:excerpt count="10" ignore="img">
                                            <cms:show achievers_content />
                                        </cms:excerpt>
                                        <!-- Meta -->
                                        <div class="meta">
                                            <div class="meta-left">
                                                <span class="author"><a href="#"><img src="img/logo.png" alt="#">Bio
                                                        Alexis</a></span>
                                                <span class="date"><i class="fa fa-clock-o"></i>
                                                    <cms:date k_page_date format='jS M, y' />
                                                </span>
                                                <span class="comments"><a href="#"><i class="fa fa-comments"></i>
                                                        <cms:show k_comment_count />
                                                    </a></span>
                                                <!-- <span class="views"><i class="fa fa-eye"></i> 33K </span> -->
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                </div>
                            </cms:pages>
                            <cms:php>
                                if (!$car) {
                                echo '<div class="alert alert-notice text-center" role="alert">No Achievers Found</div>
                                ';
                                }
                            </cms:php>

                        </div>
                    </div>
                </div>
                <h2 class="tw-font-bold tw-mt-10 tw-text-3xl ">Tour Package Achievers</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="main">
                            <cms:pages masterpage='achievers.php' paginate='1' folder="tour" limit='3'>
                                <div class="row">
                                    <cms:php>
                                        $tour = true;
                                    </cms:php>
                                    <div class="col-lg-4">
                                        <!-- News thumbnail -->
                                        <div class="fill news-thumbnail">
                                            <img src="<cms:show achievers_image/>" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <h1 class="news-title"><a href="<cms:show k_page_link/>"><b>
                                                    <cms:show k_page_title />
                                                </b> </a></h1>
                                        <br>
                                        <cms:excerpt count="10" ignore="img">
                                            <cms:show achievers_content />
                                        </cms:excerpt>
                                        <!-- Meta -->
                                        <div class="meta">
                                            <div class="meta-left">
                                                <span class="author"><a class='tw-font-bold' href="#"><img
                                                            class='tw-object-cover' src="img/logo.jpg" alt="#">Bio
                                                        Alexis Trading Pvt.
                                                        Ltd.</a></span>
                                                <span class="date"><i class="fa fa-clock-o"></i>
                                                    <cms:date k_page_date format='jS M, y' />
                                                </span>
                                                <span class="comments"><a href="#"><i class="fa fa-comments"></i>
                                                        <cms:show k_comment_count />
                                                    </a></span>
                                                <!-- <span class="views"><i class="fa fa-eye"></i> 33K </span> -->
                                            </div>
                                        </div>
                                    </div>

                                    <hr />
                                </div>

                            </cms:pages>
                            <cms:php>
                                if (!$tour) {
                                echo '<div class="alert alert-notice text-center" role="alert">No Achievers Found</div>
                                ';
                                }
                            </cms:php>
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
                                    <img src="<cms:show achievers_image />" alt="#">
                                </div>
                                <div class="content">
                                    <h5><a href="<cms:show k_page_link />">
                                            <cms:show k_page_title />
                                        </a></h5>
                                    <ul class="comment">
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>
                                            <cms:date k_page_date format='jS M, Y' />
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
                </div>
            </div>
        </div>
    </div>
</section>