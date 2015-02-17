<?php
/*
Template Name: Teachers Landing pg
*/
?>
<?php get_header(); ?>

	<?php do_action( 'spacious_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="teachers clearfix">
			<?php while ( have_posts() ) : the_post(); ?>
			
			<!--<img class="slider" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/slide2.jpg" />-->
			<?php echo do_shortcode( '[rsSlider id="44"]' ); ?>
			<!--<?php echo do_shortcode( '[rev_slider teachers]' ); ?>-->

			<article class="ssk-buttons">
				<div class="btn-learn col4 push0">
					<a href="<?php echo home_url(); ?>/teachers/about"><img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_teachers-learn-button.jpg" /></a>
				</div>
						
				<div class="btn-teach col4 push4">
					<a href="<?php echo home_url(); ?>/teachers/curriculum"><img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_teachers-teach-button.jpg" /></a>
				</div>
							
				<div class="btn-order col4 push8">
						<a href="http://shop.laurenskids.org" target="_blank"><img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_teachers-order-button.jpg" /></a>
				</div>
			</article><!--/.ssk-buttons-->

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>