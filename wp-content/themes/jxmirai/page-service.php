<?php

/**
 * Template Name: page-service
 */
get_header(); ?>
<!-- main-banner -->
<?php
global $title;
global $caption;
global $bgColor;
$title = "OUR PRODUCT";
$img = "製造品";
$bgColor = '#fff';
$url = "/assets/images/banner/footer.jpg";
include get_template_directory() . '/custom/pagesBanner.php';
?>

<div class="head-container">
  <div class="head_body">
    <p>JX</p>
    <div class="head_text">
      <p class="head_des">
        厳格な検査プロセスにより、
        エラーのない信頼 性の高い製品が保証されます。
      </p>
      <p class="head_jx">MIRAI PRODUCTS</p>
    </div>
  </div>
  <div class="head_img">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service.jpg" alt="">
  </div>
</div>



<?php get_footer(); ?>