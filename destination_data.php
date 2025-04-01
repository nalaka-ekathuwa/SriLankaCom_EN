<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<?php include 'head.php' ?>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>

    <?php
    if (isset($_GET['des'])) {
        $des = $_GET['des'];
    } else {
        $des = '';
    }
    // var_dump($des);exit;
    $des_id_to_find = $des; // ID you are searching for
    $des_data = null;

    foreach ($destinations as $destination) {
        if ($destination['des_id'] === $des_id_to_find) {
            $des_data = $destination;
            break; // Stop looping once we find the match
        }
    }

    if ($des_data) {
        // echo "yeeeh!";
    } else {
        header("location: destinations.php?er=1");
    }

    $class_about = '';
    $class_dest = "class ='active'";
    $class_tours = "";
    $class_home = "";
    $class_contact = '';
    include 'header.php';
    ?>

    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(images/bg/bg1.jpg);">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url(images/shape8.png);"></div>
        <div id="banner_image" class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Tour Grid</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="destination.php">Destination List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Destination Details</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- destination start -->
    <!-- top Destination starts -->
    <section class="trending pt-6 pb-0 bg-lgrey">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content">
                        <div id="highlight" class="mb-4">
                            <div class="single-full-title border-b mb-2 pb-2">
                                <div class="single-title">
                                    <h2 class="mb-1"><?php echo $des_data['name']; ?></h2>
                                    <div class="rating-main d-flex align-items-center">
                                        <p class="mb-0 me-2"><i class="icon-location-pin"></i>
                                            <?php echo $des_data['place']; ?></p>
                                        <div class="rating me-2">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <!-- <span>(1,186 Reviews)</span> -->
                                    </div>
                                </div>
                            </div>

                            <div id="cover-image" class="description-images mb-4">
                                <img src="<?php echo $des_data['img']; ?>" alt="" class="w-100 rounded">
                            </div>

                            <div id="single-description" class="description mb-2">
                                <h4>Описание</h4>
                                <?php echo $des_data['description']; ?>
                            </div>

                            <!-- <div id="more-info" class="description d-md-flex">
                                <div class="desc-box bg-grey p-4 rounded me-md-2 mb-2">
                                   <h5 class="mb-2">Price Includes</h5>
                                    <ul>
                                        <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i> Air Fares</li>
                                        <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i> 3 Nights Hotel
                                            Accomodation</li>
                                        <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i> Tour Guide</li>
                                        <li class="d-block"><i class="fa fa-check pink mr-1"></i> Entrance Fees</li>
                                    </ul>
                                </div>
                                <div class="desc-box bg-grey p-4 rounded ms-md-2 mb-2">
                                    <h4 class="mb-2">Departure & Return Location</h4>
                                    <ul>
                                        <li class="d-block pb-1"><i class="fa fa-close pink mr-1"></i> Guide Service Fee
                                        </li>
                                        <li class="d-block pb-1"><i class="fa fa-close pink mr-1"></i> Driver Service
                                            Fee</li>
                                        <li class="d-block pb-1"><i class="fa fa-close pink mr-1"></i> Any Private
                                            Expenses</li>
                                        <li class="d-block"><i class="fa fa-close pink mr-1"></i> Room Service Fees</li>
                                    </ul>
                                </div>
                            </div> -->

                        </div>

                        <div id="single-gallery" class="description mb-2">
                            <h4 class="mb-2">Gallery</h4>
                            <div class="services-image d-md-flex">
                                <div class="me-md-2 rounded overflow-hidden mb-2"><img
                                        src="<?php echo $des_data['gallery1']; ?>" alt="" class="w-100"></div>
                                <div class="ms-md-2 rounded overflow-hidden mb-2"><img
                                        src="<?php echo $des_data['gallery2']; ?>" alt="" class="w-100"></div>
                            </div>
                        </div>

                        <div id="single-map" class="single-map mb-4">
                            <h4>Map</h4>
                            <div class="map rounded overflow-hidden">
                                <div style="width: 100%">
                                    <iframe class=" rounded overflow-hidden" height="400"
                                        src="<?php echo $des_data['map']; ?>"></iframe>
                                </div>
                            </div>
                        </div>

                        <div id="single-review" class="single-review mb-4">
                            <!-- <h4>Средний рейтинг</h4> -->
                            <h4>Average Reviews</h4>

                            <div class="row d-flex align-items-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="review-box bg-title text-center py-4 p-2 rounded">
                                        <h2 class="mb-1 white"><span>4.9</span>/5</h2>
                                        <!-- <h4 class="white mb-1">"Чувствовать намного хуже, чем думать"</h4> -->
                                        <h4 class="white mb-1">"Feel so much worse than thinking"</h4>

                                        <!-- <p class="mb-0 white font-italic">На основе 40 отзывов</p> -->
                                        <p class="mb-0 white font-italic">From 40 Reviews</p>

                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="review-progress">
                                        <div class="progress-item mb-1">
                                            <!-- <p class="mb-0">Чистота</p> -->
                                            <p class="mb-0">Cleanliness</p>

                                            <div class="progress rounded">
                                                <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="40"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                                    <span class="sr-only">90% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item mb-1">
                                            <!-- <p class="mb-0">Удобства</p> -->
                                            <p class="mb-0">Facilities</p>

                                            <div class="progress rounded">
                                                <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="30"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                                    <span class="sr-only">90% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item mb-1">
                                            <!-- <p class="mb-0">Соотношение цены и качества</p> -->
                                            <p class="mb-0">Value for money</p>

                                            <div class="progress rounded">
                                                <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="60"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                    <span class="sr-only">100% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item mb-1">
                                            <!-- <p class="mb-0">Обслуживание</p> -->
                                            <p class="mb-0">Service</p>

                                            <div class="progress rounded">
                                                <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="20"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                    <span class="sr-only">100% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <!-- <p class="mb-0">Местоположение</p> -->
                                            <p class="mb-0">Location</p>

                                            <div class="progress rounded">
                                                <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="45"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                    <span class="sr-only">100% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- blog review -->
                        <div id="single-add-review" class="single-add-review">
                            <!-- <h4>Написать отзыв</h4> -->
                            <h4>Write a Review</h4>

                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <input type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <input type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-2">
                                            <!-- <textarea>Комментарий</textarea> -->
                                            <textarea>Comment</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-btn">
                                            <!-- <a href="#" class="nir-btn">Отправить отзыв</a> -->
                                            <a href="#" class="nir-btn">Submit Review</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- sidebar starts -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">

                            <!-- <div class="author-news mb-4 border-all box-shadow p-5 text-center rounded">
                                <div class="author-news-content">
                                    <div class="author-thumb mb-1">
                                        <img src="images/team/img2.jpg" alt="author">
                                    </div>
                                    <div class="author-content">
                                        <h3 class="title mb-1"><a href="#">Relson Dulux</a></h3>
                                        <p class="mb-2">Hello, We’re content writer who is fascinated by content
                                            fashion, celebrity and lifestyle. We helps clients bring the right content
                                            to the right people.</p>
                                        <div class="header-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f rounded"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g rounded"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter rounded"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div id="destination_sidebar" class="sidebar-item mb-4">
                                <h4 class="">Simple Guide</h4>
                                <ul class="sidebar-category">
                                    <!-- <li><a href="#banner_image">Page Banner</a></li> -->
                                    <!-- <li><a href="#cover-image">Название направления</a></li> -->
                                    <li><a href="#cover-image">Destination Title</a></li>

                                    <!-- <li><a href="#single-description">Описание</a></li> -->
                                    <li><a href="#single-description">Description</a></li>

                                    <!-- <li><a href="#more-info">Дополнительная информация</a></li> -->
                                    <!--<li><a href="#more-info">Additional Info</a></li>-->

                                    <!-- <li><a href="#single-gallery">Галерея</a></li> -->
                                    <li><a href="#single-gallery">Gallery</a></li>

                                    <!-- <li><a href="#single-map">Карта</a></li> -->
                                    <li><a href="#single-map">Map</a></li>

                                    <!-- <li><a href="#single-review">Отзывы</a></li> -->
                                    <li><a href="#single-review">Reviews</a></li>

                                    <!-- <li><a href="#single-add-review">Комментарий</a></li> -->
                                    <li><a href="#single-add-review">Comment</a></li>

                                </ul>
                            </div>
                            <!--
                            <div class="sidebar-item mb-4">
                                <h4 class="">Tags</h4>
                                <ul class="sidebar-tags">
                                    <li><a href="#">Tour</a></li>
                                    <li><a href="#">Rental</a></li>
                                    <li><a href="#">City</a></li>
                                    <li><a href="#">Yatch</a></li>
                                    <li><a href="#">Activity</a></li>
                                    <li><a href="#">Museum</a></li>
                                    <li><a href="#">Beauty</a></li>
                                    <li><a href="#">Classic</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Designs</a></li>
                                    <li><a href="#">Featured</a></li>
                                    <li><a href="#">Free Style</a></li>
                                    <li><a href="#">Programs</a></li>
                                    <li><a href="#">Travel</a></li>
                                </ul>
                            </div>-->

                            <div class="sidebar-item mb-4">
                                <!-- <div class="sidebar-image rounded overflow-hidden">
                                    <img src="images/destination/trending7.jpg" alt=""> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- top Destination ends -->
    <!-- destination end -->

    <?php include 'footer.php'; ?>
    <?php include 'foot.php'; ?>
</body>

</html>