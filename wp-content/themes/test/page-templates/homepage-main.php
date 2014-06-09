<?php
/**
 * Template Name: Homepage (main)
 **/
?>

<?php get_header(); ?>

	<div id="primary" class="site-content">
    
    	<?php reactor_content_before(); ?>
  
        <div class="row">
          	<div class="<?php reactor_columns( 12 ); ?>">
            </div><!-- .columns -->
        </div><!-- .row -->
  
        <div id="content" role="main">
        	<div class="row">        
                <div class="large-12 columns">
                
                <section class="large-4 columns wow fadeInUp" data-wow-delay="0s" data-wow-duration="2s">
	                <div class="thought-one">
		                <img src="http://placehold.it/700x250">
	                </div> 
                </section>
                
                <section class="large-4 columns wow fadeInDown" data-wow-delay="2s" data-wow-duration="2s">
	                <div class="thought-two">
		                <img src="http://placehold.it/700x250">
	                </div>
                </section>
                
                <section class="large-4 columns wow fadeInUp" data-wow-delay="4s" data-wow-duration="2s">
	                <div class="thought-three">
		                <img src="http://placehold.it/700x250">
	                </div>
                </section>
                
                
                <section class="buddy large-12 columns wow pulse" data-wow-duration="2s">
	                <!--<img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/sidenav-regdonate.jpg"/>-->
	                <img src="http://placehold.it/1080x350">
                </section>



                </div><!-- .columns -->

            </div><!-- .row -->
        </div><!-- #content -->
        
        <?php reactor_content_after(); ?>
        
	</div><!-- #primary -->

<?php get_footer(); ?>
