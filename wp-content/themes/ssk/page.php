<?php 
/**
 * Theme Page Section for our theme.
 */
?>

<?php get_header(); ?>

	<div id="primary-page">
		<div id="content" class="clearfix">
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
				<?php
					wp_link_pages( array( 
					'before'            => '<div style="clear: both;"></div><div class="pagination clearfix">'.__( 'Pages:', 'spacious' ),
					'after'             => '</div>',
					'link_before'       => '<span>',
					'link_after'        => '</span>'
		      ) );
				?>
			</div>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	
	<?php spacious_sidebar_select(); ?>

<?php get_footer(); ?>