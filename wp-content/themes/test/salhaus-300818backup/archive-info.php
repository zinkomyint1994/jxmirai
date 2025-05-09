<?php get_header();
$class="info";
 ?>

<div id="content">
		<h3 class="page-tit infor">Information</h3>
		<div class="sec-in">
		<?php 
			$args = array( 'post_type' => 'info', 'posts_per_page' => 3 );
			$the_query = new WP_Query( $args ); 
		?> 				
		<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="info-sec">			
			<p><?php the_title(); ?></p>
			<p> <?php the_content(); ?></p>	  
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
		</div><!-- sec-in -->
	</div><!-- content -->
<?php get_footer(); ?>
