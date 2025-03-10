<?php

/**
 * Template Name: page-products
 */
get_header(); ?>
<!-- main-banner --> <?php
global $title;
global $caption;
global $bgColor;
global $url;
$title = "OUR SERVICES";
$img = "当社のサービス";
$bgColor = '#fff';
$url = "/assets/images/banner/footer.jpg";
include get_template_directory() . '/custom/pagesBanner.php';
?>
<!-- metal work -->
<div class="metal_work_wrapper">
    <!-- title -->
    <div class="products_title_wrap">
        <div> <?php
      global $title;
      global $bgColor;
      $bgColor ="#000000";
      $title = "試作金型（簡易金型）/量産金型";
      include get_template_directory() . '/custom/subTitle.php';
      ?> </div>
        <!-- <div class="side_title"> 3D 印刷テクノロジー - プロトタイプや複雑なデザインを作成するための高度なステレオリソグラフィー、FDM 印刷、粉末ベースの印刷。 </div> -->
    </div>
    <div class="products_details">
        </div>
        <div class="list_wrap">
            <div class="others_list_wrap">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                    <div class="others_title"> <?php
                    include get_template_directory() . '/custom/subBlueLine.php';
                    ?>試作金型（簡易金型）</div>
                    <div class="p_description"> 
                            調整や改造が迅速に行えること等があります。
                            ご注文からお届けまで工期15日～。＃P20金型製のカセット簡易金型を用いて圧倒的な速さで射出成形品を作り出しています。
                            成形実績の多くは自動車の試作部品で、コネクター・電装部品・エアコンパネル・ステアリング・充電器部品・クリップなど様々です。
                            もちろん、速さだけでなく品質と柔軟な対応にも自信があります。
                            （保証ショット数：１万個ぐらいまでは試作金型で可能です。）
                            成形機：10ton~1,300tonまで１月/40型ぐらい改造しております。
                    </div>
                </div>
            </div>

            <div class="others_list_wrap">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                    <div class="others_title"> <?php
                    include get_template_directory() . '/custom/subBlueLine.php';
                    ?> 量産金型 </div>
                    <div class="p_description">
                        中国工場生産と国内に生産方法で対応しております。
                        国内に成形、金型パートナーと連携し国内生産、金型仕様変更やメンテナンス対応も出来ます。
                        （射出成形、インサート金型、２色成形、コンプレッション成形
                        成形機：10ton~1,300ton
                    </div>
                </div>
            </div>

        </div>
        <!-- <div class="products_btn_">
      <?php
      include get_template_directory() . '/custom/buttontype1.php';
      ?>
    </div> -->
    </div>
    <!-- title -->
