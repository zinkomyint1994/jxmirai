<?php

/**
 * Template Name: page-manufacture
 */
set_query_var('customPageTitle', '製造拠点 | JX未来株式会社');
get_header(); ?>

<div id="page-wrapper" class="page-enter">
<!-- main-banner -->
<?php
global $title;
global $caption;
global $bgColor;
global $url;
$title = "製造拠点";
$img = "";
$bgColor = '#fff';
// $url = "/assets/images/banner/manufacturebanner.png";
$url = "/assets/images/banner/footer.jpg";
include get_template_directory() . '/custom/pagesBanner.php';
?>
<!-- factories-japan -->
<div class="factories_wrapper">
  <div>
    <?php
    global $title;
    global $bgColor;
    $bgColor ="#000000";
    $title = "射出成形金型/成形";
    include get_template_directory() . '/custom/subTitle.php';
    ?>
  </div>
  <!-- container -->
  <div class="factories_container">
    <div>
      <div class="slider-container">
        <div class="main-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/Picture1.png" alt="Main Image">
          <button class="prev">&#10094;</button>
          <button class="next">&#10095;</button>
        </div>

        <div class="thumbnails">
          <img class="thumb active" src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/Picture1.png" alt="Thumb 1" onclick="changeImage(this)">
          <img class="thumb" src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/Picture2.png" alt="Thumb 2" onclick="changeImage(this)">
          <img class="thumb" src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/Picture3.png" alt="Thumb 3" onclick="changeImage(this)">
          <img class="thumb" src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/Picture4.png" alt="Thumb 4" onclick="changeImage(this)">
        </div>
      </div>

    </div>
    <div class="mf_list_wrap">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logoFinal_.png" alt="Example Image" class="blur_manuf">
      <!-- <div class="mf_title">
        射出成形金型製作/成形メーカー</div> -->
      <ul class="ul_flex">
        <li>工場名：厦門協晟源模具有限公司</li>
        <li>Main Operations: Injection mold manufacturing and molding</li>
        <li>工場建屋:12,000m 2 </li>
        <li>現在の従業員：130名</li>
        <li>システム認証：ISO 9001 & ISO14001</li>
        <li>設立 ：2024/5/28 </li>
        <li>設立年：2000年/４月</li>
        <li>精密金型、射出成形、インサート金型、２色成形 成形機：10ton~1,300ton60機</li>

      </ul>
      <!-- <div class="mf_blur"></div> -->
    </div>
  </div>
  <!-- container -->
  <div class="spreator"></div>
  <!-- container -->
  <div>
    <?php
    global $title;
    global $bgColor;
    $bgColor ="#000000";
    $title = "３Dプリンター、樹脂/金属切削、注型、板金";
    include get_template_directory() . '/custom/subTitle.php';
    ?>
  </div>
  <div class="factories_container">
    <div>
      <div class="slider-container">
        <div class="main-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/Picture7.png" alt="Main Image">
          <button class="prev">&#10094;</button>
          <button class="next">&#10095;</button>
        </div>

        <div class="thumbnails">
          <img class="thumb active" src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/Picture8.png" alt="Thumb 1" onclick="changeImage(this)">
          <img class="thumb" src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/Picture9.png" alt="Thumb 2" onclick="changeImage(this)">
          <img class="thumb" src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/Picture7.png" alt="Thumb 3" onclick="changeImage(this)">
          <img class="thumb" src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/Picture6_.png" alt="Thumb 4" onclick="changeImage(this)">
        </div>
      </div>
    </div>
    <div class="mf_list_wrap">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logoFinal_.png" alt="Example Image" class="blur_manuf">
      <!-- <div class="mf_title">３Dプリンター、樹脂/金属切削メーカー</div> -->
      <ul class="ul_flex">
        <li>工場名：厦門朱頂紅科技有限公司</li>
        <li>工場建屋:8,000m2 </li>
        <li>現在の従業員：50名 </li>
        <li>システム認証：ISO 9001 & ISO14001 </li>
        <li>設立年：2006年/2月 </li>
        <li>３Dプリンター、樹脂切削、金属切削、板金、注型 、治具製造 </li>
      </ul>
      <!-- <div class="mf_blur"></div> -->
    </div>
  </div>
  <!-- container -->
</div>
<!-- factories-japan -->
<div class="spreator"></div>
<!-- sample -->
<!-- <div class="sample_wrapper">
  <div class="sample_inner">
    <div>
      <div class="sample_content_wrap">
        <div>サンプル金型の作成</div>
        <div class="news_title">
          <span>
            <?php
            include get_template_directory() . '/custom/subBlueLine.php';
            ?>
          </span>
          <span>試作・改良のために設計されており、本格的な生産に入る前にクライアントがデザインを検証できるよう支援します。</span>
        </div>


        <div>サンプル金型の作成</div>
        <div>
          <div class="news_title">
            <span>
              <?php
              include get_template_directory() . '/custom/subBlueLine.php';
              ?>
            </span>
            <span>試作・改良のために設計されており、本格的な生産に入る前にクライアントがデザインを検証できるよう支援します。</span>
          </div></br>
          <span>サンプル金型は、設計・試作段階でクライアントと密接に連携できるよう、現地で製造されます。量産用金型は、中国や日本の高度な製造技術とコスト効率の高い生産体制を活用し、協力体制のもとで製造されています。</span>
        </div>
      </div>
    </div>
    <div>

      <div class="tags-img-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/print1.png" alt="Example Image" class="tags-img ">
        <div class="box-1"></div>
        <div class="box-2"></div>
        <div></div>
      </div>
    </div>
  </div>
