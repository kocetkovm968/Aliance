<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link  rel= "shortcut icon"  href= "/favicon.ico"  type= "image/x-icon" > 
  <link  rel= "icon"  href= "/favicon.ico"  type= "image/x-icon" >
  <link rel="stylesheet" href="css/style.css">
  <title><?= $page_title; ?> - Aliance Production</title>
</head>

<body>
  <div class="mobile-menu">
    <!-- /.mobile-menu-top -->
    <div class="mobile-menu-top">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="./about.php" class="mobile-menu-nav-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./contracts.php" class="mobile-menu-nav-link">Контрактное производство</a>
          <ul class="mobile-submenu-list">
            <li class="mobile-submenu-item">
              <a href="./avto-chemistry.php" class="mobile-submenu-link">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Дезинфицирующие средства</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Косметическая продукция</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./trademarks.php" class="mobile-menu-nav-link">Собственные марки</a>
          <ul class="mobile-submenu-list">
            <li class="mobile-submenu-item">
              <a href="./AG-Tech.php" class="mobile-submenu-link">Автохимия AG-Tech</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Автохимия AP</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./news.php" class="mobile-menu-nav-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./contacts.php" class="mobile-menu-nav-link">Контакты</a>
        </li>
      </ul>
    </div>
    <!-- /.mobile-menu-bottom -->
    <div class="mobile-menu-bottom">
      <a href="tel:+74996861014" class="mobile-menu-phone">+7 (499) 686-10-14</a>
      <div class="mobile-menu-info">
        <svg class="mobile-menu-icon" width="24" height="24">
          <use href="img/sprite.svg#mark"></use>
        </svg>
        <address class="mobile-menu-address">г. Мосвка, Холодильный пер. 4к1с8</address>
      </div>
      <div class="mobile-menu-info">
        <svg class="mobile-menu-icon" width="24" height="24">
          <use href="img/sprite.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-menu-mail">a.dragunov@tdaliance.ru</a>
      </div>
      <ul class="mobile-menu-social">
        <li class="mobile-menu-social-item">
          <a href="#" class="mobile-menu-social-link">
            <svg class="mobile-menu-icon" width="24" height="24">
              <use href="img/sprite.svg#vk"></use>
            </svg>
          </a>
        </li>
        <li class="mobile-menu-social-item">
          <a href="#" class="mobile-menu-social-link">
            <svg class="mobile-menu-icon" width="24" height="24">
              <use href="img/sprite.svg#inst"></use>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- /.mobile-menu -->

  <nav class="navbar navbar-light" data-page-type="other-pages">
    <button class="burger">
      <span class="burger-line"></span>
      <span class="burger-line"></span>
      <span class="burger-line"></span>
    </button>
    <a href="./" class="header-logo">
      <svg class="logo-svg logo-light">
        <use href="img/sprite.svg#logo-light"></use>
      </svg>
      <svg class="logo-svg logo-dark">
        <use href="img/sprite.svg#logo-dark"></use>
      </svg>
    </a>
    <ul class="header-nav">
      <li class="header-nav-item">
        <a href="./about.php" class="header-nav-link">О компании</a>
      </li>
      <li class="header-nav-item">
        <a href="./contracts.php" class="header-nav-link">Контрактное производство</a>
      </li>
      <li class="header-nav-item">
        <a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a>
      </li>
      <li class="header-nav-item">
        <a href="./news.php" class="header-nav-link">Новости</a>
      </li>
      <li class="header-nav-item">
        <a href="./contacts.php" class="header-nav-link">Контакты</a>
      </li>
    </ul>
    <div class="header-phone">
      <svg class="phone-svg" width="24" height="24">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
    </div>
    <button class="button navbar-button" data-toggle="modal" data-target="#feedback-modal">
      <svg class="phone-svg" width="24" height="24">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span>
    </button>
  </nav>
  <!-- /.navbar -->

  

  