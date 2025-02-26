<?php 
/**
 * Template Name: home-page
 */
get_header(); ?>

<!-- main-banner -->
<?php
include get_template_directory() . '/custom/mainBanner.php';
?>
<!-- main-banner -->
<!-- What service do we provide? -->
<div class="company-container">
    <div class="content_wrapper">
    <div class="about_banner_container">
        <div class="banner-first-txt">
                <p class="">who we</p>
           </div>
           <div class="banner-mid-txt">
                <p class="">Are And What</p>
           </div>
           <div class="banner-third-txt">
                <div class="third_line"></div>
                <p class="">we do</p>
           </div>
           
           <!-- <p class="about_banner_title">Who We</p> -->
        </div>
        <div class="s-image-wrapper">
            <div class="banner-overlay">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/img1.png" alt="Example Image" class="image1">
            </div>
          
            <p class="descripton-txt">
                自動車や消費財など、さまざまな業界向けの金型を設計およびカスタマイズします。
            </p>
        </div>
        <div class="s-image-wrapper">
        <div class="banner-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/img2.png" alt="Example Image" class="image2">
            </div>
            <p class="descripton-txt">
                高度な技術でサンプル・量産金型を製作します。
            </p>
        </div>

        <div class="s-image-wrapper">
            <div class="banner-overlay">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/img3.png" alt="Example Image" class="image3">
            </div>
            <p class="descripton-txt">
                日中連携により、高品質、コスト効率、納期厳守を実現します。
            </p>
            <p class="description-btn-txt">革新的な3Dプリントと高精度金型製作を専門とする世界的な製造会社</p>
        </div>
    </div>
</div>
<!-- What service do we provide? -->
<div class="spreator"></div>


<!-- our service -->
<div class="service-wrapper">
    <?php
    global $title;
    global $caption;
    $title = "OUR SERVICE";
    $caption = "当社のサービス";
            include get_template_directory() . '/custom/title.php';
    ?>
    <div class="service-container">
        <div class="service-inner-container">
            <div class="service-lf-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/img4.png" alt="Example Image" class="ima">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/img5.png" alt="Example Image" class="service-img">
            </div>
            <div class="service-rg-container">
                <div class="service-rg-txt">
                    <div class="sub_title_a">試作型/量産型</div>
            
                    <div class="sub_title_line">
                    <?php
                        include get_template_directory() . '/custom/subBlueLine.php';
                        ?>
                          <div> 私たちの会社は、多様な業界にわたる経験を持つ専門家チームと協力し 中国と国内で様々なプロジェクトを遂行している試作×量産会社です。</div>
                    </div>
                    <div class="body_content">当社は、射出成形、ブロー成形、PVC 成形、ゴム成形、押し出し成形、ディップ成形など、さまざまな樹脂成形技術を専門としています。さらに、カスタム金型製造も提供しており、お客様に正確で高品質のソリューションを提供しています</div>
                </div>
                <div>
                    <?php
                        include get_template_directory() . '/custom/buttontype1.php';
                        ?>
                </div>
            </div>
        </div>
    <div>
</div>
</div>
</div>
<!-- our service -->

