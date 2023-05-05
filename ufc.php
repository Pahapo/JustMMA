<?php require('src/require/head.php'); ?>
<?php require('src/require/loading.php');
$database = new DB;?>

<?php $ufc = $database->get_ufc(); ?>

<header class="header__ufc">
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
        <div class="name" style="margin-bottom: 20px">            
          <h2>
            <?php echo $ufc["name"]; ?>
          </h2>
        </div>
        <div class="name-2">
          <?php echo $ufc["text"]; ?>
        </div>
      </div>
    </div>
  </div>
</header>
<a href="<?php echo $telegram_link; ?>" target="_blank">
  <div class="telegram">
    <img src="src/img/telegram.png" />
    <p>Подписаться на Telegram</p>
  </div>
</a>

<?php require('src/require/endpage.php'); ?>
