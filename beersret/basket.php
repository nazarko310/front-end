<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="apple-icon-114x114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="apple-icon-144x144.png" sizes="144x144">
    <link rel="icon" href="favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="css/basket.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Beerset</title>
</head>

<body>
    <!--= Layout =-->
    <div class="layout" id="layout">
    <?php require "blocks/header-inner.php" ?>
        <!--= main =-->
        <div class="main" id="main">
            <div class=" container">
                <!--=basket=-->
                <div class="cart">
                    <div class="cart__grid">
                        <div class="cart__product">
                            <div class="cart__product-appetizer">
                                <div class=cart__productContent-grid>
                                    <img src="img\beerset_\ЗАКУСКИ\Алотва потрошена 29.jpg" alt="">
                                    <div class="cart__productText">
                                        <h3>Алотва потрошена</h3>
                                        <p><span>29</span> грн/<span>1</span> кг</p>
                                    </div>
                                </div>
                                <div class=cart__productPrice-grid>
                                    <div class="cart__productCalculator calculator__center">
                                        <button class="btn negative"><i></i></button>
                                        <p><span>1</span> кг</p>
                                        <button class="btn positiv"><i></i><strong></strong></button>
                                    </div>
                                    <div class="cart__product-price ml-12">
                                        <p><span>29</span> грн</p>
                                        <div class=btn-delete><i></i><span></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart__product-drinck">
                                <div class=cart__productContent-grid>
                                    <img src="img\beerset_\НАПОЇ\ Душа пивовара 40.jpg" alt="">
                                    <div class="cart__productText">
                                        <h3>Душа пивовара</h3>
                                        <p><span>40</span> грн/<span>1</span> кг</p>
                                    </div>
                                </div>
                                <div class=cart__productPrice-grid>
                                    <div class="cart__productCalculator calculator__center">
                                        <button class="btn negative"><i></i></button>
                                        <p><span>1</span> кг</p>
                                        <button class="btn positiv"><i></i><strong></strong></button>
                                    </div>
                                    <div class="cart__product-price">
                                        <p><span>40</span> грн</p>
                                        <div class=btn-delete><i></i><span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart__price-gradient">
                            <div class="cart__price">
                                <div class="cart__priceText">
                                    <p>в корзині <span>2</span> товари</p>
                                </div>
                                <div class="cart__price-all">
                                    <p><span>69</span> грн</p>
                                </div>
                                <button class="button cart__price-btn"><span>Оформити замовлення</span></button>
                                <div class="cart__promocode"><a href="">ввести промокод</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=End basket =-->
            </div>
        </div>
        <!--= End main =-->
    </div>
    <!--= End layout =-->
    <?php require "blocks/footer.php" ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="js/main.js"></script>
</body>

</html>