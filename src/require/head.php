<!DOCTYPE html>
<html lang="ru">
      <head>
        <?php require ('version.php'); ?>

        <meta charset="UTF-8" />
        <title>JustMMA</title>
        <meta name="msapplication-TileColor" content="#25acd3" />
        <meta name="theme-color" content="#494949" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- <link rel="stylesheet" href="src/css/loading.css" type="text/css"> -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="src/css/animation.css?<?php echo ver ?>" />
        <link rel="stylesheet" href="src/css/style.css?<?php echo ver ?>" />
        
        <!-- All in One SEO 4.3.4.1 - aioseo.com -->
        <meta name="description" content="JustMMA — САЙТ #1 для всех фанатов UFC и MMA, бесплатные прямые трансляции турниров! Рейтинг 9.8/10" />
        <meta name="keywords" content="прямой эфир, live, смотреть онлайн, спорт, бокс, live, mma, новости мма, поп мма, бокс новости, боксановости, единоборства, смотреть бой онлайн, ufc, now, watch, кард, основной, states, fight, night, vegas, arena, next, prudential, telegram, подписаться">
        <meta name="robots" content="max-image-preview:large" />
        <link rel="canonical" href="https://justmma.su" />
        <meta name="generator" content="All in One SEO (AIOSEO) 4.3.4.1 " />
        <meta property="og:locale" content="ru_RU" />
        <meta property="og:site_name" content="JustMMA" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="JustMMA" />
        <meta property="og:description" content="JustMMA — САЙТ #1 для всех фанатов UFC и MMA, бесплатные прямые трансляции турниров!" />
        <meta property="og:url" content="https://justmma.su" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="JustMMA" />
        <meta name="twitter:description" content="JustMMA — САЙТ #1 для всех фанатов UFC и MMA, бесплатные прямые трансляции турниров!" />
       
        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/src/favicon/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="/src/favicon/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="/src/favicon/favicon-16x16.png" />
        <link rel="manifest" href="/src/favicon/site.webmanifest" />
        <link rel="mask-icon" href="/src/favicon/safari-pinned-tab.svg" color="#5bbad5" />
        <meta name="msapplication-TileColor" content="#da532c" />
    
        <!-- Yandex.Metrika counter -->
          <script type="text/javascript" >(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};m[i].l=1*new Date();for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");ym(93443469, "init", {clickmap:true,trackLinks:true,accurateTrackBounce:true,webvisor:true});</script>
          <noscript><div><img src="https://mc.yandex.ru/watch/93443469" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
    
        </head>
        <body>
          <!-- доделать парсинг картинок -->
          <!-- доделать парсинг текста -->
          <!-- доделать парсинг 2ух новых страниц -->
          <!-- доделать парсинг видео (прямого эфира) -->
          <!-- перенести все файлы на сервер (django) -->
            
        <?php   
            include ("telegram-links.php");
            include ("parser.php");
            include ("db.php");
        ?>