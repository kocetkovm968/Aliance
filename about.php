  <?php 
  $page_title = 'О компании';
  include_once ('page-header.php') ?>
  <!-- /.page-header -->

  <?php include_once('./template-parts/experts-block.php') ?>
  <!-- /.section experts -->

  <?php 
  $features_style = 'features-style';
  $slider_controls_margin = 'margin';
  include_once('./template-parts/features-block.php') ?>
  <!-- /.features -->

  <?php include_once('./template-parts/production-block.php') ?>
  <!-- /.section production -->

  <?php include_once('./template-parts/founder-block.php') ?>
  <!-- /.section founder -->

  <?php 
  $blog_title = "Исследовательский центр Aliance&nbsp;production";
  $blog_title_style = 'blog-title-style';
  $blog_image_position = 'position';
  $button_link_hidden = 'hidden';
  include_once('./template-parts/blog-block.php') ?>
  <!-- /.section blog -->

  <?php include_once ('./template-parts/clients-block.php') ?>
  <!-- /.section clients -->

  <?php include_once ('footer.php') ?>
  <!-- /.footer -->