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
$bgColor = "#fff";
$url = "/assets/images/banner/footer.jpg";
include get_template_directory() . "/custom/pagesBanner.php";
?>
<!-- metal work -->
<div class="metal_work_wrapper" id="title-1">
    <!-- title -->
    <div class="products_title_wrap">
        <div> <?php
        global $title;
        global $bgColor;
        $bgColor = "#000000";
        $title = "試作金型（簡易金型）/量産金型";
        include get_template_directory() . "/custom/subTitle.php";
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
                    <div class="others_title"> <?php include get_template_directory() .
                        "/custom/subBlueLine.php"; ?>試作金型（簡易金型）</div>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/type/mold1.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                    <div class="others_title"> <?php include get_template_directory() .
                        "/custom/subBlueLine.php"; ?> 量産金型 </div>
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
      <?php include get_template_directory() . "/custom/buttontype1.php"; ?>
    </div> -->
    </div>
    <!-- title -->
</div>
<!-- metal work -->
<div class="products_list_wrapper" id="3d-title">
    <!-- title -->
    <div class="products_title_wrap">
        <div> <?php
        global $title;
        global $bgColor;
        $bgColor = "#000000";
        $title = "３Dプリンター";
        include get_template_directory() . "/custom/subTitle.php";
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
            <div class="others_list_wrap" id="3d-1">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/type/p1.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                        <div class="others_title"> <?php include get_template_directory() .
                            "/custom/subBlueLine.php"; ?> 光造形とは </div>
                        <div class="p_description">
                                <p> 紫外線レーザーなどの光で感光性樹脂を固め、立体的なモデルを作成する3Dプリンターの造形方式です。</p>
                                <div class="materail_wrap">
                                            <span class="material_">対応可能な材料</span>
                                            <p>
                                            ABSライク樹脂、PPライク樹脂が一般的、PCライク透明度の高い樹脂﻿,ゴムやエラストマーなど
                                            <p>
                                 </div>
                                 <div class="materail_wrap">
                                         <span class="material_">光造形の特徴</span>
                                        <p>
                                  
                                        透明度の高い材料を使用できるため、可視化サンプルや展示用モック、デザインモックなどに適している﻿
                                        耐久性や耐熱性に優れた樹脂、弾性のあるゴムやエラストマーを再現したようなゴムライクなど、さまざまな材料が使用可能﻿
                                        300度の熱に耐えられる耐熱性樹脂やUL94 V0規格の難燃性樹脂、耐候性樹脂など、スーパーエンプラに匹敵する材料も登場している
                                        </p>
                                 </div>
                     
                        </div>
                </div>
     
            </div>

            <div class="others_list_wrap" id="3d-2">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/3d_mp.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                    <div class="others_title"> <?php include get_template_directory() .
                        "/custom/subBlueLine.php"; ?> FDM造形とは</div>
                    <div class="p_description">Fused Deposition Modelingの略称で、日本語では熱溶融積層（方式）と訳されます。
                        FDM方式の3Dプリンターは、材料となる熱可塑性プラスチックなどを高温で熱して液状に溶かし、それを一筆書きのような要領で、ノズルから押し出しながら成形を行い、立体の造形物を製作します。
                            <div class="materail_wrap">
                                <span class="material_">対応可能な材料</span>
                                <p>
                                ABS樹脂（ABS-M30、ABS-M30i、ABS-ESD7など）、ポリカーボネート（PC-ABSなど）、PLA（ポリ乳酸）樹脂、ナイロン、カーボンファイバー入り材料、ULTEM（ポリエーテルイミド）、ASA、TPU 92A、PC、PC-ISOなど
                                <p>
                            </div>
                            <div class="materail_wrap">
                                <span class="material_">FDM造形の特徴</span>
                                <p>
                                実製品と同じ工業用樹脂素材を使用できるため、機械的・熱的・化学的に実製品レベルの物性を持つ造形パーツが作成できる﻿
                                試作だけでなく実用品やパーツの製作にも活用できる﻿
                                耐候性や汎用性、生体適合性、静電気拡散性、耐薬品性、柔軟性、衝撃吸収、高靭性、低摩擦性、安価さ、耐熱性、滅菌可能性などの特徴がある﻿
                                <p>
                            </div>
                        </div>
                </div>
            </div>

            <div class="others_list_wrap" id="3d-3">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/type/p3.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                <div class="others_title"> <?php include get_template_directory() .
                    "/custom/subBlueLine.php"; ?> 粉末造形とは </div>
                        <div class="p_description">
                            粉末状の樹脂や金属材料にレーザーを照射することにより焼結させ、一層ずつ積層していく方法です。 他の方法と比べて、素材選択の自由度が高く、耐久性のある造形物を作成できるので最終製品としての実用がもっとも進んでいる造形方式です。

                        
                            <div class="materail_wrap">
                                <span class="material_">対応可能な材料</span>
                                <p>
                                熱可塑性樹脂：ABS樹脂、ナイロン、PLA樹脂など
                                <p>
                            </div>
                            <div class="materail_wrap">
                                <span class="material_">粉末造形の特徴</span>
                                <p>
                                光造形と比べて幅広い材料を使用できる﻿
                                強度や耐久性、柔軟性を高めた造形を行うことができる﻿
                                自動車業界で多く利用されている﻿
                                最終製品としての実用がもっとも進んでいる造形方式﻿
                                <p>
                            </div>
                            
          

                        </div>
                        </div>
                    </div>
            
            <div class="others_list_wrap" id="3d-4">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/type/p4.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                <div class="others_title"> <?php include get_template_directory() .
                    "/custom/subBlueLine.php"; ?> UV硬化造形とは</div>
                <div class="p_description">
                    UV硬化造形とは、UV光を照射することで瞬時に硬化・定着するインクを使用する造形方式です。データをそのままプリンターに読み込ませ、版を製作することなく直接商品に印刷する方法として利用されています。﻿
                    
                 
                    <div class="materail_wrap">
                                <span class="material_">対応可能な材料</span>
                                <p>
                                ABSライク樹脂、PPライク樹脂、PEライク樹脂、ゴムライク樹脂、アクリル樹脂 透明度材
                                <p>
                    </div>

                        
                    <div class="materail_wrap">
                                <span class="material_">UV硬化の特徴</span>
                                <p>
                                高生産性：硬化時間はたったの0.1~数秒なため、生産プロセスにかかる時間を大幅に短縮することができます。
                                低熱性：樹脂フィルムなど熱に弱い基材への照射が可能なため、変形や変質することなく硬化できます。
                                <p>
                    </div>

                    
                    </div>
                </div>
            </div>

            <div class="others_list_wrap" id="3d-5">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/type/m1.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                <div class="others_title"> <?php include get_template_directory() .
                    "/custom/subBlueLine.php"; ?> DLP（Digital Light Processing）造形は</div>
                <div class="p_description">
                                3Dプリンターの光造形方式の1つ。 
                                この方式では、デジタルミラーデバイスという特殊なチップを使って、光を特定の部分に向けて樹脂を硬化させる。
                                DLPを使用した3Dプリンターは、高精度なプリントが可能で、細かいディテールを持つオブジェクトの製造に適している。

                               
                                <div class="materail_wrap">
                                    <span class="material_">対応可能な材料</span>
                                    <p>
                                    エポキシ系樹脂のABSライク樹脂やPPライク樹脂、アクリル系のレジンなど。
                                    <p>
                                </div>

                                <div class="materail_wrap">
                                    <span class="material_">DLP（Digital Light Processing）造形の特徴</span>
                                    <p>
                                    造形スピードが速い、造形精度が高い、滑らかな仕上がりになる、透明度の高い造形物が可能、大型で高精度な造形物が可能、
                                     レーザーやガルバノミラーを必要としないため、SLA方式よりも設備の導入コストが低く抑えられる
                                    <p>
                                </div>

                    </div>
                </div>
            </div>

            <div class="others_list_wrap" id="3d-6">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/type/金属.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                <div class="others_title"> <?php include get_template_directory() .
                    "/custom/subBlueLine.php"; ?> 金属造形とは</div>
                <div class="p_description">
                金属を溶かして3Dプリントする技術で、金属の3Dプリンターとも呼ばれます。金属粉末を積み重ねて立体的な造形物を作る金属積層造形（Metal AM）とも呼ばれます

                <div class="materail_wrap">
                    <span class="material_">対応可能な材料</span>
                    <p>
                        ステンレス鋼：SUS316L、アルミニウムなど。
                    <p>
                </div>

                <div class="materail_wrap">
                    <span class="material_">金属造形の特徴</span>
                    <p>
                        複雑な形状や内部の空洞・格子構造を造形できる、金型が不要で、設計変更が容易
                        製造時間（工期）が短縮できる、製品毎のトレサビリティが可能、様々な材料が選択できる
                        切削や鋳造などの製法に比べて複雑な形状の製品を作ることができる
                        試作品の製作に適している
                        軽量化が図れる
                    <p>
                </div>

                    </div>
                </div>
            </div>
            
        </div>
        <!-- <div class="products_btn_">
      <?php include get_template_directory() . "/custom/buttontype1.php"; ?>
    </div> -->
    </div>
    <!-- title -->
