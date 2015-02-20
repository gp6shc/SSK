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
		<div class="footer">
			<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/footer-kindergarden.png" />
		</div>

		<?php } elseif (is_page(78) || in_array(78, $post->ancestors)) { //1st grade ?>
		<div class="footer">
			<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/footer-first-grade.png" />
		</div>
		
		<?php } elseif (is_page(80) || in_array(80, $post->ancestors)) { //2nd ?>
		<div class="footer">
			<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/footer-second-grade.png" />
		</div>
		
		<?php } elseif (is_page(82) || in_array(82, $post->ancestors)) { //3rd ?>
		<div class="footer">
			<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/footer-third-grade.png" />
		</div>
		
		<?php } elseif (is_page(420) || in_array(420, $post->ancestors)) { //3rd ?>
		<div class="footer">
			<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/footer-fourth-grade.png" />
		</div>
		
		<?php } elseif (is_page(424) || in_array(424, $post->ancestors)) { //3rd ?>
		<div class="footer">
			<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/footer-fifth-grade.png" />
		</div>
		
		<?php } else { // if none, show default ?>
		<div id="push-down"></div>
		<article class="">
			<div class="col2 push4">
				<img class="buddy-thoughts" id="thought1" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_teachers-buddy-thought1.png" />
				<img class="buddy-thoughts" id="thought2" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_teachers-buddy-thought2.png" />
				<img class="buddy-thoughts" id="thought3" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_teachers-buddy-thought3.png" />
			</div>

		</article>
		
		<div class="footer">
			<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/footer-default.png" />
		</div>
		<script>
		jQuery(document).ready(function() {
			new WOW().init();
		  });
		</script>
		<?php } ?>
		<!--//end conditional -->
		
		

		<!-- conditonal footer color -->
		<?php if (is_page( array(76, 80, 82, 420) ) ) { // if grade K, 2, 3, show white footer bg (all except 1st) ?>
		<div class="end white">
			<div class="copy">
				<img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo-lk-dark.png" />
				<p><a style="color: #F06CA8" href="http://safersmarterkids.org/teachersinstitute" >Teachers' Institute</a> | <a href="http://safersmarterkids.org/parents/" >Parents</a> | All content &copy; <?php echo date('Y') ?> Lauren's Kids. | All rights reserved. <a href="http://laurenskids.org" target="_blank"> Laurens Kids.org</a></p>
			</div>
		</div>
		<?php } elseif (is_page(78) || in_array(78, $post->ancestors)) { //1st grade & ancestors ?>
		<style>#menu-top.menu a, #menu-top.menu li:after{color:#444;}</style>
		<div class="end brown">
			<div class="copy">
				<img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo-lk.png" />
				<p><a style="color: #F06CA8" href="http://safersmarterkids.org/teachersinstitute" >Teachers' Institute</a> | <a href="http://safersmarterkids.org/parents/" >Parents</a> | All content &copy; <?php echo date('Y') ?> Lauren's Kids. | All rights reserved. <a href="http://laurenskids.org" target="_blank"> Laurens Kids.org</a></p>
			</div>
		</div>
		<?php } elseif (is_page(424) || in_array(424, $post->ancestors)) { //5th grade & ancestors ?>
		<style>#menu-top.menu a, #menu-top.menu li:after{color:#00ABD3;}</style>
		<div class="end grey">
			<div class="copy">
				<img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo-lk.png" />
				<p><a style="color: #F06CA8" href="http://safersmarterkids.org/teachersinstitute" >Teachers' Institute</a> | <a href="http://safersmarterkids.org/parents/" >Parents</a> | All content &copy; <?php echo date('Y') ?> Lauren's Kids. | All rights reserved. <a href="http://laurenskids.org" target="_blank"> Laurens Kids.org</a></p>
			</div>
		</div>
		<?php } else { // all pages, the default is green ($grass) to blend in ?>
		<div class="end green">
			<div class="copy">
				<img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo-lk.png" />
				<p><a style="color: #EB068B" href="http://safersmarterkids.org/teachersinstitute" >Teachers' Institute</a> | <a href="http://safersmarterkids.org/parents/" >Parents</a> | All content &copy; <?php echo date('Y') ?> Lauren's Kids. | All rights reserved. <a href="http://laurenskids.org" target="_blank">LaurensKids.org</a></p>
			</div>
		</div>
		<?php } ?>
		<!--//end conditional -->
		
		<?php if (is_page( array(82, 78))) {  //conditional to remove box-shadow on 3rd/1st grade curriculum pg ?>
		<style>.page-thumb {box-shadow:none;-webkit-box-shadow:none;}</style>
		<?php } else { // ?>
		<?php } ?>
		
<script>
// Google Analytics
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55300654-1', 'auto');
  ga('send', 'pageview');

</script>
		
	<?php wp_footer(); ?>
</body>
</html>