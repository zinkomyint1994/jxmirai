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
<!-- four-image -->
<div class="pages-four">
    <div class="img_wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/3d.png" alt="Example Image" class="f_img" />
        <div class="f_content">
            <p>3Dプリンター</p>
            <span class="body_content">当社は、ステレオリソグラフィー (SLA)、FDM 印刷、...span >
        </div>
        <!-- <p class="f_icons">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/blue_arrow.png"
                alt="Example Image"
                class="blue_arrow"
            />
        </p> -->
    </div>
    <div class="img_wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/v1.png" alt="Example Image" class="f_img" />
        <div class="f_content">
            <p>3Dプリンター</p>
            <span class="body_content">当社は、ステレオリソグラフィー (SLA)、FDM 印刷、...span >
        </div>
        <!-- <p class="f_icons">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/blue_arrow.png"
                alt="Example Image"
                class="blue_arrow"
            />
        </p> -->
    </div>
    <div class="img_wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/v2.png" alt="Example Image" class="f_img" />
        <div class="f_content">
            <p>3Dプリンター</p>
            <span class="body_content">当社は、ステレオリソグラフィー (SLA)、FDM 印刷、...span >
        </div>
        <!-- <p class="f_icons">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/blue_arrow.png"
                alt="Example Image"
                class="blue_arrow"
            />
        </p> -->
    </div>
    <div class="img_wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/v3.png" alt="Example Image" class="f_img" />
        <div class="f_content">
            <p>3Dプリンター</p>
            <span class="body_content">当社は、ステレオリソグラフィー (SLA)、FDM 印刷、...span >
        </div>
        <!-- <p class="f_icons">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/blue_arrow.png"
                alt="Example Image"
                class="blue_arrow"
            />
        </p> -->
    </div>
