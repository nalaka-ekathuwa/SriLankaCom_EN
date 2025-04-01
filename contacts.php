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
    $class_tours = "";
    $class_home = "";
    $class_contact = "class ='active'";
    include 'header.php' ?>

    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(images/bg/bg1.jpg);">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url(images/shape8.png);"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <!-- <h1 class="mb-3">Свяжитесь с нами</h1> -->
                    <h1 class="mb-3">Contact Us</h1>

                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="#">Главная</a></li> -->
                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                            <!-- <li class="breadcrumb-item active" aria-current="page">Свяжитесь с нами</li> -->
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- contact starts -->
    <section class="contact-main pt-6 pb-60">
        <div class="container-fluid">
            <div class="contact-info-main mt-0">
                <div class="row">
                    <div class="col-lg-10 col-offset-lg-1 mx-auto">
                        <div class="contact-info bg-white">
                            <div class="contact-info-title text-center mb-4 px-5">

                                <!-- <h3 class="mb-1">ИНФОРМАЦИЯ О НАС</h3> -->
                                <h3 class="mb-1">INFORMATION ABOUT US</h3>

                                <!-- <p class="mb-0">Получите подробную информацию о наших услугах, ценностях и миссии. Мы
                                    стремимся сделать ваше путешествие незабываемым!</p> -->
                                <p class="mb-0">Get detailed information about our services, values, and mission. We strive to make your journey unforgettable!</p>

                            </div>
                            <div class="contact-info-content row ">
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                        <div class="info-icon mb-2">
                                            <i class="fa fa-map-marker-alt theme"></i>
                                        </div>
                                        <div class="info-content">
                                            <!-- <h3>Местоположение офиса</h3> -->
                                            <h3>Office Location</h3>

                                            <!-- <p class="m-0">445, Патхегама, Балапития, Южная провинция, Шри-Ланка</p> -->
                                            <p class="m-0">445 Pathegama Balapitiya, Southern Province Sri Lanka</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                        <div class="info-icon mb-2">
                                            <i class="fa fa-phone theme"></i>
                                        </div>
                                        <div class="info-content">
                                            <!-- <h3>Номер телефона</h3> -->
                                            <h3>Phone Number</h3>
                                            <p class="m-0">+39-344-685-7143</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 mb-4">
                                    <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                        <div class="info-icon mb-2">
                                            <i class="fa fa-envelope theme"></i>
                                        </div>
                                        <div class="info-content ps-4">
                                            <!-- <h3>Электронная почта</h3> -->
                                            <h3>Email Address</h3>

                                            <p class="m-0"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="bad3d4dcd5fac8dfdbd6c9d2d3dfd6de94d9d5d7">[suhan&#160;@gmail.com]</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="contact-form1" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="map rounded overflow-hiddenb rounded mb-md-4">
                                            <div style="width: 100%">
                                                <iframe height="500"
                                                    src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=+(mangal%20bazar)&t=&z=14&ie=UTF8&iwloc=B&output=embed"></iframe>
                                            </div>
                                        </div>
                                    </div>

                                    <!--
                                    <div class="col-lg-6">
                                        
                                        <div id="contactform-error-msg"></div>

                                        <form method="post" action="#" name="contactform2" id="contactform2">
                                            <div class="form-group mb-2">
                                                <input type="text" name="first_name" class="form-control" id="fullname" placeholder="First Name">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="text" name="last_name" class="form-control" id="llastname" placeholder="Last Name">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="text" name="phone" class="form-control" id="phnumber" placeholder="Phone">
                                            </div>
                                            <div class="textarea mb-2">
                                                <textarea name="comments" placeholder="Enter a message"></textarea>
                                            </div>
                                            <div class="comment-btn text-center">
                                                <input type="submit" class="nir-btn" id="submit2" value="Send Message">
                                            </div>
                                        </form>
                                    </div>
                                                -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact Ends -->


    <!-- recent-articles ends -->
    <?php include 'footer.php' ?>

    <?php include 'foot.php' ?>

</body>

</html>