<section class="section news <?= $section_style; ?>">
  <div class="container">
    <div class="news-wrapper">
      <div class="news-content">
        <?php foreach ($news as $item): ?>
          <a href="<?= $item['path']; ?>" class="blog-card news-card">
            <img src="<?= $item['image']; ?>" alt="слайд 1" class="blog-card-img <?= $blog_image_position; ?>">
            <h3 class="blog-card-title"><?= $item['title']; ?></h3>
            <p class="blog-card-text">
              <?= $item['text']; ?>
            </p>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

</section>
<!-- /.section news -->