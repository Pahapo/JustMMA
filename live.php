<?php require('src/require/head.php'); ?>
<?php require('src/require/loading.php'); ?>

<header class="header__live">
  <div class="promo-slider swiper-container">
    <a href="<?php echo $betting_link; ?>" target="_blank" class="swiper-wrapper">
      <div class="swiper-slide promo-slide__1"></div>
      <div class="swiper-slide promo-slide__2"></div>
      <div class="swiper-slide promo-slide__3"></div>
    </a>
  </div>

  <a href="index.php" class="come-back">
    <img src="src/img/back.png" alt="back">
  </a>

  <div class="content-center">
    <div class="slide__content">
      <div class="slide__name transition-top transition-4 hidden">
        <div class="name-2" style="margin-bottom: 20px">UFC FIGHT NIGHT: HOLLOWAY VS ALLEN</div>
        <div class="name"><h2>IT'S FIGHT DAY!</h2></div>
      </div>
      <a id="next__page" class="subscription__check transition-top transition-5 hidden" href="#">
        <!-- info.php -->
        <div class="slide__button" style="margin-top: 140px">Смотреть</div>
        <div class="subscription__form">
          <div class="telegram__form">
            <div class="telegram__block">
              <div class="telegram__icon">
                <img src="src/img/telegram-icon.png" />
              </div>
              <div class="telegram__close">
                <img src="src/img/close.png" alt="close" />
              </div>
              <div class="telegram__text">
                <p>Для просмотра прямого эфира необходимо быть подписанным на телеграм канал</p>
              </div>
              <div class="telegram__btn">
                <a target="_blank" href="<?php echo $telegram_link; ?>">
                  <input type="submit" value="Подписаться" />
                </a>
              </div>
              <div class="telegram__text">
                <p>Введите свой ник для проверки ниже</p>
              </div>
              <div class="telegram__input">
                <!-- <form class="telegram__input" action="examination.php" method="post"> -->
                <div class="text__input">
                  <p>@</p>
                  <input type="text" name="name" placeholder="name" />
                </div>
                <input id="examination" type="submit" value="Сделать проверку" />
                <!-- </form> -->
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</header>

<?php require('src/require/endpage.php'); ?>
