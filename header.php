<style>
    /* Styling for the button */
	 .whatsapp-button {
            position: fixed;
            bottom: 80px;
            right: 20px;
            z-index: 1000;
            background-color: #25D366;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .whatsapp-button:hover {
            transform: scale(1.1);
        }

        .whatsapp-button img {
            width: 40px;
            height: 40px;
        }

        .telegram-button {
            position: fixed;
            bottom: 140px;
            right: 20px;
            z-index: 1000;
            background-color:rgb(96, 182, 252);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .telegram-button:hover {
            transform: scale(1.1);
        }

        .telegram-button img {
            width: 40px;
            height: 40px;
        }
</style>
<!-- header starts -->
<header class="main_header_area">
    <div class="header-content py-1 bg-theme">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="links">
                <ul>
                    <li><a href="#" class="white"><i class="icon-calendar white"></i> <span
                                id="current-date"></span></a></li>

                    <script>
                        // Get the current date
                        const date = new Date();

                        // Format the date (e.g., Thursday, Mar 26, 2021)
                        const options = { weekday: 'long', year: 'numeric', month: 'short', day: 'numeric' };
                        const formattedDate = date.toLocaleDateString('ru-RU', options); // Russian locale

                        // Insert the date into the HTML
                        document.getElementById('current-date').textContent = formattedDate;
                    </script>

                    <li><a href="#" class="white"><i class="icon-location-pin white"></i> Коломбо, Шри-Ланка</a></li>
                    <!--<li><a href="#" class="white"><i class="icon-location-pin white"></i> Colombo, Sri Lanka</a></li>-->

                    </li>
                    <li><a href="#" class="white"><i class="icon-clock white"></i> Открыто каждый день: 8:00 – 22:00</a>
                    </li>
                    <!--<li><a href="#" class="white"><i class="icon-clock white"></i> Open Every Day: 8 AM – 10 PM</a></li>-->
                </ul>
            </div>
            <div class="links float-right">
                <ul>
                    <li><a target="_blank" href="<?php echo $socialmedia['facebook']; ?>" class="white"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="<?php echo $socialmedia['telegram']; ?>" class="white"><i class="fab fa-telegram" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="<?php echo $socialmedia['instagram']; ?>" class="white"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="<?php echo $socialmedia['whatsapp']; ?>" class="white"><i class="fab fa-whatsapp " aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Navigation Bar -->
    <div class="header_menu" id="header_menu">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-3 pt-3">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">
                            <img src="images/logo.png" alt="image">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav" id="responsive-menu">

                            <li <?php echo $class_home; ?>><a href="index.php">Главная</a></li>
                            <li <?php echo $class_about; ?>><a href="about.php"> О нас</a></li>
                            <li <?php echo $class_dest; ?>><a href="destinations.php">Направления</a></li>
                            <li <?php echo $class_tours; ?>><a href="tuors.php">Туры</a></li>
                            <li <?php echo $class_contact; ?>><a href="contacts.php">Контакты</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="register-login d-flex align-items-center">
                        <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="me-3">
                                <i class="icon-user"></i> Login/Register
                            </a> -->
                        <a href="#" class="nir-btn white">Забронировать</a> <!-- methana kalin tibbe book now eka -->
                    </div>

                    <div id="slicknav-mobile"></div>
                </div>
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <!-- Navigation Bar Ends -->
</header>
<!-- header ends -->