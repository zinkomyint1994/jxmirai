<?php

/**
 * Template Name: page-products
 */
get_header(); ?>
<!-- main-banner -->
<?php
global $title;
global $caption;
global $bgColor;
$title = "OUR SERVICES";
$img = "当社のサービス";
$bgColor = '#fff';
$url = "/assets/images/banner/footer.jpg";
include get_template_directory() . '/custom/pagesBanner.php';
?>

<!-- four-image -->
<div class="pages-four">
  <div class="img_wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/3d.png" alt="Example Image" class="f_img">
    <div class="f_content">
      <p>3Dプリンター</p>
      <span class="body_content">当社は、ステレオリソグラフィー (SLA)、FDM 印刷、..........</span>
    </div>
    <p class="f_icons">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/blue_arrow.png" alt="Example Image" class="blue_arrow">
    </p>
  </div>

  <div class="img_wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/v1.png" alt="Example Image" class="f_img">
    <div class="f_content">
      <p>3Dプリンター</p>
      <span class="body_content">当社は、ステレオリソグラフィー (SLA)、FDM 印刷、..........</span>
    </div>
    <p class="f_icons">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/blue_arrow.png" alt="Example Image" class="blue_arrow">
    </p>
  </div>

  <div class="img_wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/v2.png" alt="Example Image" class="f_img">
    <div class="f_content">
      <p>3Dプリンター</p>
      <span class="body_content">当社は、ステレオリソグラフィー (SLA)、FDM 印刷、..........</span>
    </div>
    <p class="f_icons">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/blue_arrow.png" alt="Example Image" class="blue_arrow">
    </p>
  </div>

  <div class="img_wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/v3.png" alt="Example Image" class="f_img">
    <div class="f_content">
      <p>3Dプリンター</p>
      <span class="body_content">当社は、ステレオリソグラフィー (SLA)、FDM 印刷、..........</span>
    </div>
    <p class="f_icons">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/blue_arrow.png" alt="Example Image" class="blue_arrow">
    </p>
  </div>

</div>
<!-- four-image -->

<!-- products list -->
<div class="products_list_wrapper">
  <!-- title -->
  <div class="products_title_wrap">
    <div>
      <?php
      global $title;
      $title = "3D PRINTING";
      include get_template_directory() . '/custom/subTitle.php';
      ?>
    </div>
    <div class="side_title">3D 印刷テクノロジー - プロトタイプや複雑なデザインを作成するための高度なステレオリソグラフィー、FDM 印刷、粉末ベースの印刷。</div>
  </div>
  <div class="products_details">
    <div class="image_layout">
      <div class="layer_0">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p1.png" alt="Example Image" class="img_ly1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Example Image" class="img_ly2">
      </div>

    </div>
    <div class="list_wrap">
      <div class="others_list_wrap">
        <div class="others_title">
          <?php
          include get_template_directory() . '/custom/subBlueLine.php';
          ?>
          Stereolithography (光造形)</div>
        <div class="p_description">説明: ステレオリソグラフィー (SLA) は、UV レーザーを使用して液体樹脂を層ごとに硬化させて固体にします。高精度で滑らかな表面仕上げが特徴です。
          例: SLA は、ジュエリー、歯科用型、細かいディテールのある小さな部品の複雑なデザインのプロトタイプを作成するのに最適です。</div>
      </div>
      <div class="others_list_wrap">
        <div class="others_title">
          <?php
          include get_template_directory() . '/custom/subBlueLine.php';
          ?>
          FDM Printing (FDM造形)</div>
        <div class="p_description">説明: FDM (熱溶解積層法) では、加熱されたノズルから溶融した熱可塑性フィラメントを押し出して、オブジェクトを層ごとに構築します。手頃な価格と材料の多様性のため、広く使用されています。
          例: FDM は、機械部品、ハウジング カバー、教育用モデルなどの耐久性のある部品の製造に使用されます。</div>
      </div>
      <div class="others_list_wrap">
        <div class="others_title">
          <?php
          include get_template_directory() . '/custom/subBlueLine.php';
          ?>
          Powder-based Printing (粉末造形)</div>
        <div class="p_description">説明: 選択的レーザー焼結法 (SLS) などの粉末ベースの印刷では、レーザーを使用して粉末材料 (プラスチック、金属、セラミックなど) を固体層に融合します。この方法は、強度が高く機能的な部品の製造に優れています。
          例: SLS は、その強度と複雑さにより、軽量の航空宇宙部品、産業用ツール、医療用インプラントの作成に最適です。</div>
      </div>
      <div class="others_list_wrap">
        <div class="others_title">
          <?php
          include get_template_directory() . '/custom/subBlueLine.php';
          ?>
          Powder-based Printing (粉末造形)</div>
        <div class="p_description">説明: 選択的レーザー焼結法 (SLS) などの粉末ベースの印刷では、レーザーを使用して粉末材料 (プラスチック、金属、セラミックなど) を固体層に融合します。この方法は、強度が高く機能的な部品の製造に優れています。
          例: SLS は、その強度と複雑さにより、軽量の航空宇宙部品、産業用ツール、医療用インプラントの作成に最適です。</div>
      </div>
    </div>
    <div class="products_btn_">
      <?php
      include get_template_directory() . '/custom/buttontype1.php';
      ?>
    </div>
  </div>
  <!-- title -->
