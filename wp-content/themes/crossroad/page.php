<?php get_header(); ?>
<div class="content clearfix">
 <?php get_sidebar(); ?>
	<div class="main">
	<div class="banner clearfix">
	 	<?php  echo get_the_post_thumbnail( $post->ID, 'page-thumb' ); ?>
<!-- /.banner --></div>
		<?php 
			while( have_posts() ): the_post();
				the_content('');
			endwhile;
		?>
		
	</div><!-- main -->
</div><!-- content -->
<?php get_footer(); ?>