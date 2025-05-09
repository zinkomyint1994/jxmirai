<?php get_header(); ?>
	<article id="content">
		<?php if ( have_posts() ) {
			if ( is_day() ) {
				printf( __( 'Daily Archives: %s', 'mion_music' ), get_the_date() );
			}
			elseif ( is_month() ) {
				printf( __( 'Monthly Archives: %s', 'mion_music' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'mion_music' ) ) );
			}

			elseif ( is_year() ) {
				printf( __( 'Yearly Archives: %s', 'mion_music' ), get_the_date( _x( 'Y', 'yearly archives date format', 'mion_music' ) ) );
			}
			else {
				_e( 'Archives', 'mion_music' );
			}
			endif; 
		?>
		<?php		
			while ( have_posts() ) {
				the_post();
				get_template_part( 'content', get_post_format() );
			}
			endwhile;			
			mion_music_paging_nav();
		}
		else :
			get_template_part( 'content', 'none' );
		endif;
		} ?>
	</article>
<?php get_footer(); ?>