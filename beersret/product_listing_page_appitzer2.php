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
              <a href="Ікрянки.php">
                <div class="production__image">
                  <img src="img\beerset_\ЗАКУСКИ\Ікряники 40.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Ікрянка</h3>
                <p class="production__text"><span>16.5</span> грн/<span>0.33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Кальмар в конжуті.php">
                <div class="production__image">
                  <img src="img\beerset_\ЗАКУСКИ\Кальмар в кунжуті 42_.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Кальмар в кунжуті</h3>
                <p class="production__text"><span>16.5</span> грн/<span>0.33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Лакедра.php">
                <div class="production__image">
                  <img src="img\beerset_\ЗАКУСКИ\Лакедра 42.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Лакедра</h3>
                <p class="production__text"><span>19,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Копчене мясо.php">
                <div class="production__image">
                  <img src="img\beerset_\ЗАКУСКИ\Копч мясо 14.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Копчене м'ясо</h3>
                <p class="production__text"><span>16,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Кранч сир.php">
                <div class="production__image">
                  <img src="img\beerset_\ЗАКУСКИ\Краеч сир 12.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Кранч сир</h3>
                <p class="production__text"><span>16,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Кранч бекон.php">
                <div class="production__image">
                  <img src="img\beerset_\ЗАКУСКИ\Кранч бекон 12.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Кранч бекон</h3>
                <p class="production__text"><span>19,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Кранч васабі.php">
                <div class="production__image">
                  <img src="img\beerset_\ЗАКУСКИ\Кранч васабі 14.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Кранч васабі</h3>
                <p class="production__text"><span>16,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Кукурудза_мед-гірчиця.php">
                <div class="production__image">
                  <img src="img\beerset_\ЗАКУСКИ\Кукурудза мед-гір 24.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Кукурудза мед-гірчиця</h3>
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
              <li class="active">5</li>
              <li><a href="product_listing_page_appitzer3.php">6</a></li>
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