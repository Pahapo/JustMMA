<?php require('src/require/head.php');
require('src/require/loading.php');
$database = new DB;?>

<?php $info = $database->get_info(); ?>

<header class="header__live">
  <nav class="navigation__block">
    <div class="navigation__items">
      <div class="navigation__item__img">
        <a href="<?php echo $betting_link; ?>" target="_blank">
          <img src="src/img/bonus.png" alt="Бонус 500$" />
        </a>
      </div>
      <a href="index.php"><div class="navigation__item" style="color: red">JustMMA</div></a>
      <a href="ufc.php"><div class="navigation__item">UFC</div></a>
      <a href="prelims.php"><div class="navigation__item">Прелимы</div></a>
      <a href="live.php"><div class="navigation__item">В эфире</div></a>
    </div>
  </nav>

  <style>
    .nav-container .hamburger-lines .line {
      background: #ffffffcc;
    }
    @media screen and (max-width: 825px) {
      .navigation__block__mobile {
        display: block;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        box-shadow: 0 1px 4px rgb(146 161 176 / 15%);
        background-color: #1b1b1b;
        z-index: 100;
      }
    }
  </style>

  <nav class="navigation__block__mobile">
    <div class="container nav-container">
      <input class="checkbox" type="checkbox" name="" id="" />
      <div class="hamburger-lines">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
      </div>
      <a href="index.php">
        <div class="logo">
          <h1 style="color: #ffffffcc">JustMMA</h1>
        </div>
      </a>
      <div class="menu-items">
        <a href="<?php echo $betting_link; ?>" target="_blank">
          <li>БОНУС +500%</li>
          <img src="src/img/present.png" alt="подарок" />
        </a>
        <a href="index.php"><li>JustMMA</li></a>
        <a href="ufc.php"><li>UFC</li></a>
        <a href="prelims.php"><li>Прелимы</li></a>
      </div>
    </div>
  </nav>

  <div class="container-small">
    <div class="content__header transition-top transition-4 hidden">
      <p>
        <?php echo $info["title"]; ?>
      </p>
    </div>
    <div class="header__text transition-top transition-5 hidden">
      <p>
        <?php echo $info["about"]; ?>
      </p>
    </div>
  </div>
</header>

<main class="main">
  <div class="container">
    <div class="article">
      <div class="video__about transition-top transition-left transition-6 hidden">
        <div class="video__header">
          <p>UFC ВЕГАС 71: ПАВЛОВИЧ VS БЛЭЙДС</p>
        </div>
        <div class="line-s"></div>
        <div class="video__text">
          <?php echo $info["description"]; ?>
        </div>
      </div>
      <div class="video__live transition-right transition-7 hidden">
        <!-- <video poster="src/img/live_banner.jpg" preload="metadata" controls="controls">
          <source src="https://ok.ru/video/5985989364431" type="video/mp4" />
          Элемент video не поддерживается вашим браузером.
        </video> -->
        <iframe src="//ok.ru/videoembed/5985989364431?autoplay=1" frameborder="0" allow="autoplay" allowfullscreen></iframe>
        <!-- вставить сюда "код встраивания" прямого эфира из вк или сайта -->
      </div>
      <div class="video__about transition-left transition-8 hidden">
        <div class="video__text">
          <?php echo $info["main_card"]; ?>
        </div>
      </div>

      <div style="clear: left"></div>
      <div class="flex-content">
        <a href="<?php echo $betting_link; ?>" class="transition-right transition-9 hidden">
          <img src="src/img/1win.jpg" alt="Главный кадр" />
        </a>
        <div class="break"></div>
        <a href="<?php echo $betting_link; ?>" class="promo__img transition-left transition-10 hidden">
          <img src="src/img/main-card.jpg" alt="Сделать ставку" />
        </a>
      </div>
      <div class="main-card__text transition-top transition-left transition-11 hidden">
        <div class="main-card__header">
          <p>Прелимы</p>
        </div>
        <div class="line-s"></div>
        <div class="video__text">
          <?php echo $info["prelims"]; ?>
        </div>
      </div>

      <div style="clear: left"></div>

      <a href="<?php echo $betting_link; ?>" class="promo__img__mobile transition-right transition-12 hidden">
        <img src="src/img/main-card.jpg" alt="Сделать ставку" />
      </a>

      <div class="support transition-top transition-13 hidden">
        <p>
          По всем возникающим вопросам вы можете обратиться в службу поддержки
          <a href="mailto:support@justmma.su?subject=Вопрос пользователя сайта JUSTMMA" class="a">support@justmma.su</a>
        </p>
      </div>
    </div>
  </div>
</main>

<?php require('src/require/endpage.php'); ?>
