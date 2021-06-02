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
    <link rel="stylesheet" type="text/css" href="css/product_page.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Beeset</title>
</head>

<body>
    <div class="layout" id="layout">
        <?php require "blocks/header-inner.php" ?>
        <!--= main =-->
        <div class="main" id="main">
            <!--= product =-->
            <div class="product">
                <div class="product-beer">
                    <div class="container">
                        <div class="product-beer__grid">
                            <div class="product-beer__img">
                                <img src="img\beerset_\НАПОЇ\Червоне вино.jpg" alt="">
                            </div>
                            <div class="product-beer__text">
                                <h1>Червоне вино</h1>
                                <ul>
                                    <li>Світле</li>
                                    <li>IBU - 14.5%</li>
                                    <li>Алкоголь - 6.5%</li>
                                    <li>“Бургомістр”, Львів</li>
                                    <li>45 грн за 0.33 л</li>
                                </ul>
                                <button class=" button product-beer__btn"><i></i><span>в корзину</span></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-benefits">
                    <div class="container">
                        <div class="product-benefits__grid">
                            <div class="product-benefits__text">
                                <h2>Чому придбати саме це?</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Vestibulum, venenatis ultricies pretium hac tellus enim amet.
                                    Duis nulla faucibus sagittis scelerisque nulla non.
                                    Interdum molestie nibh posuere faucibus tortor.
                                    Lacus mattis pellentesque eu neque, rhoncus eget.
                                    Massa elit justo commodo sagittis.
                                    Suspendisse velit est, ut malesuada egestas metus,
                                    sollicitudin. Porta libero elit quis ipsum mollis
                                    adipiscing tortor, commodo massa. Feugiat bibendum
                                    et cursus morbi at aliquam. </p>
                                <p>Pellentesque urna
                                    viverra nullam et rhoncus ornare morbi.
                                    Quisque morbi odio id aliquet ipsum viverra.
                                    Ultricies cras condimentum in faucibus.
                                    Cursus orci tortor pretium ac.
                                    Justo netus commodo diam lacus ultrices sagittis, leo.
                                    Turpis mauris tellus vitae aliquet fusce cum.
                                    Curabitur blandit risus ornare consectetur imperdiet
                                    mattis feugiat donec. Aliquet ut morbi malesuada diam
                                    nec pharetra vulputate eget mollis. Proin libero non,
                                    massa gravida pellentesque morbi dolor. Eu et vestibulum
                                    phasellus sit nunc. Varius at mauris eget amet, ut.
                                    Pulvinar sed morbi malesuada arcu faucibus odio.
                                    Nulla nisl dignissim nec, dolor mollis nisl eu eget.
                                    Ac, leo iaculis est est pharetra amet.
                                    Enim, eget proin mattis nulla lectus.
                                    Molestie purus mattis amet, faucibus. Volutpat mi dis.</p>
                            </div>
                            <div class="product-benefits__img"><img src="img\productpage-people.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--= Endproduct =-->
        </div>
        <!--= Endmain =-->
    </div>
    <?php require "blocks/footer.php" ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="js/main.js"></script>
</body>

</html>