<?php 
/**
 * Theme Footer Section for our theme.
 * 
 * Displays all of the footer section and closing of the #main div.
 */
?>

		</div><!-- .inner-wrap -->
	</div><!-- #main -->	
	<?php do_action( 'spacious_before_footer' ); ?>
	

	</div><!-- #page -->
	
		<!-- conditional footers -->
		
		<?php if (is_page(76) || in_array(76, $post->ancestors)) { // if is kindergarden & its children ?>
		<div class="footer kindergarden">
			<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/footer-kindergarden.png" />
		</div>

		<?php } elseif (is_page(78) || in_array(78, $post->ancestors)) {  ?>
		<div class="footer first-grade">
			<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/footer-first-grade.png" />
		</div>
		
		<?php } elseif (is_page(80) || in_array(80, $post->ancestors)) {  ?>
		<div class="footer second-grade">
			<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/footer-second-grade.png" />
		</div>
		
		<?php } elseif (is_page(82) || in_array(82, $post->ancestors)) {  ?>
		<div class="footer third-grade">
			<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/footer-third-grade.png" />
		</div>
		
		<?php } else { // if none are met, load default ?>
		<div class="footer">
		</div>
		<?php } ?>
	
		<div class="bottom-footer">
			<div class="copy">
				<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo-lk.png" />
				<p>All content &copy; <?php echo date('Y') ?> Lauren's Kids. All rights reserved. <a href="http://laurenskids.org" target="_blank">Lauren's Kids.org</a></p>
			</div>
		</div>
	<?php wp_footer(); ?>
</body>
</html>