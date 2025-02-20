<?php get_header(); ?>
<div id="project-detail">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

<div id="content">
		<h3 class="page-tit"><span><?php $meta = get_post_meta( $post->ID, 'field', true ); ?>
		<?php if(!empty($meta)): ?>
		<?php echo $meta['text01']; ?>
		<?php endif; ?>	
		</span>
		<?php the_title(); ?>
		</h3>
		<?php $meta = get_post_meta( $post->ID, 'field', true ); ?>
		<?php if(!empty($meta)): ?>
				<p class="gray-txt"><?php echo $meta['text02']; ?></p>
		<?php endif; ?>
		<div>
			<?php the_content(); ?>
		</div>

		<?php
		$related = get_posts( array( 
			  'category__in' => wp_get_post_categories($post->ID),
			  'numberposts' => 5,
			  'post__not_in' => array($post->ID) 
		  ) );
		if( $related ) foreach( $related as $post ) {
		setup_postdata($post); ?>
		<div class="detail-lastsec" id="post-<?php the_ID(); ?>">		
			<a href="<?php the_permalink(); ?>" class="txt-R">
			<?php $meta = get_post_meta( $post->ID, 'field', true ); ?>
			<?php if(!empty($meta['text01'])) { ?>
				<?php echo $meta['text01']; ?>
			<?php }else{ ?>
			<?php echo "Shinkenchiku 2017.4"; ?><?php } ?><br><span><?php the_title(); ?></span>
			</a>			
			<div class="pic-l"><a href="<?php the_permalink(); ?>"><?php  echo get_the_post_thumbnail( $post->ID, 'post-thumb' ); ?></a></div>
			</div> 
		<?php 
		}
		wp_reset_postdata(); 
		?>
	</div><!-- content -->

<?php endwhile; ?>
<?php endif; ?>  
</div>
<?php get_footer(); ?>
