<section class="section trademark <?= $section_style; ?>">
  <div class="container">
    <?php 
      if (!empty($block_title)) {
        echo '<div class="separator"></div>';
        echo '<h2 class="section-title trademark-title">'. $block_title .'</h2>';
      }
    ?>
    <div class="trademark-cards">
      <a href="./AG-Tech.php" class="trademark-card">
        <svg class="trademark-card-icon">
          <use href="img/sprite.svg#AGTECH"></use>
        </svg>
        <h3 class="trademark-card-title">Автохимия AG-Tech</h3>
        <p class="trademark-card-text">
          Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для
          поставленных обществом задач.
        </p>
      </a>
      <a href="#" class="trademark-card">
        <svg class="trademark-card-icon">
          <use href="img/sprite.svg#AP"></use>
        </svg>
        <h3 class="trademark-card-title">Автохимия AP</h3>
        <p class="trademark-card-text">
          Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для
          поставленных обществом задач.
        </p>
      </a>
    </div>
  </div>
</section>
<!-- /.section trademark -->