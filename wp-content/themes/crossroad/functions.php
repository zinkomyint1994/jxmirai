<?php
	global $data;
	require_once ('admin/index.php');


	if ( ! function_exists( 'cross_setup' ) ) :
		function cross_setup(){
			load_theme_textdomain( 'cross', get_template_directory() . '/languages' );

			add_theme_support( 'automatic-feed-links' );

			add_theme_support( 'post-thumbnails' );
			set_post_thumbnail_size( 672, 372, true );
			add_image_size( 'cross-full-width', 1038, 576, true );

			register_nav_menus( array(
				'primary'   => __( 'Top primary menu', 'cross' ),
				'secondary' => __( 'Secondary menu in footer', 'cross' ),
			) );

			add_theme_support( 'html5', array(
				'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
			) );

			add_theme_support( 'post-formats', array(
				'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
			) );

		}
	endif;
	add_action( 'after_setup_theme', 'cross_setup' );

	function cross_content_width() {
		if ( is_attachment() && wp_attachment_is_image() ) {
			$GLOBALS['content_width'] = 810;
		}
	}
	add_action( 'template_redirect', 'cross_content_width' );

	
    add_action( 'after_setup_theme', 'cross_theme_setup' );

function cross_theme_setup() {

    add_image_size( 'category-thumb', 210, 150); // 300 pixels wide (and unlimited height)

    add_image_size( 'page-thumb', 685, 170, true ); // (cropped)
    add_image_size( 'thumbnail', 372, 233); // (cropped)
	set_post_thumbnail_size( 342, 400, true );


	function enqueue_scripts() {
		wp_enqueue_script( 'jquery-1.9.1-js', get_template_directory_uri() .'/common/js/jquery-1.9.1.js', array('jquery'), '3.0', true );
		wp_enqueue_script( 'custom-mion-js', get_template_directory_uri() .'/common/js/html5.js', array('jquery'), '3.0', true );
		wp_enqueue_script( 'common-js', get_template_directory_uri() .'/common/js/common.js', array('jquery'), '3.0', true );
		
		wp_enqueue_style( 'import-css', get_template_directory_uri() . '/common/css/import.css', false, false, 'all' );
		if(is_home()) {
		wp_enqueue_script( 'jquery-2.2.0.min-js', get_template_directory_uri() .'/common/js/jquery-2.2.0.min.js', array('jquery'), '3.0', true );
		wp_enqueue_script( 'slick.min-js', get_template_directory_uri() .'/common/js/slick.min.js', array('jquery'), '3.0', true );
		wp_enqueue_script( 'jquery.slides.min-js', get_template_directory_uri() .'/common/js/jquery.slides.min.js', array('jquery'), '3.0', true );
			wp_enqueue_script( 'slide-js', get_template_directory_uri() .'/common/js/slide.js', array('jquery'), '3.0', true );
		
		}
		if(is_single()) {
		wp_enqueue_script( 'simple', get_template_directory_uri() .'/common/js/simple-lightbox.js', array('jquery'), '3.0', true );
		wp_enqueue_style( 'simple-css', get_template_directory_uri() . '/common/js/simplelightbox.min.css', false, false, 'all' );
	
		
		}
	}
	
	add_action('wp_enqueue_scripts','enqueue_scripts');

	function cross_widgets_init() {
		

		register_sidebar( array(
			'name'          => __( 'Primary Sidebar', 'twentyfourteen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Main sidebar that appears on the left.', 'twentyfourteen' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		) );

		register_sidebar( array(
			'name'          => __( 'Primary Sidebar', 'twentyfourteen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Main sidebar that appears on the left.', 'twentyfourteen' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		) );
	}
	add_action( 'widgets_init', 'cross_widgets_init' );

	// function add_classes_wpse_130358($classes, $item, $args) {
	//   	$classes[] = 'list-l';
	//   	return $classes;
	// }
	// add_filter('nav_menu_css_class','add_classes_wpse_130358',1,3);
}
?>