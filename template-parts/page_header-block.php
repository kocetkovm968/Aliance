<header class="page-header <?= $page_header_bg; ?>">
  <div class="container">
    <div class="page-header-wrapper">
      <div class="page-header-content">
        <div class="separator"></div>
        <h1 class="page-header-title"><?= $page_title; ?></h1>
        <ul class="breadcrumbs">
          <!-- из массива подставляем значения для элементов хлебных крошек -->
          <?php foreach ($pages as $item): ?>
            <li class="breadcrumbs-item <?= $breadcrumbs_margin; ?>">
              <a href="<?= $item['path']; ?>" class="breadcrumbs-link <?= $item['class']; ?>"><?= $item['title']; ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php 
        if (!empty($page_header_img)) {
          echo '<img src="'.$page_header_img.'" alt="" class="page-header-img">';
        }
      ?>
    </div>
  </div>
</header>