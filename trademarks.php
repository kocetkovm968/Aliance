<?php 
  //массив для хлебных крошек со значениями
  $pages = [
    //адрес страницы, имя страницы, класс для изменния цвета текста последнего пункта
    ["path" => "./", "title" => "Главная", "class" => ""],
    ["path" => "./trademarks.php", "title" => "Собственные торговые марки", "class" => "breadcrumbs-link-active"],
  ];

  $page_header_bg = 'page-header-bg-grey';//bg page-header
  $page_title = 'Собственные торговые марки';//переменная для title и H1
  include_once ('page-header.php'); //page-header

  $section_style = 'section-padding';//переменная для измененяи padding секции
  include_once ('./template-parts/trademark-block.php');//section trademark

  include_once ('footer.php'); 
?>