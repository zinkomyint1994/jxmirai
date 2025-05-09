<?php 
/* Template Name: voice Template */
global $data;
get_header(); ?>
	<?php get_header(); ?>
<div class="content clearfix">
 <?php get_sidebar(); ?>
	<div class="main">
	<?php if (is_page('voice')) : /* news .*/ ?>
			<div class="banner"> 
               <img src="<?php bloginfo('template_directory'); ?>/img/voice/voice_bnr.png" alt="carpentry_bnr" />
            </div><!-- banner -->
			<div id="voicesec">
				<?php global $post;
		query_posts('category_name=voice&order=DSC');?>	
		<?php if ( have_posts() ) : ?>					
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="voicesec01">
                <h2 class="tit"><?php the_title();  ?></h2>
             <div class="voicesec01_in clearfix">
              <div class="voice_l">
                  <?php  echo get_the_post_thumbnail( $post->ID, '' ); ?>
             </div><!-- voice_l -->
             <div class="voice_r">
              <?php the_content(); ?>
             </div>
             </div>
            </div><!-- voicesec01 -->	
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query();?>
				<?php endif; ?>
				</div>
				<div class="l_con clearfix">
  <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_img01.png" alt="">
 <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>"> <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_btn.png" alt="" class="conbtnimg"></a>
</div>
	</div><!-- main -->
</div><!-- content -->
<?php get_footer(); ?>
