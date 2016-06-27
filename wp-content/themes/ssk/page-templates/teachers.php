<?php
/*
Template Name: Teachers Landing pg
*/
?>
<?php get_header(); ?>

	<?php do_action( 'spacious_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="teachers clearfix">
		
			<?php echo do_shortcode( '[rsSlider id="44"]' ); ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>