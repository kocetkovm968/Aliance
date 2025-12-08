<?php
  //массив для хлебных крошек со значениями
  $pages = [
    //адрес страницы, имя страницы, класс для изменния цвета текста последнего пункта
    ["path" => "./", "title" => "Главная", "class" => ""],
    ["path" => "./trademarks.php", "title" => "Собственные торговые марки", "class" => ""],
    ["path" => "./trademarks.php/AG-Tech.php", "title" => "Автохимия AG-Tech", "class" => "breadcrumbs-link-active"],
  ];

  //массив для карточек блога
  $news = [
    [
    "path" => "#",
    "image" => "img/blog/blog-photo1.jpg",
    "title" => "Современная методология разработки одухотворила всех причастных",
    "text" => "Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в&nbsp;равной степени предоставлены...",
    ],
    [
    "path" => "#",
    "image" => "img/blog/blog-photo2.jpg",
    "title" => "Сложно сказать, почему жизнь прекрасна",
    "text" => "Сложно сказать, почему элементы политического процесса функционально разнесены на&nbsp;независимые элементы. Безусловно, высокотехнологичная...",
    ],
    [
    "path" => "#",
    "image" => "img/blog/blog-photo2.jpg",
    "title" => "Сложно сказать, почему жизнь прекрасна",
    "text" => "Сложно сказать, почему элементы политического процесса функционально разнесены на&nbsp;независимые элементы. Безусловно, высокотехнологичная...",
    ],
    [
    "path" => "#",
    "image" => "img/blog/blog-photo1.jpg",
    "title" => "Современная методология разработки одухотворила всех причастных",
    "text" => "Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в&nbsp;равной степени предоставлены...",
    ],
    [
    "path" => "#",
    "image" => "img/blog/blog-photo1.jpg",
    "title" => "Современная методология разработки одухотворила всех причастных",
    "text" => "Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в&nbsp;равной степени предоставлены...",
    ],
    [
    "path" => "#",
    "image" => "img/blog/blog-photo2.jpg",
    "title" => "Сложно сказать, почему жизнь прекрасна",
    "text" => "Сложно сказать, почему элементы политического процесса функционально разнесены на&nbsp;независимые элементы. Безусловно, высокотехнологичная...",
    ],
    [
    "path" => "#",
    "image" => "img/blog/blog-photo2.jpg",
    "title" => "Сложно сказать, почему жизнь прекрасна",
    "text" => "Сложно сказать, почему элементы политического процесса функционально разнесены на&nbsp;независимые элементы. Безусловно, высокотехнологичная...",
    ],
    [
    "path" => "#",
    "image" => "img/blog/blog-photo1.jpg",
    "title" => "Современная методология разработки одухотворила всех причастных",
    "text" => "Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в&nbsp;равной степени предоставлены...",
    ],
    [
    "path" => "#",
    "image" => "img/blog/blog-photo1.jpg",
    "title" => "Современная методология разработки одухотворила всех причастных",
    "text" => "Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в&nbsp;равной степени предоставлены...",
    ],
    [
    "path" => "#",
    "image" => "img/blog/blog-photo2.jpg",
    "title" => "Сложно сказать, почему жизнь прекрасна",
    "text" => "Сложно сказать, почему элементы политического процесса функционально разнесены на&nbsp;независимые элементы. Безусловно, высокотехнологичная...",
    ],
  ];

  $page_header_bg = 'page-header-bg-grey';//bg page-header
  $page_title = 'Автохимия AG-Tech';//переменная для title и H1
  $page_header_img = 'img/page-header-img.png';//добавляется изображение к page-header
  $breadcrumbs_margin = 'margin';//переменная для margin хлебных крошек
  include_once ('page-header.php');//page-header

  include_once('./template-parts\page_header-block.php');//.page_header-block

  $section_style = 'section-padding';//переменная для изменения padding блоков
  include_once ('template-parts\product_ag-tech-block.php');//section production avtohim

  $features_style = 'features-style';//переменная для изменения стилей блока features
  $slider_controls_margin ='margin';//переменная для отступа кнопок слайдера
  include_once('./template-parts/features-block.php');

  include_once('./template-parts/distributor-block.php');//section distributor
  
  $blog_title_style ='blog-title-style';//переменная для изменения стилей заголовка бока blog
  $block_title ="Исследовательский центр Aliance&nbsp;production";//заголовок блока blog
  $button_link_hidden ='hidden';//blog-content не виден кроме главной страницы
  $blog_image_position ='position';//z-index для img слайдера блока blog
  include_once ('./template-parts/blog-block.php');//section blog

  include_once('./template-parts/steps-block.php');//section steps

  include_once ('./template-parts/clients-block.php');//section clients

  include_once('./template-parts\cta-block.php');//section cta

  include_once ('footer.php');
?>