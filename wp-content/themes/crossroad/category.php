<?php get_header(); ?>
<div class="content clearfix">
 <?php get_sidebar(); ?>
	<div class="main">
<?php if (is_category('c-case')) : ?>
	<div class="banner"> 
    <img src="<?php bloginfo('template_directory'); ?>/img/c-case/c-case_bnr.png" alt="c-case_bnr">
 </div>
     <p class="c-case_txt01">施工事例の一覧です。クリックで詳細ページが表示されます。</p>
<ul class="c-case_sec01 clearfix">
<?php global $wp_query;
               $args = array_merge( $wp_query->query, array( 'post_type' => 'c-case' ) );
               query_posts('category_name=c-case&posts_per_page=15&paged='.$paged);
?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

<li class="c-case_block01 clearfix">
<a href="<?php the_permalink() ?>">
<p class="c-case_tit"><img src="<?php bloginfo('template_directory'); ?>/img/c-case/c-case_icon.png" alt="c-case_icon" /> <?php the_title(); ?></p>
<p class="caseimg"><?php  echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></p>
<p class="c-case_txt01 padnone">カテゴリー：<?php
foreach((get_the_category()) as $category) { 
    echo $category->cat_name . ' '; 
} 
?></p>
</a>
</li>
<?php endwhile;?>
</ul><!-- c-case_sec01 -->
<div class="pagination">
<?php //wpbeginner_numeric_posts_nav();
wp_pagenavi();
 ?>
</div>
<div class="l_con clearfix">
  <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_img01.png" alt="">
  <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>"> 
  <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_btn.png" alt="" class="conbtnimg"></a>
</div>

<?php else: ?>
        <p>現在ニュースはありません。</p>
<?php wp_reset_query();endif; ?>









<?php elseif (is_category('carpentry')) : ?>
 <div class="carpentry">
            <div class="banner"> 
               <img src="<?php bloginfo('template_directory'); ?>/img/carpentry/carpentry_bnr.png" alt="carpentry_bnr" />
            </div><!-- banner -->
              <div class="carpentry">
              <div class="section">
                <h2 class="tit">内装工事とは</h2>
                <div class="section_in clearfix">
                  <div class="section_l">
                    <img src="<?php bloginfo('template_directory'); ?>/img/carpentry/carpentry_img01.png" alt="carpentry_img01" />
                  </div><!-- .section_l -->
                  <div class="section_r">
                    <p class="section_text">
                      お部屋の表面仕上の工事をいいます。<br/>
                      増改築工事に比べて、比較的作業期間のご負担も少なく、低予算で
                      お部屋を新築時の様に綺麗にする事が可能です。
                    </p>
                    <p class="section_text">
                      予算と工事期間がお客様に余りご負担にならないので、お気軽に工事する事が可能な工事になります。ちょっとした工事でもお受けいたしますので、お気軽にご相談ください。
                    </p>
                  </div><!-- .section_r -->
                </div><!-- .section_in -->
                <h3 class="pricetit">工期について</h3>
               <p class="section_txt">
                工事する場所の状況、規模によって左右されますが、<br/>
                ワンルームのクロスの張り替えであれば、目安としおおよそ2日で作業完了です！<br/>
                ※ただし、家具があるか無いかによってかわってきます。
              </p>
                <h3 class="pricetit">業務内容</h3>
                <p class="section_txt">
                  クロス張り替え、フローリング貼り替え、カーテン
                </p>
              </div>
              <div class="section">
                <h2 class="tit">内装施工事例</h2>
                <p class="section_txt">
                  画像をクリックで、詳細が確認できます。
                </p>
              </div><!-- .section -->
    <ul class="c-case_sec01 clearfix">
<?php global $wp_query;
               $args = array_merge( $wp_query->query, array( 'post_type' => 'carpentry' ) );
               query_posts('category_name=carpentry&posts_per_page=6&paged='.$paged);
?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

