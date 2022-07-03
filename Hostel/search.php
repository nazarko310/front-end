<?php
if (isset($_POST['mail'])) {
    $headers = 'Від ' . $_POST['email'] . ',' . $_POST['firstname'] . '';
    $thema = '' . $_POST['subject'] . '';
    $text = '' . $_POST['message'] . '';
    mail('camelot@mysite.com', $headers, $thema, $text);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lemon&family=Montserrat:wght@100;500;700&family=Satisfy&display=swap" rel="stylesheet">
    <title>Camelot</title>
</head>

<body>
    <div class="layout" id="layout">
        <main id="main">


            <!-- header -->
            <section>
                <header class="header">
                    <div class="container">
                        <div class="header__inner">
                            <div class="menu">
                                <nav class="nav" id="menu">
                                    <a href="index.html#menu" class="nav__link">home</a>
                                    <a href="index.html#about" class="nav__link">about</a>
                                    <a href="index.html#rooms" class="nav__link">rooms</a>
                                    <a href="index.html#services" class="nav__link">services</a>
                                    <a href="index.html#gallery" class="nav__link">gallery</a>
                                    <a href="index.html#contacts" class="nav__link">contacts</a>
                                </nav>
                            </div>
                            <a href="booking.php" class="nav__link booking">book a room</a>

                            <!--= Mobile menu =-->
                            <div class="mobile-menu">
                                <a class="mobile-menu__button">
                                    <i class="mobile-menu__button-line"></i>
                                </a>
                                <div class="mobile-menu__drop">
                                    <div class="mobile-menu__drop-top">
                                        <a class="mobile-menu__close"></a>
                                    </div>
                                    <div class="mobile-menu__wrapper">

                                        <div class="mobile-menu__content">
                                            <nav class="nav" id="menu">
                                                <a href="index.html" class="nav__link">home</a>
                                                <a href="index.html#about" class="nav__link">about</a>
                                                <a href="index.html#rooms" class="nav__link">rooms</a>
                                                <a href="index.html#services" class="nav__link">services</a>
                                                <a href="index.html#gallery" class="nav__link">gallery</a>
                                                <a href="index.html#contacts" class="nav__link">contacts</a>

                                            </nav>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--= End mobile menu =-->
                        </div>



                    </div>
                </header>
            </section>
            <!-- header -->



            <div class="room">
                <div class="container">


                    <div class="room__junior">
                        <?php
                        require_once "db_conect.php";
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        if (isset($_POST['submit'])) {
                            $sql = "SELECT room, checkin, checkout FROM booking WHERE room = 'Junior Suite' AND checkin = '" . $_POST['checkin'] . "' AND checkout = '" . $_POST['checkout'] . "'";
                            $result = $conn->query($sql);
                            if ($result->num_rows == 1) {
                                echo '';
                            } else {
                                if ((($_POST['singleSelect'] == '1') || ($_POST['singleSelect'] == '2')) || (($_POST['singlKidst'] == '1') || ($_POST['singlKidst'] == '2'))) {

                                    $sql = "SELECT * FROM room WHERE id_room  = '1'";
                                    $result = $conn->query($sql);

                                    $conn->close();

                                    if ($result->num_rows > 0) {

                                        while ($row = $result->fetch_assoc()) {

                                            echo '
        <div class = "room__junior-inner">
			<div class = "room__junior-img">
				<img src = "img/booking/' . $row["image"] . '" alt = ""/>
            </div>
            <div class = "room__junior-content">
                <p class = "title">' . $row["title"] . '</p>
                <p class = "description">' . $row["description"] . '</p>
                <ul class = "room__junior-content_list">
                <li>Size: 260 sq ft</li>
                <li>Beds: 2 Double(s)</li>
                </ul>
                <div class = "room__junior-content_services">
                <img src="https://img.icons8.com/pastel-glyph/25/000000/air-conditioner--v4.png"/>
                <img src="https://img.icons8.com/android/25/000000/wifi.png"/>
                <img src="https://img.icons8.com/android/25/000000/retro-tv.png"/>
                <img src="https://img.icons8.com/wired/25/000000/safe.png"/>
                <img src="https://img.icons8.com/carbon-copy/25/000000/beer-bottle.png"/>
                <img src="https://img.icons8.com/carbon-copy/25/000000/phone-not-being-used.png"/>
                <img src="https://img.icons8.com/windows/25/000000/kitchen-room.png"/>
                <img src="https://img.icons8.com/pastel-glyph/25/000000/towels--v1.png"/>
                </div>
            </div>
                <div class = "room__junior-price">
                <p>From:</p>
                <p class = "price">$' . $row["price"] . '</p>
                <a class = "room__junior-price_btn" href = "#">Booking now</a>
                </div>
        </div>
				';
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                }
                            }
                        }
                        ?>

                    </div>


                    <div class="room__standart">
                        <?php
                        require_once "db_conect.php";
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        if (isset($_POST['submit'])) {
                            $sql = "SELECT room, checkin, checkout FROM booking WHERE room = 'Standard Room' AND checkin = '" . $_POST['checkin'] . "' AND checkout = '" . $_POST['checkout'] . "'";
                            $result = $conn->query($sql);
                            if ($result->num_rows == 1) {
                                echo '';
                            } else {
                                if ((($_POST['singleSelect'] == '1') || ($_POST['singlKidst'] == '1'))) {
                                    $sql = "SELECT * FROM room WHERE id_room  = '2'";
                                    $result = $conn->query($sql);

                                    $conn->close();

                                    if ($result->num_rows > 0) {

                                        while ($row = $result->fetch_assoc()) {

                                            echo '
        <div class = "room__standart-inner">
			<div class = "room__standart-img">
				<img src = "img/booking/' . $row["image"] . '" alt = ""/>
            </div>
            <div class = "room__standart-content">
                <p class = "title">' . $row["title"] . '</p>
                <p class = "description">' . $row["description"] . '</p>
                <ul class = "room__standart-content_list">
                <li>Size: 230 sq ft</li>
                <li> Beds: 1 Double(s)</li>
                </ul>
                <div class = "room__standart-content_services">
                <img src="https://img.icons8.com/pastel-glyph/25/000000/air-conditioner--v4.png"/>
                <img src="https://img.icons8.com/android/25/000000/wifi.png"/>
                <img src="https://img.icons8.com/android/25/000000/retro-tv.png"/>
                <img src="https://img.icons8.com/wired/25/000000/safe.png"/>
                <img src="https://img.icons8.com/carbon-copy/25/000000/beer-bottle.png"/>
                <img src="https://img.icons8.com/carbon-copy/25/000000/phone-not-being-used.png"/>
                <img src="https://img.icons8.com/windows/25/000000/kitchen-room.png"/>
                </div>
            </div>
                <div class = "room__standart-price">
                <p>From:</p>
                <p class = "price">$' . $row["price"] . '</p>
                <a class = "room__standart-price_btn" href = "#">Booking now</a>
                </div>
        </div>
				';
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                }
                            }
                        }
                        ?>

                    </div>


                    <div class="room__superior">
                        <?php
                        require_once "db_conect.php";
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        if (isset($_POST['submit'])) {
                            $sql = "SELECT room, checkin, checkout FROM booking WHERE room = 'Superior Room' AND checkin = '" . $_POST['checkin'] . "' AND checkout = '" . $_POST['checkout'] . "'";
                            $result = $conn->query($sql);
                            if ($result->num_rows == 1) {
                                echo 'No rooms were found for the this date';
                            } else {
                                if (((($_POST['singleSelect'] == '1') || ($_POST['singleSelect'] == '2') || ($_POST['singleSelect'] == '3')) || (($_POST['singlKidst'] == '1') || ($_POST['singlKidst'] == '2') || ($_POST['singlKidst'] == '3') || ($_POST['singlKidst'] == '4')))) {
                                    $sql = "SELECT * FROM room WHERE id_room  = '3'";
                                    $result = $conn->query($sql);

                                    $conn->close();

                                    if ($result->num_rows > 0) {

                                        while ($row = $result->fetch_assoc()) {

                                            echo '
        <div class = "room__superior-inner">
			<div class = "room__superior-img">
				<img src = "img/booking/' . $row["image"] . '" alt = ""/>
            </div>
            <div class = "room__superior-content">
                <p class = "title">' . $row["title"] . '</p>
                <p class = "description">' . $row["description"] . '</p>
                <ul class = "room__superior-content_list">
                <li>Size: 280 sq ft</li>
                <li>Beds: 5 Kid(s)</li>
                </ul>
                <div class = "room__superior-content_services">
                <img src="https://img.icons8.com/pastel-glyph/25/000000/air-conditioner--v4.png"/>
                <img src="https://img.icons8.com/android/25/000000/wifi.png"/>
                <img src="https://img.icons8.com/android/25/000000/retro-tv.png"/>
                <img src="https://img.icons8.com/wired/25/000000/safe.png"/>
                <img src="https://img.icons8.com/carbon-copy/25/000000/beer-bottle.png"/>
                <img src="https://img.icons8.com/ios-filled/25/000000/shower.png"/>
                <img src="https://img.icons8.com/carbon-copy/25/000000/phone-not-being-used.png"/>
                <img src="https://img.icons8.com/pastel-glyph/25/000000/bath--v2.png"/>
                <img src="https://img.icons8.com/ios/25/000000/print-from-cloud.png"/>
                </div>
            </div>
                <div class = "room__superior-price">
                <p>From:</p>
                <p class = "price">$' . $row["price"] . '</p>
                <a class = "room__superior-price_btn" href = "#">Booking now</a>
                </div>
        </div>
				';
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                } else {
                                    echo "No rooms were found for the specified selection";
                                }
                            }
                        }
                        ?>

                    </div>






                </div>
            </div>


        </main>
        <footer class="footer special" id="footer">
            <div class="footer__contacts" id="contact">
                <div class="container">
                    <h2>contact us</h2>
                    <div class="footer__contacts-text">
                        <p class="email">camelot@mysite.com<span>/</span></p>
                        <p class="addres">Lyubinska Street, 168, Lviv, 79040</p>
                        <p class="mobile"><span>/</span>Tel: 36(863)801-96-72</p>
                    </div>



                    <form action="index.html" method="POST" class="footer__contacts-form special">
                        <div class="footer__contacts-formInner">
                            <div class="name">
                                <p>enter your name</p>
                                <input type="text" name="firstname" placeholder="Name">
                            </div>
                            <div class="email">
                                <p>enter your email</p>
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="subject">
                            <p>enter your subject</p>
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="message">
                            <p>enter your message</p>
                            <textarea name="message" id="" cols="30" rows="10" placeholder="Message" required></textarea>
                        </div>
                        <input type="submit" class="submit" name="mail" value="Submit">
                    </form>

                </div>
            </div>
            <div class="footer__private">
                <div class="container">
                    <p>© 2021 by Camelot. Proudly created by Nazarko</p>
                </div>
            </div>
        </footer>


    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/main.js"></script>
<script>
    $(function() {
        var dateFormat = "mm/dd/yy",
            from = $("#datetimepicker")
            .datepicker({
                minDate: "0",
                defaultDate: "+1w",
                changeMonth: true,
                changeYear: true,
                numberOfMonths: 1
            })
            .on("change", function() {
                to.datepicker("option", "minDate", getDate(this));
            }),
            to = $("#datetimepicker1").datepicker({
                defaultDate: "+1w",
                minDate: "0",
                changeMonth: true,
                changeYear: true,
                numberOfMonths: 1
            })


        function getDate(element) {
            var date;
            try {
                date = $.datepicker.parseDate(dateFormat, element.value);
            } catch (error) {
                date = null;
            }

            return date;
        }
    });
</script>

</html>