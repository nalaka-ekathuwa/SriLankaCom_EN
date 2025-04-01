<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<?php include 'head.php' ?>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>

    <?php
    if (isset($_GET['tour'])) {
        $des = $_GET['tour'];
    } else {
        $des = '';
    }
    // var_dump($des);exit;
    $des_id_to_find = $des; // ID you are searching for
    $tour_data = null;

    foreach ($tours as $tour) {
        if ($tour['tour_id'] === $des_id_to_find) {
            $tour_data = $tour;
            break; // Stop looping once we find the match
        }
    }

    if ($tour_data) {
        // echo "yeeeh!";
    } else {
        header("location: tuors.php?er=1");
    }
    $class_about = '';
    $class_dest = '';
    $class_tours = "class ='active'";
    $class_home = "";
    $class_contact = '';
    include 'header.php';
    ?>

    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(images/bg/bg1.jpg);">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url(images/shape8.png);"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Tours</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="tours.php">Tours</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tour details</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- top Destination starts -->
    <section class="trending pt-6 pb-0 bg-lgrey overflow-hidden">
        <div class="tabs-navbar1 bg-white sticky1 bordernone py-3">
            <ul id="tabs" class="nav nav-tabs bordernone mb-0 overflow-visible">
                <!-- <li><a data-toggle="tab" href="#highlight">Основные моменты</a></li> -->
                <li><a data-toggle="tab" href="#highlight">Highlight</a></li>

                <!-- <li><a data-toggle="tab" href="#iternary">Маршрут</a></li> -->
                <li><a data-toggle="tab" href="#iternary">Iternary</a></li>

                <!-- <li><a data-toggle="tab" href="#single-map">Карта</a></li> -->
                <li><a data-toggle="tab" href="#single-map">Map</a></li>

                <!-- <li><a data-toggle="tab" href="#single-review">Отзывы</a></li> -->
                <li><a data-toggle="tab" href="#single-review">Reviews</a></li>

                <!-- <li><a data-toggle="tab" href="#single-comments">Комментарии</a></li> -->
                <li><a data-toggle="tab" href="#single-comments">Comments</a></li>

                <!-- <li><a data-toggle="tab" href="#single-add-review" class="bordernone">Добавить отзыв</a></li> -->
                <li><a data-toggle="tab" href="#single-add-review" class="bordernone">Add Reviews</a></li>

            </ul>
        </div>
        <div class="container">
            <div class="single-content">
                <div id="highlight">
                    <div class="single-full-title border-b mb-2 pb-2">
                        <div class="single-title text-center">
                            <h2 class="mb-1"><?php echo $tour_data['title']; ?></h2>
                            <div class="rating-main">
                                <p class="mb-0 me-2 d-inline-block"><i class="icon-location-pin"></i>
                                    <?php echo $tour_data['place']; ?></p>
                                <!-- meka array ekakata enna one  -->
                                <!-- <p class="mb-0 me-2 d-inline-block"><i class="icon-location-pin"></i> Ella, Sri Lanka</p> -->

                                <div class="rating me-2 d-inline-block">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <span>(1,186 Reviews)</span>
                            </div>
                        </div>
                    </div>

                    <div class="description-images mb-4">
                        <div class="row">
                            <div class="col"><img src="images/trending/trending1.jpg" alt="" class="rounded"></div>
                            <div class="col"><img src="images/trending/trending2.jpg" alt="" class="rounded"></div>
                            <div class="col"><img src="images/trending/trending3.jpg" alt="" class="rounded"></div>
                        </div>
                    </div>

                    <div class="description mb-2">
                        <!-- <h4>Описание</h4> -->
                        <h4>Description</h4>

                        <?php echo $tour_data['desc_long']; ?>
                    </div>

                    <div class="tour-includes mb-4">
                        <table>
                            <tbody>
                                <tr>
                                    <td><i class="fa fa-hourglass pink mr-1" aria-hidden="true"></i>
                                        <?php echo $tour_data['days']; ?></td>
                                    <!-- <td><i class="fa fa-clock-o pink mr-1" aria-hidden="true"></i> 2 Days</td> -->

                                    <td><i class="fa fa-users pink mr-1" aria-hidden="true"></i>
                                        <?php echo $tour_data['people']; ?></td>
                                    <!-- <td><i class="fa fa-group pink mr-1" aria-hidden="true"></i> Max: 16, min: 8 people</td> -->


                                    <td><i class="fa fa-calendar-check pink mr-1" aria-hidden="true"></i>
                                        <?php echo $tour_data['period']; ?></td>
                                    <!-- <td><i class="fa fa-calendar pink mr-1" aria-hidden="true"></i> 2 days</td> -->
                                </tr>
                                <tr>
                                    <td><i class="fa fa-user pink mr-1" aria-hidden="true"></i>
                                        <?php echo $tour_data['min_age']; ?></td>
                                    <!-- <td><i class="fa fa-user pink mr-1" aria-hidden="true"></i> Min Age: 5+</td> -->

                                    <td><i class="fa fa-map-signs pink mr-1" aria-hidden="true"></i>
                                        <?php echo $tour_data['pickup']; ?></td>
                                    <!-- <td><i class="fa fa-map-signs pink mr-1" aria-hidden="true"></i> Pickup: Airport</td> -->

                                    <td><i class="fa fa-language pink mr-1" aria-hidden="true"></i>
                                        <?php echo $tour_data['language']; ?></td>
                                    <!-- <td><i class="fa fa-file-alt pink mr-1" aria-hidden="true"></i> Language: Russian Only</td> -->
                                </tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="description mb-2">
                        <div class="row">
                            <!-- <div class="col-lg-6 col-md-6 mb-2">
                                <div class="desc-box bg-grey p-4 rounded">
                                    <h5 class="mb-2">Departure & Return Location</h5>
                                    <p class="mb-0">John F.K. International Airport(Google Map)</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-2">
                                <div class="desc-box bg-grey p-4 rounded">
                                    <h5 class="mb-2">Bedroom</h5>
                                    <p class="mb-0">4 Bedrooms</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-2">
                                <div class="desc-box bg-grey p-4 rounded">
                                    <h5 class="mb-2">Departure Time</h5>
                                    <p class="mb-0">3 Hours Before Flight Time</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-2">
                                <div class="desc-box bg-grey p-4 rounded">
                                    <h5 class="mb-2">Departure Time</h5>
                                    <p class="mb-0">3 Hours Before Flight Time</p>
                                </div>
                            </div> -->
                            <!--<div class="col-lg-6 col-md-6 mb-2">
                                <div class="desc-box bg-grey p-4 rounded">
                                    <h5 class="mb-2"></h5>
                                    <ul>
                                        <?php foreach ($tour_data['included'] as $included): ?>
                                            <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i> <?php echo $included; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-2">
                                <div class="desc-box bg-grey p-4 rounded">
                                    <h5 class="mb-2"></h5>
                                    <ul>
                                        <?php foreach ($tour_data['excluded'] as $excluded): ?>
                                            <li class="d-block pb-1"><i class="fa fa-close pink mr-1"></i> <?php echo $excluded; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>-->
                        </div>
                    </div>

                    <div class="description mb-4">
                        <h4>Гид</h4>
                        <!-- <h4>Tour Guide</h4> -->

                        <?php echo $tour_data['tour_guide']; ?>
                    </div>
                </div>

                <div id="iternary" class="accrodion-grp faq-accrodion mb-4" data-grp-name="faq-accrodion">
                    <?php foreach ($tour_data['accrodion'] as $accordian): ?>
                        <div class="accrodion ">
                            <div class="accrodion-title rounded">
                                <h5 class="mb-0"><?php echo $accordian['day']; ?></h5>
                            </div>
                            <div class="accrodion-content" style="display: block;">
                                <div class="inner">
                                    <p><?php echo $accordian['activity']; ?></p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

                <div id="single-map" class="single-map mb-4">
                    <h4>Карта</h4>
                    <!-- <h4>Map</h4> -->

                    <div class="map rounded overflow-hidden">
                        <div style="width: 100%">
                            <?php echo $tour_data['map']; ?>
                            <!-- <iframe class=" rounded overflow-hidden" height="400"
                                src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=+(mangal%20bazar)&t=&z=14&ie=UTF8&iwloc=B&output=embed"></iframe> -->
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
                                <!-- <h4 class="white mb-1">"Чувства могут быть хуже, чем мысли"</h4> -->
                                <h4 class="white mb-1">"Feel so much worse than thinking"</h4>
                                <!-- <p class="mb-0 white font-italic">На основе 40 отзывов</p> -->
                                <p class="mb-0 white font-italic">From 40 Reviews</p>

                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="review-progress">
                                <div class="progress-item mb-1">
                                    <p class="mb-0">Чистота</p>
                                    <!-- <p class="mb-0">Cleanliness</p> -->
                                    <div class="progress rounded">
                                        <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="40"
                                            aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                            <!-- <span class="sr-only">95% Завершено</span> -->
                                            <span class="sr-only">95% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-item mb-1">
                                    <!-- <p class="mb-0">Удобства</p> -->
                                    <p class="mb-0">Facilities</p>
                                    <div class="progress rounded">
                                        <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="30"
                                            aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                            <!-- <span class="sr-only">100% Завершено</span> -->
                                            <span class="sr-only">100% Complete</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-item mb-1">
                                    <!-- <p class="mb-0">Соотношение цены и качества</p> -->
                                    <p class="mb-0">Value for money</p>
                                    <div class="progress rounded">
                                        <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                            <!-- <span class="sr-only">100% Завершено</span> -->
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
                                            <!-- <span class="sr-only">100% Завершено</span> -->
                                            <span class="sr-only">100% Complete</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-item">
                                    <!-- <p class="mb-0">Расположение</p> -->
                                    <p class="mb-0">Location</p>
                                    <div class="progress rounded">
                                        <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="45"
                                            aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                            <!-- <span class="sr-only">100% Завершено</span> -->
                                            <span class="sr-only">100% Complete</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- blog comment list -->
                <div id="single-comments" class="single-comments single-box mb-4">
                    <h5 class="border-b pb-2 mb-2">Showing 16 verified guest comments</h5>
                    <?php foreach ($tour_data['review'] as $review): ?>
                        <div class="comment-box">
                            <div class="comment-image">
                                <img src="<?php echo $review['img']; ?>" alt="image">
                            </div>
                            <div class="comment-content rounded">
                                <h5 class="mb-1"><?php echo $review['name']; ?></h5>
                                <p class="comment-date"><?php echo $review['date']; ?></p>
                                <div class="comment-rate">
                                    <div class="rating mar-right-15">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="comment-title"><?php echo $review['subject']; ?></span>
                                </div>
                                <p class="comment"><?php echo $review['messege']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

                <!-- blog review -->
                <div id="single-add-review" class="single-add-review">
                    <!-- <h4>Оставить отзыв</h4> -->
                    <h4>Write a Review</h4>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <!-- <input type="text" placeholder="Имя"> -->
                                    <input type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <!-- <input type="email" placeholder="Электронная почта"> -->
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
    </section>
    <!-- top Destination ends -->


    <?php include 'footer.php'; ?>
    <?php include 'foot.php'; ?>

    <script src="js/custom-accordian.js"></script>
    <script src="js/custom-navscroll.js"></script>
</body>

</html>