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
$title = "当社のサービス";
$img = "";
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/v2.png" alt="Example Image" class="img_one" />
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/ENGEL-VC-500-220-TECH-PRO-213172-2016-5.jpg" alt="Example Image" class="img_one" />
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/type/p1.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                        <div class="others_title"> <?php
                        include get_template_directory() . '/custom/subBlueLine.php';
                            ?> 光造形とは </div>
                        <div class="p_description">
                                 紫外線レーザーなどの光で感光性樹脂を固め、立体的なモデルを作成する3Dプリンターの造形方式です。
                                対応可能な材料：ABSライク樹脂、PPライク樹脂が一般的、PCライク透明度の高い樹脂﻿,ゴムやエラストマーなど
                                光造形の特徴
                                透明度の高い材料を使用できるため、可視化サンプルや展示用モック、デザインモックなどに適している﻿
                                耐久性や耐熱性に優れた樹脂、弾性のあるゴムやエラストマーを再現したようなゴムライクなど、さまざまな材料が使用可能﻿
                                300度の熱に耐えられる耐熱性樹脂やUL94 V0規格の難燃性樹脂、耐候性樹脂など、スーパーエンプラに匹敵する材料も登場している﻿

                        </div>
                </div>
     
            </div>

            <div class="others_list_wrap">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/picture6.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                    <div class="others_title"> <?php
                    include get_template_directory() . '/custom/subBlueLine.php';
                    ?> FDM造形とは</div>
                    <div class="p_description">Fused Deposition Modelingの略称で、日本語では熱溶融積層（方式）と訳されます。
                        FDM方式の3Dプリンターは、材料となる熱可塑性プラスチックなどを高温で熱して液状に溶かし、それを一筆書きのような要領で、ノズルから押し出しながら成形を行い、立体の造形物を製作します。
                        対応可能な材料：ABS樹脂（ABS-M30、ABS-M30i、ABS-ESD7など）、ポリカーボネート（PC-ABSなど）、PLA（ポリ乳酸）樹脂、ナイロン、カーボンファイバー入り材料、ULTEM（ポリエーテルイミド）、ASA、TPU 92A、PC、PC-ISOなど
                        FDM造形の特徴
                        実製品と同じ工業用樹脂素材を使用できるため、機械的・熱的・化学的に実製品レベルの物性を持つ造形パーツが作成できる﻿
                        試作だけでなく実用品やパーツの製作にも活用できる﻿
                        耐候性や汎用性、生体適合性、静電気拡散性、耐薬品性、柔軟性、衝撃吸収、高靭性、低摩擦性、安価さ、耐熱性、滅菌可能性などの特徴がある﻿
                        </div>
                </div>
            </div>

            <div class="others_list_wrap">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/type/p3.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                <div class="others_title"> <?php
                         include get_template_directory() . '/custom/subBlueLine.php';
                        ?> 粉末造形とは </div>
                        <div class="p_description">
                            粉末状の樹脂や金属材料にレーザーを照射することにより焼結させ、一層ずつ積層していく方法です。 他の方法と比べて、素材選択の自由度が高く、耐久性のある造形物を作成できるので最終製品としての実用がもっとも進んでいる造形方式です。
                            対応可能な材料：熱可塑性樹脂：ABS樹脂、ナイロン、PLA樹脂など
                            粉末造形の特徴
                            光造形と比べて幅広い材料を使用できる﻿
                            強度や耐久性、柔軟性を高めた造形を行うことができる﻿
                            自動車業界で多く利用されている﻿
                            最終製品としての実用がもっとも進んでいる造形方式﻿

                        </div>
                        </div>
                    </div>
            
            <div class="others_list_wrap">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/type/p4.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                <div class="others_title"> <?php
                include get_template_directory() . '/custom/subBlueLine.php';
                ?> UV硬化造形とは</div>
                <div class="p_description">
                    UV硬化造形とは、UV光を照射することで瞬時に硬化・定着するインクを使用する造形方式です。データをそのままプリンターに読み込ませ、版を製作することなく直接商品に印刷する方法として利用されています。﻿
                    対応可能な材料：ABSライク樹脂、PPライク樹脂、PEライク樹脂、ゴムライク樹脂、アクリル樹脂 透明度材
                    UV硬化の特徴
                    高生産性：硬化時間はたったの0.1~数秒なため、生産プロセスにかかる時間を大幅に短縮することができます。
                    低熱性：樹脂フィルムなど熱に弱い基材への照射が可能なため、変形や変質することなく硬化できます。
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
<!-- products list -->
<div class="spreator"></div>

