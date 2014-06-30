<?php
/**
 * The template for displaying 404 pages (Page Not Found).
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>

<?php get_header(); ?>

	<?php do_action( 'spacious_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="parents clearfix">
			<section class="error-404 not-found">
				<div class="entry-content clearfix">

					<?php if ( ! dynamic_sidebar( 'spacious_error_404_page_sidebar' ) ) : ?>				
						<header class="page-header">
							<h3 style="text-align:left;"><?php _e( 'Whoops. That page can&rsquo;t be found.', 'spacious' ); ?></h3>
						</header>
						<p><?php _e( 'It looks like this page does not exist or has been deleted.', 'spacious' ); ?></p>
						<p>Click <a href="<?php echo home_url(); ?>">here to return home</a>.</p>
					<?php endif; ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</div><!-- #content -->
	</div><!-- #primary -->

	<?php spacious_sidebar_select(); ?>

	<?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>