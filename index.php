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
    $class_dest = '';
    $class_tours = '';
    $class_contact = '';
    $class_home = "class ='active'";

    include 'header.php' ?>

    <div class="tet"></div>


    <!-- banner starts -->
    <section class="banner pt-10 pb-0 overflow-hidden" style="background-image:url(images/testimonial.png);">
        <div class="container">
            <div class="banner-in">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4">
                        <div class="banner-content text-lg-start text-center">
                            <h4 class="theme mb-0">Исследуйте Шри-Ланку вместе с нами!</h4>
                            <!--<h4 class="theme mb-0">Explore The Sri Lanka With Us!</h4>-->

                            <h1>Начните планировать путешествие своей мечты уже сегодня!</h1>
                            <!--<h1>Start Planning Your Dream Trip Today!</h1>-->

                            <p class="mb-4">Откройте для себя уникальные места, которые сделают ваше путешествие
                                незабываемым.</p>
                            <!--<p class="mb-4">Discover unique places that will make your trip unforgettable.</p>-->

                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="banner-image">
                            <img src="images/Sigiriya.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="category-main-inner border-t pt-1">
                    <div class="row side-slider">
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content">
                                    <img src="images/icons/004-camping-tent.png" class="mb-1 d-inline-block" alt="">
                                    <h4 class="mb-0"><a href="tour-grid.html">Кемпинг</a></h4>
                                    <!--<h4 class="mb-0"><a href="tour-grid.html">Camping</a></h4>-->

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content text-center">
                                    <img src="images/icons/003-hiking.png" class="mb-1 d-inline-block" alt="">
                                    <h4 class="mb-0"><a href="tour-grid.html">Походы</a></h4>
                                    <!--<h4 class="mb-0"><a href="tour-grid.html">Hiking</a></h4>-->

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content">
                                    <img src="images/icons/005-sunbed.png" class="mb-1 d-inline-block" alt="">
                                    <h4 class="mb-0"><a href="tour-grid.html">Пляжные туры</a></h4>
                                    <!--<h4 class="mb-0"><a href="tour-grid.html">Beach Tours</a></h4>-->

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content">
                                    <img src="images/icons/006-surf.png" class="mb-1 d-inline-block" alt="">
                                    <h4 class="mb-0"><a href="tour-grid.html">Серфинг</a></h4>
                                    <!--<h4 class="mb-0"><a href="tour-grid.html">Surfing</a></h4>-->

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content">
                                    <img src="images/icons/002-safari.png" class="mb-1 d-inline-block" alt="">
                                    <h4 class="mb-0"><a href="tour-grid.html">Сафари</a></h4>
                                    <!--<h4 class="mb-0"><a href="tour-grid.html">Safari</a></h4>-->

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content">
                                    <img src="images/icons/008-cycling.png" class="mb-1 d-inline-block" alt="">
                                    <h4 class="mb-0"><a href="tour-grid.html">Велоспорт</a></h4>
                                    <!--<h4 class="mb-0"><a href="tour-grid.html">Cycling</a></h4>-->

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
                                <img src="images/icons/007-hiking-1.png" class="mb-1 d-inline-block" alt="">
                                <div class="trending-topic-content">
                                    <h4 class="mb-0"><a href="tour-grid.html">Трекинг</a></h4>
                                    <!--<h4 class="mb-0"><a href="tour-grid.html">Trekings</a></h4>-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Tour Packages-->

    <!-- top Destination starts -->
    <?php include 'tour_segment.php'; ?>
    <!-- top Destination ends -->

    <br><br><br>


    <!-- our teams starts -->
    <section class="our-team pb-0 pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4">
                    <div class="section-title text-lg-start text-center">
                        <h4 class="mb-1 theme1">Гиды</h4>
                        <!--<h4 class="mb-1 theme1">Tour Guides</h4>-->
                        <h2>Познакомьтесь с нашими<span class="theme">отличными гидами</span></h2>
                        <!--<h2 class="mb-1">Meet Our <span class="theme">Excellent Guides</span></h2>-->
                        <p class="mb-2">Наши гиды — это профессионалы с большим опытом, которые сделают ваше путешествие
                            не только
                            интересным, но и незабываемым.</p>
                        <a href="about.php" class="nir-btn">View All Guides</a>
                    </div>
                </div>
                <div class="col-lg-7 mb-4">
                    <div class="row team-main">
                        <?php $i = 0;
                        foreach ($guides as $guide): ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="team-list bg-white rounded">
                                    <div class="team-image">
                                        <img src="<?php echo $guide['img']; ?>" alt="team">
                                    </div>
                                    <div class="team-content text-center p-3 bg-theme">
                                        <h4 class="mb-0 white"><?php echo $guide['name']; ?></h4>
                                        <p class="mb-0 white"><?php echo $guide['title']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php $i++;
                            if ($i == 3)
                                break;
                        endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our teams Ends -->



    <!-- about-us starts -->
    <section class="about-us pb-6 pt-6" style="background-image:url(images/shape4.png); background-position:center;">
        <div class="container">

            <div class="section-title mb-6 w-50 mx-auto text-center">
                <h4 class="mb-1 theme1">3 Шага к Идеальному Туру</h4>
                <!--<h4 class="mb-1 theme1">3 Step of The Perfect Tour</h4>-->

                <h2 class="mb-1">Найдите <span class="theme">Идеальное Путешествие</span></h2>
                <!--<h2 class="mb-1">Find <span class="theme">Travel Perfection</span></h2>-->

                <p>Откройте для себя лучшие маршруты, наслаждайтесь комфортом и создавайте воспоминания, которые
                    останутся с вами на всю жизнь.</p>
                <!--<p>Discover the best routes, enjoy comfort, and create memories that will last a lifetime.</p>-->

            </div>

            <!-- why us starts -->
            <div class="why-us">
                <div class="why-us-box">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item text-center p-4 py-5 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon">
                                        <i class="icon-flag theme"></i>
                                    </div>
                                    <h4><a href="about.html">Расскажите нам, что вы хотите сделать</a></h4>
                                    <!--<h4><a href="about.html">Tell Us What You Want To Do</a></h4>-->

                                    <p class="mb-0">Поделитесь своими желаниями, и мы поможем воплотить их в реальность.
                                    </p>
                                    <!--<p class="mb-0">Share your desires, and we will help turn them into reality.</p>-->

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item text-center p-4 py-5 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon">
                                        <i class="icon-location-pin theme"></i>
                                    </div>
                                    <h4><a href="about.html">Поделитесь своими туристическими направлениями</a></h4>
                                    <!--<h4><a href="about.html">Share Your Travel Locations</a></h4>-->

                                    <p class="mb-0">Расскажите нам о местах, которые вы хотите посетить, и мы поможем
                                        спланировать ваше идеальное путешествие.</p>
                                    <!--<p class="mb-0">Tell us about the places you want to visit, and we will help plan your perfect trip.</p>-->

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item text-center p-4 py-5 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon">
                                        <i class="icon-directions theme"></i>
                                    </div>
                                    <h4><a href="about.html">Поделитесь своими предпочтениями в путешествиях</a></h4>
                                    <!--<h4><a href="about.html">Share Your Travel Preference</a></h4>-->

                                    <p class="mb-0">Сообщите нам о ваших предпочтениях, и мы организуем путешествие,
                                        которое полностью соответствует вашим ожиданиям.</p>
                                    <!--<p class="mb-0">Tell us about your preferences, and we will organize a trip that perfectly meets your expectations.</p>-->

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item text-center p-4 py-5 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon">
                                        <i class="icon-compass theme"></i>
                                    </div>
                                    <h4><a href="about.html">Мы 100% надежное туристическое агентство</a></h4>
                                    <!--<h4><a href="about.html">We are 100% Trusted Tour Agency</a></h4>-->

                                    <p class="mb-0">Доверьтесь нам, и мы сделаем ваше путешествие комфортным, безопасным
                                        и незабываемым.</p>
                                    <!--<p class="mb-0">Trust us, and we will make your journey comfortable, safe, and unf-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- why us ends -->
        </div>
        <div class="white-overlay"></div>
    </section>
    <!-- about-us ends -->

    <!-- top Destination starts -->
    <section class="trending pb-5 pt-0">
        <div class="container">
            <div class="section-title mb-6 w-50 mx-auto text-center">
                <h4 class="mb-1 theme1">Лучшие направления</h4>
                <!--<h4 class="mb-1 theme1">Top Destinations</h4>-->

                <h2 class="mb-1">Исследуйте <span class="theme">лучшие направления</span></h2>
                <!--<h2 class="mb-1">Explore <span class="theme">Top Destinations</span></h2>-->

                <p>Откройте для себя самые популярные и удивительные места, которые подарят вам незабываемые впечатления
                    и эмоции.</p>
                <!--<p>Discover the most popular and amazing places that will give you unforgettable impressions and emotions.</p>-->

            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4">
                    <div class="trend-item1">
                        <div class="trend-image position-relative rounded">
                            <img src="images/destination/hikkaduwa_6.jpg" alt="image">
                            <div
                                class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                <div class="trend-content-title">
                                    <!--<h5 class="mb-0"><a href="tour-grid.html" class="theme1">England</a></h5>-->
                                    <h3 class="mb-0 white">Хиккадува</h3>
                                </div>
                                <span class="white bg-theme p-1 px-2 rounded">Тур 7</span>
                            </div>
                            <div class="color-overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <?php foreach ($selected_destinations as $destination): ?>
                            <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                                <div class="trend-item1">
                                    <a href="destination_data.php?des=<?php echo $destination['des_id']; ?>">
                                        <div class="trend-image position-relative rounded">
                                            <img src="<?php echo $destination['img']; ?>" alt="image">
                                            <div
                                                class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                                <div class="trend-content-title">
                                                    <h3 class="mb-0 white"><?php echo $destination['name']; ?></h3>
                                                </div>
                                                <span
                                                    class="white bg-theme p-1 px-2 rounded"><?php echo $destination['type']; ?></span>
                                            </div>
                                            <div class="color-overlay"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- top Destination ends -->

    <!-- about-us starts -->
    <section class="about-us pt-0" style="background-image:url(images/bg/bg-trans.png);">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 mb-4 pe-4">
                        <div class="about-image overflow-hidden">
                            <img src="images/travel1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 ps-4">
                        <div class="about-content text-center text-lg-start mb-4">
                            <h4 class="theme d-inline-block mb-0">Узнайте больше о нас</h4>
                            <!--<h4 class="theme d-inline-block mb-0">Get To Know Us</h4>-->

                            <h2 class="border-b mb-2 pb-1">Исследуйте все туры по Шри-Ланке вместе с нами.</h2>
                            <!--<h2 class="border-b mb-2 pb-1">Explore All Tour of Sri Lanka with us.</h2>-->

                            <p class="border-b mb-2 pb-2">Откройте для себя незабываемые путешествия по Шри-Ланке. Мы
                                предлагаем уникальные маршруты, чтобы показать вам всю красоту этого удивительного
                                острова. От золотых пляжей до древних храмов и захватывающих сафари — каждый найдет
                                что-то особенное.<br><br>Доверьтесь нам, и мы создадим для вас путешествие, которое вы
                                никогда не забудете.</p>
                            <!--<p class="border-b mb-2 pb-2">Discover unforgettable journeys across Sri Lanka. We offer unique itineraries to show you the beauty of this amazing island. From golden beaches to ancient temples and thrilling safaris, there’s something special for everyone.<br><br>Trust us, and we’ll create a journey you’ll never forget.</p>-->

                            <div class="about-listing">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="icon-location-pin theme"></i> Гид</li>
                                    <!--<li><i class="icon-location-pin theme"></i> Tour Guide</li>-->

                                    <li><i class="icon-briefcase theme"></i> Доступная цена</li>
                                    <!--<li><i class="icon-briefcase theme"></i> Friendly Price</li>-->

                                    <li><i class="icon-folder theme"></i> Надежный турпакет</li>
                                    <!--<li><i class="icon-folder theme"></i> Reliable Tour Package</li>-->

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- Counter -->
                        <div class="counter-main w-75 float-start z-index3 position-relative">
                            <div class="counter p-4 pb-0 box-shadow bg-white rounded mt-minus">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">10</h2>
                                                <span class="m-0">лет опыта</span><!--Years Experiences-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">100</h2>
                                                <span class="m-0">туристических пакетов</span><!--Tour Packages-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">6000</h2>
                                                <span class="m-0">довольных клиентов</span><!--Tour Packages-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">15</h2>
                                                <span class="m-0">наград</span><!--Award Winning-->
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Counter -->
                    </div>
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
    </section>
    <!-- about-us ends -->

    <!-- best tour Starts 
    <section class="trending pb-0">
        <div class="container">
            <div class="row align-items-center justify-content-between mb-6 ">
                <div class="col-lg-7">
                    <div class="section-title text-center text-lg-start">
                        <h4 class="mb-1 theme1">Top Pick</h4>
                        <h2 class="mb-1">Best <span class="theme">Tour Packages</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore.</p>
                    </div>
                </div>
                <div class="col-lg-5">

                </div>
            </div>
            <div class="trend-box">
                <div class="row item-slider">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item rounded box-shadow">
                            <div class="trend-image position-relative">
                                <img src="images/trending/trending2.jpg" alt="image" class="">
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">
                                <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                    <div class="entry-author">
                                        <i class="icon-calendar"></i>
                                        <span class="fw-bold"> 9 Days Tours</span>
                                    </div>
                                </div>
                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Croatia</h5>
                                <h3 class="mb-1"><a href="tour-grid.html">Piazza Castello</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(12)</span>
                                </div>
                                <p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum</p>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> $170.00</span> | Per person
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item box-shadow rounded">
                            <div class="trend-image position-relative">
                                <img src="images/trending/trending3.jpg" alt="image">
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">
                                <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                    <div class="entry-author">
                                        <i class="icon-calendar"></i>
                                        <span class="fw-bold"> 9 Days Tours</span>
                                    </div>
                                </div>
                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Greece</h5>
                                <h3 class="mb-1"><a href="tour-grid.html">Santorini, Oia</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(38)</span>
                                </div>
                                <p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum</p>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> $180.00</span> | Per person
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item box-shadow rounded">
                            <div class="trend-image position-relative">
                                <img src="images/trending/trending4.jpg" alt="image">
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">
                                <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                    <div class="entry-author">
                                        <i class="icon-calendar"></i>
                                        <span class="fw-bold"> 9 Days Tours</span>
                                    </div>
                                </div>
                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Maldives</h5>
                                <h3 class="mb-1"><a href="tour-grid.html">Hurawalhi Island</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(18)</span>
                                </div>
                                <p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum</p>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> $260.00</span> | Per person
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item box-shadow rounded">
                            <div class="trend-image position-relative">
                                <img src="images/trending/trending1.jpg" alt="image">
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">
                                <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                    <div class="entry-author">
                                        <i class="icon-calendar"></i>
                                        <span class="fw-bold"> 5 Days Tours</span>
                                    </div>
                                </div>
                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Greece</h5>
                                <h3 class="mb-1"><a href="tour-grid.html">Santorini, Oia</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(38)</span>
                                </div>
                                <p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum</p>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> $180.00</span> | Per person
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     best tour Ends -->


    <!-- Discount action starts -->
    <section class="discount-action pt-6"
        style="background-image:url(images/section-bg1.png); background-position:center;">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url(images/shape8.png);"></div>
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

                            <p>Откройте для себя новые горизонты, наслаждаясь каждым моментом своего путешествия, и
                                отправляйтесь туда, где мечты становятся реальностью.</p>
                            <!--<p>Discover new horizons, enjoy every moment of your journey, and travel to where dreams come true.</p>-->

                        </div>
                        <div class="video-button text-center position-relative">
                            <div class="call-button text-center">
                                <button class="play-btn"
                                    onclick="location.href='https://www.instagram.com/reel/DBw-3iQod_v/?utm_source=ig_web_copy_link'"
                                    type="button">
                                    <i class="fa fa-play bg-blue"></i></button>
                            </div>
                            <div class="video-figure"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
    </section>
    <!-- Discount action Ends -->


    <!-- testomonial start -->
    <section class="testimonial pt-9" style="background-image:url(images/testimonial.png)">
        <div class="container">
            <div class="section-title mb-6 text-center w-75 mx-auto">
                <h4 class="mb-1 theme1">Наши отзывы</h4>
                <!--<h4 class="mb-1 theme1">Our Testimonials</h4>-->
                <h2 class="mb-1">Хорошие отзывы от <span class="theme">клиентов</span></h2>
                <!--<h2 class="mb-1">Good Reviews By <span class="theme">Clients</span></h2>-->

                <p>Наши клиенты ценят нас за профессионализм, качественное обслуживание и индивидуальный подход. Читайте
                    отзывы и убедитесь сами!</p>
                <!--<p>Our clients value us for professionalism, quality service, and a personalized approach. Read the reviews and see for yourself!</p>-->

            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pe-4">
                    <div class="testimonial-image">
                        <img src="images/travel2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 ps-4">
                    <div class="row review-slider">
                        <?php foreach ($testimonial as $test): ?>
                            <div class="col-sm-4 item">
                                <div class="testimonial-item1 rounded">
                                    <div class="author-info mt-2 d-flex align-items-center mb-4">
                                        <a href="#"><img src="<?php echo $test['img']; ?>" alt=""></a>
                                        <div class="author-title ms-3">
                                            <h5 class="m-0 theme"><?php echo $test['name']; ?></h5>
                                            <!--<h5 class="m-0 theme">Sasha</h5>-->

                                            <span><?php echo $test['title']; ?></span>
                                            <!--<span>Traveller</span>-->
                                        </div>
                                    </div>
                                    <div class="details">
                                        <p class="m-0"><i
                                                class="fa fa-quote-left me-2 fs-1"></i><?php echo $test['description']; ?>
                                        </p>
                                        <!--
    <p class="m-0"><i class="fa fa-quote-left me-2 fs-1"></i>My trip with this agency was unforgettable! Everything was perfectly organized, the guides were professional, and the itineraries were very interesting. I will definitely book with them again!</p>
    -->
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial ends -->



    <?php include 'footer.php' ?>

    <?php include 'foot.php' ?>
    <!-- JavaScript Pagination Logic -->

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const itemsPerPage = 3;
            const tourContainer = document.getElementById("tour-container");
            const tours = Array.from(tourContainer.children); // Get all tour cards
            const totalPages = Math.ceil(tours.length / itemsPerPage);
            let currentPage = 1;

            const prevBtn = document.getElementById("prev-btn");
            const nextBtn = document.getElementById("next-btn");
            const pageInfo = document.getElementById("page-info");

            function showPage(page) {
                // Hide all cards
                tours.forEach((tour, index) => {
                    tour.style.display =
                        index >= (page - 1) * itemsPerPage && index < page * itemsPerPage ? "block" : "none";
                });

                // Update page info and button states
                pageInfo.textContent = `Page ${page} of ${totalPages}`;
                prevBtn.disabled = page === 1;
                nextBtn.disabled = page === totalPages;
            }

            // Button event listeners
            prevBtn.addEventListener("click", () => {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });

            nextBtn.addEventListener("click", () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }
            });

            // Initialize first page
            showPage(currentPage);
        });
    </script>

</body>

</html>