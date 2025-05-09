<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<script src=".../wp-content/plugins/contact-form-7/includes/js/scripts.js" ... ></script>

	<!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon"> -->
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom-script.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
	<?php
	include get_template_directory() . '/custom/scroll_top.php';
	?>
		<nav class="nav-container">
			<!-- <div class="gNav pc">
				<?php
				wp_nav_menu();
				?>
			</div> -->
			<div class="nav-wrapper"> <a href="<?php echo home_url(); ?>">
					<div class="logo-container">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logoFinal_.png" alt="Logo">
                <div class="header_title">
                    <span>JX未来株式会社</span>
                    <span>FUTURE CORPORATION</span>
                </div>
         
           </div>
           </a>
           <div class="menu-container">
                <!-- <div><a href="<?php echo home_url(); ?>" class="<?php echo is_front_page() ? 'menuActive' : ''; ?>">ホーム</a></div> -->
				<div><a href="<?php echo home_url(); ?>" class="<?php echo is_front_page() ? 'menuActive' : ''; ?>">ホーム</a></div>

				<div><a href="<?php echo get_permalink( get_page_by_path( 'page-service' ) ) ?>" class="<?php echo is_page('page-service') ? 'menuActive' : ''; ?>">事業内容</a></div>
                <div><a href="<?php echo get_permalink( get_page_by_path( 'page-products' ) ) ?>" class="<?php echo is_page('page-products') ? 'menuActive' : ''; ?>">製造品</a></div>
                <div><a href="<?php echo get_permalink( get_page_by_path( 'page-manufacture' ) ) ?>" class="<?php echo is_page('page-manufacture') ? 'menuActive' : ''; ?>">製造拠点</a></div>
				<div>
				<?php
						$current_url = $_SERVER['REQUEST_URI'];
						$is_news = strpos($current_url, 'page-info') !== false;
						?>
						<div>
						<a href="<?php echo get_permalink( get_page_by_path( 'page-info' ) ); ?>" class="<?php echo $is_news ? 'menuActive' : ''; ?>">
							会社概要
						</a>
						</div>	
				</div>
				<div><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>" class="<?php echo is_page('contact') ? 'menuActive' : ''; ?>">お問い合わせ</a></div>


				<!-- <div><a href="<?php echo home_url(); ?>">ホーム</a></div>
				<div><a href="<?php echo get_permalink( get_page_by_path( 'page-service' ) ) ?>">事業内容</a></div>
                <div><a href="<?php echo get_permalink( get_page_by_path( 'page-products' ) ) ?>">製造品</a></div>
                <div><a href="<?php echo get_permalink( get_page_by_path( 'page-manufacture' ) ) ?>">製造拠点</a></div>
                <div><a href="<?php echo get_permalink( get_page_by_path( 'page-news' ) ) ?>">会社概要</a></div>
				<div><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>">お問い合わせ</a></div> -->

				</div>
				<div class="sp_menu">
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/menu.png" alt="Logo"> -->
				</div>
				<button class="menu-btn" id="menuBtn" onclick="toggleMenu()">
					<div class="bar top"></div>
					<div class="bar middle"></div>
					<div class="bar bottom"></div>
				</button>

			</div>
			</a>
			<!-- <div class="menu-container">
          <div><a href="<?php echo home_url(); ?>">ホーム</a></div>
          <div><a href="<?php echo get_permalink(get_page_by_path('page-news')) ?>">会社概要</a></div>
          <div><a href="<?php echo get_permalink(get_page_by_path('page-products')) ?>">事業内容 と 製造品</a></div>
          <div><a href="<?php echo get_permalink(get_page_by_path('page-service')) ?>">製造品</a></div>
          <div><a href="<?php echo get_permalink(get_page_by_path('page-manufacture')) ?>">製造拠点</a></div>
         </div> -->
			<div class="sp_menu">
			</div>
			<!-- <button class="menu-btn" id="menuBtn" onclick="toggleMenu()">
				<div class="bar top"></div>
				<div class="bar middle"></div>
				<div class="bar bottom"></div>
			</button> -->

        <!-- Sidebar Menu -->
        <nav class="sidebar" id="sidebar">
          <ul>
            <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path('page-service')) ?>">事業内容</a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path('page-products')) ?>">製造品</a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path('page-manufacture')) ?>">製造拠点　</a></li>
			<li><a href="<?php echo get_permalink(get_page_by_path('page-info')) ?>">会社概要</a></li>
			<li><a href="<?php echo get_permalink(get_page_by_path('contact')) ?>">お問い合わせ</a></li>
          </ul>
        </nav>
      </div>

		</nav>
	</header>
	<?php wp_footer(); ?>
</body>