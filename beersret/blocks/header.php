<!-- //= Header = -->
<header class="header">
  <div class="container">
    <div class="header__inner">
      <div class="header__menu">
        <?php require "module/headerMenu.php" ?>
      </div>
      <div class="info">
        <div class="basket">
          <div class="basket__icon">
            <i></i>
            <span>2</span>
          </div>
          <a href="basket.php" class="basket__text">
            Корзина
          </a>
        </div>
        <div class="logo">
          <img src="img\image 1.png">
        </div>

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
              <?php require "module/headerMenu.php" ?>
            </div>
          </div>
        </div>
      </div>
      <!--= End mobile menu =-->

    </div>
  </div>
</header>
<!-- //= End header = -->