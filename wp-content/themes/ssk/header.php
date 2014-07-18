<?php 
/**
 * Theme Header - conditionals set up to display different animations, backgrounds, and menus
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="clouds">
<head>
<meta charset="UTF-8">
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory') ?>/assets/favicon.png" />
<?php wp_head(); ?>
</head>

<!-- conditional backgrounds -->
<!-- landing pages -->
<?php if ( is_page( '26' ) ){  // if is teachers landing page ?>
<body <?php body_class('landing-teachers'); ?> >

<?php } elseif ( is_page( '49' ) ){  // if is parents landing page ?>
<body <?php body_class('landing-parents'); ?> >

<?php } elseif ( is_page( '74' ) ){  // if is kids landing page ?>
<body <?php body_class('landing-parents'); ?> >


<!-- child & ancestor pages of landing pg -->
<?php } elseif ( $post->post_parent == '26' ) { // if is child of teachers page ?>
<body <?php body_class('child-teachers'); ?> >

<?php } elseif ( $post->post_parent == '49' ) { // if is child of parents page ?>
<body <?php body_class('child-parents'); ?> >

<?php } elseif ( $post->post_kids == '74' ) { // if is child of kids page ?>
<body <?php body_class('child-kids'); ?> >


<!-- curriculum pages -->
<?php } elseif (is_page(76) || in_array(76, $post->ancestors)) { // if is this page or it's children & all ancestors ?>
<body <?php body_class('kindergarden'); ?> >

<?php } elseif (is_page(78) || in_array(78, $post->ancestors)) { ?>
<body <?php body_class('first-grade'); ?> >

<?php } elseif (is_page(80) || in_array(80, $post->ancestors)) {  ?>
<body <?php body_class('second-grade'); ?> >

<?php } elseif (is_page(82) || in_array(82, $post->ancestors)) {  ?>
<body <?php body_class('third-grade'); ?> >


<?php } else { // if none are met, load default ?>
<body <?php body_class('default'); ?> >
<?php } ?>
<!--// end conditional -->


<!-- conditional to display animated clouds -->
<?php if (is_404() || is_page(8) || is_page(10) || is_page(12) || is_page(30) || is_page(26) || is_page(28) || is_page(49) || is_page(74) || is_page(76) || is_page(136) || is_page(59) || is_page(141) || is_page(146)) { // about, faq, order, order, contact, landing pgs (t,p,k), all parents pages, both kids pages ?>
<article id="clouds">
	<div class="cloud x1"></div>
	<div class="cloud x1 second"></div>
	<div class="cloud x2"></div>
	<div class="cloud x2 second"></div>
	<div class="cloud x3"></div>
	<div class="cloud x3 second"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
	<div class="cloud x6"></div>
	<div class="cloud x7"></div>
	<div class="cloud x8"></div>
</article>
<?php } else { // all other pages do not show clouds ?>
<?php } ?>
<!-- //end conditional -->



<?php do_action( 'before' ); ?>
<div id="page" class="hfeed site">

	<!-- conditional to display animated sun in bg or not -->
	<?php if (is_page(26) || is_page(49)){ // || is_page(74)) { // if is teachers landing, parents landing, or kids landing: show sun ?>
	<div id="sun" class="col2 push0">
		<img class="wow pulse" data-wow-duration="2s" data-wow-iteration="infinite" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_teachers-sun.png" />
	</div>
	<?php } else { // all other pages do not show clouds ?>
	<?php } ?>
	<!-- //end conditional -->
	
	
	<?php do_action( 'spacious_before_header' ); ?>
	<header id="masthead" class="site-header clearfix">
		
		<?php if( of_get_option( 'spacious_header_image_position', 'above' ) == 'above' ) { spacious_render_header_image(); } ?>
		
	
		<div id="header-text-nav-container">
			<div class="inner-wrap">
				<?php if (is_page(26) || is_page(49)){ // || is_page(74)) {  // if is any of the main landing pages ?>
				<div id="header-text-nav-wrap" class="clearfix">
				<?php } else { // ?>
				<div id="header-text-nav-wrap" class="clearfix page">
				<?php } ?>
					<div id="header-left-section">
						<?php 
						if( ( of_get_option( 'spacious_show_header_logo_text', 'text_only' ) == 'both' || of_get_option( 'spacious_show_header_logo_text', 'text_only' ) == 'logo_only' ) && of_get_option( 'spacious_header_logo_image', '' ) != '' ) {
						?>
							<div id="header-logo-image" class="wow pulse"><!-- #header-logo-image with animation-->
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo of_get_option( 'spacious_header_logo_image', '' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
							</div><!-- #header-logo-image -->
						<?php
						}

						if( of_get_option( 'spacious_show_header_logo_text', 'text_only' ) == 'both' || of_get_option( 'spacious_show_header_logo_text', 'text_only' ) == 'text_only' ) {
						?>
						<div id="header-text">
							<h1 id="site-title"> 
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							</h1>
							<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2><!-- #site-description -->
						</div><!-- #header-text -->
						<?php
						}
						?>
					</div><!-- #header-left-section -->
					<div id="header-right-section">
					
						<!-- TO DO: top level nav -->
					
						<?php
						if( is_active_sidebar( 'spacious_header_sidebar' ) ) {
						?>								
						<div id="header-right-sidebar" class="clearfix">
						<?php
							// Calling the header sidebar if it exists.
							if ( !dynamic_sidebar( 'spacious_header_sidebar' ) ):
							endif;
						?>		
						</div>
						<?php
						}
						?>
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<h1 class="menu-toggle"><?php _e( 'Menu', 'spacious' ); ?></h1>
							
								<!-- conditional to display menus on certain pages -->
								<?php if (is_page(26) || in_array(26, $post->ancestors)) { // if is teachers page & children of this page?>
								<?php wp_nav_menu( array( 'theme_location' => 'teachers') ); //get teachers menu ?>
								
								
								<?php } elseif (is_page(49) || in_array(49, $post->ancestors)) { // if is parents page & children of this page ?>
								<?php wp_nav_menu( array( 'theme_location' => 'parents') ); //get parents menu ?>
								
								
								<?php } elseif (is_page(74) || in_array(74, $post->ancestors)) { // if is kids page & children of this page ?>
								<?php wp_nav_menu( array( 'theme_location' => 'kids') ); //get kids menu ?>
								
								
								<?php } else { // if none are met, load default ?>
								<?php wp_nav_menu( array( 'theme_location' => 'primary') ); //get primary menu ?>
								<?php } ?>
								<!-- //end conditional -->
							
						</nav>					
			    	</div><!-- #header-right-section --> 
			    	
			   </div><!-- #header-text-nav-wrap -->
			</div><!-- .inner-wrap -->
		</div><!-- #header-text-nav-container -->

		<?php if( of_get_option( 'spacious_header_image_position', 'above' ) == 'below' ) { spacious_render_header_image(); } ?>

	</header>
	<?php do_action( 'spacious_after_header' ); ?>
	<?php do_action( 'spacious_before_main' ); ?>
	
	<!-- conditional for push down -->
	<?php if (is_page(26) || is_page(49)){ // || is_page(74)) {  // if is any of the main landing pages ?>
	<div id="main" class="clearfix">
	<?php } else { // if none are met, load default ?>
	<div id="main" class="clearfix pushdown">
	<?php } ?>
	<!--//end conditional -->
		<div class="inner-wrap">