<!-- our products -->
    <div>
        <div class="product-wrapper">
            <div class="product-container">
                <!-- card-one -->
                <div class="card-container">
                    <div class="img-container ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p1.png" alt="Example Image" class="product-image">
                    </div>
                    <div class="card-list">
                        <div>
                        <div class="product-title">1.3Dプリンタ</div>
                        <div class="list-txt">
                            <div>射出成形</div>
                            <div>ブロー成形</div>
                            <div>PVC成形</div>
                            <div>ゴム成形</div>
                        </div>
                        </div>
                        <div>
                            <?php
                                include get_template_directory() . '/custom/buttontype1.php';
                                ?>
                        </div>
                        <div class="blue-block"></div>
                    </div>
                </div>
                 <!-- card-one -->
                 <!-- card-one -->
                <div class="card-container">
                    <div class="img-container ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Example Image" class="product-image">
                    </div>
                    <div class="card-list">
                        <div>
                        <div class="product-title">2.樹脂</div>
                        <div class="list-txt">
                            <div>切削注型</div>
                            <div>射出成形</div>
                            <div>ブロー成形</div>
                            <div>PVC成形</div>
                            <div>ゴム成形</div>
                            <div>押出成形</div>
                            <div>ディップ成形</div>
                        </div>
                        </div>
                        <div>
                        <?php
                                include get_template_directory() . '/custom/buttontype1.php';
                                ?>
                        </div>
                        <div class="blue-block"></div>
                    </div>
                </div>
                 <!-- card-one -->
                 <!-- card-one -->
                <div class="card-container">
                    <div class="img-container ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p3.png" alt="Example Image" class="product-image">
                    </div>
                    <div class="card-list">
                        <div>
                        <div class="product-title">3.金属</div>
                        <div class="list-txt">
                            <div>切削板金</div>
                            <div>プレス成形</div>
                            <div>ダイキャスト</div>
                            <div>＊金型製造</div>
                        </div>
                        </div>
                        <div>
                        <?php
                                include get_template_directory() . '/custom/buttontype1.php';
                                ?>
                        </div>
                        <div class="blue-block"></div>
                    </div>
                </div>
               <!-- card-one -->
            
                <!-- card-one -->
                 <div class="card-container2">
                 <div class="card-list2">
                        <div>
                            <div class="product-title">4.その他</div>
                                <div class="list-txt">
                                    <div>射出成形</div>
                                    <div>ブロー成形</div>
                                    <div>PVC成形</div>
                                    <div>ゴム成形</div>
                                </div>
                            </div>
                        <div>
                        <?php
                                include get_template_directory() . '/custom/buttontype1.php';
                                ?>
                        </div>
                        <div class="blue-block"></div>
                    </div>
                    <div class="img-container ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Example Image" class="product-image">
                    </div>
            
                </div>
             <!-- card-one -->
              <!-- card-one -->
              <div class="card-container2">
                 <div class="card-list2">
                        <div>
                            <div class="product-title">4.その他</div>
                                <div class="list-txt">
                                    <div>射出成形</div>
                                    <div>ブロー成形</div>
                                    <div>PVC成形</div>
                                    <div>ゴム成形</div>
                                </div>
                            </div>
                        <div>
                        <?php
                                include get_template_directory() . '/custom/buttontype1.php';
                                ?>
                        </div>
                        <div class="blue-block"></div>
                    </div>
                    <div class="img-container ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Example Image" class="product-image">
                    </div>
            
                </div>
             <!-- card-one -->
          
              <!-- card-one -->
              <div class="card-container2">
                 <div class="card-list2">
                        <div>
                            <div class="product-title">4.その他</div>
                                <div class="list-txt">
                                    <div>射出成形</div>
                                    <div>ブロー成形</div>
                                    <div>PVC成形</div>
                                    <div>ゴム成形</div>
                                </div>
                            </div>
                        <div>
                        <?php
                                include get_template_directory() . '/custom/buttontype1.php';
                                ?>
                        </div>
                        <div class="blue-block"></div>
                    </div>
                    <div class="img-container ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Example Image" class="product-image">
                    </div>
            
                </div>
             <!-- card-one -->
          
          
            </div>
           
        </div>
    </div>
<!-- our products -->

<!-- products-tag  -->
<div class="p-slider-wrapper ">
<?php
    global $title;
    global $caption;
    global $bgColor;
    $title = "OUR PRODUCTS";
    $caption = "当社のサービス";
    $bgColor = 'white';
            include get_template_directory() . '/custom/title.php';
    ?>
    <div class="p-slider-container">
        <div class="tags-container">
            <div>3Dプリンター</div>
            <div>樹脂</div>
            <div>金属</div>
            <div>その他</div>
        </div>
        <div class="tags-img-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/print1.png" alt="Example Image" class="tags-img ">
        <div class="box-1"></div>
        <div class="box-2"></div>
        <div></div>
        </div>
        <div class="tags-text-wrap">
            <div class="slider-title">3Dプリンター</div>
            <div class="tags-subtitle">FDM (Fused Deposition Modeling) technology</div>
            <div class="slider-text-container "><p class="body_content">
            これは 3D プリンターで、おそらく FDM (熱溶解積層法) 技術を利用しています。熱可塑性フィラメントを加熱し、層ごとに押し出して 3D オブジェクトを作成します。プリンターに表示されるオブジェクトは、柔軟なフィラメントまたは硬いフィラメントで作られた複雑なデザインのようです。

            このタイプのプリンターは、汎用性とコスト効率が高いため、プロトタイピング、教育、趣味の用途でよく使用されます。PLA、ABS、TPU などの材料を扱うことができます。