<li class="c-case_block01 clearfix">
<a href="<?php the_permalink() ?>">
<p class="c-case_tit"><img src="<?php bloginfo('template_directory'); ?>/img/c-case/c-case_icon.png" alt="c-case_icon" /> <?php the_title(); ?></p>
<p class="caseimg"><?php  echo get_the_post_thumbnail( $post->ID, 'category-thumb' ); ?></p>
<p class="c-case_txt01 padnone">カテゴリー：<?php
foreach((get_the_category()) as $category) { 
    echo $category->cat_name . ' '; 
} 
?></p>
</a>
</li>
<?php endwhile; ?>
</ul><!-- c-case_sec01 -->
<div class="l_con clearfix">
  <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_img01.png" alt="">
  <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>"><img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_btn.png" alt="" class="conbtnimg"></a>
</div>
</div><!-- carpentry -->
</div>

<?php wp_reset_query();endif; ?>





<?php elseif (is_category('water')) : ?>
 <div class="water">
            <div class="banner"> 
               <img src="<?php bloginfo('template_directory'); ?>/img/water/water_bnr.png" alt="carpentry_bnr" />
            </div><!-- banner -->
              <div class="carpentry">
              <div class="section">
                <h2 class="tit">水廻りのリフォームとは</h2>
                <div class="section_in clearfix">
                  <div class="section_l">
                    <img src="<?php bloginfo('template_directory'); ?>/img/water/water_img01.png" alt="carpentry_img01" />
                  </div><!-- .section_l -->
                  <div class="section_r">
                    <p class="section_text">
                      キッチン・浴室・トイレ・洗面化粧台などの水廻り設備取替工事を
                      いいます。<br>
                      従来の設備器具には、ご快適にご使用する事より、水が漏れし難い、故障をし難い方に力を入れている商品が数多く見受けられます。<br>新しい水廻り商品には、水漏れし難い・故障がし難い等は標準化
                      され、より使いやすさを追求した商品が主流になっています。<br>お客様の予算に応じて、食洗機のみの入替など、ご提案をさせていただきます。お気軽にお悩みご相談ください。
                    </p>
                  </div>
                </div><!-- .section_in -->
                <h3 class="pricetit">工期について</h3>
               <p class="section_txt">
                入替場所の状況・建物の構造によって左右されますが<br>
                設備のいれかえ作業であれば、目安としておおよそ2日です。
              </p>
                <h3 class="pricetit">業務内容</h3>
                <p class="section_txt">
                  キッチンリフォーム、浴室・洗面リフォーム、トイレリフォーム
                </p>
              </div>
              <div class="section">
                <h2 class="tit">水廻りのリフォーム施工事例</h2>
                <p class="section_txt">
                  画像をクリックで、詳細が確認できます。
                </p>
              </div><!-- .section -->
    <ul class="c-case_sec01 clearfix">
<?php global $wp_query;
               $args = array_merge( $wp_query->query, array( 'post_type' => 'water' ) );
               query_posts('category_name=water&posts_per_page=6&paged='.$paged);
?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

<li class="c-case_block01 clearfix">
<a href="<?php the_permalink() ?>">
<p class="c-case_tit"><img src="<?php bloginfo('template_directory'); ?>/img/c-case/c-case_icon.png" alt="c-case_icon" /> <?php the_title(); ?></p>
<p class="caseimg"><?php  echo get_the_post_thumbnail( $post->ID, 'category-thumb' ); ?></p>
<p class="c-case_txt01 padnone">カテゴリー：<?php
foreach((get_the_category()) as $category) { 
    echo $category->cat_name . ' '; 
} 
?></p>
</a>
</li>
<?php endwhile; ?>
</ul><!-- c-case_sec01 -->
<div class="l_con clearfix">
  <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_img01.png" alt="">
 <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>"> <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_btn.png" alt="" class="conbtnimg"></a>
</div>
</div><!-- carpentry -->
</div>

<?php wp_reset_query();endif; ?>





