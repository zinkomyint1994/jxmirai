<?php get_header(); ?>

	<div id="project-content">
		<div class="category-bar">
			<h3 class="page-tit flL">Projects</h3>
			<div class="cat-menu">
			<p class="category-select sp">Select <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.png" alt="arrow up"></p>
			<p class="category-close sp">Close <img src="<?php bloginfo('template_directory'); ?>/images/up-arrow.png" alt="arrow down"></p>
			</div>
			<ul class="category-list cat-list">
			<li class="item"><a href="<?php echo site_url(); ?>/projects/">All</a></li>
				<?php 
					$exclude_slugs      = array( 'publication');                               
					$exclude_ids        = array();

					foreach( $exclude_slugs as $slug ) { 
					    $tmp_term = get_term_by( 'slug', $slug, 'category' );

					    if( is_object( $tmp_term ) ) {
					        $exclude_ids[] = $tmp_term->term_id;
					    }
					}

					$args = array(
					    'title_li'           => '', 
					    'exclude'            => $exclude_ids,
					);

					wp_list_categories( $args );
				?>						
			</ul>
		</div><!-- category-bar -->
		<ul class="category-list-sp sp cat-list">
				<?php 
					$exclude_slugs      = array( 'publication');                               
					$exclude_ids        = array();

					foreach( $exclude_slugs as $slug ) { 
					    $tmp_term = get_term_by( 'slug', $slug, 'category' );

					    if( is_object( $tmp_term ) ) {
					        $exclude_ids[] = $tmp_term->term_id;
					    }
					}

					$args = array(
					    'title_li'           => '', 
					    'exclude'            => $exclude_ids,
					);

					wp_list_categories( $args );
				?>	
		</ul>
		 <ul class="category">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php 
						$terms = get_the_terms( $post->ID , 'category');
						if($terms) {
							foreach( $terms as $term ) {
								$cat_obj = get_term($term->term_id, 'category');
								$cat_slug = $cat_obj->slug;
							}
						}
					 ?>
				<li id="<?php echo $cat_slug; ?>">
					<a href="<?php the_permalink(); ?>">
						<?php  echo get_the_post_thumbnail( $post->ID, 'post-thumb' ); ?>
					<p>
						<?php $meta = get_post_meta( $post->ID, 'field', true ); ?>
						<?php if(!empty($meta)): ?>
							<?php echo $meta['text01']; ?><br>
						<?php endif; ?>
							<span><?php the_title(); ?></span>
					</p>
					</a>
					
				</li>
				<?php endwhile; ?>
				  			
			</ul><!-- category -->
			<?php pagination(); ?>
			<?php endif; ?> 	
	</div><!-- content -->

<?php get_footer(); ?>