</p>
            </div>
        </div>
    </div>
</div>
<!-- products-tag  -->

<!-- manufacture base -->
<div class="service-wrapper">
    <?php
    global $title;
    global $caption;
    global $bgColor;
    $title = "MANUFACUTRING BASE";
    $caption = "製造拠点";
    $bgColor = 'black';
            include get_template_directory() . '/custom/title.php';
    ?>
    <div class="service-container">
        <div class="service-inner-container">
            <div class="manuf_parent_box">
                <div class="manuf_layer1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/img4.png" alt="Example Image" class="manuf_img">
                </div>
              
                <div class="manuf_layer2"></div>
            </div>
            <div class="service-rg-container">
                <div class="service-rg-txt">
                    <div class="sub_title_a">試作型/量産型</div>
                    <div class="sub_txt">
                    ウェブサイトでは、成形と 3D 印刷技術に特化した強力な製造基盤を紹介しています。試作、サンプル金型の作成、量産にわたる業務により、同社は出力の精度と信頼性を確保しています。主な製造プロセスは次のとおりです。
                    </div>
                    <div>
                        <div class="manuf_list_text">
                            <span>1. </span>
                            <p class="title_bold"><span>3D 印刷技術</span> - プロトタイプや複雑なデザインを作成するための高度なステレオリソグラフィー、FDM 印刷、粉末ベースの印刷。</p>
                        </div>
                        <div class="manuf_list_text">
                            <span>2. </span>
                            <p class="title_bold"><span>材料の専門知識</span> - プラスチック、樹脂、シリコン、金属など、さまざまな材料を扱うことができ、さまざまな顧客の要求に対応できます。</p>
                        </div>
                        <div class="manuf_list_text">
                            <span>3. </span>
                            <p class="title_bold"><span>金型製造</span> - 最先端の設備を使用してサンプル金型と製造金型を作成し、耐久性とコスト効率を確保します。</p>
                        </div>
                        <div>
                        拠点は QCD 原則 (品質、コスト、納期) を重視しているため、顧客のニーズに効率的に対応できる優れた製品とサービスが保証されます。
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div>
</div>
</div>
</div>
<!-- manufacture base -->

<!-- QCD -->
<div class="spreator"></div>
<div class="quality-wrapper">
<div class="overlay">
    <div class="quality-title">Quality, Cost, Delivery: Excellence in Every Step .</br>Your Trusted Partner for Precision Manufacturing</div>
        <div class="quality-card-container">
                <!-- QCD -->
                    <div class="parent-box">
                        <div class="layer1">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/mark.png" alt="Example Image" class="product-image">
                            </div>
                            <div class="quality-text-wrapper">
                                <div class="card_title">品質</div>
                                <div class="quality-text">
                                    <span>1.同社は、高度な 3D 印刷技術と、射出成形、ブロー成形、樹脂ベースの製造などの高精度成形プロセスを採用しています。</span>
                                    <span>2.すべての製品は厳格な検査を受け、国際基準を満たす最高品質を確保しています。</span>
                                  </div>
                            </div>
                          
                        </div>
                        <div class="layer2"></div>
                    </div>
                  <!-- QCD -->
                           <!-- QCD -->
                           <div class="parent-box">
                        <div class="layer1">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/cost.png" alt="Example Image" class="product-image">
                            </div>
                            <div class="quality-text-wrapper">
                                <div class="card_title">料金</div>
                                <div class="quality-text">
                                    <span>1.生産工程の最適化、カスタム金型の提供、最先端の技術の活用により、品質を損なうことなくコスト効率の高いソリューションを提供します。</span>
                                    <span>2.3Dプリンターによる小規模な試作により、プロトタイプの費用も最小限に抑えられます。</span>
                                  </div>
                            </div>
                          
                        </div>
                        <div class="layer2"></div>
                    </div>
                  <!-- QCD -->
                           <!-- QCD -->
                           <div class="parent-box">
                        <div class="layer1">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/delivery.png" alt="Example Image" class="product-image">
                            </div>
                            <div class="quality-text-wrapper">
                                <div class="card_title">配達</div>
                                <div class="quality-text">
                                    <span>1.同社は、サンプル金型の社内製造やパートナーとの連携による量産など、生産の合理化により納期厳守を実現し、迅速かつ確実に製品を顧客に届けています。。</span>
                                  </div>
                            </div>
                          
                        </div>
                        <div class="layer2"></div>
                    </div>
                  <!-- QCD -->
        </div>
