<?php get_header(); ?>
<div class="content clearfix">
          <?php get_sidebar(); ?>
          <div class="main">
          <div class="top">
           <div class="topslide">
           <div id="slides">
              <img src="<?php bloginfo('template_directory'); ?>/img/top/top_bnr.jpg" alt="" />
              <img src="<?php bloginfo('template_directory'); ?>/img/top/top_bnr.jpg" alt="" />
              <img src="<?php bloginfo('template_directory'); ?>/img/top/top_bnr.jpg" alt="" />
           </div>
           </div><!-- topslide -->
            <div class="tp01 clearfix">
              <div class="top01tit clearfix">
                <p><span>施工事例</span>新着の施工事例をご紹介しています</p>
              </div>
              <section class="regular slider">
              <?php query_posts('category_name=c-case&showposts=9'); ?>
<?php while (have_posts()) : the_post(); ?>
<!-- Do special_cat stuff... -->
                <div>
<a href="<?php the_permalink() ?>">
                 <?php  echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
                  <p><?php the_title(); ?></p>
</a>
                </div>
<?php endwhile;?>
               
              </section>
            </div><!--tp01-->
            <div class="tp02 clearfix">
              <div class="tp02tit top01tit">
                <p><span>お知らせ</span>クロスロードからのお知らせです</p>
              </div>
              <?php
global $post;
query_posts('post_type=topics&posts_per_page=3&order=DSC');
?>
   <ul>
<?php if ( have_posts() ) : ?>
<?php while (have_posts()) : the_post(); ?>   
  <li><span><?php the_time('Y.m.d'); ?></span>
  <a href="<?php the_permalink() ?>"> <?php the_title();  ?></a></li>
                
             
          <?php endwhile; ?>
        <?php endif; ?>
         </ul>
        <?php wp_reset_query();?>
<?php wp_reset_query();?>            
            </div><!--tp02-->
            <div class="tp03 clearfix">
              <img src="<?php bloginfo('template_directory'); ?>/img/top/top07.png" alt="安心の無料見積り" />
            </div><!--tp03-->
            
            <div class="tp04 clearfix">
              <div class="tp04_01">
                <img src="<?php bloginfo('template_directory'); ?>/img/top/top08.png" alt="任せてよかった！" />
                <p>リフォームのお困りごとはお気軽にご相談ください！<br />お客様の要望・環境に合わせて最適なプランをご提案いたします</p>
              </div><!--tp04_01-->
              <div class="tp04_02 clearfix">
                <div class="tp04_02img"><img src="<?php bloginfo('template_directory'); ?>/img/top/top09.png" alt="top09" /></div>
                <p>
                  <span class="tp0402t01">取扱業務内容</span>
                  <span>クロス貼り替え / フローリング貼り替え / カーテン / キッチンリフォーム / 浴室・洗面リフォーム / トイレリフォーム / 玄関リフォーム / リビングリフォーム / 増改築工事 / 外壁塗装 / 店舗リフォーム / 空きテナントの現状回復 / 各種リノベーション</span>
                </p>
              </div><!--tp04_02-->
            </div><!--tp04-->
            <div class="l_con clearfix">
              <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_img01.png" alt="" />
             <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>">
               <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_btn.png" alt="" class="conbtnimg" /></a>
            </div><!--l_con-->
          </div><!--top-->
          </div><!-- main -->
      </div><!-- content -->
<?php get_footer(); ?>