<!-- <?php
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
    wp_enqueue_script('custom-slider-js', get_template_directory_uri() . '/assets/js/custom-script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'custom_slider_scripts');

add_filter( 'walker_nav_menu_start_el', 'salhaus_nav_description', 10, 4 );
add_action('init', 'my_theme_register_menus');

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


?> -->
