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
global $url;
$title = "ABOUT US";
$img = "私たちについて";
$bgColor = '#fff';
$url = "/assets/images/banner/manufacturebanner.png";
header('Content-Type: image/jpeg');
include get_template_directory() . '/custom/pagesBanner.php';
?>
<!-- my company -->
<div class="my-company-wrapper">
<div>
    <?php
            global $title;
            global $bgColor;
            $bgColor ="#000000";
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
      			<td>JX未来株式会社(JX FUCTURE CO.LD)</td>
      		</tr>
              <tr>
      			<th>代表取締役</th>
      			<td>林 錦土　(中国ﾒｰｶｰの代表取締役及び取締役)</td>
      		</tr>
      		<tr>
      			<th>制定日</th>
      			<td>2024/5/28</td>
      		</tr>
      		<!-- <tr>
      			<th>本社</th>
				<td>東京都大田区大森西-8448</td>
      		</tr> -->
      		<tr>
      			<th>資本金</th>
      			<td>500万円</td>
      		</tr>
              <tr>
      			<th>所在地 </th>
      			<td>本社　〒143-0015、東京部大田区大森西7丁目8番17号、ロン。リッシュ102号 長野支店　〒396-0015、長野県伊那市中央5020-1、セレーノ 伊那1 203号</td>
      		</tr>
              <tr>
      			<th>TEL</th>
      			<td>03-6424-8053,080-2381-4704</td>
      		</tr>
              <tr>
      			<th>FAX</th>
      			<td>03-6524-8313</td>
      		</tr>
              <tr>
      			<th>E-MAIL</th>
      			<td>info@jx-f.jp、hein-hk@jx.jp</td>
      		</tr>
      	</tbody>
      </table>

        </div>
            <div class="water_mark">
                <div class="water_mark_blur"></div>
                <div class="blur_txt">JX未来株式会社</div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/info1.png" alt="Example Image" class="blur_1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/info2.png" alt="Example Image" class="blur_2">
            </div>
    </div>
</div>
<div class="info_spreator"></div>
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
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/intro.png" alt="Example Image" class="intro_img"> -->
            </div>
        </div>
       
    </div>
</div>
<!-- intro -->


<!-- slider -->
<div class="news-wrapper_">
        <div>
            <?php
            global $title;
            global $bgColor;
            $bgColor ="#000000";
            $title = "NEWS";
                    include get_template_directory() . '/custom/subTitle.php';
            ?>
        </div>
        
        <div>
            <!-- news-blocks -->
            <div class="new_blocks">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/金属切削品、材料：鉄+塗装.jpg" alt="Image 8" class="news_image">
                </div>
                <div class="news_txt_wrap">
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
                <div class="news_txt_wrap">
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
                <div class="news_txt_wrap">
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
                <div class="news_txt_wrap">
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
        global $bgColor;
        $bgColor ="#000000";
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
         <div class="news_txt_wrap">
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
        <div class="news_txt_wrap">
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
        <div class="news_txt_wrap">
            <p class="video_title">リアルタイム監視<p>
            <p class="video_content">リアルタイム監視ダッシュボードには検査ステータスが表示され、顧客に透明性と追跡可能性を提供します。
                品質レポートが生成され、発見事項と承認段階が文書化さ.....<p>
        </div>
    </div>
        <!-- video block -->
</div>
<!-- video -->
<!-- map -->
    <div class="map-wrapper">
        <div class="map-text-wrap">
            <div>
            <?php
            global $title;
            global $bgColor;
            $bgColor ="#000000";
            $title = "アクセス";
                    include get_template_directory() . '/custom/subTitle.php';
            ?>
            </div>
            <div>
                - 本社　〒143-0015、東京部大田区大森西7丁目8番17号
            </div>
            <div>
                - 本社　〒143-0015、東京部大田区大森西7丁目8番17号
            </div>
            <div>
                - ロン。リッシュ102号 長野支店　〒396-0015
            </div>
            <div>
                - 長野県伊那市中央5020-1、セレーノ 伊那1 203号
            </div>
        </div>
        <div  class="responsive-map-container">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4152.984684625595!2d139.72506098386017!3d35.56542146251121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601860458f0c5aab%3A0x4e11595c4bc6016f!2s7%20Chome%20Omorinishi%2C%20Ota%20City%2C%20Tokyo%20143-0015!5e0!3m2!1sen!2sjp!4v1740958492537!5m2!1sen!2sjp"  width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
<!-- map -->
<div class="spreator"></div>
<?php get_footer(); ?>
