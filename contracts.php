<?php 
//массив для хлебных крошек со значениями
$pages = [
  //адрес страницы, имя страницы, класс для изменния цвета текста последнего пункта
  ["path" => "./", "title" => "Главная", "class" => ""],
  ["path" => "./contracts.php", "title" => "Контрактное производство", "class" => "breadcrumbs-link-active"],
];
$page_title = 'Контрактное производство';//переменная для title и H1
include_once ('page-header.php');//page-header

$section_style = 'section-padding';//переменная для изменения padding блоков
include_once('./template-parts/contracts-block.php');//section contracts

include_once('./template-parts/seo-block.php');//section seo

include_once ('footer.php'); //footer
?>