<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom-script.js"></script>
    <!-- <?php wp_head(); ?> -->
</head>
<body <?php body_class(); ?>>
<header>
    <nav>
    <!-- <div class="gNav pc">
				<?php
					wp_nav_menu();
				?>
			</div> -->
        <div class="nav-wrapper">   <a href="<?php echo home_url(); ?>">
            <div class="logo-container">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.png" alt="Logo">
                <div class="header_title">
                    <span>X未来 式会社</span>
                    <span>FUTURE CORPORATION</span>
                </div>
         
           </div>
           </a>
           <div class="menu-container">
                <div><a href="<?php echo home_url(); ?>">ホーム</a></div>
                <div><a href="<?php echo get_permalink( get_page_by_path( 'page-products' ) ) ?>">事業内容 と 製造品</a></div>
                <div><a href="<?php echo get_permalink( get_page_by_path( 'page-manufacture' ) ) ?>">製造拠点</a></div>
                <div><a href="<?php echo get_permalink( get_page_by_path( 'page-news' ) ) ?>">お知らせ</a></div>
                <!-- <div>会社概要</div> -->
                <!-- <div>事業内容 と 製造品</div>
                <div>お知らせ</div> -->
           </div>
        </div>
        <!-- <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?> -->
    </nav>
</header>
