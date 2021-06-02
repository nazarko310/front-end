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
          <h1 class="production__title">Наше пиво</h1>
          <!--= production__list =-->
          <div class="production__list">
            <div class="production__block">
              <div class="production__image">
                <a href="Корифей опілля.php">
                  <img src="img\beerset_\НАПОЇ\Корифей опілля 39.jpg" class="production__img">
              </div>
              <h3 class="production__caption">Корифей опілля</h3>
              <p class="production__text"><span>39</span> грн/<span>1</span> кг</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <div class="production__image">
                <a href="Lymonad.php">
                  <img src="img\beerset_\НАПОЇ\Лимонад 20.jpg" class="production__img">
              </div>
              <h3 class="production__caption">Лимонад</h3>
              <p class="production__text"><span>20</span> грн/<span>1</span> кг</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Pavlivske.php">
                <div class="production__image">
                  <img src="img\beerset_\НАПОЇ\Павлівське 40.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Павлівське</h3>
                <p class="production__text"><span>40</span> грн/<span>1</span> кг</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Пряний.php">
                <div class="production__image">
                  <img src="img\beerset_\НАПОЇ\Пряний 36.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Пряний</h3>
                <p class="production__text"><span>36</span> грн/<span>1</span> кг</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Пшеничне.php">
                <div class="production__image">
                  <img src="img\beerset_\НАПОЇ\Пшеничне 38.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Пшеничне</h3>
                <p class="production__text"><span>38</span> грн/<span>1</span> кг</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Рисове.php">
                <div class="production__image">
                  <img src="img\beerset_\НАПОЇ\Рисове 44.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Рисове</h3>
                <p class="production__text"><span>44</span> грн/<span>1</span> кг</p>
              </a>
              <button class="btn increment">+</button>
            </div>
            <div class="production__block">
              <a href="Світле нефільтроване.php">
                <div class="production__image">
                  <img src="img\beerset_\НАПОЇ\Світле нефільтроване хмільний лев 37.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Світле нефільтроване хмільний лев</h3>
                <p class="production__text"><span>37</span> грн/<span>1</span> кг</p>
              </a>
              <button class="btn increment">+</button>
            </div>
            <div class="production__block">
              <a href="Смокі айленд.php">
                <div class="production__image">
                  <img src="img\beerset_\НАПОЇ\Смокі айленд 39.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Смокі айленд </h3>
                <p class="production__text"><span>39</span> грн/<span>1</span> кг</p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Ipa.php">
                <div class="production__image">
                  <img src="img\beerset_\НАПОЇ\Ipa 55.jpg" class="production__img">
                </div>
                <h3 class="production__caption">IPA</h3>
                <p class="production__text"><span>58</span> грн/<span>1</span> кг<p>
              </a>
              <button class="btn">+</button>
            </div>
            <div class="production__block">
              <a href="Golden ale.php">
                <div class="production__image">
                  <img src="img\beerset_\НАПОЇ\Golden ale65.jpg" class="production__img">
                </div>
                <h3 class="production__caption">Золотий ель</h3>
                <p class="production__text"><span>65</span> грн/<span>1</span> кг</p>
              </a>
              <button class="btn">+</button>
            </div>
          </div>
          <!--= End production__list =-->

          <!--= pagination =-->
          <div class="pagination">
            <ul>
              <li><a href="product_listing_page.php">1</a></li>
              <li class="active">2</li>
              <li><a href="product_listing_page_wine.php">3</a></li>
              <li><a href="product_listing_page_appitzer.php">4</a></li>
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