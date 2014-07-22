<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>


		<?php
			if ( has_post_thumbnail() ) {
				// the current post has a thumbnail
				the_post_thumbnail();
			} else {
				//echo default thumb
			}
		?>
		

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
	<footer class="entry-meta-bar clearfix">	        			
		<div class="entry-meta clearfix">
       	<?php edit_post_link( __( 'Edit', 'spacious' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
	</footer>

</article>

