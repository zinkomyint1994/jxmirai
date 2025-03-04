<?php


if ( ! function_exists( 'salhaus_setup' ) ) :

function salhaus_setup() {

	
	load_theme_textdomain( 'salhaus' );

	add_theme_support( 'automatic-feed-links' );


	add_theme_support( 'title-tag' );

	
			add_theme_support( 'automatic-feed-links' );

			add_theme_support( 'post-thumbnails' );
			set_post_thumbnail_size( 672, 372, true );
			add_image_size( 'seikukai-full-width', 1038, 576, true );

	// Register the three useful image sizes for use in Add Media modal
	add_filter( 'image_size_names_choose', 'wpshout_custom_sizes' );
	function wpshout_custom_sizes( $sizes ) {
	    return array_merge( $sizes, array(
	        'medium-width' => __( 'Medium Width' ),
	        'medium-height' => __( 'Medium Height' ),
	        'medium-something' => __( 'Medium Something' ),
	    ) );
	}

	register_nav_menus( array(
		'header' => __( 'Header Menu',      'salhaus' ),
		'header_sp' => __( 'Header_SP Menu',      'salhaus' ),
		'footer'  => __( 'Footer Menu', 'salhaus' ),
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	
	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

	
}
endif; // salhaus_setup
add_action( 'after_setup_theme', 'salhaus_setup' );

/**
 * Register widget area.
 *
 * @since salhaus
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function salhaus_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'salhaus' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'salhaus' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'salhaus_widgets_init' );


function salhaus_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'salhaus_javascript_detection', 0 );

function theme_enqueue () {

    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css' );
    wp_enqueue_style('base', get_template_directory_uri() . '/css/base.css' );
    wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css' );
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/css/slick-theme.css' );
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style('style', get_template_directory_uri()  );

    wp_enqueue_script('jquery.min', get_template_directory_uri() . '/js/jquery.min.js', '', true );
    wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.js', '', true );
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', '', true );
    wp_enqueue_script('category', get_template_directory_uri() . '/js/category.js', '', true );

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue' );


function salhaus_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}
	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'salhaus_nav_description', 10, 4 );


function salhaus_widget_tag_cloud_args( $args ) {
	$args['largest']  = 22;
	$args['smallest'] = 8;
	$args['unit']     = 'pt';
	$args['format']   = 'list';

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'salhaus_widget_tag_cloud_args' );


// Remove auto insert p tag
//remove_filter( 'the_content', 'wpautop' );
//remove_filter( 'the_excerpt', 'wpautop' );

add_filter( 'get_image_tag_class', '__return_empty_string' );

add_theme_support( 'title-tag' );

if ( ! function_exists( '_wp_render_title_tag' ) ) {
	function theme_slug_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
	}
	add_action( 'wp_head', 'theme_slug_render_title' );
}

// Our custom post type function
function create_posttype() {
 
    register_post_type( 'news',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'news' ),
                'singular_name' => __( 'news' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'news'),
	        'hierarchical' => false,
	        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'thumbnail',
            
        )
        )
    );
    register_post_type( 'Company',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Company' ),
                'singular_name' => __( 'Company' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'company'),
	        'hierarchical' => false,
	        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'thumbnail',
            
        )
        )
    );

    register_post_type( 'Architects',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Architects' ),
                'singular_name' => __( 'Architects' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'architects'),
	        'hierarchical' => false,
	        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'thumbnail',
            
        )
        )
    );

    register_post_type( 'Info',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Info' ),
                'singular_name' => __( 'Info' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'info'),
	        'hierarchical' => false,
	        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'thumbnail',
            
        )
        )
    );

}


// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


function template_uri() {
    return get_template_directory_uri();
}
add_shortcode("template_uri", "template_uri");



//custom field
function admin_init(){
    add_meta_box("project_detail-meta", "Project Detail Info", "project_detail", "post", "normal", "high");
  }
  add_action("admin_init", "admin_init");

  function project_detail(){
    global $post;
	$meta = get_post_meta( $post->ID, 'field', true ); ?>
	<input type="hidden" name="your_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

	<p>
	<label for="field[text01]">Eng_title:</label>
	<br>
	<input type="text" name="field[text01]" id="field[text01]" class="regular-text" value="<?php echo isset($meta['text01']) ? $meta['text01'] : ''; ?>">
	</p>

	<p>
	<label for="field[text02]">Year:</label>
	<br>
	<input type="text" name="field[text02]" id="field[text02]" class="regular-text" value="<?php echo isset($meta['text02']) ? $meta['text02'] : ''; ?>">
	</p>
      <?php
  }


  function save_details( $post_id ){
    global $post;
	if ( isset($_POST['your_meta_box_nonce']) 
			&& !wp_verify_nonce( $_POST['your_meta_box_nonce'], basename(__FILE__) ) ) {
			return $post_id; 
		}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
            
        }
    }
	
	$old = get_post_meta( $post_id, 'field', true );
		if (isset($_POST['field'])) { //Fix 3
			$new = $_POST['field'];
			if ( $new && $new !== $old ) {
				update_post_meta( $post_id, 'field', $new );
			} elseif ( '' === $new && $old ) {
				delete_post_meta( $post_id, 'field', $old );
			}

		}
}
  add_action('save_post', 'save_details');


  function post_queries( $query ) {
  // do not alter the query on wp-admin pages and only alter it if it's the main query
  if (!is_admin() && $query->is_main_query()){

    // alter the query for the home and category pages 

    if(is_home()){
      $query->set('posts_per_page', 3);
    }

    if(is_category()){
      $query->set('posts_per_page', 3);
    }

  }
}
add_action( 'pre_get_posts', 'post_queries' );


function pagination() {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'prev_text' => (''),
        'next_text' => (''),
        'type' => 'list'
);
    if( $wp_rewrite->using_permalinks() )
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

    if( !empty($wp_query->query_vars['s']) )
        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );


    if ( $pagination ) {
        echo '<div class="pagination">';
        echo paginate_links( $pagination );
        echo '</div>';
    }
};


// add more buttons to the text editor
function appthemes_add_quicktags() {
    if (wp_script_is('quicktags')){
?>
    <script type="text/javascript">    
    QTags.addButton( 'div_tag', 'Text Box', '<div class="text-box">', '</div>', '', '', 201 );
    QTags.addButton( 'eg_paragraph', 'p', '<p>', '</p>', 'p', 'Paragraph tag', 202 );
    QTags.addButton( 'br_tag', 'Line Break', '<br>', '', '', '', 203 );
    QTags.addButton( 'wrap_span', 'wrap', '<span>', '</span>', '', '', 203 );
    QTags.addButton( 'add_class', 'Add Class', 'detail-marg', '', '', '', 204 );
    QTags.addButton( 'p_caption', 'caption', '<p class="caption">', '</p>', 'p', 'Paragraph tag', 205 );
    QTags.addButton( 'p_pc', 'pc', '<p class="pc">', '</p>', 'p', 'Paragraph tag', 206 );
    QTags.addButton( 'p_sp', 'sp', '<p class="sp">', '</p>', 'p', 'Paragraph tag', 206 );
    </script>
<?php
    }
}
add_action( 'admin_print_footer_scripts', 'appthemes_add_quicktags' );




  function add_more_buttons($buttons) {
 $buttons[] = 'hr';
 $buttons[] = 'del';
 $buttons[] = 'sub';
 $buttons[] = 'sup';
 $buttons[] = 'fontselect';
 $buttons[] = 'fontsizeselect';
 $buttons[] = 'cleanup';
 $buttons[] = 'styleselect';
 $buttons[] = 'backcolor';
 return $buttons;
}
add_filter("mce_buttons_3", "add_more_buttons");


function fb_mce_before_init( $settings ) {

    $style_formats = array(
        array(
            'title' => 'Background Color',
            'block' => 'div',
            'classes' => 'text-box',
            'wrapper' => true
        ),
        array(
            'title' => 'Text Line',
            'selector' => 'p',
            'classes' => '',
        ),
        array(
            'title' => 'Font Color',
            'inline' => 'span',
            'classes' => '',
        )
    );

    $settings['style_formats'] = json_encode( $style_formats );

    return $settings;
}
add_filter( 'tiny_mce_before_init', 'fb_mce_before_init' );

function theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'init', 'theme_add_editor_styles' );
?>