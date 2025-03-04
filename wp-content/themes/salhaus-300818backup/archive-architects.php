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
					  <li>
						<div class="archit-name">安原　幹<br />Motoki Yasuhara</div>
						   <div class="archit-posi">
								<?php 
								  $post = get_post( 293 );
								  echo wpautop($post->post_content);
								 ?>
						   </div>
						   <div class="archit-detail">
								<?php 
								  $post = get_post( 294 );
								  echo wpautop($post->post_content);
								 ?>
						   </div>
					  </li>
					  <li>
						<div class="archit-name">栃澤 麻利<br />Mari Tochizawa</div>
						   <div class="archit-posi">
								<?php 
								  $post = get_post( 288 );
								  echo wpautop($post->post_content);
								 ?>
						   </div>
						   <div class="archit-detail">
								<?php 
								  $post = get_post( 290 );
								  echo wpautop($post->post_content);
								 ?>
						   </div>
					  </li>
					  <li>
						<div class="archit-name">日野 雅司<br />Masashi Hino</div>
						   <div class="archit-posi">
								<?php 
								  $post = get_post( 282 );
								  echo wpautop($post->post_content);
								 ?>
						   </div>
						   <div class="archit-detail">
								<?php 
								  $post = get_post( 283 );
								  echo wpautop($post->post_content);
								 ?>
						   </div>
					  </li>
					  
				</ul>
				<div class="more  pc">
					<p><span>もっと</span><img src="<?php bloginfo('template_directory'); ?>/images/down_arw.png" alt="down_arw"></p>
				</div>
				
				<ul class="name-list more-list">					
					<li>
						<div class="archit-detail">
							<?php 
								  $post = get_post( 295 );
								  echo wpautop($post->post_content);
							?>
						</div>
					</li>
					<li>
						<div class="archit-detail">
							<?php 
								  $post = get_post( 291 );
								  echo wpautop($post->post_content);
							?>
						</div>
					</li>
					<li>
						<div class="archit-detail">
							<?php 
								  $post = get_post( 286 );
								  echo wpautop($post->post_content);
								 ?>
						</div>
					</li>
					
				</ul>
				<div class="en-list">
					<ul class="name-list">						
						<li>
							<div class="archit-detail">
								<?php 
									  $post = get_post( 296 );
									  echo wpautop($post->post_content);
									 ?>
							</div>
						</li>
						<li>
							<div class="archit-detail">
								<?php 
									  $post = get_post( 292 );
									  echo wpautop($post->post_content);
									 ?>
							</div>
						</li>
						<li>
							<div class="archit-detail">
								<?php 
									  $post = get_post( 287 );
									  echo wpautop($post->post_content);
									 ?>
							</div>
						</li>
						
					</ul>
				</div>
			</section><!-- archit_sec -->
</div><!-- content -->
<?php get_footer(); ?>