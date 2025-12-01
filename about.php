<?php
//массив для хлебных крошек со значениями
$pages = [
  //адрес страницы, имя страницы, класс для изменния цвета текста последнего пункта
  ["path" => "./", "title" => "Главная", "class" => ""],
  ["path" => "./about.php", "title" => "О компании", "class" => "breadcrumbs-link-active"],
];

$page_title ='О компании'; //переменная для title и H1
include_once ('page-header.php');

include_once ('./template-parts/experts-block.php');//section experts

$features_style ='features-style';//переменная для изменения стилей блока features
$slider_controls_margin ='margin';//переменная для отступа кнопок слайдера
include_once ('./template-parts/features-block.php');//features

include_once ('./template-parts/production-block.php');//section production

include_once ('./template-parts/founder-block.php');//section founder

$blog_title_style ='blog-title-style';//переменная для изменения стилей заголовка бока blog
$blog_title ="Исследовательский центр Aliance&nbsp;production";//заголовок блока blog
$button_link_hidden ='hidden';//blog-content не виден кроме главной страницы
$blog_image_position ='position';//z-index для img слайдера блока blog
include_once ('./template-parts/blog-block.php');//section blog

include_once ('./template-parts/clients-block.php');//section clients

include_once ('footer.php');//footer
?>