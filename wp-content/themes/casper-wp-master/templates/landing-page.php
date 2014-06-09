<?php
/*
Template Name: Landing Page
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
		<a href="<?php echo home_url(); ?>/teachers"><img class="wow fadeInLeft" data-wow-delay="1s" data-wow-iteration="1" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-thought-teachers.png" /></a>
	</div>
	<div class="col4 push4">
		<a href="<?php echo home_url(); ?>/parents"><img class="wow fadeInDown" data-wow-delay="3s" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-thought-parents.png" /></a>
	</div>
	<div class="col4 push8">
		<a href="<?php echo home_url(); ?>/kids"><img class="wow fadeInRight" data-wow-delay="5s" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-thought-kids.png" /></a>
	</div>
</article>


<article class="footer">
	<div class="col12 push0"></div>
</article>


<article class="footer">
	<div class="col12 push0">
		<img class="wow tada" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-buddy.png" />
	</div>
</article>


<?php endwhile; // end of the loop. ?>



<script>
jQuery(document).ready(function() {
	new WOW().init();
  });

</script>
<?php wp_footer(); ?>
