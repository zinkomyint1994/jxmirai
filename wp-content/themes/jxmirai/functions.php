<?php

function add_favicon() {
  echo '<link rel="icon" href="' . get_template_directory_uri() . '/assets/images/favicon.ico" type="image/x-icon">';
}
add_action('wp_head', 'add_favicon');


function my_theme_enqueue_styles() {
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');

    wp_enqueue_style('theme-style', get_stylesheet_uri() . '/assets/css/style.css'); // Your main style.css

    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_register_menus() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'my-custom-theme'),
    ));
}
function salhaus_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}
	return $item_output;
}
function custom_slider_scripts() {
    wp_enqueue_script('custom-slider-js', get_template_directory_uri() . '/assets/js/custom-script.js', array('jquery'), null, true);
}

function enqueue_custom_scripts() {
  wp_enqueue_script('custom-products', get_template_directory_uri() . '/assets/js/products.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');



function add_custom_query_var($vars) {
  $vars[] = 'page-news'; // Custom query var
  return $vars;
}
add_filter('query_vars', 'add_custom_query_var');

function custom_php_page_template() {
  if (get_query_var('page-news') === '1') {
      include(get_template_directory() . '/page-news.php');  // Use get_template_directory() instead of TEMPLATEPATH
      exit();
  }
}

function update_my_css() {
  wp_enqueue_style('main-style', get_stylesheet_uri() . '/assets/css/style.css', array(), time()); 
}

function enqueue_carousel_scripts() {
  wp_enqueue_script('carousel-js', get_template_directory_uri() . '/assets/js/carousel.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_carousel_scripts');

function enqueue_manufacture_scripts() {
  wp_enqueue_script('carousel-js', get_template_directory_uri() . '/assets/js/manufacture.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_manufacture_scripts');


add_action('template_redirect', 'custom_php_page_template');

function custom_rewrite_rule() {
  add_rewrite_rule('^page-news/?$', 'index.php?page-news=1', 'top');
}
add_action('init', 'custom_rewrite_rule');

add_action('wp_enqueue_scripts', 'custom_slider_scripts');

add_filter( 'walker_nav_menu_start_el', 'salhaus_nav_description', 10, 4 );
add_action('init', 'my_theme_register_menus');

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

add_action('wp_enqueue_scripts', 'update_my_css');

add_filter( 'wpcf7_mail_components', function( $components, $contact_form, $mail_tag ) {
  // Only target form ID 123
  if ( $contact_form->id() !== 123 ) {
      return $components;
  }

  // Add a custom header
  $components['headers'][] = 'Bcc: manager@yourdomain.com';

  // Prepend a note to the body
  $components['body'] = "【自動送信】\n\n" . $components['body'];

  // Change the subject dynamically
  $components['subject'] = '【重要】' . $components['subject'];

  return $components;
}, 10, 3 );
?> 
