<?php

// // запись в БД обновляется каждый 1+ день
// $file = fopen('lastDateUpdate.txt', 'r');
// $lastDateUpdate = fgets($file);
// fclose($file);

// if ((time() - intval($lastDateUpdate)) > 86400) {

    require_once 'connect_db.php';

    function Parse_tags($p1, $p2, $p3) { // вытаскивает данные из сайта с тегами
      $num1 = strpos($p1, $p2);
    
      if ($num1 === false) 
        return 0;
      $num2 = substr($p1, $num1);
      return substr($num2, 0, strpos($num2, $p3));
    }
    
    function Parse_not_tags($p1, $p2, $p3) { // вытаскивает данные из сайта без тегов
      $num1 = strpos($p1, $p2);
    
      if ($num1 === false) 
        return 0;
      $num2 = substr($p1, $num1);
      return strip_tags(substr($num2, 0, strpos($num2, $p3)));
    }

    require 'src/jphp/phpQuery-onefile.php';

    // игнорирование сертификации
    $arrContextOptions=array(
      "ssl"=>array(
          "verify_peer"=>false,
          "verify_peer_name"=>false,
      ),
    ); 

    class UFC { // класс для поиска значений для БД etf_info

      private $arrContextOptions=array(
          "ssl"=>array(
              "verify_peer"=>false,
              "verify_peer_name"=>false,
          ),
      ); 

      private $site_name = '';

      private $name_start = '<div class="c-hero--full__headline is-large-text">';
      private $name_end = '</div>';

      private $text_start = '<div class="c-hero__headline-suffix tz-change-inner"';
      private $text_end = '</div>';

      public function __construct(string $site_name)
      {
        $this->site_name = $site_name;
      }
      
      public function ParseName()
      {
        return Parse_not_tags(file_get_contents($this->site_name, false, stream_context_create($this->arrContextOptions)), $this->name_start, $this->name_end);
      }

      public function ParseText()
      {
        return Parse_not_tags(file_get_contents($this->site_name, false, stream_context_create($this->arrContextOptions)), $this->text_start, $this->text_end);
      }
    }

    class Info { // класс для поиска значений для БД etf_info

      private $arrContextOptions=array(
          "ssl"=>array(
              "verify_peer"=>false,
              "verify_peer_name"=>false,
          ),
      ); 

      private $site_name = '';

      private $title_start = '<div class="field field--name-node-title field--type-ds field--label-hidden field__item"><h1>';
      private $title_end = '</h1>';

      private $about_start = '<div class="field field--name-subtitle field--type-string field--label-hidden field__item">';
      private $about_end = '</div>';

      private $description_start = '<div class="e-p--initial">';
      private $description_end = '</div>';

      private $main_card_start = '<div class="clearfix text-formatted field field--name-text field--type-text-long field--label-hidden field__item">';
      private $main_card_end = '</div>';

      private $prelims_start = '<strong>Прелимы:</strong>';
      private $prelims_end = '<h2>';

      public function __construct(string $site_name)
      {
        $this->site_name = $site_name;
      }

      public function ParseTitle()
      {
        return Parse_not_tags(file_get_contents($this->site_name, false, stream_context_create($this->arrContextOptions)), $this->title_start, $this->title_end);
      }

      public function ParseAbout()
      {
        return Parse_not_tags(file_get_contents($this->site_name, false, stream_context_create($this->arrContextOptions)), $this->about_start, $this->about_end);
      }

      public function ParseDescription()
      {
        return Parse_tags(file_get_contents($this->site_name, false, stream_context_create($this->arrContextOptions)), $this->description_start, $this->description_end);
      }

      public function ParseMainCard()
      {
        return Parse_tags(file_get_contents($this->site_name, false, stream_context_create($this->arrContextOptions)), $this->main_card_start, $this->main_card_end);
      }

      public function ParsePrelims()
      {
        return Parse_tags(file_get_contents($this->site_name, false, stream_context_create($this->arrContextOptions)), $this->prelims_start, $this->prelims_end);
      }
    }

    $UFC = new UFC('https://www.ufc.ru/');
    $parse_UFC_name = trim($UFC->ParseName());
    $parse_UFC_text = trim($UFC->ParseText());

    // запись в БД
    $sql = "REPLACE INTO ufc_page SET id = 1, name = '$parse_UFC_name', text = '$parse_UFC_text'";
    mysqli_query($conn, $sql);

    $INFO = new INFO('https://www.ufc.ru/news/kard-turnira-ufc-288-sterling-vs-sekhudo');
    $parse_INFO_title = trim(str_replace('vs', '<span class="style__vs">VS</span>', $INFO->ParseTitle()));
    $parse_INFO_about = trim($INFO->ParseAbout());
    $parse_INFO_description = trim(str_replace('<div class="e-p--initial">', '', $INFO->ParseDescription()));
    $parse_INFO_main_card = trim(str_replace('<div class="clearfix text-formatted field field--name-text field--type-text-long field--label-hidden field__item">', '', $INFO->ParseMainCard()));
    $parse_INFO_prelims = trim(str_replace('<strong>Прелимы:</strong></h2>', '', $INFO->ParsePrelims()));

    // запись в БД
    $sql = "REPLACE INTO info SET id = 1, title = '$parse_INFO_title', about = '$parse_INFO_about', description = '$parse_INFO_description', main_card = '$parse_INFO_main_card', prelims = '$parse_INFO_prelims'";
    mysqli_query($conn, $sql);

    // // перезапись даты обновления в файл
    // $file = fopen('lastDateUpdate.txt', 'w');
    // fwrite($file, time());
    // fclose($file);

    mysqli_close($conn);
// }