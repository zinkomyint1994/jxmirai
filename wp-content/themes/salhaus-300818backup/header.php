<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta name="keywords" content="SALHAUS,サルハウス">
	<meta name="description" content="" />
	<!--link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" /-->
	<link rel="shortcut icon" href="http://salhaus.sakura.ne.jp/favicon.png">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
	<script type="text/javascript">
		jQuery(function($){
			$(function(){
			var imgH = $("#content img").height();
			console.log(imgH);
			});
		});
	</script>
</head>


<?php if (is_home()) { ?> 
<body id="project">
<?php }elseif (is_archive('info')) { ?>
<body id="info">	
<?php }elseif (is_front_page()) { ?>
<body id="index">
<?php }elseif (is_archive('architects')) { ?>
<body id="architects">
<?php }elseif (is_archive('company')) { ?>
<body id="company">
<?php }elseif (is_single()) { ?>
<body id="project-detail">
<?php } ?>
<div id="wrapper">
	<header>
		<div class="header-in">
			<h1 class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="SALHAUS"></a></h1>
			
			<div class="gNav pc">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'header',
					) );
				?>
			</div>

		</div><!-- header-in -->
		<div class="menu-sp sp">
			<img src="<?php bloginfo('template_directory'); ?>/images/up_arw.png"  class="arrow-up" alt="arrow up">
        	<img src="<?php bloginfo('template_directory'); ?>/images/menu.png" class="arrow-down" alt="arrow down">
		</div><!--menu-->
		<div class="hd-rimg"></div>
	</header><!-- header -->
	<?php
		wp_nav_menu( array(
			'menu_class' => 'sp-nav sp',
			'theme_location' => 'header_sp',
		) );
	?>
