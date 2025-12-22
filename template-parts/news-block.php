<section class="section news <?= $section_style; ?>">
  <div class="container">
    <div class="news-wrapper">
      <div class="news-content">
        <?php foreach ($news as $item): ?>
          <a href="<?= $item['path']; ?>" class="blog-card news-card">
            <picture class="blog-card-img <?= $blog_image_position; ?>">
              <source type="image/webp" srcset="<?= $item['picture']; ?>">
              <source type="image/jpeg" srcset="<?= $item['image']; ?>">
              <img src="<?= $item['image']; ?>" alt="слайд 1" width="720" height="400">
            </picture>
            <div class="blog-card-content">
              <h3 class="blog-card-title"><?= $item['title']; ?></h3>
              <p class="blog-card-text">
                <?= $item['text']; ?>
              </p>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
      <div class="news-buttons">
        <ul class="new-buttons-list">
          <li class="new-buttons-item">
            <a href="#" class="new-buttons-link active">1</a>
          </li>
          <li class="new-buttons-item">
            <a href="#" class="new-buttons-link">2</a>
          </li>
          <li class="new-buttons-item">
            <a href="#" class="new-buttons-link">3</a>
          </li>
          <li class="new-buttons-item">
            <a href="#" class="new-buttons-link">4</a>
          </li>
          <li class="new-buttons-item">
            <a href="#" class="new-buttons-link">5</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /.section news -->