<?php require('src/require/head.php'); ?>
<?php // require('src/require/loading.php'); ?>

<header>
  <nav class="navigation__block">
    <div class="navigation__items">
      <a href="<?php echo $betting_link; ?>" target="_blank">
        <div class="navigation__item__img">
          <img src="src/img/bonus.png" alt="Бонус 500$" />
        </div>
      </a>
      <a href="#"><div class="navigation__item">JustMMA</div></a>
      <a href="ufc.php"><div class="navigation__item">UFC</div></a>
      <!-- <a href="mma.php"><div class="navigation__item">MMA</div></a> -->
      <a href="prelims.php"><div class="navigation__item">Прелимы</div></a>
      <a href="live.php"><div class="navigation__item" style="color: red">В эфире</div></a>
    </div>
  </nav>

  <nav class="navigation__block__mobile">
    <div class="container nav-container">
      <input class="checkbox" type="checkbox" name="" id="" />
      <div class="hamburger-lines">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
      </div>
      <div class="logo">
        <h1>JustMMA</h1>
      </div>
      <div class="menu-items">
        <a href="<?php echo $betting_link; ?>" target="_blank">
          <li>БОНУС +500%</li>
          <img src="src/img/present.png" alt="подарок" />
        </a>
        <a href="ufc.php"><li>UFC</li></a>
        <!-- <a href="mma.php"><li>MMA</li></a> -->
        <a href="prelims.php"><li>Прелимы</li></a>
        <a href="live.php" style="color: red"><li>В эфире</li></a>
      </div>
    </div>
  </nav>

  <div class="image-slider swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide slide__1">
        <div class="slide__content">
          <div class="slide__name">
            <div class="name"><h2>HOLLOWAY</h2></div>
            <div class="vs">
              <div class="small-line"></div>
              <p>vs</p>
              <div class="small-line"></div>
            </div>
            <div class="name"><h2>ALLEN</h2></div>
          </div>
          <div class="slide__text">
            <h3>16.04.23 / 03:30 GMT+3 / Основной кард</h3>
            <br />
            <h3>T-Mobile Center, Kansas City United States</h3>
          </div>
          <a href="live.php" class="transition-top transition-3 hidden"><div class="slide__button">Смотреть</div></a>
        </div>
      </div>
      <div class="swiper-slide slide__2">
        <div class="slide__content">
          <div class="slide__name">
            <div class="name"><h2>PAVLOVICH</h2></div>
            <div class="vs">
              <div class="small-line"></div>
              <p>vs</p>
              <div class="small-line"></div>
            </div>
            <div class="name"><h2>BLAYDES</h2></div>
          </div>
          <div class="slide__text">
            <h3>23.04.23 / 02:00 GMT+3 / Основной кард</h3>
            <br />
            <h3>UFC APEX, Las Vegas United States</h3>
          </div>
          <a href="live.php"><div class="slide__button">Смотреть</div></a>
        </div>
      </div>
      <div class="swiper-slide slide__3">
        <div class="slide__content">
          <div class="slide__name">
            <div class="name"><h2>TSARUKYAN</h2></div>
            <div class="vs">
              <div class="small-line"></div>
              <p>vs</p>
              <div class="small-line"></div>
            </div>
            <div class="name"><h2>MOICANO</h2></div>
          </div>
          <div class="slide__text">
            <h3>Sun, Apr 30 / 2:00 AM GMT+3 / Основной кард</h3>
            <br />
            <h3>UFC APEX, Las Vegas United States</h3>
          </div>
          <a href="live.php"><div class="slide__button">Смотреть</div></a>
        </div>
      </div>
      <div class="swiper-slide slide__4">
        <div class="slide__content">
          <div class="slide__name">
            <div class="name"><h2>STERLING</h2></div>
            <div class="vs">
              <div class="small-line"></div>
              <p>vs</p>
              <div class="small-line"></div>
            </div>
            <div class="name"><h2>CEJUDO</h2></div>
          </div>
          <div class="slide__text">
            <h3>07.05.23 / 05:00 GMT+3 / Основной кард</h3>
            <br />
            <h3>Prudential Center, Newark United States</h3>
          </div>
          <a href="live.php"><div class="slide__button">Смотреть</div></a>
        </div>
      </div>
      <div class="swiper-slide slide__5">
        <div class="slide__content">
          <div class="slide__name">
            <div class="name"><h2>ROZENSTRUIK</h2></div>
            <div class="vs">
              <div class="small-line"></div>
              <p>vs</p>
              <div class="small-line"></div>
            </div>
            <div class="name"><h2>ALMEIDA</h2></div>
          </div>
          <div class="slide__text">
            <h3>Sat, May 13 / 10:00 PM GMT+3 / Основной кард</h3>
            <br />
            <h3>Spectrum Center, Charlotte United States</h3>
          </div>
          <a href="live.php"><div class="slide__button">Смотреть</div></a>
        </div>
      </div>
      <div class="swiper-slide slide__6">
        <div class="slide__content">
          <div class="slide__name">
            <div class="name"><h2>NUNES</h2></div>
            <div class="vs">
              <div class="small-line"></div>
              <p>vs</p>
              <div class="small-line"></div>
            </div>
            <div class="name"><h2>PEÑA 3</h2></div>
          </div>
          <div class="slide__text">
            <h3>Sun, Jun 11 / 5:00 AM GMT+3 / Основной кард</h3>
            <br />
            <h3>Rogers Arena, Vancouver Canada</h3>
          </div>
          <a href="live.php"><div class="slide__button">Смотреть</div></a>
        </div>
      </div>
    </div>
    <div class="swiper-scrollbar"></div>
  </div>
</header>

<a href="<?php echo $telegram_link; ?>" target="_blank">
  <div class="telegram">
    <img src="src/img/telegram.png" />
    <p>Подписаться на Telegram</p>
  </div>
</a>

<?php require('src/require/endpage.php'); ?>
