  <?php 
  $page_title = 'О компании';
  include_once ('page-header.php'); ?>
  <!-- /.page-header -->

  <section class="section experts section-padding">
    <div class="container">
      <div class="experts-wrapper">
        <img src="img/experts-img.png" alt="Картинка блока" class="experts-img">
        <div class="experts-content">
          <div class="separator"></div>
          <h2 class="section-title experts-title">мы&nbsp;- эксперты в&nbsp;области производства&nbsp;химии</h2>
          <p class="experts-text">
            Разнообразный и&nbsp;богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в&nbsp;целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в&nbsp;формировании системы массового участия.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- /.section experts -->

  <?php 
  $features_style = 'features-style';
  include_once('./template-parts/features-block.php') ?>
  <!-- /.features -->

  <section class="section production">
    <div class="container">
      <div class="production-wrapper production-wrapper-reverse">
        <img src="img/production-img.jpg" alt="Картинка блока" class="production-img">
        <div class="production-content">
          <div class="production-content-header">
            <div class="separator production-separator"></div>
            <h2 class="section-title production-title">Наше производство</h2>
          </div>
          <p class="production-text">
            Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в&nbsp;формировании глубокомысленных рассуждений. Но&nbsp;граница обучения кадров создаёт необходимость включения в&nbsp;производственный план целого ряда внеочередных мероприятий с&nbsp;учётом комплекса кластеризации усилий.
          </p>
          <p class="production-text">
            Реализация намеченных плановых заданий, а&nbsp;также свежий взгляд на&nbsp;привычные вещи&nbsp;&mdash; безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.
          </p>
          <div class="clients-content-wrapper">
          <ul class="clients-content-list">
            <li class="clients-content-item">
              <svg class="clients-content-icon" width="30" height="30">
                <use href="img/sprite.svg#car"></use>
              </svg>
              Автомобильная химия
            </li>
            <li class="clients-content-item">
              <svg class="clients-content-icon" width="30" height="30">
                <use href="img/sprite.svg#home"></use>
              </svg>
              Бытовая химия
            </li>
            <li class="clients-content-item">
              <svg class="clients-content-icon" width="30" height="30">
                <use href="img/sprite.svg#disinfect"></use>
              </svg>
              Дезинфицирующие средства
            </li>
          </ul>
          <ul class="clients-content-list">
            <li class="clients-content-item">
              <svg class="clients-content-icon" width="30" height="30">
                <use href="img/sprite.svg#aerozol"></use>
              </svg>
              Пищевые аэрозоли
            </li>
            <li class="clients-content-item">
              <svg class="clients-content-icon" width="30" height="30">
                <use href="img/sprite.svg#cosmetic"></use>
              </svg>
              Косметическая продукция
            </li>
            <li class="clients-content-item">
              <svg class="clients-content-icon" width="30" height="30">
                <use href="img/sprite.svg#brush"></use>
              </svg>
              Краски аэрозольные
            </li>
          </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.section production -->

  <?php
  $button_link_hidden = 'hidden';
  include_once('./template-parts/founder-block.php'); ?>
  <!-- /.section founder -->

  <?php 
  $blog_title = "Исследовательский центр Aliance&nbsp;production";
  $blog_title_style = 'blog-title';
  $blog_image_position = 'position';
  $button_link_hidden = 'hidden';
  include_once('./template-parts/blog-block.php') ?>
  <!-- /.section blog -->

  <?php include_once ('./template-parts/clients-block.php'); ?>
  <!-- /.section clients -->

  <?php include_once ('footer.php'); ?>
  <!-- /.footer -->