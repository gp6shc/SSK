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
	
		<!-- conditional footer bg image -->
		<?php if (is_page(76) || in_array(76, $post->ancestors)) { // if is kindergarden & its children ?>
		<div class="footer kindergarden">
			<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/footer-kindergarden.png" />
		</div>

		<?php } elseif (is_page(78) || in_array(78, $post->ancestors)) { //1st grade ?>
		<div class="footer first-grade">
			<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/footer-first-grade.png" />
		</div>
		
		<?php } elseif (is_page(80) || in_array(80, $post->ancestors)) { //2nd ?>
		<div class="footer second-grade">
			<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/footer-second-grade.png" />
		</div>
		
		<?php } elseif (is_page(82) || in_array(82, $post->ancestors)) { //3rd ?>
		<div class="footer third-grade">
			<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/footer-third-grade.png" />
		</div>
		
		<?php } elseif (is_page(26) || is_page(49)){ // || is_page(74)) { //if is teachers landing, parents landing, kids landing ?>
		<div class="footer">
		</div>
		
		<?php } else { // if none, show default ?>
		<div class="footer default">
			<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/footer-first-grade.png" />
		</div>
		<?php } ?>
		<!--//end conditional -->
		
		
		
		<!-- conditonal footer color -->
		<?php if (is_page(76) || is_page(80) || is_page(82)) { // if grade K, 2, 3, show white footer bg ?>
		<div class="end white">
			<div class="copy">
				<img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo-lk-dark.png" />
				<p>All content &copy; <?php echo date('Y') ?> Lauren's Kids. | All rights reserved. <a href="http://laurenskids.org" target="_blank">Lauren's Kids.org</a></p>
			</div>
		</div>
		
		<?php } else { // all pages, the default is brown footer bg ?>
		<div class="end brown">
			<div class="copy">
				<img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo-lk.png" />
				<p>All content &copy; <?php echo date('Y') ?> Lauren's Kids. | All rights reserved. <a href="http://laurenskids.org" target="_blank">Lauren's Kids.org</a></p>
			</div>
		</div>
		<?php } ?>
		<!--//end conditional -->
		
		
		
	<?php wp_footer(); ?>
</body>
</html>