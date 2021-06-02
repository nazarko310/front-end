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
          <h1 class="production__title appitzer__title">наші закуски</h1>
          <!--= production__list =-->
          <div class="production__list appitzer__list">
            <div class="production__block">
              <a href="Плотва потрошена.php">
                <div class="production__image pd-t">
                  <img src="img\beerset_\ЗАКУСКИ\Плотва потрошена 29(1).jpg" class="production__img">
                </div>
                <h3 class="production__caption appitzer__caption">Плотва потрошена</h3>
                <p class="production__text"><span>16.5</span> грн/<span>0.33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Сало гірчиця.php">
                <div class="production__image pd-t">
                  <img src="img\beerset_\ЗАКУСКИ\Сало гірчиця 14.jpg" class="production__img">
                </div>
                <h3 class="production__caption appitzer__caption">Сало гірчиця</h3>
                <p class="production__text"><span>16.5</span> грн/<span>0.33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Сир слугуні копчений з паприкою.php">
                <div class="production__image pd-t">
                  <img src="img\beerset_\ЗАКУСКИ\Сир сулугуні аопчений з папрікою 24.jpg" class="production__img">
                </div>
                <h3 class="production__caption appitzer__caption">Сир сулугуні копчений з папрікою</h3>
                <p class="production__text"><span>19,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Солянка.php">
                <div class="production__image pd-t">
                  <img src="img\beerset_\ЗАКУСКИ\Солянка.jpg" class="production__img">
                </div>
                <h3 class="production__caption appitzer__caption">Солянка</h3>
                <p class="production__text"><span>16,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Телятина аджика.php">
                <div class="production__image pd-t">
                  <img src="img\beerset_\ЗАКУСКИ\Телятина аджика 14 50.jpg" class="production__img">
                </div>
                <h3 class="production__caption appitzer__caption">Телятина аджика</h3>
                <p class="production__text"><span>16,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Фісташки.php">
                <div class="production__image pd-t">
                  <img src="img\beerset_\ЗАКУСКИ\Фісташки 67(1).jpg" class="production__img">
                </div>
                <h3 class="production__caption appitzer__caption">Фісташки</h3>
                <p class="production__text"><span>19,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Хол хр.php">
                <div class="production__image pd-t">
                  <img src="img\beerset_\ЗАКУСКИ\Хол хр 14(1).jpg" class="production__img">
                </div>
                <h3 class="production__caption appitzer__caption">Хол хр</h3>
                <p class="production__text"><span>16,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Стружка тунця.php">
                <div class="production__image pd-t">
                  <img src="img\beerset_\ЗАКУСКИ\Стружка тунця 36.jpg" class="production__img">
                </div>
                <h3 class="production__caption appitzer__caption">Стружка тунця</h3>
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
              <li><a href="product_listing_page_appitzer3.php">6</a></li>
              <li class="active">7</li>
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