<?php get_header(); ?>
	<div id="main-body" class="clearfix">
		<div class="container">
			<header class="page-header">
				<h1 class="page-title"><?php _e( '</strong>'.'Sorry!'.'</strong>', 'allene' ); ?></h1>
			</header>
			<div class="page-content inner_section">
				<p><?php _e( 'The page you are looking for could not be found.'.'<br>'.'Try searching for the page here.', 'allene' ); ?></p>
				<?php get_search_form(); ?>
			</div><!-- .page-content -->
		
<?php get_footer(); ?>