</div>
<!-- products list -->
<div class="spreator">

</div>
<!-- Resin -->
<div class="resin_wrapper">
  <div>
    <div>Resin</div>
    <span>樹脂</span>
  </div>
  <div class="carousel">
    <div class="list">

      <div class="item" style="background-image: url(https://images.pexels.com/photos/552785/pexels-photo-552785.jpeg);">
        <div class="content">
          <div class="title">射出成形</div>
          <div class="name">溶融樹脂をカスタム設計された金型に注入して固体物体を作成するプロセス。</div>
          <div class="des">
            説明: 選択的レーザー焼結法 (SLS) などの粉末ベースの印刷では、レーザーを使用して粉末材料 (プラスチック樹脂は溶融するまで加熱され、高圧下で金型に注入されます。材料は冷却されて固まり、金型の形状になります。
            例: 自動車部品、電子機器のケース、プラスチック製のおもちゃ。
          </div>
        </div>
      </div>

      <div class="item" style="background-image: url(https://images.pexels.com/photos/17804524/pexels-photo-17804524/free-photo-of-barren-rocky-mountains.jpeg);">
        <div class="content">
          <div class="title">RUGGED ROCKS</div>
          <div class="name">Rocky</div>
          <div class="des">Explore the rugged beauty of barren rocky mountains.
            A
            testament to nature's raw power.</div>
        </div>
      </div>

      <div class="item" style="background-image: url(https://images.pexels.com/photos/6439041/pexels-photo-6439041.jpeg);">
        <div class="content">
          <div class="title">FOREST PATHWAY</div>
          <div class="name">Forest</div>
          <div class="des">A peaceful trail through dense green forests. Perfect
            for
            reconnecting with nature.</div>
        </div>
      </div>

      <div class="item" style="background-image: url(https://images.pexels.com/photos/2832061/pexels-photo-2832061.jpeg);">
        <div class="content">
          <div class="title">COLORFUL MEADOW</div>
          <div class="name">Meadow</div>
          <div class="des">A colorful meadow filled with butterflies and
            blooming
            flowers. Nature at its best.</div>
        </div>
      </div>

      <div class="item" style="background-image: url(https://images.pexels.com/photos/552784/pexels-photo-552784.jpeg);">
        <div class="content">
          <div class="title">SERENE LAKE</div>
          <div class="name">Lake</div>
          <div class="des">A calm and serene lake surrounded by towering trees
            and
            mountains. A perfect escape.</div>
        </div>
      </div>

      <div class="item" style="background-image: url(https://images.pexels.com/photos/18536296/pexels-photo-18536296/free-photo-of-mountain-peaks-over-clouds.jpeg);">
        <div class="content">
          <div class="title">PEAKS IN THE CLOUDS</div>
          <div class="name">Clouds</div>
          <div class="des">Mountain peaks wrapped in clouds. A dreamy sight that
            inspires awe and wonder.</div>
        </div>
      </div>

      <div class="item" style="background-image: url(https://images.pexels.com/photos/7616134/pexels-photo-7616134.jpeg);">
        <div class="content">
          <div class="title">RIVERBANK PARADISE</div>
          <div class="name">Riverbank</div>
          <div class="des">A picturesque riverbank flowing through lush greenery
            and
            vibrant landscapes.</div>
        </div>
      </div>

      <div class="item" style="background-image: url(https://images.pexels.com/photos/20641721/pexels-photo-20641721/free-photo-of-barren-mountains-peaks-under-clouds.jpeg);">
        <div class="content">
          <div class="title">MYSTIC RIDGES</div>
          <div class="name">Ridges</div>
          <div class="des">Discover the mystic beauty of mountain ridges under a
            cloudy sky. Perfect for adventurers.</div>
        </div>
      </div>

      <div class="item" style="background-image: url(https://images.pexels.com/photos/17977245/pexels-photo-17977245/free-photo-of-barren-mountain-peaks.jpeg);">
        <div class="content">
          <div class="title">GOLDEN CLIFFS</div>
          <div class="name">Cliffs</div>
          <div class="des">Golden cliffs basking in sunlight. A stunning view
            that
            captures the heart of nature.</div>
        </div>
      </div>

      <div class="item" style="background-image: url(https://images.pexels.com/photos/2073873/pexels-photo-2073873.jpeg);">
        <div class="content">
          <div class="title">PEACEFUL VALLEY</div>
          <div class="name">Valley</div>
          <div class="des">A peaceful valley surrounded by towering mountains. A
            perfect destination for solitude.</div>
        </div>
      </div>

    </div>

    <!--next prev button-->
    <div class="arrows">
      <div class="btn-container">
        <button class="prev">
          <
            </button>
            <button class="next">
              >
            </button>
            <div class="slide-number"></div>
      </div>
    </div>
  </div>

</div>
<!-- Resin -->






<!-- metal work -->
<div class="metal_work_wrapper">
  <!-- title -->
  <div class="products_title_wrap">
    <div>
      <?php
      global $title;
      $title = "METAL WORK";
      include get_template_directory() . '/custom/subTitle.php';
      ?>
    </div>
    <div class="side_title">3D 印刷テクノロジー - プロトタイプや複雑なデザインを作成するための高度なステレオリソグラフィー、FDM 印刷、粉末ベースの印刷。</div>
  </div>
  <div class="products_details">
    <div class="image_layout">
      <div class="layer_0">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p1.png" alt="Example Image" class="img_ly1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Example Image" class="img_ly2">
      </div>

    </div>
    <div class="list_wrap">
      <div class="others_list_wrap">
        <div class="others_title">
          <?php
          include get_template_directory() . '/custom/subBlueLine.php';
          ?>
          Stereolithography (光造形)
        </div>
        <div class="p_description">説明: ステレオリソグラフィー (SLA) は、UV レーザーを使用して液体樹脂を層ごとに硬化させて固体にします。高精度で滑らかな表面仕上げが特徴です。
          例: SLA は、ジュエリー、歯科用型、細かいディテールのある小さな部品の複雑なデザインのプロトタイプを作成するのに最適です。</div>
      </div>
      <div class="others_list_wrap">
        <div class="others_title">
          <?php
          include get_template_directory() . '/custom/subBlueLine.php';
          ?>
          FDM Printing (FDM造形)</div>
        <div class="p_description">説明: FDM (熱溶解積層法) では、加熱されたノズルから溶融した熱可塑性フィラメントを押し出して、オブジェクトを層ごとに構築します。手頃な価格と材料の多様性のため、広く使用されています。
          例: FDM は、機械部品、ハウジング カバー、教育用モデルなどの耐久性のある部品の製造に使用されます。</div>
      </div>
      <div class="others_list_wrap">
        <div class="others_title">
          <?php
          include get_template_directory() . '/custom/subBlueLine.php';
          ?>
          Powder-based Printing (粉末造形)</div>
        <div class="p_description">説明: 選択的レーザー焼結法 (SLS) などの粉末ベースの印刷では、レーザーを使用して粉末材料 (プラスチック、金属、セラミックなど) を固体層に融合します。この方法は、強度が高く機能的な部品の製造に優れています。
          例: SLS は、その強度と複雑さにより、軽量の航空宇宙部品、産業用ツール、医療用インプラントの作成に最適です。</div>
      </div>
      <div class="others_list_wrap">
        <div class="others_title">
          <?php
          include get_template_directory() . '/custom/subBlueLine.php';
          ?>
          Powder-based Printing (粉末造形)</div>
        <div class="p_description">説明: 選択的レーザー焼結法 (SLS) などの粉末ベースの印刷では、レーザーを使用して粉末材料 (プラスチック、金属、セラミックなど) を固体層に融合します。この方法は、強度が高く機能的な部品の製造に優れています。
          例: SLS は、その強度と複雑さにより、軽量の航空宇宙部品、産業用ツール、医療用インプラントの作成に最適です。</div>
      </div>
    </div>
    <div class="products_btn_">
      <?php
      include get_template_directory() . '/custom/buttontype1.php';
      ?>
    </div>
  </div>
  <!-- title -->
</div>
<!-- metal work -->

<!-- others -->
<div class="others_wrapper">
  <div>
    <?php
    global $title;
    $title = "その他";
    include get_template_directory() . '/custom/subTitle.php';
    ?>
  </div>
  <div class="others_container">
    <!-- text-box -->
    <div class="text_container">
      <div class="others_title">縫製加工/製造</div>
      <div class="others_content">縫製加工・製造は、生地を裁断し、縫い合わせて衣類や布製品を作る工程です。職人の技術と最新の機械を活用し、高品質な製品を生産します。デザインに応じたパターン作成や仕上げも重要で、精密な縫製技術が求められます</div>
      <div class="text_blur"></div>
    </div>
    <!-- text-box -->
    <!-- text-box -->
    <div class="text_container">
      <div class="others_title">縫製加工/製造</div>
      <div class="others_content">縫製加工・製造は、生地を裁断し、縫い合わせて衣類や布製品を作る工程です。職人の技術と最新の機械を活用し、高品質な製品を生産します。デザインに応じたパターン作成や仕上げも重要で、精密な縫製技術が求められます</div>
      <div class="text_blur"></div>
    </div>
    <!-- text-box -->
    <!-- text-box -->
    <div class="text_container">
      <div class="others_title">縫製加工/製造</div>
      <div class="others_content">縫製加工・製造は、生地を裁断し、縫い合わせて衣類や布製品を作る工程です。職人の技術と最新の機械を活用し、高品質な製品を生産します。デザインに応じたパターン作成や仕上げも重要で、精密な縫製技術が求められます</div>
      <div class="text_blur"></div>
    </div>
    <!-- text-box -->

    <!-- text-box -->
    <div class="text_container">
      <div class="others_title">縫製加工/製造</div>
      <div class="others_content">縫製加工・製造は、生地を裁断し、縫い合わせて衣類や布製品を作る工程です。職人の技術と最新の機械を活用し、高品質な製品を生産します。デザインに応じたパターン作成や仕上げも重要で、精密な縫製技術が求められます</div>
      <div class="text_blur"></div>
    </div>
    <!-- text-box -->
    <!-- text-box -->
    <div class="text_container">
      <div class="others_title">縫製加工/製造</div>
      <div class="others_content">縫製加工・製造は、生地を裁断し、縫い合わせて衣類や布製品を作る工程です。職人の技術と最新の機械を活用し、高品質な製品を生産します。デザインに応じたパターン作成や仕上げも重要で、精密な縫製技術が求められます</div>
      <div class="text_blur"></div>
    </div>
    <!-- text-box -->
    <!-- text-box -->
    <div class="text_container">
      <div class="others_title">縫製加工/製造</div>
      <div class="others_content">縫製加工・製造は、生地を裁断し、縫い合わせて衣類や布製品を作る工程です。職人の技術と最新の機械を活用し、高品質な製品を生産します。デザインに応じたパターン作成や仕上げも重要で、精密な縫製技術が求められます</div>
      <div class="text_blur"></div>
    </div>
    <!-- text-box -->
  </div>
</div>

<!-- others -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/carousel.js"></script>
<?php get_footer(); ?>