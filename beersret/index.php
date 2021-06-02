<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="apple-icon-114x114.png" sizes="114x114">
  <link rel="apple-touch-icon" href="apple-icon-144x144.png" sizes="144x144">
  <link rel="icon" href="favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="stylesheet" type="text/css" href="css/animate.css"/>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css" />
  <link rel="stylesheet" type="text/css" href="css/home_page.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Beerset</title>
</head>

<body scroll="no">
  <!--= Layout =-->
  <div class="layout" id="layout">
    <!--= headerGallery =-->
    <div class="headerGallery">
      <?php require "blocks/header-inner.php" ?>
      <?php require "module/slider.php" ?>
    </div>
    <!--= End headerGallery =-->
    <!--= Main =-->
    <main class="main" id="main">
      <section>
        <?php require "module/mainMenu.php" ?>
        <!-- <div class="mainMenu"></div> -->
      </section>
      <section>
        <?php require "module/mainOurbest.php" ?>
      </section>
      <section>
        <?php require "module/mainCompany.php" ?>
      </section>
      <section>
        <?php require "module/mainHistory.php" ?>
      </section>
      <section>
        <?php require "module/mainWork.php" ?>
      </section>
      <section>
        <?php require "module/mainPartner.php" ?>
      </section>
    </main>
    <!--= End main =-->
  </div>
  <!--= End layout =-->

  <?php require "blocks/footer.php" ?>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/script.js"></script>
  <script>
    new WOW().init();
  </script>
  <script>
    var mySwiper1 = new Swiper('#mainSlider', {
      // Optional parameters
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      }
    });
    var mySwiper2 = new Swiper('#mainOurbest__grid', {
      // Optional parameters
      loop: true,
      slidesPerView: 1,
      spaceBetween: 80,
      // loopFillGroupWithBlank: true,
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
      // Responsive breakpoints
      breakpoints: {
        // when window width is >= 960px
        960: {
          slidesPerView: 2,
          spaceBetween: 100
        },
        // when window width is >= 1200px
        1200: {
          slidesPerView: 3,
          spaceBetween: 80
        },
        // when window width is >= 1320px
        1320: {
          slidesPerView: 3,
          spaceBetween: 143
        }
      }
    });
  </script>
</body>

</html>