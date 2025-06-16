<?php
/**
 * Template Name: page-contact
 */
get_header(); ?>
<!-- main-banner -->
<div id="page-wrapper" class="page-enter">
<?php get_header(); ?>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<div id="container" class="contact_wraper"> 
 <div class="contents">
    <div class="contents_box_top">
      <div class="contents_text_title01">
        <h3>CONTACT</h3>
        <h4>お問い合わせフォーム</h4>
      </div>
    </div>
    <div id="tab">
      <div class="contents_box_w90 mb_50">
        <p>弊社サービスに関するお問い合わせフォームです。</p>
      </div>
      <div class="contents_box_w90 mb_50" id="contact_form">

          <?php echo do_shortcode( '[contact-form-7 id="d98d440" title="jxmirai_contact_form"]' ); ?>
        <!-- <?php echo do_shortcode( '[contact-form-7 id="084e235" title="test"]' ); ?> -->
      </div>
      <div class="contents_box_w90 mb_200">
        <p>個人情報についてお寄せいただきましたお客様の情報は、弊社担当者からのご挨拶、連絡業務以外には使用いたしません。<br>
          また、情報は弊社にて厳重に管理し保管します。</p>
      </div>
    </div>
  </div>
</div>
</div>
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {    location = '<?php echo esc_url( home_url( '/' ) ); ?>page-thanks/';}, false );

document.addEventListener('wpcf7mailsent', function (event) {
    console.log(event.detail);
}, false);

document.addEventListener('wpcf7mailfailed', function (event) {
    alert('🚫 Sorry, there was an error sending your message.');
    console.log(event.detail);
}, false);
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/pageAnimation.js"></script>
<?php get_footer(); ?>