<?php elseif (is_category('housing')) : ?>
 <div class="housing">
            <div class="banner"> 
               <img src="<?php bloginfo('template_directory'); ?>/img/housing/housing_bnr.png" alt="carpentry_bnr" />
            </div><!-- banner -->
              <div class="carpentry">
              <div class="section">
                <h2 class="tit">住宅リフォームとは</h2>
                <div class="section_in clearfix">
                  <div class="section_l">
                    <img src="<?php bloginfo('template_directory'); ?>/img/housing/housing_img01.png" alt="carpentry_img01" />
                  </div><!-- .section_l -->
                 <div class="section_r">
                    <p class="section_text">玄関、リビングのリフォームから、新たにお部屋を増やす、2つの
                      お部屋を1つに繋げるなど、建物全体の構造リフォームさせていただく工事も対応いたします。
                    </p>
                    <p class="section_text">
                      限られたスペースを有効に活用することで、ご家族にあったお家づくりが可能です。<br>
                      当社では専属デザイナーがお客様とご一緒にプラン作成から工事完了まで完全サポートさせていただきます。
                    </p>
                  </div>
                </div><!-- .section_in -->
                <h3 class="pricetit">業務内容</h3>
                <p class="section_txt">
                  玄関リフォーム、リビングリフォーム、増改築工事、各種リノベーション
                </p>
              </div>
              <div class="section">
                <h2 class="tit">住宅リフォーム施工事例</h2>
                <p class="section_txt">
                 画像をクリックで、詳細が確認できます。
                </p>
              </div><!-- .section -->
    <ul class="c-case_sec01 clearfix">
<?php global $wp_query;
               $args = array_merge( $wp_query->query, array( 'post_type' => 'housing' ) );
               query_posts('category_name=housing&posts_per_page=6&paged='.$paged);
?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

<li class="c-case_block01 clearfix">
<a href="<?php the_permalink() ?>">
<p class="c-case_tit"><img src="<?php bloginfo('template_directory'); ?>/img/c-case/c-case_icon.png" alt="c-case_icon" /> <?php the_title(); ?></p>
<p class="caseimg"><?php  echo get_the_post_thumbnail( $post->ID, 'category-thumb' ); ?></p>
<p class="c-case_txt01 padnone">カテゴリー：<?php
foreach((get_the_category()) as $category) { 
    echo $category->cat_name . ' '; 
} 
?></p>
</a>
</li>
<?php endwhile; ?>
</ul><!-- c-case_sec01 -->
<div class="l_con clearfix">
  <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_img01.png" alt="">
 <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>"> <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_btn.png" alt="" class="conbtnimg"></a>
</div>
</div><!-- carpentry -->
</div>

<?php wp_reset_query();endif; ?>



<?php elseif (is_category('outer-wall')) : ?>
 <div class="housing">
            <div class="banner"> 
               <img src="<?php bloginfo('template_directory'); ?>/img/wall/wall_bnr.png" alt="carpentry_bnr" />
            </div><!-- banner -->
              <div class="carpentry">
              <div class="section">
                <h2 class="tit">外壁のリフォームとは</h2>
                <div class="section_in clearfix">
                  <div class="section_l">
                    <img src="<?php bloginfo('template_directory'); ?>/img/wall/wall_img.png" alt="carpentry_img01" />
                  </div><!-- .section_l -->
                <div class="section_r">
                    <p class="section_text">
                      外壁・屋根の塗装工事、防水工事に関することならお任せ下さい。<br>
                      断熱性・耐震性の向上やデザインなど、お住まいの悩み、ご相談があれば是非お問い合わせください。<br>
                      専属デザイナーがお客様とご一緒にプラン作成から工事完了まで完全サポートさせていただきます。
                    </p>
                  </div>
                </div><!-- .section_in -->
                <h3 class="pricetit">業務内容</h3>
                <p class="section_txt">
                 外壁塗装、防水工事、エクステリア
                </p>
              </div>
              <div class="section">
                <h2 class="tit">外壁のリフォーム施工事例</h2>
                <p class="section_txt">
                 画像をクリックで、詳細が確認できます。
                </p>
              </div><!-- .section -->
    <ul class="c-case_sec01 clearfix">
