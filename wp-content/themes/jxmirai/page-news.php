<?php 
/**
 * Template Name: page-news
 */
get_header(); ?>
<!-- main-banner -->
<?php
   global $title;
   global $caption;
   global $bgColor;
   $title = "ABOUT US";
   $img = "私たちについて";
   $bgColor = '#fff';
   $url = "/assets/images/banner/newbanner.png";
include get_template_directory() . '/custom/pagesBanner.php';
?>
<!-- slider -->
 <div class="slider-wrapper">
  <button class="slider-btn prev">
    <span class="slider-arrow left">&#10094;</span> 
  </button>
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
  <button class="slider-btn next">
  <span class="slider-arrow right">&#10095;</span> 
  </button>
</div>

   
<div class="spreator"></div>
<!-- my company -->
<div class="my-company-wrapper">
<div>
    <?php
            global $title;
            $title = "COMPANY PROFILE";
            include get_template_directory() . '/custom/subTitle.php';
            ?>
        </div>
    <div class="my-com-wrapper">
        <div class="about_company">
        <table id="about_table" class="animation01 active">
      	<tbody>
      		<tr>
      			<th>会社名</th>
      			<td>JX未来株式会社(JXフューチャー株式会社)</td>
      		</tr>
      		<tr>
      			<th>制定日</th>
      			<td>2024年5月28日</td>
      		</tr>
      		<tr>
      			<th>本社</th>
				<td>東京都大田区大森西-8448</td>
      		</tr>
      		<tr>
      			<th>資本金</th>
      			<td>500万円</td>
      		</tr>
      		<tr>
      			<th>リーダーシップ</th>
      			<td>-</td>
      		</tr>
              <tr>
      			<th>代表取締役</th>
      			<td>林 錦士（ハヤシ キンシ）</td>
      		</tr>
              <tr>
      			<th>役割</th>
      			<td>中国メーカーと日本の顧客とのコラボレーションを監 督します。</td>
      		</tr>
      	</tbody>
      </table>

        </div>
            <div class="water_mark">
                <div class="water_mark_blur"></div>
                <div class="blur_txt">JX未来株式会社</div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/company1.png" alt="Example Image" class="blur_1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/company2.png" alt="Example Image" class="blur_2">
            </div>
    </div>
</div>
<div class="spreator"></div>
<div class="spreator"></div>
<div class="spreator"></div>
<!-- my company -->

<!-- intro -->
<div class="intro_wrapper">
    <div class="intro_container">
        <div class="intro_flex">
            <div>
                    <p class="intro_title">林 欣志 氏（日本人 CEO)</p>
                    <div class="intro_sub_title">
                    <?php
                        include get_template_directory() . '/custom/subBlueLine.php';
                        ?>
                        「国境のないものづくり：日本の職人技と中国のイノベーションを結集して世界へ」
                    </div>
                    <div class="intro_content">
                    当社の強みは、日本の精密工学と中国の製造規模を融合し、比類のない品質と革新性を提供することです。すべての金型と製品は、日本の職人の精神であるものづくりを反映しています。当社は、迅速な調整と現地サポートを確保するために、国内の日本サプライヤー（長野、千葉、愛知）とのパートナーシップを優先しています。私たちの目標は、標準に妥協することなく、日本で設計された製品を世界中で利用できるようにすることです。JXフューチャーは単なる会社ではなく、伝統と未来をつなぐ架け橋です。
                    </div>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/intro.png" alt="Example Image" class="intro_img">
            </div>
        </div>
       
    </div>
</div>
<!-- intro -->


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