</div>
    </div>
<!-- QCD -->

<!-- quality-check -->
<div class="check-list-main">
    <div>
        <?php
        global $title;
        $title = "製品の品質チェック体制";
                include get_template_directory() . '/custom/subTitle.php';
        ?>
    </div>
    <div class="check-list-wrapper">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/check.png" alt="Example Image" class="check-img">
        </div>
        <div class="check-list-container">
            <div class="list-wrap">
                <div>
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/check_icon.png" alt="Example Image" class="prowduct-image">
                </div>
                <div class="body_content">高度な検査 - 3D スキャンと自動化システムにより欠陥を検出し、正確な寸法を確保します。</div>
            </div>
            <div class="list-wrap">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/check_icon.png" alt="Example Image" class="prowduct-image">
                </div>
                <div >高度な検査 - 3D スキャンと自動化システムにより欠陥を検出し、正確な寸法を確保します。</div>
            </div>
            <div class="list-wrap">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/check_icon.png" alt="Example Image" class="prowduct-image">
                </div>
                <div class="body_content">高度な検査 - 3D スキャンと自動化システムにより欠陥を検出し、正確な寸法を確保します。</div>
            </div>
            <div class="list-wrap">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/check_icon.png" alt="Example Image" class="prowduct-image">
                </div>
                <div class="body_content">高度な検査 - 3D スキャンと自動化システムにより欠陥を検出し、正確な寸法を確保します。</div>
            </div>
        </div>
</div>
</div>
</div>
<!-- quality-check -->
<div class="spreator"></div>
<!-- customer feedback -->
<div class="custom-wrapper">
    <div class="custom-lf-wrapper"></div>
    <div class="custom-center-wrapper">
            <div class="custom-vector-wrapper">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/vector1.png" alt="Example Image" class="vector-img">
                </div>
                <div class="sub_title_a">お客様の声！</div>
            </div>
            <!-- three-blocks -->
            <div class="custom-txt-container">
                <div class="custom-block" id="test1">
                    <div class="circle-title">
                        <span>A</span>
                    </div>
                    <div class="custom-inner-txt">
                        私たちは、彼らの細部へのこだわりと仕事の質に感銘を受けました。設計から納品まで、すべてのステップがプロフェッショナルに処理され、私たちの要件が完璧に満たされました。
                    </div>
                </div>
                <div class="custom-block">
                <div class="circle-title">
                        <span>A</span>
                    </div>
                    <div class="custom-inner-txt">
                    私たちは、彼らの細部へのこだわりと仕事の質に感銘を受けました。設計から納品まで、すべてのステップがプロフェッショナルに処理され、私たちの要件が完璧に満たされました。
                    </div>
                </div>
                <div class="custom-block" id="test1">
                <div class="circle-title">
                        <span>A</span>
                    </div>
                    <div class="custom-inner-txt">
                        私たちは、彼らの細部へのこだわりと仕事の質に感銘を受けました。設計から納品まで、すべてのステップがプロフェッショナルに処理され、私たちの要件が完璧に満たされました。
                    </div>
                </div>
            </div>
            <!-- three-blocks -->
    </div>
    <div class="custom-rg-wrapper"></div>
