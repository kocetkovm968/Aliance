<?php
  //массив для хлебных крошек со значениями
  $pages = [
    //адрес страницы, имя страницы, класс для изменния цвета текста последнего пункта
    ["path" => "./", "title" => "Главная", "class" => ""],
    ["path" => "./contacts.php", "title" => "Контакты", "class" => "breadcrumbs-link-active"],
  ];
  $page_header_bg = 'page-header-bg-grey';//bg page-header
  $page_title ='Контакты'; //переменная для title и H1
  include_once ('page-header.php');//page-header

  include_once('./template-parts/page_header-block.php');//.page_header-block

  include_once('./template-parts/contacts-block.php');//section contacts

  include_once('./template-parts/cta-block.php');//section cta

  include_once ('footer.php');
?>