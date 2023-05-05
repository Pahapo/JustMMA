<?php require('src/require/head.php'); ?>
<?php require('src/require/loading.php'); 
$database = new DB;?>

<?php $info = $database->get_info(); ?>

<header>
  <nav class="navigation__block">
    <div class="navigation__items">
      <div class="navigation__item__img">
        <a href="<?php echo $betting_link; ?>" target="_blank">
          <img src="src/img/bonus.png" alt="Бонус 500$" />
        </a>
      </div>
      <a href="index.php"><div class="navigation__item" style="color: red">JustMMA</div></a>
      <a href="ufc.php"><div class="navigation__item">UFC</div></a>
      <a href="#"><div class="navigation__item">Прелимы</div></a>
      <a href="live.php"><div class="navigation__item">В эфире</div></a>
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
      <a href="index.php">
        <div class="logo">
          <h1 style="color: #383838">JustMMA</h1>
        </div>
      </a>
      <div class="menu-items">
        <a href="<?php echo $betting_link; ?>" target="_blank">
          <li>БОНУС +500%</li>
          <img src="src/img/present.png" alt="подарок" />
        </a>
        <a href="index.php"><li>JustMMA</li></a>
        <a href="ufc.php"><li>UFC</li></a>
        <a href="live.php" style="color: red"><li>В эфире</li></a>
      </div>
    </div>
  </nav>
</header>

<style>
  .article img {
    margin: 0 30px 15px 0;
  }
  header {
    height: 160px;
  }
  .article img {
    float: left;
    width: 500px;
  }
  .navigation__items {
  box-shadow: 6px 6px 15px rgb(134 139 146 / 60%), -6px -6px 15px #fff;
}
  @media screen and (max-width: 825px) {
    header {
      height: 35px;
    }
    .article img {
      width: 100%;
    }
  }
</style>

<main class="main">
  <div class="container">
    <div class="article">
      <a href="<?php echo $betting_link; ?>" class="transition-top transition-left transition-1 hidden">
        <img src="src/img/main-card.jpg" alt="Главный кадр" />
      </a>
      <div class="main-card__text transition-bottom transition-right transition-2 hidden">
        <div class="main-card__header">
          <p>Прелимы</p>
        </div>
        <div class="line-s"></div>
        <div class="video__text">
          <?php echo $info["prelims"]; ?>
        </div>
      </div>

      <div style="clear: left"></div>

      <a href="<?php echo $betting_link; ?>" class="promo__img__mobile transition-right transition-7 hidden">
        <img src="src/img/1win.jpg" alt="Сделать ставку" />
      </a>

      <div class="support transition-top transition-5 hidden">
        <p>
          По всем возникающим вопросам вы можете обратиться в службу поддержки
          <a href="mailto:support@justmma.su?subject=Вопрос пользователя сайта JUSTMMA" class="a">support@justmma.su</a>
        </p>
      </div>
    </div>
  </div>
</main>

<?php require('src/require/endpage.php'); ?>
