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
              <a href="Алотва.php">
                <div class="production__image pd-t">
                  <img src="img\beerset_\ЗАКУСКИ\Алотва потрошена 29.jpg" class="production__img">
                </div>
                <h3 class="production__caption appitzer__caption">Алотва потрошена</h3>
                <p class="production__text"><span>16.5</span> грн/<span>0.33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <div class="production__image pd-t">
                <a href="Анчоус.php">
                  <img src="img\beerset_\ЗАКУСКИ\Анчоус 36.jpg" class="production__img">
              </div>
              <h3 class="production__caption appitzer__caption">Анчоус</h3>
              <p class="production__text"><span>16.5</span> грн/<span>0.33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Арахіс сир.php">
                <div class="production__image pd-t">
                  <img src="img\beerset_\ЗАКУСКИ\Арахіс сир 13.jpg" class="production__img">
                </div>
                <h3 class="production__caption appitzer__caption">Арахіс сир</h3>
                <p class="production__text"><span>19,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Баструма.php">
                <div class="production__image pd-t">
                  <img src="img\beerset_\ЗАКУСКИ\Бастурма 65.jpg" class="production__img">
                </div>
                <h3 class="production__caption appitzer__caption">Бастурма</h3>
                <p class="production__text"><span>16,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Ковбаски васабі.php">
                <div class="production__image pd-t">
                  <img src="img\beerset_\ЗАКУСКИ\Ковбаски вассабі 36васабі.jpg" class="production__img">
                </div>
                <h3 class="production__caption appitzer__caption ">Ковбаски вассабір</h3>
                <p class="production__text"><span>16,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Крижана спинка.php">
                <div class="production__image  pd-t">
                  <img src="img\beerset_\ЗАКУСКИ\Крижана спинка 40.jpg" class="production__img">
                </div>
                <h3 class="production__caption appitzer__caption">Крижана спинка</h3>
                <p class="production__text"><span>19,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Мадьярскі.php">
                <div class="production__image pd-t">
                  <img src="img\beerset_\ЗАКУСКИ\Мадьярські 38.jpg" class="production__img">
                </div>
                <h3 class="production__caption appitzer__caption">Мадьярські</h3>
                <p class="production__text"><span>16,5</span> грн/<span>0,33</span> л</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <div class="production__image  pd-t">
                <a href="Махан.php">
                  <img src="img\beerset_\ЗАКУСКИ\Махан 50(1).jpg" class="production__img">
              </div>
              <h3 class="production__caption appitzer__caption">Махан</h3>
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
              <li class="active">4</li>
              <li><a href="product_listing_page_appitzer2.php">5</a></li>
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