<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="apple-icon-114x114.png" sizes="114x114">
  <link rel="apple-touch-icon" href="apple-icon-144x144.png" sizes="144x144">
  <link rel="icon" href="favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <link rel="stylesheet" type="text/css" href="css/index.css" />
  <link rel="stylesheet" type="text/css" href="css/about.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Beerset</title>
</head>

<body>
  <!--= Layout =-->
  <div class="layout" id="layout">

    <?php require "blocks/header-inner.php" ?>

    <!--= main =-->
    <div class="main" id="main">
      <!--= about =-->
      <div class="about">
        <!--= about-beerset =-->
        <div class="about-beerset">
          <div class="container">
            <div class="about-beerset__block">
              <h1 class="about-beerset__caption">Beer Set</h1>
              <h3> мережа магазинів з найбільшим вибором крафтого пива
                та відоміших сортів розливного пива України.</h3>
              <h3 class="about-beerset__size">Безкомпромісний смак для найвибагливіших поціновувачів.</h3>
              <h3 class="about-beerset__size">Тільки <br> найкраще.</h3>
              <h3 class="about-beerset__size">Тільки <br> оригінальне.</h3>
            </div>
            <!--= about-beerset__box =-->
            <div class="about-beerset__box">
              <!--= about-beerset__inner =-->
              <div class="about-beerset__item1">
                <div class="about-beerset__abs">
                  <img src="img\Rectangle 23413.png" alt="BEER">
                </div>
              </div>
              <!--= End about-beerset__inner =-->
              <div class="about-beerset__item2 about-beerset__picture mt43">
                <img src="img\Rectangle 2331.png" alt="Beerset">
              </div>
              <div class="about-beerset__item1 about-beerset__picture">
                <img src="img\Rectangle 2361.png" alt="Beer">
              </div>
              <div class="about-beerset__item2 mt43">
                <img src="img\Rectangle 2351.png" alt="People with beer">
              </div>
              <div class="about-beerset__imagecentr">
                <img src="img\img_Mask Group.png" alt="logo">
              </div>
            </div>
            <!--= End about-beerset__box =-->
          </div>
        </div>
        <!--= End about-beerset =-->

        <!--= about-team  =-->
        <div class="about-team">
          <div class="container">
            <h1 class="about-team__title">Наша команда</h1>
            <!--= about-team__box  =-->
            <div class="about-team__box">
              <div class="about-team__img">

                <img src="img\about_team.png" alt="team">
              </div>
              <div class="about-team__text">
                <p>Наша команда-це люди захоплені своєю справою, які хочуть зробити крафтове пиво
                  доступним для кожного і вести соціальну усвідомленість в дії споживача при
                  споживанні алкоголю, познайомити українців з цікавими та вишуканими смаками,
                  деколи, дуже неочікуваними. Ми орієнтуємося на найякісніший продукт,
                  але в різних цінових категоріях.
                  <p>Ми задовольняємо побажання наших покупців
                    внести в своє життя різноманіття, спробувати незвичайне, унікальне.</p>
                  <p>Ми любимо свою роботу, та розуміємо унікальність своєї продукції,
                    яку пропонуємо нашим покупцям.</p>
                  <p>Якість – перш за все.</p>
                  <p>Ми працюємо тільки з добре зарекомендованими пивоварнями з усієї України.
                    Завжди працюємо над асортиментом та якістю обслуговування.</p>
              </div>
            </div>
            <!--= End about-team__box  =-->
          </div>
        </div>
        <!--= End about-team  =-->
        <!--= about-ourvalues  =-->
        <div class="about-ourvalues">
          <div class="about-ourvalues__box">
            <div class="about-ourvalues__text">
              <h1>Наші цінності</h1>
              <p>Найголовніше для нас – клієнт як особистість,
                зі своїми сподіваннями, побажаннями, можливостями.</p>
              <p>Наша місія – запропонувати нашим покупцям достойний
                та сміливий смак крафтового
                пива та задовільнити смаки тих клієнтів,
                які полюбляють класичні бренди розливного пива.</p>
            </div>
            <div class="about-ourvalues__img">
              <img src="img\ourrolls.jpg" alt="ourvalues">
            </div>
          </div>
        </div>
        <!--= End about-ourvalues  =-->

        <?php require "module/mainWork.php" ?>
        <?php require "module/mainPartner.php" ?>

      </div>
    </div>
  </div>
  <?php require "blocks/footer.php" ?>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
  <!-- <script type="text/javascript" src="slick/slick.min.js"></script> -->

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      var swiper = new Swiper('.swiper-container', {
        spaceBetween: 20,
        // height: 100,
        // Responsive breakpoints
        breakpoints: {
          // when window width is <= 320px
          320: {
            slidesPerView: 4
          },
          // when window width is <= 960px
          1080: {
            slidesPerView: 5,

          },
          // when window width is <= 1024px
          1320: {
            slidesPerView: 6,
            // spaceBetween: 62
          }
        }
      });
    });
  </script>

</body>

</html>