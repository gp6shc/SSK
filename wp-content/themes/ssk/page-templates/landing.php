<?php
/*
Template Name: Landing Page (main)
*/

get_header('landing'); ?>

<?php while ( have_posts() ) : the_post(); ?>


<article class="logo">
	<div class="col4 push4">
		<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-ssk-logo.png" />
	</div>
</article>


<article class="thoughts">

	<div class="col4 push0">
		<a href="<?php echo home_url(); ?>/teachers"><img class="wow fadeInLeft" data-wow-duration="3s" data-wow-delay="0s" data-wow-iteration="1" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-thought-teachers.png" /></a>
	</div>
	
	<div class="col4 push4">
		<a href="<?php echo home_url(); ?>/parents"><img class="wow fadeInDown" data-wow-duration="3s" data-wow-delay="2s" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-thought-parents.png" /></a>
	</div>
	
	<div class="col4 push8">
		<a href="<?php echo home_url(); ?>/kids"><img class="wow fadeInRight" data-wow-duration="3s"  data-wow-delay="4s" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-thought-kids.png" /></a>
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
		<img class="wow fadeInUp buddy" data-wow-duration="2s" data-wow-delay="0s" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-buddy.png" />
	</div>
</article>


<?php endwhile; // end of the loop. ?>



<script>
jQuery(document).ready(function() {
	new WOW().init();
  });

</script>
<?php wp_footer(); ?>
