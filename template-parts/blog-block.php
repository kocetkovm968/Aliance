<section class="section blog">
  <div class="container">
    <?php 
      if (!empty($block_title)) {
        echo '<div class="separator"></div>';
        echo '<h2 class="section-title blog-title '. htmlspecialchars($blog_title_style) .'">'. $block_title .'</h2>';
      }
    ?>

    <div class="blog-content <?= $blog_content_hidden; ?>">
      <div class="blog-content-column">
        <p class="blog-content-text">
          Явные признаки победы институционализации рассмотрены исключительно в&nbsp;разрезе маркетинговых и&nbsp;финансовых предпосылок. Приятно, граждане, наблюдать, как активно развивающиеся страны третьего мира могут быть ограничены исключительно образом мышления. Лишь независимые государства набирают популярность среди определенных слоев населения, а&nbsp;значит, должны быть указаны как претенденты на&nbsp;роль ключевых факторов. Лишь акционеры крупнейших компаний могут быть призваны к&nbsp;ответу.
        </p>
      </div>
      <div class="blog-content-column">
        <p class="blog-content-text">
          С&nbsp;учётом сложившейся международной обстановки, синтетическое тестирование требует определения и&nbsp;уточнения анализа существующих паттернов поведения. Не&nbsp;следует, однако, забывать, что высокотехнологичная концепция общественного уклада представляет собой интересный эксперимент проверки как самодостаточных, так и&nbsp;внешне зависимых концептуальных решений. Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление однозначно фиксирует необходимость стандартных подходов.
        </p>
      </div>
    </div>
    <!-- /.blog-content -->

    <!-- Основной блок слайдера -->
    <div class="swiper blog-slider">
      <!-- Обертка слайдера -->
      <div class="swiper-wrapper">
        <!-- Слайды -->
        <?php foreach ($news as $item): ?>
          <a href="<?= $item['path']; ?>" class="swiper-slide blog-card">
            <picture class="blog-card-img <?= $blog_image_position; ?>">
              <source type="image/webp" srcset="<?= $item['picture']; ?>">
              <source type="image/jpeg" srcset="<?= $item['image']; ?>">
              <img src="<?= $item['image']; ?>" alt="слайд 1" width="705" height="400">
            </picture>
            <h3 class="blog-card-title"><?= $item['title']; ?></h3>
            <p class="blog-card-text">
              <?= $item['text']; ?>
            </p>
          </a>
        <?php endforeach; ?>
      </div>

      <div class="slider-controls-wrapper">
        <a href="#" class="button-link blog-button-link <?= $button_link_hidden; ?>">Весь блог</a>
        <!-- Кнопки навигации вперед/назад -->
        <div class="slider-controls blog-slider-controls primary-slider-controls">
          <div class="slider-button-prev primary-button-prev">
            <svg class="slider-controls-icon primary-controls-icon">
              <use href="img/sprite.svg#arrow-prev"></use>
            </svg>
          </div>
          <div class="slider-button-next primary-button-next">
            <svg class="slider-controls-icon primary-controls-icon">
              <use href="img/sprite.svg#arrow-next"></use>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.section blog -->