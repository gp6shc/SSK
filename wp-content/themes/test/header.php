<?php
/**
 * The template for displaying the header
 *
 * @package Reactor
 * @subpackge Templates
 * @since 1.0.0
 */
?>
 <!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if ( IE 7 )&!( IEMobile )]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if ( IE 8 )&!( IEMobile )]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> 
<html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
<?php wp_head(); ?>
<?php reactor_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php reactor_body_inside(); ?>

    <div id="page" class="hfeed site"> 
    
        <?php reactor_header_before(); ?>
    
        <header id="header" class="site-header" role="banner">
            <div class="row">
                <div class="<?php reactor_columns( 12 ); ?>">
                    
                    <?php reactor_header_inside(); ?>
                    
                </div><!-- .columns -->
            </div><!-- .row -->
        </header><!-- #header -->
        
        <?php reactor_header_after(); ?>
        
        <!-- #clouds -->
	    <div id="clouds">	
		    <div class="cloud x1"></div>
			<div class="cloud x2"></div>
		    <div class="cloud x3"></div>
		    <div class="cloud x4"></div>
		    <div class="cloud x5"></div>
		</div>
		<!-- /#clouds -->

        <div id="main" class="wrapper">
        
      

