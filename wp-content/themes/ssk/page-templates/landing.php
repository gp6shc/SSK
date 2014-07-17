<?php
/*
Template Name: Landing Page (main)
*/

get_header('landing'); ?>

<?php while ( have_posts() ) : the_post(); //loop statement ?>


<div class="audio-player">
 <h2></h2>
 <audio id="audio-player"autoplay="autoplay" loop="loop" src="<?php bloginfo('stylesheet_directory') ?>/assets/music/ssk-theme.mp3" type="audio/mp3" controls="controls"></audio>
</div>


<article class="logo">
	<div class="col4 push4">
		<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-ssk-logo.png" />
	</div>
</article>


<article class="thoughts">

	<div class="col4 push0">
		<a href="<?php echo home_url(); ?>/teachers"><img class="wow bounceIn" data-wow-duration="2s" data-wow-delay="0s" data-wow-iteration="1" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-thought-teachers.png" /></a>
	</div>
	
	<div class="col4 push4">
		<a href="<?php echo home_url(); ?>/parents"><img class="wow bounceIn" data-wow-duration="2s" data-wow-delay="1s" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-thought-parents.png" /></a>
	</div>
	
	<div class="col4 push8">
		<a href="<?php echo home_url(); ?>/kids"><img class="wow bounceIn" data-wow-duration="2s"  data-wow-delay="2s" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-thought-kids.png" /></a>
	</div>
	
</article>

<article>
   <div class="col6 push0"></div>
   <div class="col6 push6"></div>
</article>

<article>
   <div class="col6 push0"></div>
   <div class="col6 push6"></div>
</article>

<article class="footer">
	<div class="col12 push0">
		<img class="wow fadeInUp buddy" data-wow-duration="1s" data-wow-delay="0s" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-buddy.gif" />
	</div>
</article>


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
    audioHeight: 70,
    iPadUseNativeControls: false,
    iPhoneUseNativeControls: false,
    AndroidUseNativeControls: false
  });
});
</script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/assets/js/mediaelement-and-player.min.js"></script>
<?php wp_footer(); ?>
