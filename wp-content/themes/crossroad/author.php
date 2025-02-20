<?php get_header(); ?>
	<article id="content">
		<?php if ( have_posts() ) : ?>
		<header class="archive-header">
			<h1 class="archive-title">
				<?php
					the_post();
					printf( __( 'All posts by %s', 'mion_music' ), get_the_author() );
				?>
			</h1>
			<?php if ( get_the_author_meta( 'description' ) ) : ?>
			<div class="author-description"><?php the_author_meta( 'description' ); ?></div>
			<?php endif; ?>
		</header>
		<?php
			rewind_posts();
			while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );

			endwhile;
			mion_music_paging_nav();

			else :
				get_template_part( 'content', 'none' );

			endif;
		?>
	</article>
<?php get_footer(); ?>