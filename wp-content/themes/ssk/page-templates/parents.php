<?php
/*
Template Name: Parents Landing pg
*/
?>
<?php get_header(); ?>

	<?php do_action( 'spacious_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="parents clearfix">
			<?php while ( have_posts() ) : the_post(); ?>
			
			<!--<img class="slider" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/slide2.jpg" />-->
			<?php echo do_shortcode( '[rsSlider id="51"]' ); ?>
			<!--<?php echo do_shortcode( '[rev_slider teachers]' ); ?>-->

			<article class="ssk-buttons">
				<div class="btn-learn col4 push0">
					<a href="<?php echo home_url(); ?>/parents/talk"><img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_parents-talk-button.jpg" /></a>
				</div>
						
				<div class="btn-teach col4 push4">
					<a href="<?php echo home_url(); ?>/parents/learn"><img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_parents-learn-button.jpg" /></a>
				</div>
							
				<div class="btn-order col4 push8">
						<a href="<?php echo home_url(); ?>/parents/protect"><img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_parents-protect-button.jpg" /></a>
				</div>
			</article><!--/.ssk-buttons-->

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>