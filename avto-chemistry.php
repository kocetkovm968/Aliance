<?php 
  //массив для хлебных крошек со значениями
  $pages = [
  //адрес страницы, имя страницы, класс для изменния цвета текста последнего пункта
  ["path" => "./", "title" => "Главная", "class" => ""],
  ["path" => "./contracts.php", "title" => "Контрактное производство", "class" => ""],
  ["path" => "./contracts.php/avto-chemistry.php", "title" => "Автомобильная химия", "class" => "breadcrumbs-link-active"],
  ];
  $page_title = 'Автомобильная химия';//переменная для title и H1
  $page_header_img = 'img/page-header-img.png';//добавляется изображение к page-header
  include_once ('page-header.php');//page-header

  $section_style = 'section-padding';//переменная для изменения padding блоков
  include_once ('template-parts\prduction-avtohim-block.php');//section production avtohim

  $features_style = 'features-style';
  include_once('./template-parts/features-block.php');

  include_once('./template-parts/manufacturing-block.php');


  // $blog_title = "Исследовательский центр Aliance production";
  // $blog_title_style = 'blog-title';
  // include_once('./template-parts/blog-block.php');

  // include_once ('./template-parts/clients-block.php');

  include_once ('footer.php');
?>