<?php

/**
 * Template Name: page-service
 */
set_query_var('customPageTitle', '製造品 | JX未来株式会社');
get_header(); ?>
<?php
$pageTitle = "products";
include 'header.php';
?>
<div id="page-wrapper" class="page-enter">
<!-- main-banner -->
<?php
global $title;
global $caption;
global $bgColor;
global $url;
$title = "製造品";
$img = "";
$bgColor = '#fff';
$url = "/assets/images/banner/footer.jpg";
header('Content-Type: image/jpeg');
include get_template_directory() . '/custom/pagesBanner.php';
?>
<!-- top -->
<div class="head-container">
<!-- <div class="scroll_down">
  <a href="#product-container">
    <span class="mouse">
      <span></span>
    </span>
    <p>SCROLL</p>
  </a>
</div> -->

  <div class="head_body">
    <p>JX</p>
    <div class="head_text">
      <p class="head_jx">MIRAI PRODUCTS</p>
      <p class="type">製品の種類</p>
    </div>
  </div>

    <div class="products_inner_menu">

      <div class="d_flex">
          <div><p class="title">金型</p></div>
          <div><p>試作金型</p></div>
          <div><p>量産金型</p></div>
      </div>

      <div class="d_flex">
          <div><p class="title">3Dプリンター</p></div>
          <div><p>光造形</p></div>
          <div><p>FDM造形</p></div>
          <div><p>粉末造形</p></div>
          <div><p>UV硬化造形</p></div>
          <div><p>DLP造形</p></div>
          <div><p>金属造形</p></div>
      </div>

      <div class="d_flex">
          <div><p class="title">樹脂</p></div>
          <div><p>切削</p></div>
          <div><p>真空注型</p></div>
      </div>
      
      <div class="d_flex">
          <div><p class="title">金属</p></div>
          <div><p>切削</p></div>
          <div><p>プレス</p><span>（プレス成形）</span></div>
          <div><p>ダイキャスト</p><span>（アルミ/マグネシウム） </span></div>
      </div>


    </div>

</div>
<!-- top -->

<div class="spreator"></div>
<!-- slider -->

<!-- <div class="slider-wrapper">
  <button class="slider-btn prev">
    <span class="slider-arrow left">&#10094;</span> 
  </button>
  <div class="slider">
    <div class="slider-track">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/ダイキャスト、材料：アルミ＋追加加工.jpg" alt="Image 2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/板金、材料：銅(C1012),自動車部品 、t＝6mmまで曲げ問題ありません。.jpg" alt="Image 3">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/板金、材料：銅(C1012),自動車部品.jpg" alt="Image 4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/樹脂 エポキシ サメ ナイトライト 品.jpg" alt="Image 5">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/自動車樹脂製品＋アクリルカーバ.jpg" alt="Image 6">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/試作型、インサート成形、自動車部品、材料：SUS+樹脂 (2).jpg" alt="Image 7">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/試作型、インサート成形、自動車部品、材料：鉄+樹脂 (3).jpg" alt="Image 8">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/量産型、2色製品、自動車部品、材料：ゴム+樹脂 (3).jpg" alt="Image 9">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/金属切削、材料：アルミ+塗装.jpg" alt="Image 11">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/金属切削品、材料：鉄+塗装.jpg" alt="Image 12">
    </div>
  </div>
  <button class="slider-btn next">
  <span class="slider-arrow right">&#10095;</span> 
  </button>
</div> -->

<!-- slider -->
<!-- oldlist -->
<!-- <div class="product_listing_container">

  <div class="product_sidebar_container">
    <p class="sidebar_title">製品の種類</p>
    <div class="category">
      <p class="category_title">金型</p>
      <ul class="item_list">
        <li class="item">試作金型</li>
        <li class="item">量産金型</li>
      </ul>
    </div>
    <div class="category">
      <p class="category_title">3Dプリンター</p>
      <ul class="item_list">
        <li class="item">光造形</li>
        <li class="item">FDM造形</li>
        <li class="item">粉末造形</li>
        <li class="item">UV硬化造形</li>
        <li class="item">DLP造形</li>
        <li class="item">金属造形</li>
      </ul>
    </div>
    <div class="category">
      <p class="category_title">金属</p>
      <ul class="item_list">
        <li class="item">切削</li>
        <li class="item">板金</li>
        <li class="item">プレス </li><span>（金型製造）</span>
        <li class="item">ダイキャスト</li>
        <span>（金型製造）</span>

      </ul>
    </div>
    <div class="category">
      <p class="category_title">樹脂</p>
      <ul class="item_list">
        <li class="item">切削</li>
        <li class="item">真空注型</li>
      </ul>
    </div>

  </div>
  <div class="product_listing">
     <div class="title_list" data-image-url="<?php echo get_template_directory_uri(); ?>"></div>
    <div id="product-container" data-image-url="<?php echo get_template_directory_uri(); ?>"></div>
    <div class="listing">
      <div class="list_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/a-1.jpg" alt="">
        <p>装飾幅木</p>
        <p>PVC成形</p>
      </div>
      <div class="list_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/a-1.jpg" alt="">
        <p>装飾幅木</p>
        <p>PVC成形</p>
      </div>
      <div class="list_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/a-1.jpg" alt="">
        <p>装飾幅木</p>
        <p>PVC成形</p>
      </div>
      <div class="list_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/a-1.jpg" alt="">
        <p>装飾幅木</p>
        <p>PVC成形</p>
      </div>
      <div class="list_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/a-1.jpg" alt="">
        <p>装飾幅木</p>
        <p>PVC成形</p>
      </div>
      <div class="list_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/a-1.jpg" alt="">
        <p>装飾幅木</p>
        <p>PVC成形</p>
      </div>
      <div class="list_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/a-1.jpg" alt="">
        <p>装飾幅木</p>
        <p>PVC成形</p>
      </div>
      <div class="list_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/a-1.jpg" alt="">
        <p>装飾幅木</p>
        <p>PVC成形</p>
      </div>
      <div class="list_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/a-1.jpg" alt="">
        <p>装飾幅木</p>
        <p>PVC成形</p>
      </div>
      <div class="list_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/a-1.jpg" alt="">
        <p>装飾幅木</p>
        <p>PVC成形</p>
      </div>
      <div class="list_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/a-1.jpg" alt="">
        <p>装飾幅木</p>
        <p>PVC成形</p>
      </div>
      <div class="list_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/a-1.jpg" alt="">
        <p>装飾幅木</p>
        <p>PVC成形</p>
      </div>
      <div class="list_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/a-1.jpg" alt="">
        <p>装飾幅木</p>
        <p>PVC成形</p>
      </div>
      <div class="list_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/a-1.jpg" alt="">
        <p>装飾幅木</p>
        <p>PVC成形</p>
      </div>
      <div class="list_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/a-1.jpg" alt="">
        <p>装飾幅木</p>
        <p>PVC成形</p>
      </div>
      <div class="list_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/a-1.jpg" alt="">
        <p>装飾幅木</p>
        <p>PVC成形</p>
      </div>
    </div>
  </div>
</div> -->
<!-- oldlist -->
<div class="metal_work_wrapper">
<div  id="product-container" data-image-url="<?php echo get_template_directory_uri(); ?>"  style="margin-bottom: 40px;"></div>
</div>
</div>


</div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/pageAnimation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/products.js"></script>
<?php get_footer(); ?>