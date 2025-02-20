<?php get_header(); ?>
<div class="content clearfix">
 <?php get_sidebar(); ?>
	<div class="main">
  <div class="topics">
  <ul class="clearfix">
<?php
$loop = new WP_Query(array("post_type" => "topics","posts_per_page" => 16,"paged"=>$paged));
if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
?>


  <li><span class="tpctxt01"><?php the_time('Y.m.d'); ?></span><span class="tpctxt02"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span></li>           

<!-- /.container -->
<?php endwhile; endif; ?>
</ul>

</div>
<div class="pagination">
<?php //wpbeginner_numeric_posts_nav();
wp_pagenavi();
 ?>
</div>
 <div class="l_con clearfix">
  <img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_img01.png" alt="">
  <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>"><img src="<?php bloginfo('template_directory'); ?>/common/img/common_img/com_btn.png" alt="" class="conbtnimg"></a>
</div>
</div><!-- main -->
</div><!-- content -->
<?php get_footer(); ?>