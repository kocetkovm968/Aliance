<?php
  //массив для хлебных крошек со значениями
  $pages = [
    //адрес страницы, имя страницы, класс для изменния цвета текста последнего пункта
    ["path" => "./", "title" => "Главная", "class" => ""],
    ["path" => "./news.php", "title" => "Блог", "class" => ""],
    ["path" => "./news-more.php", "title" => "Современная методология разработки одухотворила всех причастных", "class" => "breadcrumbs-link-active"],
  ];
  $page_header_bg = 'page-header-bg-image';//bg page-header
  $page_title = 'Современная методология разработки одухотворила всех причастных';//переменная для title и H1
  $breadcrumbs_margin = 'margin';//переменная для margin хлебных крошек
  include_once ('page-header.php');//page-header

  $section_style = 'section-padding';//переменная для измененяи padding секции
  include_once ('template-parts\news-article.php');//section news-article

  include_once ('footer.php');//footer
?>