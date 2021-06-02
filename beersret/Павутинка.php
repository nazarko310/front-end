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
                                <img src="img\beerset_\ЗАКУСКИ\Павутинка 56(1).jpg" alt="">
                            </div>
                            <div class="product-beer__text">
                                <h1>Павутинка</h1>
                                <ul>
                                    <li>Солодка і одночасно кислий</li>
                                    <li>Світлі сорти пива</li>
                                    <li>56 грн за 1 кг</li>
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
                                <p>Павутинка - М'ясо кальмара нарізане тонкими смужками, з солодкуватим присмаком і ароматом пряностей. Характерний солонуватий смак з легкою кислинкою, відмінно поєднується зі світлими сортами пива. </p>
                            </div>
                            <div class="product-benefits__img"><img src="img\beerset1.jpg" alt=""></div>
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