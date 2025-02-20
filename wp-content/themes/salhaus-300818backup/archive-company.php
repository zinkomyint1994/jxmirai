<?php get_header(); ?>
<div id="content">
		<h3 class="page-tit">Company</h3>
		<div class="sec-in">
			<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>    

			<div class="company-wrap pdT40">
				<?php the_content(); ?>
			</div><!-- company-wrap -->
			<hr>
 	<?php endwhile; ?>
<?php endif; ?>
			

		</div><!-- sec-in -->
</div>
<?php get_footer(); ?>
