			<?php global $data; ?>
			<footer id="footer" class="clearfix">
      <div class="ftNav clearfix">
       <div class="ftInfor">
         <h3 class="fttit">Information</h3>
      <ul class="mgl30 clearfix">
        <li><a href="<?php echo site_url(); ?>">HOME</a></li>
        <li><a href="<?php echo get_permalink( get_page_by_path( 'flow' ) ) ?>">ご注文の流れ</a></li>
        <li><a href="<?php echo get_permalink( get_page_by_path( 'corporate' ) ) ?>">会社概要・アクセス</a></li>
        <li><a href="<?php echo get_permalink( get_page_by_path( 'fqa' ) ) ?>">よくある質問</a></li>
        <li><a href="<?php echo get_permalink( get_page_by_path( 'voice' ) ) ?>">お客様の声</a></li>
      </ul>
         <ul class="clearfix">
            <li><a href="<?php echo get_permalink( get_page_by_path( 'price' ) ) ?>">料金について</a></li>
            <li><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>">お問い合わせ</a></li>
            <li><a href="<?php echo get_permalink( get_page_by_path( 'privacy-policy' ) ) ?>">プライバシーポリシー</a></li>
            <li><a href="<?php echo get_post_type_archive_link( 'topics' ); ?>">新着情報</a></li>
         </ul>
       </div><!-- ftInfor -->
       <div class="ftser">
         <h3 class="fttit">施工事例・サービス</h3>
         <ul class="mgl30 clearfix">
            <li><a href="<?php echo esc_url( get_category_link( get_cat_ID( '施工例' )) ); ?>">施工事例一覧</a></li>
             <ul class="mgl15">
                <li><a href="<?php echo esc_url( get_category_link( get_cat_ID( '内装工事' )) ); ?>">内装工事</a></li>
                <li><a href="<?php echo esc_url( get_category_link( get_cat_ID( '水廻りのリフォーム' )) ); ?>">水廻りリフォーム</a></li>
                <li><a href="<?php echo esc_url( get_category_link( get_cat_ID( '住宅リフォーム' )) ); ?>">住宅リフォーム</a></li>
                <li><a href="<?php echo esc_url( get_category_link( get_cat_ID( '外壁のリフォーム' )) ); ?>">外壁のリフォーム</a></li>
                <li><a href="<?php echo esc_url( get_category_link( get_cat_ID( '企業向けリフォーム' )) ); ?>">企業者向けリフォーム</a></li>
             </ul>
         </ul>
       </div><!-- ftser -->
      </div><!-- ftNav -->  
      <p class="copyright">Copyright (C) 株式会社 クロス・ロード ALL RIGHTS RESERVED.</p>   
      </footer><!-- footer -->
		</div><!-- wrapper -->
</body> 
</html>
		<?php wp_footer(); ?>
    <?php if(is_single())
    {?>
<script>
  $(function(){
    var $gallery = $('.gallery a').simpleLightbox();
    $gallery.on('show.simplelightbox', function(){
    
    })
   
    });

</script>



   <?php }?>
	</body>
</html>