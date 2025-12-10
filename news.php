<?php
  //массив для хлебных крошек со значениями
  $pages = [
    //адрес страницы, имя страницы, класс для изменния цвета текста последнего пункта
    ["path" => "./", "title" => "Главная", "class" => ""],
    ["path" => "./news.php", "title" => "Блог", "class" => "breadcrumbs-link-active"],
  ];

  include_once ('array.php');//файл с массивами

  $page_header_bg = 'page-header-bg-grey';//bg page-header
  $page_title = 'Блог';//переменная для title и H1
  $breadcrumbs_margin = 'margin';//переменная для margin хлебных крошек
  include_once ('page-header.php');//page-header

  include_once('./template-parts/page_header-block.php');//.page_header-block

  $section_style = 'section-padding';//переменная для измененяи padding секции
  include_once ('./template-parts/news-block.php');//section news

  include_once('./template-parts/cta-block.php');//section cta

  include_once ('footer.php');
?>