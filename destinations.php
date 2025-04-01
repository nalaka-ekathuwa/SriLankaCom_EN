<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<?php include 'head.php' ?>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>

    <?php
    $class_about = '';
    $class_dest = "class ='active'";
    $class_tours = "";
    $class_home = "";
    $class_contact = '';
    include 'header.php' ?>


    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(images/bg/bg1.jpg);">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url(images/shape8.png);"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Список направлений</h1>
                    <!--<h1 class="mb-3">Destination List</h1>-->

                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <!--<li class="breadcrumb-item"><a href="#">Home</a></li>-->

                            <li class="breadcrumb-item active" aria-current="page">Список направлений</li>
                            <!--<li class="breadcrumb-item active" aria-current="page">Destination Lists</li>-->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- top Destination starts -->
    <section class="trending pb-0 pt-6">
        <div class="container">
            <div class="section-title mb-6 w-50 mx-auto text-center">
                <h4 class="mb-1 theme1">Лучшие направления</h4>
                <!--<h4 class="mb-1 theme1">Top Destinations</h4>-->

                <h2 class="mb-1">Исследуйте <span class="theme">лучшие направления</span></h2>
                <!--<h2 class="mb-1">Explore <span class="theme">Top Destinations</span></h2>-->

                <p>Откройте для себя удивительные места, которые подарят вам незабываемые впечатления и яркие эмоции.
                </p>
                <!--<p>Discover amazing places that will give you unforgettable experiences and vibrant emotions.</p>-->
            </div>
            <div class="row align-items-center">
            <?php foreach ($destinations as $destination): ?>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="trend-item1"><a href="destination_data.php?des=<?php echo $destination['des_id']; ?>" >
                        <div class="trend-image position-relative rounded">
                            <img src="<?php echo $destination['img']; ?>" alt="image">
                            <div
                                class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                <div class="trend-content-title">
                                    <!-- <h5 class="mb-0"><a href="destination-detail.html" class="theme1">Italy</a></h5>-->
                                    <h3 class="mb-0 white"><?php echo $destination['name']; ?></h3> <!--ella-->

                                </div>
                                <span class="white bg-theme p-1 px-2 rounded"><?php echo $destination['type']; ?></span>
                            </div>
                            <div class="color-overlay"></div>
                        </div></a>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
    <!-- top Destination ends -->

    <!-- Discount action starts -->
    <section class="discount-action pt-0"
        style="background-image:url(images/section-bg1.png); background-position:center;">
        <div class="container">
            <div class="call-banner rounded pt-10 pb-14">
                <div class="call-banner-inner w-75 mx-auto text-center px-5">
                    <div class="trend-content-main">
                        <div class="trend-content mb-5 pb-2 px-5">
                            <h5 class="mb-1 theme">Любите места, куда вы отправляетесь</h5>
                            <!--<h5 class="mb-1 theme">Love Where You're Going</h5>-->

                            <h2><a href="detail-fullwidth.html">Исследуйте свою жизнь, <span class="theme1">
                                        путешествуйте туда, куда хотите!</span></a></h2>
                            <!--<h2><a href="detail-fullwidth.html">Explore Your Life, <span class="theme1"> Travel Where You Want!</span></a></h2>-->

                            <p>Откройте для себя новые горизонты, наслаждаясь каждым моментом путешествия и создавая
                                незабываемые воспоминания.</p>
                            <!--<p>Discover new horizons, enjoy every moment of your journey, and create unforgettable memories.</p>-->
                        </div>
                        <div class="video-button text-center position-relative">
                            <div class="call-button text-center">
                                <button type="button" class="play-btn js-video-button" data-video-id="152879427"
                                    data-channel="vimeo">
                                    <i class="fa fa-play bg-blue"></i>
                                </button>
                            </div>
                            <div class="video-figure"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
        <div class="white-overlay"></div>
        <div class="section-shape  top-inherit bottom-0" style="background-image: url(images/shape6.png);"></div>
    </section>
    <!-- Discount action Ends -->

    <!-- -- partner starts 
    <section class="our-partner pb-6 pt-6">
        <div class="container">
            <div class="section-title mb-6 w-75 mx-auto text-center">
                <h4 class="mb-1 theme1">Our Partners</h4>
                <h2 class="mb-1">Our Awesome <span class="theme">partners</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="row align-items-center partner-in partner-slider">
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey">
                        <img src="images/cl-1.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey">
                        <img src="images/cl-5.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey">
                        <img src="images/cl-2.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey">
                        <img src="images/cl-3.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey">
                        <img src="images/cl-4.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey">
                        <img src="images/cl-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


     partner ends -->

    <!-- recent-articles ends -->
    <?php include 'footer.php' ?>

    <?php include 'foot.php' ?>

</body>

</html>