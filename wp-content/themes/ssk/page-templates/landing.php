<?php
/*
Template Name: Landing Page (main)
*/

get_header('landing'); ?>

<?php while ( have_posts() ) : the_post(); //loop statement ?>


<article>
   <div class="col12 push0"></div>
</article>

<!-- Thought Bubbles -->
<article class="thoughts">
	<div class="col3 push2">
		<a href="<?php echo home_url(); ?>/teachers"><img class="wow bounceIn" data-wow-duration="2s" data-wow-delay="0s" data-wow-iteration="1" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-thought-teachers.png" /></a>
	</div>
	
	<div class="col3 push4">
		<a href="<?php echo home_url(); ?>/parents"><img class="wow bounceIn" data-wow-duration="2s" data-wow-delay="1s" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-thought-parents.png" /></a>
	</div>
	
	<div class="col3 push6">
		<a href="<?php echo home_url(); ?>/kids"><img class="wow bounceIn" data-wow-duration="2s"  data-wow-delay="2s" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-thought-kids.png" /></a>
	</div>
</article><!--//.thoughts-->

<div class="footer">
	<div class="col12 push0">
	
		<img id="ssk" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/bg-landing-an.gif" />
		
		<div class="grass">
			<p><i>Safer, Smarter Kids</i> is an abuse prevention education curriculum designed for PreK and elementary-aged children. The education program uses developmentally appropriate information to arm children with the tools and language they need to better protect themselves from abuse.</p>
			<p class="copy">All content &copy; <?php echo date('Y') ?> Lauren's Kids. | All rights reserved. <a href="http://laurenskids.org" target="_blank"> LaurensKids.org</a></p>
			
			<div class="audio-player">
				 <audio id="audio-player"autoplay="autoplay" loop="loop" src="<?php bloginfo('stylesheet_directory') ?>/assets/music/ssk-theme.mp3" type="audio/mp3" controls="controls"></audio>
			</div><!--//.audio-player-->
			
		</div><!--//.grass-->
	</div><!--//.col12-->
</div><!--//.footer-->


<?php endwhile; // end of the loop ?>

<script>
//wowjs
jQuery(document).ready(function() {
	new WOW().init();
  });

// audio player
jQuery(document).ready(function() {
  jQuery('#audio-player').mediaelementplayer({
    alwaysShowControls: true,
    features: ['playpause','progress','volume'],
    audioVolume: 'horizontal',
    audioWidth: 450,
    audioHeight: 75,
    iPadUseNativeControls: false,
    iPhoneUseNativeControls: false,
    AndroidUseNativeControls: false
  });
});
</script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/assets/js/mediaelement-and-player.min.js"></script>
<?php wp_footer(); ?>