<?php ?>

	<footer>
		<div class="ftr_in">
			
			<?php
					wp_nav_menu( array(
						'menu_class' => 'ftrNav',
						'theme_location' => 'footer',
					) );
			?>

		</div>
		<p class="copyright">Copyright &copy; SALHAUS, All rights reserved.</p>
	</footer><!-- footer -->
<?php wp_footer(); ?>
		<div id="btn_to_top" style="display:none;background-image:url(http://salhaus.com/wp/wp-content/themes/salhaus/images/totop_arw.png);width:40px;height:40px;position:fixed;bottom:20px;right:20px;background-color:rgba(255,255,255,.2);background-repeat:no-repeat;background-position:center center;border-radius:6px;"></div>

</body>
</html>
