    <!-- top Destination starts -->
    <section class="trending pt-6 pb-0 bg-lgrey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tour-container">

                    <?php foreach ($tours as $tour): ?>
                        <!-- 1 Example tour card Ciao Sri Lanka  -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="trend-item rounded box-shadow">
                                <div class="trend-image position-relative">
                                <a href="tour_data.php?tour=<?php echo $tour['tour_id']; ?>">
                                    <img src="<?php echo $tour['img']; ?>" alt="image" class="">
                                    <div class="color-overlay"></div>
                                </a>
                                </div>
                                <div class="trend-content p-4 pt-5 position-relative">
                                    <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                        <div class="entry-author">
                                            <i class="icon-calendar"></i>
                                            <span class="fw-bold"><?php echo $tour['package']; ?></span>
                                            <!--<span class="fw-bold">2 Days Tours</span>-->

                                        </div>
                                    </div>

                                    <!-- Bootstrap Carousel -->
                                    <div id="textCarousel" class="carousel slide" data-bs-ride="carousel"
                                        data-bs-interval="<?php echo $tour['carousel_interval']; ?>">
                                        <div class="carousel-inner">
                                            <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> <?php
                                            // Array of carousel items

                                            // Generate carousel items
                                            foreach ($tour['carousel'] as $index => $text) {
                                                $activeClass = $index === 0 ? 'active' : '';
                                                echo "<div class='carousel-item $activeClass'>
                                    <p class='text-center'>$text</p>
                                  </div>";
                                            }
                                            ?></h5>
                                        </div>
                                        <!-- Carousel Controls -->
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#textCarousel" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#textCarousel" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                    <!-- End text carousel -->

                                    <!--Array should come here-->
                                    <h3 style="text-align:center" class="mb-1"><a href="tour_data.php?tour=<?php echo $tour['tour_id']; ?>"><?php echo $tour['title']; ?></a></h3>
                                    <!--<h3 class="mb-1"><a href="tour-single.html">Ciao Sri Lanka</a></h3>-->

                                    <div class="rating-main d-flex align-items-center pb-2">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="ms-2"> <?php echo $tour['package']; ?></span>
                                    </div>
                                    <p style="text-align:center" class="border-b pb-2 mb-2"><?php echo $tour['description']; ?></p>
                                    <!--<p class="border-b pb-2 mb-2">Discover the best travel routes and enjoy unforgettable adventures with us!</p>-->

                                    <div class="entry-meta">
                                        <div class="entry-author d-flex align-items-center">
                                            <p class="mb-0"><span class="theme fw-bold fs-5"><?php echo $tour['price']; ?></span> | <?php echo $tour['price_tag']; ?></p>
                                            <!--<p class="mb-0"><span class="theme fw-bold fs-5">$170.00</span> | Per person</p>-->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Duplicate this card structure for other packages -->
                        <?php endforeach; ?>
                    </div>

                    <!-- Pagination Controls -->
                    <div class="text-center mt-4">
                        <button id="prev-btn" class="nir-btn" disabled>Previous</button>
                        <span id="page-info"></span>
                        <button id="next-btn" class="nir-btn">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top Destination ends -->