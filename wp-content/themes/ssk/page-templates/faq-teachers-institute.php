<?php
/*
Template Name: Teachers Institute FAQs
*/
?>
<?php get_header(); ?>
<script src="https://code.jquery.com/ui/jquery-ui-git.js"></script>
<script>
jQuery(document).ready(function() {
    jQuery("#accordion").accordion({
        heightStyle: "content",
        collapsible: true,
        active: false
    });         
    jQuery("#accordion").accordion();
    jQuery("#accordion").accordion("option", "icons", {
        // expand
        'header': 'icon-expand',
        // collapse
        'activeHeader': 'icon-collapse'
    });
});
</script>



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