</div>
<!-- customer feedback -->
<div class="spreator"></div>
<!-- <p>“Beyond Borders: Crafting Excellence Through Japan-China Collaboration”</P> -->


<div class="spreator"></div>
<!-- News -->
    <div class="news-wrapper">
        <div>
            <?php
            global $title;
            $title = "NEWS";
                    include get_template_directory() . '/custom/subTitle.php';
            ?>
        </div>
         <div class="news-list-wrapper">
            <!-- news block -->
            <div class="new-list-inner">
                <div class="new-list-container">
                        <div class="news-txt-wrapper">
                            <div class="news-title">リアルタイム監視</div>
                            <div class="news-date">15.1.2025 WED</div>
                            <div class="body_content">リアルタイム監視ダッシュボードには検査ステータスが表示され、顧客に透明性と追跡可能性を提供します。
                                品質レポートが生成され、発見事項と承認段階が文書化さ.....</div>
                        </div>
                        <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/arrow_right.png" alt="Example Image" class="rg-arrow">
                        </div>
                 </div>
                <div class="news-line"></div>
            </div>
               <!-- news block -->
               <!-- news block -->
            <div class="new-list-inner">
                <div class="new-list-container">
                        <div class="news-txt-wrapper">
                            <div class="news-title">リアルタイム監視</div>
                            <div class="news-date">15.1.2025 WED</div>
                            <div class="body_content">リアルタイム監視ダッシュボードには検査ステータスが表示され、顧客に透明性と追跡可能性を提供します。
                                品質レポートが生成され、発見事項と承認段階が文書化さ.....</div>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/arrow_right.png" alt="Example Image" class="rg-arrow">
                        </div>
                 </div>
                <div class="news-line"></div>
            </div>
               <!-- news block -->
               <!-- news block -->
            <div class="new-list-inner">
                <div class="new-list-container">
                        <div class="news-txt-wrapper">
                            <div class="news-title">リアルタイム監視</div>
                            <div class="news-date">15.1.2025 WED</div>
                            <div class="body_content">リアルタイム監視ダッシュボードには検査ステータスが表示され、顧客に透明性と追跡可能性を提供します。
                                品質レポートが生成され、発見事項と承認段階が文書化さ.....</div>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/arrow_right.png" alt="Example Image" class="rg-arrow">
                        </div>
                 </div>
                <div class="news-line"></div>
            </div>
                <!-- news block -->
                <!-- news block -->
            <div class="new-list-inner">
                <div class="new-list-container">
                        <div class="news-txt-wrapper">
                            <div class="news-title">リアルタイム監視</div>
                            <div class="news-date">15.1.2025 WED</div>
                            <div class="body_content">リアルタイム監視ダッシュボードには検査ステータスが表示され、顧客に透明性と追跡可能性を提供します。
                                品質レポートが生成され、発見事項と承認段階が文書化さ.....</div>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/arrow_right.png" alt="Example Image" class="rg-arrow">
                        </div>
                 </div>
                <div class="news-line"></div>
            </div>
                <!-- news block -->
        </div>
    </div>
<!-- News -->
    <div class="spreator"></div>
<!-- COLLABORATION -->
    <div>
        <?php
        global $title;
        global $caption;
        global $bgColor;
        $title = "OUR COLLABORATION";
        $caption = "BRANDS";
        $bgColor = 'black';
                include get_template_directory() . '/custom/title.php';
        ?>
        <div class="brands-wrapper">
            <!-- brands-logo-block -->
            <div class="brands-inner-wrapper">
                <div class="brands-img-warp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo1.png" alt="Example Image" class="brands-img">
                </div>
                <div class="brands-img-warp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo4.png" alt="Example Image" class="brands-img">
                </div>
                <div class="brands-img-warp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo1.png" alt="Example Image" class="brands-img">
                </div>
                <div class="brands-img-warp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo4.png" alt="Example Image" class="brands-img">
                </div>
            </div>
              <!-- brands-logo-block -->
              
    </div>
<!-- COLLABORATION -->


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <!-- <h2><?php the_title(); ?></h2>
    <div><?php the_content(); ?></div> -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>
