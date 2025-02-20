<!DOCTYPE html>
<?php global $data; ?>
<html>
	<head <?php language_attributes(); ?> >
		<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
		<meta charset="<?php bloginfo('charset') ?>" />
		<meta http-equiv="content-script-type" content="text/javascript">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0,  user-scalable=1">
    <meta name="description" content="神戸市のリフォーム会社、株式会社クロスロードです。クロスや床材の張り替えなど内装工事から水廻り、住宅、外壁から企業向けのリフォームまで幅広く対応します！もちろんお見積もりは無料です">
    <meta name="keywords" content="神戸市,東灘区,クロス張り替え,フローリング張り替え,リフォーム,">
		<link rel="shortcut icon" href="" />
    <script type="text/javascript">
    if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
      document.write('<meta name="viewport" content="width=device-width">');
    } else {
      document.write('<meta name="viewport" content="width=960">');
    }
  </script>
		<?php wp_head(); ?>
    
	</head>
	<body>
		<div id="wrapper">
      <header id="header" class="clearfix">
          <div class="headerIn">
              <div class="htxtsec clearfix">
                 <h1 class="htxt">クロス貼り替え・フローリング張り替え・リフォーム｜神戸・芦屋・西宮</h1>
                 <ul class="hLink pc">
                  <li><a href="<?php echo get_post_type_archive_link( 'topics' ); ?>">NEWS</a></li>
                  <li><a href="<?php echo get_permalink( get_page_by_path( 'fqa' ) ) ?>">よくある質問</a></li>
                  <li><a href="<?php echo get_permalink( get_page_by_path( 'privacy-policy' ) ) ?>">プライバシーポリシー</a></li>
                 </ul>
              </div><!-- htxtsec -->
              <div class="logosec clearfix">
                <h2 class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/common/img/header/logo.png" alt="" /></a></h2>
                <p class="h_contact"><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>"><img src="<?php bloginfo('template_directory'); ?>/common/img/header/h_contact.png" alt="" /></a></p>
              </div><!-- logosec -->
          </div><!-- headerIn -->
          <p class="menu sp">メニュー</p>
          <div class="gNav clearfix">
              <ul class="gNavIn">
               <li><a href="<?php echo site_url(); ?>">HOME</a></li>
               <li><a href="<?php echo get_permalink( get_page_by_path( 'flow' ) ) ?>">ご注文の流れ</a></li>
               <li><a href="<?php echo esc_url( get_category_link( get_cat_ID( '施工例' )) ); ?>">施工例</a></li>
               <li><a href="<?php echo get_permalink( get_page_by_path( 'voice' ) ) ?>">お客様の声</a></li>
               <li><a href="<?php echo get_permalink( get_page_by_path( 'corporate' ) ) ?>">会社概要</a></li>
               <li><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>">お問い合わせ</a></li>
               </ul>
             </div><!-- gNav -->
             
      </header><!-- header -->