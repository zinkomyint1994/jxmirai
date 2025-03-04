<?php 
/**
 * Template Name: Front Page
 */
get_header(); ?>

	<div class="main-visual">
		<div class="main-logo"><img src="<?php bloginfo('template_directory'); ?>/images/main_logo.png" alt="SALHAUS"></div>
		<div class="slider">
			<div class="slider01"></div>
			<div class="slider02"></div>
		</div><!-- slider -->
	</div><!--main-visual-->

	<div id="content">
	<?php 
			$args = array( 'post_type' => 'info', 'posts_per_page' => 3 );
			$the_query = new WP_Query( $args ); 
		?> 				
		<?php if ( $the_query->have_posts() ) : ?>
		<h3 class="page-tit infor">Information</h3>
		<div class="sec-in">
		
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="info-sec">			
			<p><?php the_title(); ?></p>
			<p> <?php the_content(); ?></p>	  
		</div>
		<?php endwhile; ?>
		<div class="btn_to_all info"><a href="<?php echo site_url(); ?>/info/">All Information</a></div>
		</div><!-- sec-in -->
		<?php endif; ?>
		<h3 class="page-tit">NEWS</h3>
		<section class="news">
			<?php 
			$args = array( 'post_type' => 'news', 'posts_per_page' => 3 );
			$the_query = new WP_Query( $args ); 
			?>
			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="news-list">

				<p class="date"><?php the_time('Y.m.d'); ?></p>
				<p class="news-txt"><?php the_content(); ?> </p>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>   
			

		</section><!-- new -->

		<hr class="full-width">
		
		<section class="project">
			<h3 class="page-tit mgB40">Projects</h3>
			<ul class="category">
				<?php 
				$category_id = get_cat_ID( 'publication' ) ; 
				$args = array( 'post_type' => 'post', 'posts_per_page' => 4  , 'category__not_in' => array($category_id));
				$the_query = new WP_Query( $args ); 
				?>
				<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<a href="<?php the_permalink(); ?>">
				<li class="post-<?php echo $post->ID ?>" style="background-image:url(<?php $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); echo $image_url[0]; ?>);">
					<p>
						<?php $meta = get_post_meta( $post->ID, 'field', true ); ?><?php if(!empty($meta)): ?>
							<?php echo $meta['text01']; ?><br>
						<?php endif; ?>
							<span><?php the_title(); ?></span>
					</p>
				</li>
				</a>
				<?php endwhile; ?>
				<?php endif; ?>  			
			</ul><!-- category -->
			<a href="<?php echo site_url(); ?>/projects/" class="pj-link">All Projects</a>
		</section><!-- project -->		
		
	</div><!-- content -->

	<script type="text/javascript">
	$(document).ready(function() {
		  $('.slider').slick({
		   	dots: true,
		    autoplay: true,
		    autoplaySpeed: 2000,
		    speed: 700,
		    pauseOnFocus: false,
		    pauseOnHover: false,
		    pauseOnDotsHover: false,
		    slidesToShow: 1,
		    infinite: true,
		    adaptiveHeight: true,
		    touchMover: true
		  });
	});
	 </script>
	 
<?php get_footer(); ?>