</div> -->
<!-- sample -->


<!-- factories-japan -->
<div class="factories_wrapper">
  <div>
    <?php
    global $title;
    global $bgColor;
    $bgColor ="#000000";
    $title = "プレス金型製作/製造";
    include get_template_directory() . '/custom/subTitle.php';
    ?>
  </div>
  <!-- container -->
  <div class="factories_container">
    <div>
      <div class="slider-container">
        <div class="main-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/Picture10.png" alt="Main Image">
          <button class="prev">&#10094;</button>
          <button class="next">&#10095;</button>
        </div>

        <div class="thumbnails">
          <img class="thumb active" src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/Picture10.png" alt="Thumb 1" onclick="changeImage(this)">
          <img class="thumb" src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/Picture11.png" alt="Thumb 2" onclick="changeImage(this)">
          <img class="thumb" src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/Picture12.png" alt="Thumb 3" onclick="changeImage(this)">
          <img class="thumb" src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/Picture13.png" alt="Thumb 4" onclick="changeImage(this)">
        </div>
      </div>
    </div>
    <div class="mf_list_wrap">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logoFinal_.png" alt="Example Image" class="blur_manuf">
      <!-- <div class="mf_title">プレス成形金型製作/生産メーカー</div> -->
      <ul class="ul_flex">
        <li>工場名：厦門智迅电子科技有限公司 </li>
        <li>工場建屋:6,000m2 </li>
        <li>現在の従業員：80名 </li>
        <li>システム認証：ISO 9001& ATF16949 </li>
        <li>設立年：2006年/2月 </li>
        <li>精密金型、プレス成形 成形機：25ton-250ton 30機 </li>
      </ul>
      <!-- <div class="mf_blur"></div> -->
    </div>
  </div>
  <!-- container -->
  <div class="spreator"></div>
  <!-- container -->
  <div>
    <?php
    global $title;
    global $bgColor;
    $bgColor ="#000000";
    $title = "ダイキャスト成形金型製作/成形";
    include get_template_directory() . '/custom/subTitle.php';
    ?>
  </div>
  <div class="factories_container">
    <div>
      <div class="slider-container">
        <div class="main-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/Picture15.png" alt="Main Image">
          <button class="prev">&#10094;</button>
          <button class="next">&#10095;</button>
        </div>

        <div class="thumbnails">
          <img class="thumb active" src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/daikin1.png" alt="Thumb 1" onclick="changeImage(this)">
          <img class="thumb" src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/daikin2.png" alt="Thumb 2" onclick="changeImage(this)">

        </div>
      </div>
    </div>
    
    <div class="mf_list_wrap">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logoFinal_.png" alt="Example Image" class="blur_manuf">
      <!-- <div class="mf_title">ダイキャスト成形金型製作/成形メーカー </div> -->
      <ul class="ul_flex">
        <li>工場名：Dongguan Bestcourser Die casting Co., Ltd. </li>
        <li>工場建屋:10,000m 2 </li>
        <li>現在の従業員：150名 </li>
        <li>システム認証：ISO 9001& ATF169</li>
        <li>設立年：2005年/10月 </li>
        <li>金型製作、アルミ、マグネシウムダイキャスト 成形機：300ton-3500ton 20機 </li>
      </ul>
      <!-- <div class="mf_blur"></div> -->
    </div>
  </div>
  <!-- container -->
  <div class="spreator"></div>
  <!-- container -->
  <div>
    <?php
    global $title;
    global $bgColor;
    $bgColor ="#000000";
    $title = "ゴム成形金型製作/成形
";
    include get_template_directory() . '/custom/subTitle.php';
    ?>
  </div>
  <div class="factories_container">
    <div>
      <div class="slider-container">
        <div class="main-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/Picture18.png" alt="Main Image">
          <button class="prev">&#10094;</button>
          <button class="next">&#10095;</button>
        </div>

        <div class="thumbnails">
          <img class="thumb" src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/gomu1.png" alt="Thumb 2" onclick="changeImage(this)">
          <img class="thumb" src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/gomu2.png" alt="Thumb 3" onclick="changeImage(this)">
          <img class="thumb" src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture/gomu3.png" alt="Thumb 4" onclick="changeImage(this)">
          
        </div>
      </div>
    </div>
    <div class="mf_list_wrap">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logoFinal_.png" alt="Example Image" class="blur_manuf">
      <!-- <div class="mf_title">ゴム成形金型製作/成形メーカー </div> -->
      <ul class="ul_flex">
        <li>工場名：厦門瑞瀚电子科技有限公司</li>
        <li>工場建屋:10,000m 2 </li>
        <li>現在の従業員：50名 </li>
        <li>システム認証：ISO 9001</li>
        <li>設立年：2009年/01月 </li>
        <li>シリコンゴム、液体シリコンゴム、NBR等のゴム関連。金型製造/生産</li>
      </ul>
      <!-- <div class="mf_blur"></div> -->
    </div>
  </div>
  <!-- container -->
  <div class="spreator"></div>
</div>
<!-- factories-japan -->
<div class="spreator"></div>

</div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/pageAnimation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/manufacture.js"></script>
<?php get_footer(); ?>
