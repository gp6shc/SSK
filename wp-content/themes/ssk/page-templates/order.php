<?php
/*
Template Name: Order
*/
?>
<?php wp_redirect( 'http://shop.laurenskids.org', 301 ); exit; ?>
<!--
<?php get_header(); ?>

	<?php do_action( 'spacious_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="parents clearfix">
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

		</div>
	</div>
	
	
	<div class="clearfix"></div>

		
<?php get_footer(); ?>
-->