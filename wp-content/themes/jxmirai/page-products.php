<?php 
/**
 * Template Name: Front Page
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
<div class="spreator"></div>
<!-- Resin -->
<div class="resin_wrapper">
    <div>
        <div>Resin</div>
        <span>樹脂</span>
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
<?php get_footer(); ?>