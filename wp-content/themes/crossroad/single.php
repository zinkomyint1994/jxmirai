<?php get_header(); ?>
<div class="container clearfix">
	<div class="content">
	<div class="main">

		<?php while( have_posts() ): the_post();?>
				<div class="cpostsec">
            <div class="banner"> 
               <img src="<?php bloginfo('template_directory'); ?>/img/cpost/cpost_bnr.png" alt="">
            </div><!-- banner -->
            <div class="cpost_sec01 clearfix">
             <h2 class="tit"><?php the_title();  ?></h2>
             <div class="cpost_yaki clearfix">
             <ul class="cpostsec_l">
               <li><?php the_content();   ?></li>
               <li>画像はクリックで拡大表示されます。</li>
             </ul>
             <?php  $image_full=wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'full');?>
             <p class="cpostsec_r gallery"><a href="<?php echo $image_full[0]; ?>"  rel="lightbox"><?php  echo get_the_post_thumbnail( $post->ID, '' ); ?></a>
             <br>
             カテゴリー：<?php
foreach((get_the_category()) as $category) { 
    echo $category->cat_name . ' '; 
} 
?>
             </p>
             </div><!-- cpost_yaki -->
            <h2 class="tit">加工後</h2>
            <p class="cposttxt">加工後の画像です。画像はクリックで拡大表示されます。</p>
           
<?php echo photo_gallery(2); ?>
           
            <div class="l_con clearfix">
  <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_img01.png" alt="">
 <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>"> <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_btn.png" alt="" class="conbtnimg"></a>
</div>
            </div><!-- cpost_sec01 -->
            </div>
		<?php endwhile;?>	
	</div><!-- main -->
	<?php get_sidebar(); ?>
	</div><!-- container -->
  

<?php get_footer(); ?>
