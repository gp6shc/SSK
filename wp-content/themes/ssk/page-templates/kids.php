<?php
/*
Template Name: Kids Landing pg
*/
?>
<?php get_header(); ?>

	<?php do_action( 'spacious_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="kids clearfix">
			<div class="page-thumb">
			<?php
				if ( has_post_thumbnail() ) {
					// the current post has a thumbnail
					echo the_post_thumbnail();
	
				} else {
					//echo default thumb
				}
			?>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="entry-content clearfix">
				<?php the_content(); ?>
				<a href="https://itunes.apple.com/us/app/laurens-kingdom/id1028748234?mt=8" class="app-download">
					<img class="itunes" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/Download_on_the_App_Store_Badge_US-UK_135x40.svg" alt="Download on the App Store">
				</a>
				<a href="https://play.google.com/store/apps/details?id=com.RapptorStudios.LaurensKingdom" class="app-download">
					<img class="itunes" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/en_badge_web_generic.png" alt="Download on Google Play">
				</a>
			</div>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	
	
	<div class="clearfix"></div>

		
<?php get_footer(); ?>