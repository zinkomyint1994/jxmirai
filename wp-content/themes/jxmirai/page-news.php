<?php 
/**
 * Template Name: Front Page news
 */
get_header(); ?>
<!-- main-banner -->
<?php
   global $title;
   global $caption;
   global $bgColor;
   $title = "OUR NEWS";
   $img = "ニュース";
   $bgColor = '#fff';
   $url = "/assets/images/banner/newbanner.png";
include get_template_directory() . '/custom/pagesBanner.php';
?>
<!-- slider -->
 <div class="slider-wrapper">
  <button class="slider-btn prev">←</button>
  <div class="slider">
    <div class="slider-track">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/v1.png" alt="Image 1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Image 2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/n1.png" alt="Image 3">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/v2.png" alt="Image 4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Image 5">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/v3.png" alt="Image 6">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Image 7">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/v1.png" alt="Image 8">
    </div>
  </div>
  <button class="slider-btn next">→</button>
</div>

<!-- slider -->
<div class="news-wrapper">
        <div>
            <?php
            global $title;
            $title = "NEWS";
                    include get_template_directory() . '/custom/subTitle.php';
            ?>
        </div>
        
        <div>
            <!-- news-blocks -->
            <div class="new_blocks">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/n1.png" alt="Image 8" class="news_image">
                </div>
                <div>
                    <div class="news_title">
                        <span>
                        <?php
                        include get_template_directory() . '/custom/subBlueLine.php';
                        ?>
                        </span>
                        <span>リアルタイム監視</span>
                    </div>
                    <p class="news_date">15.1.2025 WED</p>
                    <p class="news_content">
                    リアルタイム監視ダッシュボードには検査ステータスが表示され、顧客に透明性と追跡可能性を提供します。
                    品質レポートが生成され、発見事項と承認段階が文書化さ.....
                    </p>
                </div>
                <div class="left_arrow_">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/right_arrow.png" alt="Image 8" class="lf_arrow">
                </div>
            </div>
            <!-- news-blocks -->
                        <!-- news-blocks -->
                        <div class="new_blocks">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/n1.png" alt="Image 8" class="news_image">
                </div>
                <div>
                    <div class="news_title">
                        <span>
                        <?php
                        include get_template_directory() . '/custom/subBlueLine.php';
                        ?>
                        </span>
                        <span>リアルタイム監視</span>
                    </div>
                    <p class="news_date">15.1.2025 WED</p>
                    <p class="news_content">
                    リアルタイム監視ダッシュボードには検査ステータスが表示され、顧客に透明性と追跡可能性を提供します。
                    品質レポートが生成され、発見事項と承認段階が文書化さ.....
                    </p>
                </div>
                <div class="left_arrow_">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/right_arrow.png" alt="Image 8" class="lf_arrow">
                </div>
            </div>
            <!-- news-blocks -->
                        <!-- news-blocks -->
                        <div class="new_blocks">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/n1.png" alt="Image 8" class="news_image">
                </div>
                <div>
                    <div class="news_title">
                        <span>
                        <?php
                        include get_template_directory() . '/custom/subBlueLine.php';
                        ?>
                        </span>
                        <span>リアルタイム監視</span>
                    </div>
                    <p class="news_date">15.1.2025 WED</p>
                    <p class="news_content">
                    リアルタイム監視ダッシュボードには検査ステータスが表示され、顧客に透明性と追跡可能性を提供します。
                    品質レポートが生成され、発見事項と承認段階が文書化さ.....
                    </p>
                </div>
                <div class="left_arrow_">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/right_arrow.png" alt="Image 8" class="lf_arrow">
                </div>
            </div>
            <!-- news-blocks -->
                        <!-- news-blocks -->
                        <div class="new_blocks">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/n1.png" alt="Image 8" class="news_image">
                </div>
                <div>
                    <div class="news_title">
                        <span>
                        <?php
                        include get_template_directory() . '/custom/subBlueLine.php';
                        ?>
                        </span>
                        <span>リアルタイム監視</span>
                    </div>
                    <p class="news_date">15.1.2025 WED</p>
                    <p class="news_content">
                    リアルタイム監視ダッシュボードには検査ステータスが表示され、顧客に透明性と追跡可能性を提供します。
                    品質レポートが生成され、発見事項と承認段階が文書化さ.....
                    </p>
                </div>
                <div class="left_arrow_">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/right_arrow.png" alt="Image 8" class="lf_arrow">
                </div>
            </div>
            <!-- news-blocks -->
            
        </div>

</div>
<!-- news -->

<!-- video -->
<div class="video_wrapper">
    <div>
        <?php
        global $title;
        $title = "OUR PRODUCTION VIDEO";
                include get_template_directory() . '/custom/subTitle.php';
        ?>
    </div>
    <!-- video block -->
    <div class="video_container">
        <div class="video_img_wrap"> 
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/youtube.png" alt="Image 8" class="youtube">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/v1.png" alt="Image 8" class="video_image">
            <div class="video_blur"></div>
        </div>
        <div>
            <p class="video_title">リアルタイム監視<p>
            <p class="video_content">リアルタイム監視ダッシュボードには検査ステータスが表示され、顧客に透明性と追跡可能性を提供します。
                品質レポートが生成され、発見事項と承認段階が文書化さ.....<p>
        </div>
    </div>
        <!-- video block -->
        <div class="spreator"></div>
         <!-- video block -->
    <div class="video_container">
        <div class="video_img_wrap"> 
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/youtube.png" alt="Image 8" class="youtube">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/v2.png" alt="Image 8" class="video_image">
            <div class="video_blur"></div>
        </div>
        <div>
            <p class="video_title">リアルタイム監視<p>
            <p class="video_content">リアルタイム監視ダッシュボードには検査ステータスが表示され、顧客に透明性と追跡可能性を提供します。
                品質レポートが生成され、発見事項と承認段階が文書化さ.....<p>
        </div>
    </div>
        <!-- video block -->
    <div class="spreator"></div>
        <!-- video block -->
    <div class="video_container">
        <div class="video_img_wrap"> 
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/youtube.png" alt="Image 8" class="youtube">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/v3.png" alt="Image 8" class="video_image">
            <div class="video_blur"></div>
        </div>
        <div>
            <p class="video_title">リアルタイム監視<p>
            <p class="video_content">リアルタイム監視ダッシュボードには検査ステータスが表示され、顧客に透明性と追跡可能性を提供します。
                品質レポートが生成され、発見事項と承認段階が文書化さ.....<p>
        </div>
    </div>
        <!-- video block -->
</div>
<!-- video -->
<div class="spreator"></div>
<?php get_footer(); ?>