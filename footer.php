<!-- footer starts -->
<footer class="pt-20 pb-4" style="background-image: url(images/background_pattern.png);">
    <div class="section-shape top-0" style="background-image: url(images/shape8.png);"></div>
    <!-- Instagram starts -->
    <div class="insta-main pb-10">
        <div class="container">
            <div class="insta-inner">
                <div class="follow-button"> <a target="_blank" href="<?php echo $socialmedia['instagram']; ?>">
                        <h5 class="m-0 rounded"><i class="fab fa-instagram"></i> Подписывайтесь на Instagram</h5>
                    </a>
                    <!--<h5 class="m-0 rounded"><i class="fab fa-instagram"></i> Follow on Instagram</h5>-->

                </div>
                <div class="row attract-slider">
                    <!-- Insta carousel start -->
                    <?php foreach ($footer_insta as $footer_ins): ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="insta-image rounded">
                                <img src="<?php echo $footer_ins; ?>" alt="insta">
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!-- Insta carousel end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Instagram ends -->
    <div class="footer-upper pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 pe-4">
                    <div class="footer-about">
                        <img src="images/logo-white.png" alt="">
                        <p class="mt-3 mb-3 white">
                            Исследуйте удивительные уголки Шри-Ланки вместе с нами. Мы организуем незабываемые туры,
                            которые подарят вам яркие впечатления и уникальные эмоции.
                        </p>
                        <!--<p class="mt-3 mb-3 white">
    Explore the amazing corners of Sri Lanka with us. We organize unforgettable tours that will give you vivid impressions and unique emotions.
</p>-->

                        <ul>
                            <li class="white"><strong>PO Box:</strong> +39-344-685-7143</li>
                            <li class="white"><strong>Местоположение:</strong> Патхегама, Балапития, Шри-Ланка</li>
                            <!--<li class="white"><strong>Location:</strong> Pathegama, Balapitiya, Sri Lanka</li>-->

                            <li class="white"><strong>Email:</strong> <a href="/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    data-cfemail="0f666169604f5b7d6e796a636661216c6062">suhan@&#160;gmail.com</a></li>
                            <li class="white"><strong>Website:</strong> www.srilankacomtours.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                    <div class="footer-links">
                        <h3 class="white">Быстрые ссылки</h3>
                        <ul>
                            <li><a href="index.php">Главная</a></li>
                            <li><a href="about.php">О нас</a></li>
                            <li><a href="destinations.php">Направления</a></li>
                            <li><a href="tuors.php">Туры</a></li>
                            <li><a href="contacts.php">Контакты</a></li>
                            <!-- <li><a href="##">Return Policy</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                    <div class="footer-links">
                        <h3 class="white">направления</h3>
                        <ul>
                            <li><a href="destinations.php">ЭЛЛА</a></li>
                            <li><a href="destinations.php">НУВАРА ЭЛИЯ</a></li>
                            <li><a href="destinations.php">КАНДИ</a></li>
                            <li><a href="destinations.php">Галле</a></li>
                            <li><a href="destinations.php">Хортон Плейнс</a></li>
                            <li><a href="destinations.php">Аругамбай</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="footer-links">
                        <h3 class="white">Посетите нас</h3>
                        <div class="newsletter-form ">
                            <iframe height="260"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6250.255910534036!2d80.0383488115832!3d6.270782440728704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae465955bc09a25%3A0xbdfadcdadec487fb!2sElla!5e0!3m2!1sen!2slk!4v1738512823920!5m2!1sen!2slk"></iframe>

                               </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="footer-payment">
        <div class="container">
            <div class="row footer-pay align-items-center justify-content-between text-lg-start text-center">
                <div class="col-lg-8 footer-payment-nav mb-4">
                    <ul class="">
                        <li class="me-2">We Support:</li>
                        <li class="me-2"><i class="fab fa-cc-mastercard fs-4"></i></li>
                        <li class="me-2"><i class="fab fa-cc-paypal fs-4"></i></li>
                        <li class="me-2"><i class="fab fa-cc-stripe fs-4"></i></li>
                        <li class="me-2"><i class="fab fa-cc-visa fs-4"></i></li>
                        <li class="me-2"><i class="fab fa-cc-discover fs-4"></i></li>
                    </ul>
                </div>
                <div class="col-lg-4 footer-payment-nav mb-4">
                    <ul class="d-flex align-items-center">
                        <li class="me-2 w-75">
                            <select class="niceSelect rounded">
                                <option>English</option>
                                <option>Chinese</option>
                                <option>Russian</option>
                                <option>Japanese</option>
                                <option>Korean</option>
                            </select>
                        </li>
                        <li class="w-25">
                            <select class="niceSelect rounded">
                                <option>$ USD</option>
                                <option>$ AUD</option>
                                <option>$ YEN</option>
                                <option>$ IN</option>
                                <option>$ NP</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->

    <div class="footer-copyright">
        <div class="container">
            <div class="copyright-inner rounded p-3 d-md-flex align-items-center justify-content-between">
                <div class="copyright-text">
                    <p class="m-0 white"><?php echo date("Y"); ?><span style="color:#fdc703 "> Все права
                            защищены.</span> Разработано и создано <a href="https://promodesoftware.com/"
                            style="color:#20c997">Promode software solutions</a>.</p>
                </div>
                <div class="social-links">
                    <ul>
                        <li><a target="_blank" href="<?php echo $socialmedia['facebook']; ?>"><i class="fab fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="<?php echo $socialmedia['telegram']; ?>"><i class="fab fa-telegram"
                                    aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="<?php echo $socialmedia['instagram']; ?>"><i
                                    class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="<?php echo $socialmedia['whatsapp']; ?>"><i class="fab fa-whatsapp"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</footer>
<!-- footer ends -->

<!-- Back to top start -->
<div id="back-to-top">
    <a href="#"></a>
</div>
<!-- Back to top ends -->

<!-- WhatsApp Button -->
<a href="<?php echo $socialmedia['whatsapp']; ?>" target="_blank" class="whatsapp-button" title="Chat with us on WhatsApp">
    <img src="images/whatsapp.png" alt="WhatsApp Chat">
</a>

<!-- Telegram Button -->
<a href="<?php echo $socialmedia['telegram']; ?>" target="_blank" class="telegram-button" title="Chat with us on Telegram">
    <img src="images/telegram.svg" alt="Telegram Chat">
</a>