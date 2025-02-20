<?php get_header(); ?>
	<article id="content">
		<?php 
			while(have_posts()): the_post();
			    single_tag_title();
				the_content('');
			endwhile;
		?>
	</article>
<?php get_footer(); ?>