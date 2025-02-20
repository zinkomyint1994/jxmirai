<?php get_header(); ?>
<?php 
	$args = array( 'post_type' => 'Architects', 'posts_per_page' => 12, 'orderby'  => 'p', 'order'    => 'ASC' );
	$the_query = new WP_Query( $args ); 
?>
<div id="content">
	<h3 class="page-tit">Architects</h3>
			<section class="archit-sec">
				<img src="<?php bloginfo('template_directory'); ?>/images/archi_img.jpg" alt="Architects">
				<ul class="name-list">
					
					<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<?php $meta = get_post_meta( $post->ID, 'architect_field', true ); ?>
							<li>
								<p class="archit-name"><?php echo str_replace('|', '<br />', get_the_title()); ?></p>
						       <p class="archit-posi">
						       
						<?php if(!empty($meta)): ?>
							<?php echo nl2br($meta['current']); ?>
						<?php endif; ?>

						       </p>
						       <p class="archit-detail">						       
								<?php if(!empty($meta)): ?>
									<?php echo nl2br($meta['main_career']); ?>
								<?php endif; ?>
						       </p>	
							</li>				
					<?php endwhile; ?>
				<?php endif; ?>
				</ul>
				<div class="more  pc">
					<p><span>もっと</span><img src="<?php bloginfo('template_directory'); ?>/images/down_arw.png" alt="down_arw"></p>
				</div>
				
				<ul class="name-list more-list">
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<?php $meta = get_post_meta( $post->ID, 'architect_field', true ); ?>
							<li>
								<p class="archit-detail">
									<?php if(!empty($meta)): ?>
										<?php echo nl2br($meta['other_career']); ?>
									<?php endif; ?>
								</p>
							</li>
					   <?php endwhile; ?>
				   <?php endif; ?>
				</ul>
				<div class="en-list">
					<ul class="name-list">
						<?php if ( $the_query->have_posts() ) : ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<?php $meta = get_post_meta( $post->ID, 'architect_field', true ); ?>
								<li>
									<p class="archit-detail">
										<?php if(!empty($meta)): ?>
										<?php echo nl2br($meta['history']); ?>
										<?php endif; ?>										
									</p>
								</li>
						   <?php endwhile; ?>
					   <?php endif; ?>
					</ul>
				</div>
			</section><!-- archit_sec -->
</div><!-- content -->
<?php get_footer(); ?>