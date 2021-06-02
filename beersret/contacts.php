<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="apple-icon-114x114.png" sizes="114x114">
  <link rel="apple-touch-icon" href="apple-icon-144x144.png" sizes="144x144">
  <link rel="icon" href="favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/index.css" />
  <link rel="stylesheet" type="text/css" href="css/contacts.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Beerset</title>
</head>

<body>
  <!--= Layout =-->
  <div class="layout" id="layout">
    <div class=bg_main>
      <?php require "blocks/header-inner.php" ?>
      <!--= main =-->
      <div class="main" id="main">
        <div class="container">
          <!--= Contacts =-->
          <div class="Contacts">
            <div class="grid__Contacts">
              <!--= infoContacts =-->
              <div class="infoContacts">
                <h1 class="captionContacts">наші контакти</h1>
                <p class="paragraphContacts">Хочеш співпрацювати з нами або просто маєш питання?
                  Заповни форму праворуч і ми вийдемо з тобою на звязок!</p>
              </div>
              <!--= EndinfoContacts =-->
              <!--= formContact =-->
              <div class="formContacts" id = "contacts">
                <div class="formContacts__border-gradient">
                  <div class="formContacts__group">
                    <form>
                      <div class="formContacts__conteiner">
                        <p class="formContacts__title">Надішли нам повідомлення:</p>
                        <input type="text" name="firsname" placeholder="Ім'я" class="formContacts__name" autocomplete="off">
                        <input type="text" name="emailortel" placeholder="Email або номер телефону" class="formContacts__email" autocomplete="off">
                        <p class="formContacts__title">Що цікаво?</p>
                        <div class=formContacts__radiocheck>
                          <label>
                            <input type="radio" class="formContacts__answer" name="radio">
                            <span class="formContacts__fake"></span>
                            <span class="formContacts__item">Співпраця</span>
                          </label>
                          <label>
                            <input type="radio" class="formContacts__answer" name="radio">
                            <span class="formContacts__fake"></span>
                            <span class="formContacts__item">Просто маю питання</span>
                          </label>
                        </div>
                        <textarea type="text" name="text" placeholder="Повідомлення" class="formContacts__massage" rows="1" autocomplete="off"></textarea>
                      </div>
                      <button class=" button formContacts__btn"><span>Надіслати</span></button>

                    </form>
                  </div>
                </div>
              </div>
              <!--= Endform =-->
            </div>
            <!--= Endgrid__Contacts =-->
          </div>
          <!--= EndContacts =-->
        </div>
      </div>
      <!--= End main =-->
    </div>
  </div>
  <!--= End Layout =-->
  <?php require "blocks/footer.php" ?>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="js/main.js"></script>
</body>

</html>