</div>
<!-- metal work -->
<div class="products_list_wrapper">
    <!-- title -->
    <div class="products_title_wrap">
        <div> <?php
      global $title;
      global $bgColor;
      $bgColor ="#000000";
      $title = "3D PRINTING";
      include get_template_directory() . '/custom/subTitle.php';
      ?> </div>
        <!-- <div class="side_title"> 3D 印刷テクノロジー - プロトタイプや複雑なデザインを作成するための高度なステレオリソグラフィー、FDM 印刷、粉末ベースの印刷。 </div> -->
    </div>
    <div class="products_details">
        <!-- <div class="image_layout">
            <div class="layer_0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p1.png" alt="Example Image" class="img_ly1" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Example Image" class="img_ly2" />
            </div>
        </div> -->
        <div class="list_wrap">
            <div class="others_list_wrap">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                        <div class="others_title"> <?php
                        include get_template_directory() . '/custom/subBlueLine.php';
                            ?> 光造形とは </div>
                        <div class="p_description"> 説明: 紫外線レーザーなどの光で感光性樹脂を固め、立体的なモデルを作成する3Dプリンターの造形方式です。 対応可能な材料:ABSライク樹脂、PPライク樹脂が一般的、PCライク透明度の高い樹脂﻿,ゴムやエラストマーなど 。 </div>
                </div>
     
            </div>

            <div class="others_list_wrap">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                    <div class="others_title"> <?php
                    include get_template_directory() . '/custom/subBlueLine.php';
                    ?> 光造形の特徴 </div>
                    <div class="p_description"> 説明: 透明度の高い材料を使用できるため、可視化サンプルや展示用モック、デザインモックなどに適している﻿ 耐久性や耐熱性に優れた樹脂、弾性のあるゴムやエラストマーを再現したようなゴムライクなど、さまざまな材料が使用可能﻿ 300度の熱に耐えられる耐熱性樹脂やUL94 V0規格の難燃性樹脂、耐候性樹脂など、スーパーエンプラに匹敵する材料も登場している﻿ 。 </div>
                </div>
            </div>

            <div class="others_list_wrap">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                <div class="others_title"> <?php
                         include get_template_directory() . '/custom/subBlueLine.php';
                        ?> FDM造形とは </div>
                        <div class="p_description"> 説明: Fused Deposition Modelingの略称で、日本語では熱溶融積層(方式）と訳されます。 FDM方式の3Dプリンターは、材料となる熱可塑性プラスチックなどを高温で熱して液状に溶かし、それを一筆書きのような要領で、ノズルから押し出しながら成形を行い、立体の造形物を製作します。 対応可能な材料:ABS樹脂(ABS-M30、ABS-M30i、ABS-ESD7など)、ポリカーボネート(PC-ABSなど)、PLA(ポリ乳酸)樹脂、ナイロン、カーボンファイバー入り材料、ULTEM(ポリエーテルイミド)、ASA、TPU 92A、PC、PC-ISOなど。 </div>
                        </div>
                    </div>
            
            <div class="others_list_wrap">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                <div class="others_title"> <?php
          include get_template_directory() . '/custom/subBlueLine.php';
          ?> FDM造形の特徴 </div>
                <div class="p_description"> 説明: 実製品と同じ工業用樹脂素材を使用できるため、機械的・熱的・化学的に実製品レベルの物性を持つ造形パーツが作成できる﻿ 試作だけでなく実用品やパーツの製作にも活用できる﻿ 耐候性や汎用性、生体適合性、静電気拡散性、耐薬品性、柔軟性、衝撃吸収、高靭性、低摩擦性、安価さ、耐熱性、滅菌可能性などの特徴がある﻿ 。 </div>
                </div>
            </div>
            
        </div>
        <!-- <div class="products_btn_">
      <?php
      include get_template_directory() . '/custom/buttontype1.php';
      ?>
    </div> -->
    </div>
    <!-- title -->
</div>
<!-- products list -->
<div class="spreator"></div>
<!-- Resin -->
<div class="resin_wrapper">
<div class="resin_inner"> <?php
      global $title;
      global $bgColor;
      $title = "Resin ( 樹脂 )";
      $bgColor ='#ffffff';
      include get_template_directory() . '/custom/subTitle.php';
      ?> </div>
    <!-- <div>
        <div>Resin</div>
        <span>樹脂</span>
    </div> -->
    <div class="carousel">
        <div class="list">
            <div class="item" style="
                    background-image: url(https://images.pexels.com/photos/552785/pexels-photo-552785.jpeg);
                ">
                <div class="content">
                    <div class="title">射出成形</div>
                    <!-- <div class="name"> 溶融樹脂をカスタム設計された金型に注入して固体物体を作成するプロセス。 </div> -->
                    <!-- <div class="des">
            説明: 選択的レーザー焼結法 (SLS) などの粉末ベースの印刷では、レーザーを使用して粉末材料 (プラスチック樹脂は溶融するまで加熱され、高圧下で金型に注入されます。材料は冷却されて固まり、金型の形状になります。
            例: 自動車部品、電子機器のケース、プラスチック製のおもちゃ。
          </div> -->
                </div>
            </div>
            <div class="item" style="
                    background-image: url(https://images.pexels.com/photos/17804524/pexels-photo-17804524/free-photo-of-barren-rocky-mountains.jpeg);
                ">
                <div class="content">
                    <div class="title">RUGGED ROCKS</div>
                    <div class="name">Rocky</div>
                    <!-- <div class="des">Explore the rugged beauty of barren rocky mountains.
            A
            testament to nature's raw power.</div> -->
                </div>
            </div>
            <div class="item" style="
                    background-image: url(https://images.pexels.com/photos/6439041/pexels-photo-6439041.jpeg);
                ">
                <div class="content">
                    <div class="title">FOREST PATHWAY</div>
                    <div class="name">Forest</div>
                    <!-- <div class="des">A peaceful trail through dense green forests. Perfect
            for
            reconnecting with nature.</div> -->
                </div>
            </div>
            <div class="item" style="
                    background-image: url(https://images.pexels.com/photos/2832061/pexels-photo-2832061.jpeg);
                ">
                <div class="content">
                    <div class="title">COLORFUL MEADOW</div>
                    <div class="name">Meadow</div>
                    <!-- <div class="des">A colorful meadow filled with butterflies and
            blooming
            flowers. Nature at its best.</div> -->
                </div>
            </div>
            <div class="item" style="
                    background-image: url(https://images.pexels.com/photos/552784/pexels-photo-552784.jpeg);
                ">
                <div class="content">
                    <div class="title">SERENE LAKE</div>
                    <div class="name">Lake</div>
                    <!-- <div class="des">A calm and serene lake surrounded by towering trees
            and
            mountains. A perfect escape.</div> -->
                </div>
            </div>
            <div class="item" style="
                    background-image: url(https://images.pexels.com/photos/18536296/pexels-photo-18536296/free-photo-of-mountain-peaks-over-clouds.jpeg);
                ">
                <div class="content">
                    <div class="title">PEAKS IN THE CLOUDS</div>
                    <div class="name">Clouds</div>
                </div>
            </div>
            <div class="item" style="
                    background-image: url(https://images.pexels.com/photos/7616134/pexels-photo-7616134.jpeg);
                ">
                <div class="content">
                    <div class="title">RIVERBANK PARADISE</div>
                    <div class="name">Riverbank</div>
                </div>
            </div>
            <div class="item" style="
                    background-image: url(https://images.pexels.com/photos/20641721/pexels-photo-20641721/free-photo-of-barren-mountains-peaks-under-clouds.jpeg);
                ">
                <div class="content">
                    <div class="title">MYSTIC RIDGES</div>
                    <div class="name">Ridges</div>
                </div>
            </div>
            <!-- <div class="item" style="
                    background-image: url(https://images.pexels.com/photos/17977245/pexels-photo-17977245/free-photo-of-barren-mountain-peaks.jpeg);
                ">
                <div class="content">
                    <div class="title">GOLDEN CLIFFS</div>
                    <div class="name">Cliffs</div>
                </div>
            </div>
            <div class="item" style="
                    background-image: url(https://images.pexels.com/photos/2073873/pexels-photo-2073873.jpeg);
                ">
                <div class="content">
                    <div class="title">PEACEFUL VALLEY</div>
                    <div class="name">Valley</div>
                </div>
            </div> -->
        </div>
        <!--next prev button-->
        <div class="arrows">
            <div class="btn-container">
                <button class="prev">
                    <</button>
                        <button class="next">></button>
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
        <div> <?php
      global $title;
      global $bgColor;
      $bgColor ="#000000";
      $title = "METAL WORK(金属)";
      include get_template_directory() . '/custom/subTitle.php';
      ?> </div>
        <!-- <div class="side_title"> 3D 印刷テクノロジー - プロトタイプや複雑なデザインを作成するための高度なステレオリソグラフィー、FDM 印刷、粉末ベースの印刷。 </div> -->
    </div>
    <div class="products_details">
        </div>
        <div class="list_wrap">
            <div class="others_list_wrap">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                    <div class="others_title"> <?php
                    include get_template_directory() . '/custom/subBlueLine.php';
                    ?> DLP(Digital Light Processing)造形は </div>
                    <div class="p_description"> 説明: 3Dプリンターの光造形方式の1つ。 この方式では、デジタルミラーデバイスという特殊なチップを使って、光を特定の部分に向けて樹脂を硬化させる。 DLPを使用した3Dプリンターは、高精度なプリントが可能で、細かいディテールを持つオブジェクトの製造に適している。 対応可能な材料:エポキシ系樹脂のABSライク樹脂やPPライク樹脂、アクリル系のレジンなど。 </div>
                </div>
            </div>

            <div class="others_list_wrap">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                    <div class="others_title"> <?php
                    include get_template_directory() . '/custom/subBlueLine.php';
                    ?> DLP(Digital Light Processing)造形の特徴 </div>
                    <div class="p_description"> 説明: 造形スピードが速い、造形精度が高い、滑らかな仕上がりになる、透明度の高い造形物が可能、大型で高精度な造形物が可能、 レーザーやガルバノミラーを必要としないため、SLA方式よりも設備の導入コストが低く抑えられる。 </div>
                </div>
            </div>

            <!-- <div class="others_list_wrap">
        <div class="others_title">
          <?php
          include get_template_directory() . '/custom/subBlueLine.php';
          ?>
          FDM造形とは</div>
        <div class="p_description">説明: 
        Fused Deposition Modelingの略称で、日本語では熱溶融積層(方式)と訳されます。
        FDM方式の3Dプリンターは、材料となる熱可塑性プラスチックなどを高温で熱して液状に溶かし、それを一筆書きのような要領で、ノズルから押し出しながら成形を行い、立体の造形物を製作します。
      対応可能な材料:ABS樹脂(ABS-M30、ABS-M30i、ABS-ESD7など)、ポリカーボネート(PC-ABSなど)、PLA(ポリ乳酸)樹脂、ナイロン、カーボンファイバー入り材料、ULTEM(ポリエーテルイミド)、ASA、TPU 92A、PC、PC-ISOなど。</div>
      </div> -->
            <!-- <div class="others_list_wrap">
        <div class="others_title">
          <?php
          include get_template_directory() . '/custom/subBlueLine.php';
          ?>
          FDM造形の特徴</div>
        <div class="p_description">説明: 
        実製品と同じ工業用樹脂素材を使用できるため、機械的・熱的・化学的に実製品レベルの物性を持つ造形パーツが作成できる﻿
        試作だけでなく実用品やパーツの製作にも活用できる﻿
        耐候性や汎用性、生体適合性、静電気拡散性、耐薬品性、柔軟性、衝撃吸収、高靭性、低摩擦性、安価さ、耐熱性、滅菌可能性などの特徴がある﻿
        。</div>
      </div> -->
        </div>
        <!-- <div class="products_btn_">
      <?php
      include get_template_directory() . '/custom/buttontype1.php';
      ?>
    </div> -->
    </div>
    <!-- title -->
</div>
<!-- metal work -->
<!-- others -->
<div class="others_wrapper">
    <div> <?php
    global $title;
    global $bgColor;
    $bgColor ="#000000";
    $title = "その他";
    include get_template_directory() . '/custom/subTitle.php';
    ?> </div>
    <div class="others_container">
        <!-- text-box -->
        <div class="text_container">
            <div class="others_title">基板ボックス設計開発</div>
            <div class="others_content"> お客様のご依頼条件でゼロから設計開発し試作品（切削/３Dプリンター）作成→小ロット（試作型）→量産までサポートしております。技術設計専門グループでサポートしています。 </div>
            <div class="text_blur"></div>
        </div>
         <!-- text-box -->
                 <!-- text-box -->
        <div class="text_container">
            <div class="others_title">鞄開発</div>
            <div class="others_content"> お客様のご依頼条件で鞄をゼロから試作品作成量産までサポートしております。。 </div>
            <div class="text_blur"></div>
        </div>
         <!-- text-box -->
        <!-- text-box -->
        <div class="text_container">
            <div class="others_title">アクリルスタンド、アクリルキーホルダー</div>
            <div class="others_content"> 
            お客様のご依頼アニメのアクリルスタンド、アクリルキーホルダーを試作→量産までサポートしております。（量産品に良い品質を安く早くできるねとお客様から定評があります。。 </div>
            <div class="text_blur"></div>
        </div>
         <!-- text-box -->
        <!-- text-box -->
        <div class="text_container">
            <div class="others_title">フィギュア付きストラップ</div>
            <div class="others_content"> お客様のご依頼条件でゼロから設計開発し試作品作成→量産までサポートしております。量産の経験がありますし品質的にお客様から定評があります。 </div>
            <div class="text_blur"></div>
        </div>
         <!-- text-box -->
        <!-- text-box -->
        <div class="text_container">
            <div class="others_title">樹脂 エポキシ サメ ナイトライト </div>
            <div class="others_content">弊社の工場の開発品としていろいろなデザインで量産しておりますが、ご興味がございましたらご連絡ください。 </div>
            <div class="text_blur"></div>
        </div>
         <!-- text-box -->
                      <!-- text-box -->
        <div class="text_container">
            <div class="others_title">弊社の開発品</div>
            <div class="others_content">弊社内で設計して開発品も作成しておりますのでご興味がございましたらご連絡ください。</div>
            <div class="text_blur"></div>
        </div>
         <!-- text-box -->
    </div>
</div>
<div class="spreator"></div>
<!-- others -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/carousel.js"></script> <?php get_footer(); ?>