</div>
<!-- products list -->
<div class="spreator"></div>

<!-- Resin -->
<div class="metal_work_wrapper" id="resin-title">
    <!-- title -->
    <div class="products_title_wrap">
        <div> <?php
        global $title;
        global $bgColor;
        $bgColor = "#000000";
        $title = "Resin (樹脂)";
        include get_template_directory() . "/custom/subTitle.php";
        ?> </div>
        <!-- <div class="side_title"> 3D 印刷テクノロジー - プロトタイプや複雑なデザインを作成するための高度なステレオリソグラフィー、FDM 印刷、粉末ベースの印刷。 </div> -->
    </div>
    <div class="products_details">
        </div>
        <div class="list_wrap">
            <div class="others_list_wrap" id="resin-1">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/type/resin1.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                    <div class="others_title"> <?php include get_template_directory() .
                        "/custom/subBlueLine.php"; ?> 樹脂切削加工とは</div>
                    <div class="p_description"> 
                            工具や刃物を用いて機械で樹脂を切ったり削ったりする加工方法です。 
                            切削加工は金属を加工する方法として一般的には知られていますが、樹脂素材の加工にも用いられます。 
                            金属と比べ樹脂は加熱すると膨張し、その後冷却すると縮みやすいといった特性があり、金属を切削加工するよりも難易度は高いです。

                                    <div class="materail_wrap">
                                            <span class="material_">対応可能な材料</span>
                                            <p>
                                            ABS+PC,ABS、PP（ポリプロピレン）、PE（ポリエチレン）,PC（ポリカーボネート）、POM（ジュラコン）、66ナイロン、PBT,
                                            PEEK（ピーイーキー）、PTFE（フッ素）、PI（ポリイミド）、PEI（ウルテム®）、PPSU、PET、紙ベークライト、超高分子量ポリエチレンなど﻿
                                            <p>
                                    </div>
                            樹脂切削加工に用いられる素材には、
                            さまざまな材質とグレードが存在し、材料メーカーも複数ありコストと性能に差があります。そのため、樹脂切削加工品に求める機能とコストを両立させるためには、
                            最適な材質選定を行うことが大切です、インサート・アウトサートも対応可能です。普通の塗装やUV塗装も対応可能です。
                            ＊特にJX未来は樹脂切削加工にお客様からコスト、品質に定評があります。
                     </div>
                </div>
            </div>

            <div class="others_list_wrap"  id="resin-2">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/type/resin2.png" alt="Example Image" class="img_one" />
                </div>
                <div>
                    <div class="others_title"> <?php include get_template_directory() .
                        "/custom/subBlueLine.php"; ?>真空注型とは</div>
                    <div class="p_description">
                             金型を作らずシリコンの型を使って、真空下で液状の樹脂を流し込んで成形する加工方法です。

                            <div class="materail_wrap">
                                            <span class="material_">対応可能な材料</span>
                                            <p>
                                    ABS、PP（ポリプロピレン）、PE（ポリエチレン）,PC（ポリカーボネート）、POM（ジュラコン）、66ナイロン、PBT,
                                    PEEK（ピーイーキー）、PTFE（フッ素）、PI（ポリイミド）、PEI（ウルテム®）、PPSU、PET、紙ベークライト、超高分子量ポリエチレン
                            ゴム形など﻿
                                            <p>
                             </div>
                            
                            【メリット】﻿
                            金型に比べて安価で製作できる、納期が短縮できる
                            気泡が入りにくく、高精度な製品が成形できる
                            インサート成形・アウトサートや一体成型も可能

                         </div>
                </div>
            </div>

    </div>
    <!-- title -->
