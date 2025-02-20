<?php get_header(); ?>
<div class="container clearfix">
	<div class="content">
	<div class="main">
  <div class="banner clearfix">
    <?php  echo get_the_post_thumbnail( $post->ID, 'page-thumb' ); ?>
<!-- /.banner --></div>
    <div class="newpost_sec01">
                <h1 class="newpost_tit"><?php the_title();  ?></h1>
                <p class="newpost_txt01"> <?php the_time('Y.m.d'); ?></p>
                <p class="newpost_txt02"><?php 
            while( have_posts() ): the_post();
        the_content('');
      endwhile;
    ?></p>
    </div>
    <div class="l_con clearfix">
  <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_img01.png" alt="">
  <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>"><img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_btn.png" alt="" class="conbtnimg"></a>
</div>
  </div><!-- main -->
	<?php get_sidebar(); ?>
	</div><!-- container -->
<?php get_footer(); ?>