<!-- Resin -->
<div class="metal_work_wrapper">
    <!-- title -->
    <div class="products_title_wrap">
        <div> <?php
      global $title;
      global $bgColor;
      $bgColor ="#000000";
      $title = "Resin (樹脂)";
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

    </div>
    <!-- title -->
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/type/m1.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                    <div class="others_title"> <?php
                    include get_template_directory() . '/custom/subBlueLine.php';
                    ?>DLP（Digital Light Processing）造形は</div>
                    <div class="p_description">
                    3Dプリンターの光造形方式の1つ。 
                    この方式では、デジタルミラーデバイスという特殊なチップを使って、光を特定の部分に向けて樹脂を硬化させる。
                    DLPを使用した3Dプリンターは、高精度なプリントが可能で、細かいディテールを持つオブジェクトの製造に適している。
                    対応可能な材料：エポキシ系樹脂のABSライク樹脂やPPライク樹脂、アクリル系のレジンなど。。
                    DLP（Digital Light Processing）造形の特徴
                    造形スピードが速い、造形精度が高い、滑らかな仕上がりになる、透明度の高い造形物が可能、大型で高精度な造形物が可能、
                    レーザーやガルバノミラーを必要としないため、SLA方式よりも設備の導入コストが低く抑えられる

                    </div>
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
<div class="products_title_wrap">
    <div> <?php
    global $title;
    global $bgColor;
    $bgColor ="#000000";
    $title = "その他";
    include get_template_directory() . '/custom/subTitle.php';
    ?> </div>
    </div>
    <div class="others_container">
        <!-- text-box -->
        <div class="text_container">
            <div class="others_title">縫製加工/製造</div>
            <!-- <div class="others_content"> お客様のご依頼条件でゼロから設計開発し試作品（切削/３Dプリンター）作成→小ロット（試作型）→量産までサポートしております。技術設計専門グループでサポートしています。 </div> -->
            <div class="text_blur"></div>
        </div>
         <!-- text-box -->
                 <!-- text-box -->
        <div class="text_container">
            <div class="others_title">医療消耗品製造</div>
            <!-- <div class="others_content"> お客様のご依頼条件で鞄をゼロから試作品作成量産までサポートしております。。 </div> -->
            <div class="text_blur"></div>
        </div>
         <!-- text-box -->
        <!-- text-box -->
        <div class="text_container">
            <div class="others_title">フィギュア製作</div>
            <!-- <div class="others_content"> 
            お客様のご依頼アニメのアクリルスタンド、アクリルキーホルダーを試作→量産までサポートしております。（量産品に良い品質を安く早くできるねとお客様から定評があります。。 </div> -->
            <div class="text_blur"></div>
        </div>
         <!-- text-box -->
        <!-- text-box -->
        <div class="text_container">
            <div class="others_title">木工加工</div>
            <!-- <div class="others_content"> お客様のご依頼条件でゼロから設計開発し試作品作成→量産までサポートしております。量産の経験がありますし品質的にお客様から定評があります。 </div> -->
            <div class="text_blur"></div>
        </div>
         <!-- text-box -->
        <!-- text-box -->
        <div class="text_container">
            <div class="others_title">基板設計/製造 </div>
            <!-- <div class="others_content">弊社の工場の開発品としていろいろなデザインで量産しておりますが、ご興味がございましたらご連絡ください。 </div> -->
            <div class="text_blur"></div>
        </div>
         <!-- text-box -->
                      <!-- text-box -->
        <div class="text_container">
            <div class="others_title">ロボット関連</div>
            <!-- <div class="others_content">弊社内で設計して開発品も作成しておりますのでご興味がございましたらご連絡ください。</div> -->
            <div class="text_blur"></div>
        </div>
         <!-- text-box -->
    </div>
</div>
<div class="spreator"></div>
<!-- others -->

<!-- quality-check -->
<div class="check-list-main">
<div class="products_title_wrap">
		<div>
			<?php
			global $title;
			$title = "製品の品質チェック体制";
			include get_template_directory() . '/custom/subTitle.php';
			?>
		</div>
</div>
		<div class="check-list-wrapper">
			<div class="check-list-img-container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/Nastroyki-slaysera-v-fotopolimernoy-pechati_11.jpg" alt="Example Image" class="check-img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/certificate.png" class="check-img-two" alt="Example Image" class="check-img">
			</div>
			<div class="check-list-container">
				<div class="list-wrap">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/check_icon.png" alt="Example Image" class="prowduct-image">
					</div>
					<div class="body_content">高度な検査 – 3D スキャンと自動化システムにより欠陥を検出し、正確な寸法を確保します。</div>
				</div>
				<div class="list-wrap">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/check_icon.png" alt="Example Image" class="prowduct-image">
					</div>
					<div>QA チェックリスト – すべての製品は、材料の品質、構造の完全性、および顧客固有のニーズについて徹底的にチェックされます。</div>
				</div>
				<div class="list-wrap">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/check_icon.png" alt="Example Image" class="prowduct-image">
					</div>
					<div class="body_content">リアルタイム監視 –ダッシュボードにより透明性が確保され、検査ステータスを追跡し、詳細な品質レポートを生成します。</div>
				</div>
				<div class="list-wrap">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/check_icon.png" alt="Example Image" class="prowduct-image">
					</div>
					<div class="body_content">配送保証 - 厳格なQCD基準(品質、コスト、配送) を満たす製品のみが出荷が承認されます。</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- quality-check -->
<div class="spreator"></div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/carousel.js"></script> <?php get_footer(); ?>