</div>
<!-- Resin -->

<!-- metal work -->
<div class="metal_work_wrapper" id="metal-title">
    <!-- title -->
    <div class="products_title_wrap">
        <div> <?php
        global $title;
        global $bgColor;
        $bgColor = "#000000";
        $title = "METAL WORK(金属)";
        include get_template_directory() . "/custom/subTitle.php";
        ?> </div>
        <!-- <div class="side_title"> 3D 印刷テクノロジー - プロトタイプや複雑なデザインを作成するための高度なステレオリソグラフィー、FDM 印刷、粉末ベースの印刷。 </div> -->
    </div>
    <div class="products_details">
        </div>
        <div class="list_wrap">
            <div class="others_list_wrap" id="metal-1">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/type/metal1.jpg" alt="Example Image" class="img_one" />
                </div>
                <div>
                    <div class="others_title"> <?php include get_template_directory() .
                        "/custom/subBlueLine.php"; ?>金属切削加工とは</div>
                    <div class="p_description">
                    金属を削ったり穴を開けたりして、目的の形状に加工する方法です。機械加工とも呼ばれ、金属加工の基本的な方法のひとつです

                    <div class="materail_wrap">
                            <span class="material_">対応可能な材料</span>
                            <p>
                            対応可能な材料：鉄鋼やアルミ、ステンレス、真鍮、チタン、インコネル、ハステロイなどの金属材料、非金属材料が加工できます
                            <p>
                    </div>
                 

                    【メリット】﻿
                    特にJX未来はアルミヒートシンク切削とかギアとか特注形状加工にお客様から定評があります。
                    処理：白アルマイト、カラーアルマイト、硬質アルマイト、アルミニウム化成処理、めっき、黒染め、など。
                    </div>
                </div>
            </div>

            <div class="others_list_wrap" id="metal-2">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/type/metal2.jpg" alt="Example Image" class="img_one" />
                </div>
                <div>
                    <div class="others_title"> <?php include get_template_directory() .
                        "/custom/subBlueLine.php"; ?>板金とは</div>
                    <div class="p_description">
                        金属の板を加工する技術や、その加工された金属の板を指します。また、自動車のボディを修復する作業全般も板金と呼ばれます。

                        <div class="materail_wrap">
                            <span class="material_">対応可能な材料</span>
                            <p>
                            銅、鉄鋼やステンレス
                            <p>
                        </div>

                        【メリット】﻿
                        ＊特にJX未来は自動車部品銅（C1100,C1102）の厚み6mmの鈑金品はお客様から定評があります。
                     </div>
                </div>
            </div>

            <div class="others_list_wrap" id="metal-3">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/type/metal3.jpg" alt="Example Image" class="img_one" />
                </div>
                <div>
                    <div class="others_title"> <?php include get_template_directory() .
                        "/custom/subBlueLine.php"; ?>プレス（金型製造）とは</div>
                    <div class="p_description">
                            プレス機械に取り付けて、板状の材料を圧力を加えて変形させる金型です。金属やプラスチックなどの素材を、所定の形状に成型する加工方法で、
                            自動車や家電製品などの部品製造に広く利用されています。
                
                            <div class="materail_wrap">
                                <span class="material_">対応可能な材料</span>
                                <p>
                                銅、鉄鋼やステンレス
                                <p>
                            </div>

                            ﻿【メリット】
                            プレス成形 成形機：25ton-250tonまで専門メーカー工場に協力しております。
                    </div>
                </div>
            </div>

            <div class="others_list_wrap" id="metal-4">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/type/metal4.jpg" alt="Example Image" class="img_one" />
                </div>
                <div>
                    <div class="others_title"> <?php include get_template_directory() .
                        "/custom/subBlueLine.php"; ?>ダイキャスト（ダイカスト金型製造）とは</div>
                    <div class="p_description">
                    溶かした金属を金型に流し込んで成型する鋳造法の一種で、金型製造も含まれます・
                    【メリット】
                    プレス成形 成形機：25ton-250tonまで専門メーカー工場に協力しております。
                    </div>
                </div>
            </div>
            


            <!-- <div class="others_list_wrap">
        <div class="others_title">
          <?php include get_template_directory() . "/custom/subBlueLine.php"; ?>
          FDM造形とは</div>
        <div class="p_description">説明: 
        Fused Deposition Modelingの略称で、日本語では熱溶融積層(方式)と訳されます。
        FDM方式の3Dプリンターは、材料となる熱可塑性プラスチックなどを高温で熱して液状に溶かし、それを一筆書きのような要領で、ノズルから押し出しながら成形を行い、立体の造形物を製作します。
      対応可能な材料:ABS樹脂(ABS-M30、ABS-M30i、ABS-ESD7など)、ポリカーボネート(PC-ABSなど)、PLA(ポリ乳酸)樹脂、ナイロン、カーボンファイバー入り材料、ULTEM(ポリエーテルイミド)、ASA、TPU 92A、PC、PC-ISOなど。</div>
      </div> -->
            <!-- <div class="others_list_wrap">
        <div class="others_title">
          <?php include get_template_directory() . "/custom/subBlueLine.php"; ?>
          FDM造形の特徴</div>
        <div class="p_description">説明: 
        実製品と同じ工業用樹脂素材を使用できるため、機械的・熱的・化学的に実製品レベルの物性を持つ造形パーツが作成できる﻿
        試作だけでなく実用品やパーツの製作にも活用できる﻿
        耐候性や汎用性、生体適合性、静電気拡散性、耐薬品性、柔軟性、衝撃吸収、高靭性、低摩擦性、安価さ、耐熱性、滅菌可能性などの特徴がある﻿
        。</div>
      </div> -->
        </div>
        <!-- <div class="products_btn_">
      <?php include get_template_directory() . "/custom/buttontype1.php"; ?>
    </div> -->
    </div>
    <!-- title -->
