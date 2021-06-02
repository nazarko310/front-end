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
  <link rel="stylesheet" type="text/css" href="css/index.css" />
  <link rel="stylesheet" type="text/css" href="css/product_listing_page.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Beerset</title>
</head>

<body>
  <!--= Layout =-->
  <div class="layout" id="layout">
    <?php require "blocks/header-inner.php" ?>
    <div class="main" id="main">
      <!--= production =-->
      <div class="production">
        <div class="container">
          <h1 class="production__title">наші закуски</h1>
          <!--= production__list =-->
          <div class="production__list">
            <div class="production__block">
              <a href="Ікра плотви.php">
                <div class="production__image">
                  <img src="img\beerset_\ЗАКУСКИ\Ікра плотви 90(1).jpg" class="production__img">
                </div>
                <h3 class="production__caption">Ікра плотви</h3>
                <p class="production__text"><span>16.5</span> грн/<span>0.33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Ікра тріски.php">
                <div class="production__image">
                  <img src="img\beerset_\ЗАКУСКИ\Ікра тріски 90(1).jpg" class="production__img">
                </div>
                <h3 class="production__caption">Ікра тріски</h3>
                <p class="production__text"><span>16.5</span> грн/<span>0.33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Грінки_часник.php">
                <div class="production__image">
                  <img src="img\beerset_\ЗАКУСКИ\Всі грнки по 14.50часнок_.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Грінки з часником</h3>
                <p class="production__text"><span>19,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Окунь.php">
                <div class="production__image">
                  <img src="img\beerset_\ЗАКУСКИ\Окунь 28.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Окунь</h3>
                <p class="production__text"><span>16,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Павутинка.php">
                <div class="production__image">
                  <img src="img\beerset_\ЗАКУСКИ\Павутинка 56(1).jpg" class="production__img">
                </div>
                <h3 class="production__caption">Павутинка</h3>
                <p class="production__text"><span>16,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Перемішана кукурудза.php">
                <div class="production__image">
                  <img src="img\beerset_\ЗАКУСКИ\Переиішана кукурудза ).jpg" class="production__img">
                </div>
                <h3 class="production__caption">Перемішана кукурудза</h3>
                <p class="production__text"><span>19,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Перуанський кальмар.php">
                <div class="production__image">
                  <img src="img\beerset_\ЗАКУСКИ\Перуанський кпльмар 60.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Перуанський кальмар</h3>
                <p class="production__text"><span>16,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Сир плетінка-білий.php">
                <div class="production__image">
                  <img src="img\beerset_\ЗАКУСКИ\Сир плетінка білий 24.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Сир плетінка білий</h3>
                <p class="production__text"><span>19,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
          </div>
          <!--= End production__list =-->

          <!--= pagination =-->
          <div class="pagination">
            <ul>
              <li><a href="product_listing_page.php">1</li>
              <li><a href="product_listing_page_beer1.php">2</a></li>
              <li><a href="product_listing_page_wine.php">3</a></li>
              <li><a href="product_listing_page_appitzer.php">4</a></li>
              <li><a href="product_listing_page_appitzer2.php">5</a></li>
              <li class="active">6</li>
              <li><a href="product_listing_page_appitzer4.php">7</a></li>
              <li><a href="product_listing_page_appitzer5.php">8</a></li>
            </ul>
          </div>
          <!--= End pagination =-->
        </div>
      </div>
      <!--= End production=-->
    </div>
    <!--= Endmain =-->
  </div>
  <!--= Endlayout =-->
  <?php require "blocks/footer.php" ?>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
  <script src="js/main.js"></script>
</body>

</html>