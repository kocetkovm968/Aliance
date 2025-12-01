<div class="features <?= $features_style; ?>">
  <div class="container">
    <!-- Основной блок слайдера -->
    <div class="swiper features-slider">
      <!-- Обертка слайдера -->
      <ul class="swiper-wrapper header-features">
        <!-- Слайды -->
        <li class="swiper-slide header-features-item">
          <svg class="header-features-icon" width="36" height="36">
            <use href="img/sprite.svg#time"></use>
          </svg>
          <p class="header-features-text">Непрерывная работа c&nbsp;2017 года
          </p>
        </li>
        <li class="swiper-slide header-features-item">
          <svg class="header-features-icon" width="36" height="36">
            <use href="img/sprite.svg#certificate"></use>
          </svg>
          <p class="header-features-text">Вся продукция сертифицирована</p>
        </li>
        <li class="swiper-slide header-features-item">
          <svg class="header-features-icon" width="36" height="36">
            <use href="img/sprite.svg#control"></use>
          </svg>
          <p class="header-features-text">Контроль качества на&nbsp;всех этапах</p>
        </li>
        <li class="swiper-slide header-features-item ">
          <svg class="header-features-icon" width="36" height="36">
            <use href="img/sprite.svg#delivery"></use>
          </svg>
          <p class="header-features-text">Возможны поставки по&nbsp;всей России</p>
        </li>
        <li class="swiper-slide header-features-item">
          <svg class="header-features-icon" width="36" height="36">
            <use href="img/sprite.svg#speed"></use>
          </svg>
          <p class="header-features-text">Оперативное производство</p>
        </li>
      </ul>

      <!-- Кнопки навигации вперед/назад -->
      <div class="slider-controls features-slider-controls <?= $slider_controls_margin; ?>">
        <div class="slider-button-prev features-slider-button">
          <svg class="slider-controls-icon" width="36" height="24">
            <use href="img/sprite.svg#arrow-prev"></use>
          </svg>
        </div>
        <div class="slider-button-next features-slider-button">
          <svg class="slider-controls-icon" width="36" height="24">
            <use href="img/sprite.svg#arrow-next"></use>
          </svg>
        </div>
      </div>
    </div>
    <!-- /.swiper -->
  </div>
  <!-- /.container -->
</div>
<!-- /.features -->