</div>
<!-- metal work -->
<!-- others -->
<div class="others_wrapper" id="other-title">
<div class="products_title_wrap">
    <div> <?php
    global $title;
    global $bgColor;
    $bgColor = "#000000";
    $title = "その他";
    include get_template_directory() . "/custom/subTitle.php";
    ?> </div>
    </div>
    <div class="others_container"  id="other-1">
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
   $title = "製品の品質検査体制";
   include get_template_directory() . "/custom/subTitle.php";
   ?>
		</div>
</div>
		<div class="check-list-wrapper">
			<div class="check-list-img-container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/check.png" alt="Example Image" class="check-img">
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/certificate.png" class="check-img-two" alt="Example Image" class="check-img"> -->
			</div>
			<div class="check-list-container">
                
                <div class="inner_wrap">
                    <div class="list-wrap">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/check_icon.png" alt="Example Image" class="prowduct-image">
                        </div>
                        <div class="body_content">当社の製品検査チームで完成した製品の品質を検査し、基準を満たしているかどうかを確認します。</div>
                    </div>
                    <div class="list-wrap">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/check_icon.png" alt="Example Image" class="prowduct-image">
                        </div>
                        <div class="body_content">完成した製品を三次元、二次元、顕微鏡を使って測定を確認します。</div>
                    </div>

                    <div class="list-wrap">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/check_icon.png" alt="Example Image" class="prowduct-image">
                        </div>
                        <div class="body_content">当社の工場にはGB/T19001-2016、ISO9001:2015の品質マネジメントシステムの国際規格をもっていますが、企業が品質保証体制を構築し、顧客満足度を高めるための要求事項を定めています。</div>
                    </div>
			

                    <div class="list-wrap">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/check_icon.png" alt="Example Image" class="prowduct-image">
                        </div>
                        <div class="body_content">配送中に製品不良品が出ないように安全梱包をしてから顧客満足度を是供しています。</div>
                    </div>
			
			
                </div>

                <div>
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/certificate.png" alt="Example Image" class="service_img">
                </div>
              
			</div>
		</div>
	</div>
</div>
<!-- quality-check -->
<div class="spreator"></div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/carousel.js"></script> <?php get_footer(); ?>
