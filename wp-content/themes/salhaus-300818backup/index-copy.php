<?php get_header(); ?>

	<div id="project-content">
		<div class="category-bar">
			<h3 class="page-tit flL">Projects</h3>
			<div class="cat-menu">
			<p class="category-select sp">Select <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.png" alt="arrow up"></p>
			<p class="category-close sp">Close <img src="<?php bloginfo('template_directory'); ?>/images/up-arrow.png" alt="arrow down"></p>
			</div>
			
			<ul class="category-list cat-list">
				<li class="item current"  gallery-filter="all"><a href="#">All</a></li>
				<li class="item"  gallery-filter="house"><a href="#">House</a></li>
				<li class="item"  gallery-filter="appartment"><a href="#">Appartment</a></li>
				<li class="item"  gallery-filter="office"><a href="#">Office</a></li>
				<li class="item"  gallery-filter="commerical"><a href="#">Commerical</a></li>
				<li class="item"  gallery-filter="renovation"><a href="#">Renovation</a></li>
				<li class="item"  gallery-filter="others"><a href="#">Others</a></li>					
			</ul>
		</div><!-- category-bar -->
		<ul class="category-list-sp sp cat-list">
				<li class="item current"  gallery-filter="all"><a href="#">All</a></li>
				<li class="item"  gallery-filter="house"><a href="#">House</a></li>
				<li class="item"  gallery-filter="appartment"><a href="#">Appartment</a></li>
				<li class="item"  gallery-filter="office"><a href="#">Office</a></li>
				<li class="item"  gallery-filter="commerical"><a href="#">Commerical</a></li>
				<li class="item"  gallery-filter="renovation"><a href="#">Renovation</a></li>
				<li class="item"  gallery-filter="others"><a href="#">Others</a></li>	
		</ul>
		 <ul class="category">
			<?php 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array('post_type' => 'post','posts_per_page' => 18, 'paged' => $paged );
				query_posts($args); 
				$the_query = new WP_Query( $args ); 
			?>
			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<?php 
						$terms = get_the_terms( $post->ID , 'category');
						if($terms) {
							foreach( $terms as $term ) {
								$cat_obj = get_term($term->term_id, 'category');
								$cat_slug = $cat_obj->slug;
							}
						}
					 ?>
				<li filter-category="<?php echo $cat_slug; ?>">
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
