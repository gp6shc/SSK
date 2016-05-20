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

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>