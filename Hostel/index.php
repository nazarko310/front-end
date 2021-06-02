<?php
if (isset($_POST['submit'])) {
    $headers = 'Від ' . $_POST['email'] . ',' . $_POST['firstname'] . '';
    $thema = '' . $_POST['subject'] . '';
    $text = '' . $_POST['message'] . '';
    mail('camelot@mysite.com', $headers, $thema, $text);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lemon&family=Montserrat:wght@100;500;700&family=Satisfy&display=swap" rel="stylesheet">
    <title>Camelot</title>
</head>

<body>
    <div class="layout" id="layout">
        <main id="main">

            <!-- header -->
            <section>
                <header class="header">
                    <div class="container">
                        <div class="header__inner">
                            <div class="menu">
                                <nav class="nav" id="menu">
                                    <a href="index.php#menu" class="nav__link">home</a>
                                    <a href="index.php#about" class="nav__link">about</a>
                                    <a href="index.php#rooms" class="nav__link">rooms</a>
                                    <a href="index.php#services" class="nav__link">services</a>
                                    <a href="index.php#gallery" class="nav__link">gallery</a>
                                    <a href="index.php#contacts" class="nav__link">contacts</a>
                                </nav>
                            </div>
                            <a href="booking.php" class="nav__link booking">book a room</a>

                            <!--= Mobile menu =-->
                            <div class="mobile-menu">
                                <a class="mobile-menu__button">
                                    <i class="mobile-menu__button-line"></i>
                                </a>
                                <div class="mobile-menu__drop">
                                    <div class="mobile-menu__drop-top">
                                        <a class="mobile-menu__close"></a>
                                    </div>
                                    <div class="mobile-menu__wrapper">

                                        <div class="mobile-menu__content">
                                            <nav class="nav" id="menu">
                                                <a href="index.php" class="nav__link">home</a>
                                                <a href="index.php#about" class="nav__link">about</a>
                                                <a href="index.php#rooms" class="nav__link">rooms</a>
                                                <a href="index.php#services" class="nav__link">services</a>
                                                <a href="index.php#gallery" class="nav__link">gallery</a>
                                                <a href="index.php#contacts" class="nav__link">contacts</a>

                                            </nav>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--= End mobile menu =-->
                        </div>



                    </div>
                </header>
            </section>
            <!-- header -->

            <!-- hotel -->
            <div class="hotel">
                <div class="container">

                    <!-- hotel__title -->
                    <div class="hotel__title">
                        <h1>Camelot</h1>
                        <p><span>&mdash;</span>Bed & Breakfast <span>&mdash;</span></p>
                    </div>
                    <!-- hotel__title -->

                    <!-- hotel__intro -->
                    <div class="hotel__intro">

                    </div>
                    <!-- hotel__intro -->

                    <!-- hotel__about -->
                    <div class="hotel__about" id="about">
                        <h2>
                            About
                        </h2>
                        <p>We ourselves understand why so many different people want to be our guests! They think
                            it's
                            smart to live comfortably - in the middle of town – at a hotel with reasonable prices!
                            That's why Camelot is one of the most frequently visited hotels in Lviv.</p>
                        <p>We like to see ourselves as a unique hotel, where guests are treated as friends and where
                            you
                            feel at home. Here you can sense the history in the walls, and all rooms have the
                            facilities
                            you need for a wonderful stay.</p>
                    </div>
                    <!-- hotel__about -->

                    <!-- hotel__room -->
                    <div class="hotel__room" id="rooms">
                        <div class="hotel__room-text">
                            <h2>our rooms</h2>
                            <p>Tired of the road? We have taken care that your rest in cozy rooms was as comfortable
                                and
                                carefree as possible. In addition to aesthetic pleasure, you are guaranteed to
                                receive
                                quality service from the staff</p>
                            <a href="booking.php" class="">book a room</a>
                        </div>
                    </div>
                    <!-- hotel__room -->

                    <!-- hotel__services -->
                    <div class="hotel__services" id="services">
                        <h2>our services</h2>
                        <div class="hotel__services-inner">
                            <div class="hotel__services-innerElements">
                                <img src="img/icons8-cafe-50.png">
                                <h4>Breakfast</h4>
                                <p>We offer our guests to enjoy a delicious, light breakfast</p>
                            </div>
                            <div class="hotel__services-innerElements">
                                <img src="img/icons8-park-bench-50.png" />
                                <h4>Garden</h4>
                                <p>Great atmosphere prevails in the garden near the hotel</p>
                            </div>
                            <div class="hotel__services-innerElements">
                                <img src="img/icons8-swimming-pool-50.png" />
                                <h4>Pool</h4>
                                <p>A wonderful, cool outdoor pool will make your day lively</p>
                            </div>

                            <div class="hotel__services-innerElements">
                                <img src="img/icons8-wi-fi-50.png" alt="">
                                <h4>free wifi</h4>
                                <p>Free, high-speed internet access is available throughout the hotel.</p>
                            </div>
                            <div class="hotel__services-innerElements">
                                <img src="img/icons8-housekeeping-50.png" alt="">
                                <h4>Daily Housekeeping</h4>
                                <p>We take care of the health of our guests, so we clean the rooms every day</p>
                            </div>
                            <div class="hotel__services-innerElements">
                                <img src="img/icons8-breakfast-50.png" alt="">
                                <h4>In-Room Dining Service</h4>
                                <p>Comfort for guests. Opportunity to taste a special dinner from the chef in your
                                    own
                                    room</p>
                            </div>
                        </div>
                    </div>
                    <!-- hotel__services -->

                    <!-- hotel__slider -->
                    <div class="hotel__slider" id="gallery">
                        <h2>gallery</h2>
                        <div id="hotel__slider" class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="img/slider1.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/slider2.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/slider3.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/slider4.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/slider5.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/slider6.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                    <!-- hotel__slider -->

                    <!-- hotel__entertainment -->
                    <div class="hotel__entertainment">
                        <h2>things to do</h2>
                        <div class="hotel__entertainment-inner">
                            <div class="hotel__entertainment-innerElements">
                                <h4>bike tours</h4>
                                <p>Easy bike ride around Lviv at night</p>
                            </div>
                            <div class="hotel__entertainment-innerElements">
                                <h4>karaoke night</h4>
                                <p>Opportunity to visit our nightclub for lovers of good music</p>
                            </div>
                            <div class="hotel__entertainment-innerElements">
                                <h4>horse riding</h4>
                                <p>Horse farm near the hotel. Great place for kids and their parents</p>
                            </div>

                            <div class="hotel__entertainment-innerElements">
                                <h4>gym for everyone</h4>
                                <p>Staying in our hotel will give you the opportunity to continue your training</p>
                            </div>
                            <div class="hotel__entertainment-innerElements">
                                <h4>museums & galleries tour</h4>
                                <p>Museums and galleries provide an opportunity to get into the history of Lviv</p>
                            </div>
                            <div class="hotel__entertainment-innerElements">
                                <h4>movies to your liking</h4>
                                <p>A good movie will make your evening unforgettable</p>
                            </div>
                        </div>
                    </div>
                    <!-- hotel__entertainment -->

                </div>
            </div>
            <!-- hotel -->

        </main>
        <!-- foter -->
        <footer class="footer" id="footer">
            <div class="footer__contacts" id="contact">
                <div class="container">
                    <h2>contact us</h2>
                    <div class="footer__contacts-text">
                        <p class="email">camelot@mysite.com<span>/</span></p>
                        <p class="addres">Lyubinska Street, 168, Lviv, 79040</p>
                        <p class="mobile"><span>/</span>Tel: 36(863)801-96-72</p>
                    </div>



                    <form action="index.html" method="POST" class="footer__contacts-form">
                        <div class="footer__contacts-formInner">
                            <div class="name">
                                <p>enter your name</p>
                                <input type="text" name="firstname" placeholder="Name">
                            </div>
                            <div class="email">
                                <p>enter your email</p>
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="subject">
                            <p>enter your subject</p>
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="message">
                            <p>enter your message</p>
                            <textarea name="message" id="" cols="30" rows="10" placeholder="Message" required></textarea>
                        </div>
                        <input type="submit" class="submit" name="submit" value="Submit">
                    </form>

                </div>
            </div>
            <div class="footer__private">
                <div class="container">
                    <p>© 2021 by Camelot. Proudly created by Nazarko</p>
                </div>
            </div>
        </footer>
        <!-- foter -->



    </div>
</body>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="js/main.js"></script>
<script>
    var mySwiper1 = new Swiper('#hotel__slider', {
        slidesPerView: 1,
        spaceBetween: 20,
        speed: 2000,
        loop: true,
        autoplay: {
            delay: 1500,
            disableOnInteraction: false,
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        breakpoints: {
            920: {
                slidesPerView: 3
            },
            480: {
                slidesPerView: 2
            }
        }
    });
</script>

</html>