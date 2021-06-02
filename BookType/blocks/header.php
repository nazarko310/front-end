<?php
session_start();
?>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <a href="index.php"><span>Book</span>Type</a>
            </div>
            <div class="header__menu">
                <nav class="nav">
                    <a href="index.php#features" class="nav__link">features</a>
                    <a href="index.php#about" class="nav__link">about</a>
                    <a href="index.php#book" class="nav__link">book</a>
                    <a href="index.php#contacts" class="nav__link">contacts</a>
                    <?php
                    if ((!empty($_SESSION['registration'])) || (!empty($_SESSION['login']))) {
                        echo '
                                                                        <a  class="nav__link">
                                                                        ' . $_SESSION['firstname'] . '
                                                                        </a>';
                    } else {


                        echo '
                                                                        <a href="login.php" class="nav__link">Log in
                                                                        </a>';
                    }
                    ?>
                    <?php
                    if ((!empty($_SESSION['registration'])) || (!empty($_SESSION['login']))) {
                        echo '<a href = "index.php"  class="nav__link">Log out</a>';
                        session_destroy();
                    } else {
                        echo '
                            <a href="sign_in.php" class = "nav__link">Sign in
                            </a>';
                    }


                    ?>
                </nav>
            </div>

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
                            <nav class="nav">
                                <a href="index.php#features" class="nav__link">features</a>
                                <a href="index.php#about" class="nav__link">about</a>
                                <a href="index.php#book" class="nav__link">book</a>
                                <a href="index.php#contacts" class="nav__link">contacts</a>
                                <?php
                                if ((!empty($_SESSION['registration'])) || (!empty($_SESSION['login']))) {
                                    echo '
                                                                        <a  class="nav__link">
                                                                        ' . $_SESSION['firstname'] . '
                                                                        </a>';
                                } else {


                                    echo '
                                                                        <a href="login.php" class="nav__link">Log in
                                                                        </a>';
                                }
                                ?>
                                <?php
                                if ((!empty($_SESSION['registration'])) || (!empty($_SESSION['login']))) {
                                    echo '<a href = "index.php"  class="nav__link">Log out</a>';
                                    session_destroy();
                                } else {
                                    echo '
                            <a href="sign_in.php" class = "nav__link">Sign in
                            </a>';
                                }


                                ?>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
            <!--= End mobile menu =-->


        </div>
    </div>
</header>