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
global $url;
$title = "私たちについて";
$img = "";
$bgColor = '#fff';
// $url = "/assets/images/banner/manufacturebanner.png";
$url = "/assets/images/banner/footer.jpg";
header('Content-Type: image/jpeg');
include get_template_directory() . '/custom/pagesBanner.php';
?>
<!-- <div class="product_space">
  <div class="page-banner-title">
    <div class="title-wrapper">
      <div class="line" style="background-color: #000;"></div>
      <div>
        <div class="title-text" style="color: #000;">製造品</div>
      </div>
      <div class="line" style="background-color: #000;"></div>
    </div>
  </div>
</div> -->

<div class="head-container">
  <div class="head_body">
    <p>JX</p>
    <div class="head_text">
      <!-- <p class="head_des">
        厳格な検査プロセスにより、
        エラーのない信頼 性の高い製品が保証されます。
      </p> -->
      <p class="head_jx">MIRAI PRODUCTS</p>
    </div>
  </div>
</div>
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
<div class="product_listing_container">

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
    <!-- <div class="category">
      <p class="category_title">その他</p>
      <ul class="item_list">
        <li class="item">基板ボックス設計開発</li>
        <li class="item">アクリルスタンド</li>
        <li class="item">アクリルキーホルダー</li>
        <li class="item">フィギュア付きストラップ</li>
        <li class="item">樹脂エポキシサメナイトライト</li>
        <li class="item">弊社の開発品</li>
      </ul>
    </div> -->
  </div>
  <div class="product_listing">
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
</div>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/products.js"></script>
<?php get_footer(); ?>