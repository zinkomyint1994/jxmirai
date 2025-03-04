<?php get_header(); ?>

	 <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

<div id="content">
		<h3 class="page-tit"><?php the_title(); ?></h3>
		<?php the_content(); ?> 
</div><!-- content -->


<?php endwhile; ?>
<?php endif; ?>  

<?php get_footer(); ?>
