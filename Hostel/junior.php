<?php
if (isset($_POST['mail'])) {
    $headers = 'Від ' . $_POST['email'] . ',' . $_POST['firstname'] . '';
    $thema = '' . $_POST['subject'] . '';
    $text = '' . $_POST['message'] . '';
    mail('camelot@mysite.com', $headers, $thema, $text);
}
?>

<?php
require_once "db_conect.php";
$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$number = $_POST['number'];
$email = $_POST['email'];
if (isset($_POST['submit'])) {
    $sql = "SELECT room, checkin, checkout FROM booking WHERE room = 'Junior Suite' AND checkin = '" . $_POST['checkin'] . "' AND checkout = '" . $_POST['checkout'] . "'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $massage = '<div class = "massage">На дану дату кімната заброньована</div>';
    } else {
        $sql = "INSERT INTO booking (firstname, secondname, email, mobile, checkin, checkout, room) VALUES ('$firstname', '$secondname', '$email', '$number', '" . $_POST['checkin'] . "','" . $_POST['checkout'] . "', 'Junior Suite')";
        if ($conn->query($sql) == TRUE) {
            $massage = '<div class = "massage">Бронювання оформлене</div>';
        }
    }
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
                                    <a href="index.php#menu" class="nav__link">home</a>
                                    <a href="index.php#about" class="nav__link">about</a>
                                    <a href="index.php#rooms" class="nav__link">rooms</a>
                                    <a href="index.php#services" class="nav__link">services</a>
                                    <a href="index.php#gallery" class="nav__link">gallery</a>
                                    <a href="index.php#contacts" class="nav__link">contacts</a>
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
                                                <a href="index.php" class="nav__link">home</a>
                                                <a href="index.php#about" class="nav__link">about</a>
                                                <a href="index.php#rooms" class="nav__link">rooms</a>
                                                <a href="index.php#services" class="nav__link">services</a>
                                                <a href="index.php#gallery" class="nav__link">gallery</a>
                                                <a href="index.php#contacts" class="nav__link">contacts</a>

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

            <div class="junior">
                <div class="container">
                    <h2>Guest Details</h2>
                    <?php if (isset($massage)) {
                        echo $massage;
                    } else { ?>
                        <div class="junior__inner">
                            <form action="/junior.php" class="junior__form" method="post">
                                <div class="junior__form-inner">
                                    <div class="junior__form-inner_left">
                                        <label for="firstname">First Name</label>
                                        <input type="text" name="firstname" id="firstname" required>
                                        <label for="email">Email Address</label>
                                        <input type="email" name="email" id="email" required>
                                    </div>
                                    <div class="junior__form-inner_right">
                                        <label for="secondname">Last Name</label>
                                        <input type="text" name="secondname" id="secondname" required>
                                        <label for="number">Phone Number</label>
                                        <input type="number" name="number" id="number" required>
                                    </div>
                                </div>
                                <div class="junior__form-datetimepicker">
                                    <div class="check-in">
                                        <label for="datetimepicker">
                                            <span class="check-in_text">Check-in</span>
                                            <input type="text" id="datetimepicker" name="checkin">
                                            <img src="img/calendar.png" alt="" class="check-in_img">
                                        </label>
                                    </div>

                                    <div class="check-out">
                                        <label for="datetimepicker1">
                                            <span class="check-out_text">Check-out</span>
                                            <input type="text" id="datetimepicker1" name="checkout">
                                            <img src="img/calendar.png" alt="" class="check-out_img">
                                        </label>
                                    </div>


                                </div>
                                <input type="submit" name="submit" class="junior__form-btn" value="Book">

                            </form>

                            <div class="junior__room">
                                <?php
                                require_once "db_conect.php";
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                $sql = "SELECT * FROM room WHERE id_room  = '1'";
                                $result = $conn->query($sql);

                                $conn->close();

                                if ($result->num_rows > 0) {

                                    while ($row = $result->fetch_assoc()) {

                                        echo '
			<div class = "junior__room-img">
				<img src = "img/booking/' . $row["image"] . '" alt = ""/>
            </div>
            <div class = "junior__room-content">
                <p class = "title">Room Type: ' . $row["title"] . '</p>
                <p>Size: 260 sq ft</p>
            </div>
                <div class = "junior__room-price">
                <p>From:</p>
                <p class = "price">$' . $row["price"] . '</p>
                </div>

				';
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>

                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>

            </div>



        </main>
        <footer class="footer special" id="footer">
            <div class="footer__contacts" id="contact">
                <div class="container">
                    <h2>contact us</h2>
                    <div class="footer__contacts-text special">
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