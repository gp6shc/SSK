<?php
/*
Template Name: Teachers Landing pg
*/
?>
<style>
html{overflow:hidden;} /* for clouds animations */
</style>
<?php get_header('teachers'); ?>

	<?php do_action( 'spacious_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="clearfix">
			<?php while ( have_posts() ) : the_post(); ?>
			
			<!--<img class="slider" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/slide2.jpg" />-->
			<?php echo do_shortcode( '[rsSlider id="44"]' ); ?>
			<!--<?php echo do_shortcode( '[rev_slider teachers]' ); ?>-->

			<article class="ssk-buttons">
				<div class="btn-learn col4 push0">
					<a href="<?php echo home_url(); ?>/teachers/learn"><img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_parents-learn-button.jpg" /></a>
				</div>
						
				<div class="btn-teach col4 push4">
					<a href="<?php echo home_url(); ?>/teachers/teach"><img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_parents-teach-button.jpg" /></a>
				</div>
							
				<div class="btn-order col4 push8">
						<a href="<?php echo home_url(); ?>/teachers/order"><img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_parents-order-button.jpg" /></a>
				</div>
			</article><!--/.ssk-buttons-->

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	
	
	<div class="clearfix"></div>
	
	
	<div id="push-down"></div>
		<div class="col12 push0 fence"></div>
		
		
		<article class="parents-footer">
			<div class="col2 push2">
				<img class="buddy-thoughts" id="thought1" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_parents-buddy-thought1.png" />
				<img class="buddy-thoughts" id="thought2" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_parents-buddy-thought2.png" />
				<img class="buddy-thoughts" id="thought3" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_parents-buddy-thought3.png" />
			</div>
		
			<div class="col3 push0 dog">
				<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_parents-buddy.png" />
			</div>
			<div class="col1 push3 ball">
				<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_parents-buddy-ball.png" />
			</div>
		
			<div class="col2 push4 bowl">
				<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_parents-buddy-bowl.png" />
			</div>
			<div class="col4 push8 house">
				<img class="" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_parents-buddy-house.png" />
			</div>
			
		</article>
		
		<article>
            <div class="col12 push0 land"></div>
        </article>


		
	
<script>
jQuery(document).ready(function() {
	new WOW().init();
  });
</script>
<?php get_footer(); ?>