<?php global $wp_query;
               $args = array_merge( $wp_query->query, array( 'post_type' => 'outer-wall' ) );
               query_posts('category_name=outer-wall&posts_per_page=6&paged='.$paged);
?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

<li class="c-case_block01 clearfix">
<a href="<?php the_permalink() ?>">
<p class="c-case_tit"><img src="<?php bloginfo('template_directory'); ?>/img/c-case/c-case_icon.png" alt="c-case_icon" /> <?php the_title(); ?></p>
<p class="caseimg"><?php  echo get_the_post_thumbnail( $post->ID, 'category-thumb' ); ?></p>
<p class="c-case_txt01 padnone">カテゴリー：<?php
foreach((get_the_category()) as $category) { 
    echo $category->cat_name . ' '; 
} 
?></p>
</a>
</li>
<?php endwhile; ?>
</ul><!-- c-case_sec01 -->
<div class="l_con clearfix">
  <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_img01.png" alt="">
  <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>"> <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_btn.png" alt="" class="conbtnimg"></a>
</div>
</div><!-- carpentry -->
</div>

<?php wp_reset_query();endif; ?>




<?php elseif (is_category('enterprise')) : ?>
 <div class="housing">
            <div class="banner"> 
               <img src="<?php bloginfo('template_directory'); ?>/img/enterprise/enterprise_bnr.png" alt="carpentry_bnr" />
            </div><!-- banner -->
              <div class="carpentry">
              <div class="section">
                <h2 class="tit">企業向けリフォームとは</h2>
                <div class="section_in clearfix">
                  <div class="section_l">
                    <img src="<?php bloginfo('template_directory'); ?>/img/wall/wall_img.png" alt="carpentry_img01" />
                  </div><!-- .section_l -->
                <div class="section_r">
                    <p class="section_text">
                      店舗・倉庫などの商用施設や工場の各種修繕・機能性の向上など、ご要望にお応えいたします。
                    </p>
                    <p class="section_text">
                      専属デザイナーがお客様とご一緒にプラン作成から工事完了まで完全サポートさせていただきます。
                    </p>
                  </div>
                </div><!-- .section_in -->
                <h3 class="pricetit">業務内容</h3>
                <p class="section_txt">
                 店舗設計、施工、空きテナント現状回復
                </p>
              </div>
              <div class="section">
                <h2 class="tit">企業向けリフォーム施工事例</h2>
                <p class="section_txt">
                 画像をクリックで、詳細が確認できます。
                </p>
              </div><!-- .section -->
    <ul class="c-case_sec01 clearfix">
<?php global $wp_query;
               $args = array_merge( $wp_query->query, array( 'post_type' => 'enterprise' ) );
               query_posts('category_name=enterprise&posts_per_page=6&paged='.$paged);
?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

<li class="c-case_block01 clearfix">
<a href="<?php the_permalink() ?>">
<p class="c-case_tit"><img src="<?php bloginfo('template_directory'); ?>/img/c-case/c-case_icon.png" alt="c-case_icon" /> <?php the_title(); ?></p>
<p class="caseimg"><?php  echo get_the_post_thumbnail( $post->ID, 'category-thumb' ); ?></p>
<p class="c-case_txt01 padnone">カテゴリー：<?php
foreach((get_the_category()) as $category) { 
    echo $category->cat_name . ' '; 
} 
?></p>
</a>
</li>
<?php endwhile; ?>
</ul><!-- c-case_sec01 -->
<div class="l_con clearfix">
  <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_img01.png" alt="">
  <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>"> <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_btn.png" alt="" class="conbtnimg"></a>
</div>
</div><!-- carpentry -->
</div>

<?php wp_reset_query();endif; ?>





 <?php endif; ?>  




 

	</div><!-- main -->
</div><!-- content -->
<?php get_footer(); ?>