</div>
<!-- four-image -->
<!-- products list -->
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
        <div class="side_title"> 3D 印刷テクノロジー - プロトタイプや複雑なデザインを作成するための高度なステレオリソグラフィー、FDM 印刷、粉末ベースの印刷。 </div>
    </div>
    <div class="products_details">
        <div class="image_layout">
            <div class="layer_0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p1.png" alt="Example Image" class="img_ly1" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Example Image" class="img_ly2" />
            </div>
        </div>
        <div class="list_wrap">
            <div class="others_list_wrap">
                <div class="others_title"> <?php
          include get_template_directory() . '/custom/subBlueLine.php';
          ?> 光造形とは </div>
                <div class="p_description"> 説明: 紫外線レーザーなどの光で感光性樹脂を固め、立体的なモデルを作成する3Dプリンターの造形方式です。 対応可能な材料:ABSライク樹脂、PPライク樹脂が一般的、PCライク透明度の高い樹脂﻿,ゴムやエラストマーなど 。 </div>
            </div>
            <div class="others_list_wrap">
                <div class="others_title"> <?php
          include get_template_directory() . '/custom/subBlueLine.php';
          ?> 光造形の特徴 </div>
                <div class="p_description"> 説明: 透明度の高い材料を使用できるため、可視化サンプルや展示用モック、デザインモックなどに適している﻿ 耐久性や耐熱性に優れた樹脂、弾性のあるゴムやエラストマーを再現したようなゴムライクなど、さまざまな材料が使用可能﻿ 300度の熱に耐えられる耐熱性樹脂やUL94 V0規格の難燃性樹脂、耐候性樹脂など、スーパーエンプラに匹敵する材料も登場している﻿ 。 </div>
            </div>
            <div class="others_list_wrap">
                <div class="others_title"> <?php
          include get_template_directory() . '/custom/subBlueLine.php';
          ?> FDM造形とは </div>
                <div class="p_description"> 説明: Fused Deposition Modelingの略称で、日本語では熱溶融積層(方式）と訳されます。 FDM方式の3Dプリンターは、材料となる熱可塑性プラスチックなどを高温で熱して液状に溶かし、それを一筆書きのような要領で、ノズルから押し出しながら成形を行い、立体の造形物を製作します。 対応可能な材料:ABS樹脂(ABS-M30、ABS-M30i、ABS-ESD7など)、ポリカーボネート(PC-ABSなど)、PLA(ポリ乳酸)樹脂、ナイロン、カーボンファイバー入り材料、ULTEM(ポリエーテルイミド)、ASA、TPU 92A、PC、PC-ISOなど。 </div>
            </div>
            <div class="others_list_wrap">
                <div class="others_title"> <?php
          include get_template_directory() . '/custom/subBlueLine.php';
          ?> FDM造形の特徴 </div>
                <div class="p_description"> 説明: 実製品と同じ工業用樹脂素材を使用できるため、機械的・熱的・化学的に実製品レベルの物性を持つ造形パーツが作成できる﻿ 試作だけでなく実用品やパーツの製作にも活用できる﻿ 耐候性や汎用性、生体適合性、静電気拡散性、耐薬品性、柔軟性、衝撃吸収、高靭性、低摩擦性、安価さ、耐熱性、滅菌可能性などの特徴がある﻿ 。 </div>
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
                    <div class="name"> 溶融樹脂をカスタム設計された金型に注入して固体物体を作成するプロセス。 </div>
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
      $title = "METAL WORK ( 金属 )";
      include get_template_directory() . '/custom/subTitle.php';
      ?> </div>
        <div class="side_title"> 3D 印刷テクノロジー - プロトタイプや複雑なデザインを作成するための高度なステレオリソグラフィー、FDM 印刷、粉末ベースの印刷。 </div>
    </div>
    <div class="products_details">
        <div class="image_layout">
            <div class="layer_0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p1.png" alt="Example Image" class="img_ly1" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/p2.png" alt="Example Image" class="img_ly2" />
            </div>
        </div>
        <div class="list_wrap">
            <div class="others_list_wrap">
                <div class="others_title"> <?php
          include get_template_directory() . '/custom/subBlueLine.php';
          ?> DLP(Digital Light Processing)造形は </div>
                <div class="p_description"> 説明: 3Dプリンターの光造形方式の1つ。 この方式では、デジタルミラーデバイスという特殊なチップを使って、光を特定の部分に向けて樹脂を硬化させる。 DLPを使用した3Dプリンターは、高精度なプリントが可能で、細かいディテールを持つオブジェクトの製造に適している。 対応可能な材料:エポキシ系樹脂のABSライク樹脂やPPライク樹脂、アクリル系のレジンなど。 </div>
            </div>
            <div class="others_list_wrap">
                <div class="others_title"> <?php
          include get_template_directory() . '/custom/subBlueLine.php';
          ?> DLP(Digital Light Processing)造形の特徴 </div>
                <div class="p_description"> 説明: 造形スピードが速い、造形精度が高い、滑らかな仕上がりになる、透明度の高い造形物が可能、大型で高精度な造形物が可能、 レーザーやガルバノミラーを必要としないため、SLA方式よりも設備の導入コストが低く抑えられる。 </div>
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
            <div class="others_title">金属造形とは、</div>
            <div class="others_content"> 金属を溶かして3Dプリントする技術で、金属の3Dプリンターとも呼ばれます。金属粉末を積み重ねて立体的な造形物を作る金属積層造形（Metal AM）とも呼ばれます 対応可能な材料: ステンレス鋼: SUS316L、アルミニウムなど </div>
            <div class="text_blur"></div>
        </div>
        <!-- text-box -->
        <!-- text-box -->
        <div class="text_container">
            <div class="others_title">金属造形の特徴</div>
            <div class="others_content"> 複雑な形状や内部の空洞・格子構造を造形できる、金型が不要で、設計変更が容易 製造時間（工期）が短縮できる、製品毎のトレサビリティが可能、様々な材料が選択できる 切削や鋳造などの製法に比べて複雑な形状の製品を作ることができる 試作品の製作に適している 軽量化が図れる </div>
            <div class="text_blur"></div>
        </div>
        <!-- text-box -->
        <!-- text-box -->
        <div class="text_container">
            <div class="others_title">樹脂切削加工とは</div>
            <div class="others_content"> 工具や刃物を用いて機械で樹脂を切ったり削ったりする加工方法です。 切削加工は金属を加工する方法として一般的には知られていますが、樹脂素材の加工にも用いられます。 金属と比べ樹脂は加熱すると膨張し、その後冷却すると縮みやすいといった特性があり、金属を切削加工するよりも難易度は高いです。 対応可能な材料:ABS+PC,ABS、PP(ポリプロピレン)、PE(ポリエチレン）,PC(ポリカーボネート)、POM(ジュラコン)、66ナイロン、PBT, PEEK(ピーイーキー)、PTFE(フッ素)、PI(ポリイミド)、PEI(ウルテム®)、PPSU、PET、紙ベークライト、超高分子量ポリエチレンなど﻿ 樹脂切削加工に用いられる素材には、 さまざまな材質とグレードが存在し、材料メーカーも複数ありコストと性能に差があります。そのため、樹脂切削加工品に求める機能とコストを両立させるためには、 最適な材質選定を行うことが大切です、インサート・アウトサートも対応可能です。普通の塗装やUV塗装も対応可能です。 ＊特にJX未来は樹脂切削加工にお客様からコスト、品質に定評があります。 </div>
            <div class="text_blur"></div>
        </div>
        <!-- text-box -->
        <!-- text-box -->
        <div class="text_container">
            <div class="others_title">真空注型とは、</div>
            <div class="others_content"> 金型を作らずシリコンの型を使って、真空下で液状の樹脂を流し込んで成形する加工方法です。﻿ 対応可能な材料: ABS、PP(ポリプロピレン)、PE(ポリエチレン）,PC(ポリカーボネート)、POM(ジュラコン)、66ナイロン、PBT, PEEK(ピーイーキー)、PTFE(フッ素)、PI(ポリイミド)、PEI(ウルテム®)、PPSU、PET、紙ベークライト、超高分子量ポリエチレン ゴム形など﻿ 【メリット】﻿ 金型に比べて安価で製作できる、納期が短縮できる 気泡が入りにくく、高精度な製品が成形できる インサート成形・アウトサートや一体成型も可能 </div>
            <div class="text_blur"></div>
        </div>
        <!-- text-box -->
        <!-- text-box -->
        <div class="text_container">
            <div class="others_title">金属切削加工とは、</div>
            <div class="others_content"> 金属切削加工とは、 金属を削ったり穴を開けたりして、目的の形状に加工する方法です。機械加工とも呼ばれ、金属加工の基本的な方法のひとつです 対応可能な材料：鉄鋼やアルミ、ステンレス、真鍮、チタン、インコネル、ハステロイなどの金属材料、非金属材料が加工できます 【メリット】﻿ 特にJX未来はアルミヒートシンク切削とかギアとか特注形状加工にお客様から定評があります。 処理：白アルマイト、カラーアルマイト、硬質アルマイト、アルミニウム化成処理、めっき、黒染め、など。。 </div>
            <div class="text_blur"></div>
        </div>
        <!-- text-box -->
        <!-- text-box -->
        <div class="text_container">
            <div class="others_title">板金とは、</div>
            <div class="others_content"> プレス機械に取り付けて、板状の材料を圧力を加えて変形させる金型です。金属やプラスチックなどの素材を、所定の形状に成型する加工方法で、 自動車や家電製品などの部品製造に広く利用されています。 対応可能な材料：銅、鉄鋼やステンレス 【メリット】 プレス成形 成形機: 25ton-250tonまで専門メーカー工場に協力しております。 </div>
            <div class="text_blur"></div>
        </div>
        <!-- text-box -->
        <div class="text_container">
            <div class="others_title">ダイキャスト（ダイカスト金型製造）とは、</div>
            <div class="others_content"> 溶かした金属を金型に流し込んで成型する鋳造法の一種で、金型製造も含まれます・ 【メリット】 プレス成形 成形機: 25ton-250tonまで専門メーカー工場に協力しております。 </div>
            <div class="text_blur"></div>
        </div>
         <!-- text-box -->
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