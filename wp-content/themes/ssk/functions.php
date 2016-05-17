<?php
/**
 * Spacious functions related to defining constants, adding files and WordPress core functionality.
 *
 * Defining some constants, loading all the required files and Adding some core functionality.
 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.
 * @uses register_nav_menu() To add support for navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 700;

add_action( 'after_setup_theme', 'spacious_setup' );
/**
 * All setup functionalities.
 *
 * @since 1.0
 */
if( !function_exists( 'spacious_setup' ) ) :
function spacious_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'spacious', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page.
	add_theme_support( 'post-thumbnails' );

	// Registering navigation menus.
	register_nav_menus( array(
		'primary' 	=> 'Primary Menu',
		'footer' 	=> 'Footer Menu',
		'teachers' 	=> 'Teachers Menu',
		'parents' 	=> 'Parents Menu',
		'kids' 	=> 'Kids Menu'
	) );

	// Cropping the images to different sizes to be used in the theme
	add_image_size( 'featured-blog-large', 750, 350, true );
	add_image_size( 'featured-blog-medium', 270, 270, true );
	add_image_size( 'featured', 642, 300, true );
	add_image_size( 'featured-blog-medium-small', 230, 230, true );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'spacious_custom_background_args', array(
		'default-color' => 'eaeaea'
	) ) );

	// Adding excerpt option box for pages as well
	add_post_type_support( 'page', 'excerpt' );
}
endif;

/**
 * Define Directory Location Constants
 */
define( 'SPACIOUS_PARENT_DIR', get_template_directory() );
define( 'SPACIOUS_CHILD_DIR', get_stylesheet_directory() );

define( 'SPACIOUS_IMAGES_DIR', SPACIOUS_PARENT_DIR . '/images' );
define( 'SPACIOUS_INCLUDES_DIR', SPACIOUS_PARENT_DIR. '/inc' );
define( 'SPACIOUS_CSS_DIR', SPACIOUS_PARENT_DIR . '/assets/css' );
define( 'SPACIOUS_JS_DIR', SPACIOUS_PARENT_DIR . '/assets/js' );
define( 'SPACIOUS_LANGUAGES_DIR', SPACIOUS_PARENT_DIR . '/languages' );

define( 'SPACIOUS_ADMIN_DIR', SPACIOUS_INCLUDES_DIR . '/admin' );
define( 'SPACIOUS_WIDGETS_DIR', SPACIOUS_INCLUDES_DIR . '/widgets' );

define( 'SPACIOUS_ADMIN_IMAGES_DIR', SPACIOUS_ADMIN_DIR . '/images' );
define( 'SPACIOUS_ADMIN_JS_DIR', SPACIOUS_ADMIN_DIR . '/assets/js' );
define( 'SPACIOUS_ADMIN_CSS_DIR', SPACIOUS_ADMIN_DIR . '/assets/css' );


/**
 * Define URL Location Constants
 */
define( 'SPACIOUS_PARENT_URL', get_template_directory_uri() );
define( 'SPACIOUS_CHILD_URL', get_stylesheet_directory_uri() );

define( 'SPACIOUS_IMAGES_URL', SPACIOUS_PARENT_URL . '/images' );
define( 'SPACIOUS_INCLUDES_URL', SPACIOUS_PARENT_URL. '/inc' );
define( 'SPACIOUS_CSS_URL', SPACIOUS_PARENT_URL . '/assets/css' );
define( 'SPACIOUS_JS_URL', SPACIOUS_PARENT_URL . '/assets/js' );
define( 'SPACIOUS_LANGUAGES_URL', SPACIOUS_PARENT_URL . '/languages' );

define( 'SPACIOUS_ADMIN_URL', SPACIOUS_INCLUDES_URL . '/admin' );
define( 'SPACIOUS_WIDGETS_URL', SPACIOUS_INCLUDES_URL . '/widgets' );

define( 'SPACIOUS_ADMIN_IMAGES_URL', SPACIOUS_ADMIN_URL . '/images' );
define( 'SPACIOUS_ADMIN_JS_URL', SPACIOUS_ADMIN_URL . '/assets/js' );
define( 'SPACIOUS_ADMIN_CSS_URL', SPACIOUS_ADMIN_URL . '/assets/css' );

/** Load functions */
require_once( SPACIOUS_INCLUDES_DIR . '/custom-header.php' );
require_once( SPACIOUS_INCLUDES_DIR . '/functions.php' );
require_once( SPACIOUS_INCLUDES_DIR . '/header-functions.php' );

require_once( SPACIOUS_ADMIN_DIR . '/meta-boxes.php' );

/** Load Widgets and Widgetized Area */
require_once( SPACIOUS_WIDGETS_DIR . '/widgets.php' );

/**
 * Adds support for a theme option.
 */
if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/admin/options/' );
	require_once( SPACIOUS_ADMIN_DIR . '/options/options-framework.php' );
}

/** Contact Form */
function contact_form_func( $atts ) {
  $resp = "<style>
    .contact_form { background: #fafafa; padding: 20px 20px 0; }
    .contact_form .field{width:100%;margin-left:0!important;height:auto;}
    .field select{display:block;width:100%;}
    .field .parsley-errors-list { margin: 0 0 15px 0; list-style:none; padding:0; color: #eb068b; }
    .field input + .parsley-errors-list,
    .field textarea + .parsley-errors-list { margin-top:-10px; }
    .field input, .field textarea { background-color: #fff; margin-bottom: 15px; }
    .field button { color: #fff; }
  </style>";
  $resp .= "<form class=\"contact_form clearfix\" action=\"https://laurens-kids.secure.force.com/website/contact_us\" method=\"post\" data-parsley-validate>";
  	$resp .= "<input type=\"hidden\" name=\"thankYouURL\" value=\"http://www.safersmarterkids.org\"/>";
  	$resp .= "<input type=\"hidden\" id=\"topic\" name=\"topic\" value=\"Safer, Smarter Kids Inquiry\" />";
  	$resp .= "<!-- input type=\"hidden\" name=\"thankYouURL\" value=\"http://laurenskids.force.com/walkinmyshoes/thank_you\"/ -->";


  	$resp .= "<div class=\"field\">";
  		$resp .= "<label for=\"firstname\">First Name:</label>";
  		$resp .= "<input id=\"firstname\" type=\"text\" name=\"firstname\" required=\"required\" placeholder=\"Required information\" maxlength=\"40\"/>";
  	$resp .= "</div>";
  	$resp .= "<div class=\"field\">";
  		$resp .= "<label for=\"lastname\">Last Name:</label>";
  		$resp .= "<input id=\"lastname\" type=\"text\" name=\"lastname\" required=\"required\" placeholder=\"Required information\" maxlength=\"80\"/>";
  	$resp .= "</div>";
  	$resp .= "<div class=\"field\">";
  		$resp .= "<label for=\"email_address\">Email:</label>";
  		$resp .= "<input id=\"email_address\" type=\"email\" name=\"email_address\" required=\"required\" placeholder=\"e.g. myuser@mydomain.com\"/>";
  	$resp .= "</div>";
  	$resp .= "<div class=\"field\">";
  		$resp .= "<label for=\"phone\">Phone:</label>";
  		$resp .= "<input id=\"phone\" name=\"phone\" type=\"tel\" pattern=\"[0-9]{3}-?[0-9]{3}-?[0-9]{4}\" placeholder=\"e.g. 416-769-7093\" maxlength=\"12\"/>";
  	$resp .= "</div>";
  	$resp .= "<div class=\"field\">";
      $resp .= "<label for=\"city\">City:</label>";
  		$resp .= "<input id=\"city\" type=\"text\" name=\"mailing_city\" required=\"required\" placeholder=\"Required information\" maxlength=\"40\"/>";
  	$resp .= "</div>";
  	$resp .= "<div class=\"field\">";
  		$resp .= "<label for=\"state\">State:</label>";
		  $resp .= "<select id=\"state\" name=\"mailing_state\">";
  			$resp .= "<option value=\"\">--None--</option>";
  			$resp .= "<option value=\"AL\">Alabama</option>";
        $resp .= "<option value=\"AK\">Alaska</option>";
        $resp .= "<option value=\"AZ\">Arizona</option>";
        $resp .= "<option value=\"AR\">Arkansas</option>";
        $resp .= "<option value=\"CA\">California</option>";
        $resp .= "<option value=\"CO\">Colorado</option>";
        $resp .= "<option value=\"CT\">Connecticut</option>";
        $resp .= "<option value=\"DE\">Delaware</option>";
        $resp .= "<option value=\"DC\">District of Columbia</option>";
        $resp .= "<option value=\"FL\">Florida</option>";
        $resp .= "<option value=\"GA\">Georgia</option>";
        $resp .= "<option value=\"HI\">Hawaii</option>";
        $resp .= "<option value=\"ID\">Idaho</option>";
        $resp .= "<option value=\"IL\">Illinois</option>";
        $resp .= "<option value=\"IN\">Indiana</option>";
        $resp .= "<option value=\"IA\">Iowa</option>";
        $resp .= "<option value=\"KS\">Kansas</option>";
        $resp .= "<option value=\"KY\">Kentucky</option>";
        $resp .= "<option value=\"LA\">Louisiana</option>";
        $resp .= "<option value=\"ME\">Maine</option>";
        $resp .= "<option value=\"MD\">Maryland</option>";
        $resp .= "<option value=\"MA\">Massachusetts</option>";
        $resp .= "<option value=\"MI\">Michigan</option>";
        $resp .= "<option value=\"MN\">Minnesota</option>";
        $resp .= "<option value=\"MS\">Mississippi</option>";
        $resp .= "<option value=\"MO\">Missouri</option>";
        $resp .= "<option value=\"MT\">Montana</option>";
        $resp .= "<option value=\"NE\">Nebraska</option>";
        $resp .= "<option value=\"NV\">Nevada</option>";
        $resp .= "<option value=\"NH\">New Hampshire</option>";
        $resp .= "<option value=\"NJ\">New Jersey</option>";
        $resp .= "<option value=\"NM\">New Mexico</option>";
        $resp .= "<option value=\"NY\">New York</option>";
        $resp .= "<option value=\"NC\">North Carolina</option>";
        $resp .= "<option value=\"ND\">North Dakota</option>";
        $resp .= "<option value=\"OH\">Ohio</option>";
        $resp .= "<option value=\"OK\">Oklahoma</option>";
        $resp .= "<option value=\"OR\">Oregon</option>";
        $resp .= "<option value=\"PA\">Pennsylvania</option>";
        $resp .= "<option value=\"RI\">Rhode Island</option>";
        $resp .= "<option value=\"SC\">South Carolina</option>";
        $resp .= "<option value=\"SD\">South Dakota</option>";
        $resp .= "<option value=\"TN\">Tennessee</option>";
        $resp .= "<option value=\"TX\">Texas</option>";
        $resp .= "<option value=\"UT\">Utah</option>";
        $resp .= "<option value=\"VT\">Vermont</option>";
        $resp .= "<option value=\"VA\">Virginia</option>";
        $resp .= "<option value=\"WA\">Washington</option>";
        $resp .= "<option value=\"WV\">West Virginia</option>";
        $resp .= "<option value=\"WI\">Wisconsin</option>";
        $resp .= "<option value=\"WY\">Wyoming</option>";
		  $resp .= "</select>";
  	$resp .= "</div>";
  	$resp .= "<div class=\"field\">";
  		$resp .= "<label for=\"zip_code\">Zip Code:</label>";
  		$resp .= "<input id=\"zip_code\" type=\"text\" name=\"zip_code\" required=\"required\" pattern=\"[0-9]{5}(-?[0-9]{4})?\" placeholder=\"e.g. 90210\" maxlength=\"10\"/>";
  	$resp .= "</div>";
  		$resp .= "<div class=\"field\">";
  		$resp .= "<label for=\"message\">Comments:</label>";
  		$resp .= "<textarea id=\"message\" name=\"message\" required=\"required\" placeholder=\"Required information\" rows=\"5\" maxlength=\"512\"  maxlength=\"512\"></textarea>";
  	$resp .= "</div>";
    $resp .= "<br/>";
  	$resp .= "<div class=\"field\" style=\"text-align:center;\">";
  		$resp .= "<button type=\"submit\">Submit</button>";
    $resp .= "</div>";
  $resp .= "</form>";
  $resp .= "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>";
  $resp .= "<script src=\"".get_stylesheet_directory_uri()."/assets/js/parsley.min.js\"></script>";

  return $resp;
}
add_shortcode( 'contact_form', 'contact_form_func' );


/** Application Form */
function application_form_func( $atts ) {
  $resp = '';

//  $resp .= '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/sf-form/assets/styles/salesforce-lightning-design-system.min.css">';
//	$resp .= '<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />';

  $resp = "<style>
    .contact_form { background: #fafafa; padding: 20px 20px 0; }
    .contact_form .field{width:100%;margin-left:0!important;height:auto;}
    .field select{display:block;width:100%;}
    .field .parsley-errors-list { margin: 0 0 15px 0; list-style:none; padding:0; color: #eb068b; }
    .field input + .parsley-errors-list,
    .field textarea + .parsley-errors-list { margin-top:-10px; }
    .field input, .field textarea { background-color: #fff; margin-bottom: 15px; }
    .field button { color: #fff; }
    .slds-size--1-of-1 { display: inline-block; width: 100%; }
    .slds-size--1-of-2 { display: inline-block; width: 50%; }
    .slds-size--1-of-3 { display: inline-block; width: 33%; }
    .slds-box { margin-top: 10px; margin-bottom: 10px; }
  </style>";

  $resp .= "<div class=\"slds\">";
    $resp .= "<div class=\"slds-grid\">";
      $resp .= "<div class=\"slds-col\">";
        $resp .= "<div aria-labelledby=\"newaccountform\">";
          $resp .= "<!-- BOXED AREA -->";

          $resp .= "<fieldset class=\"slds-box slds-theme--default slds-size--1-of-1 slds-small-size--1-of-1 slds-medium-size--1-of-2\">";
            $resp .= "<legend id=\"newaccountform\" class=\"slds-text-heading--medium slds-p-vertical--medium\">Safer, Smarter Schools Conference Application</legend> <!-- Sandbox form-->";

            $resp .= "<form class=\"contact_form\" action=\"https://laurenskids.force.com/safersmarterkids/new_application\" method=\"post\" data-webforms2-force-js-validation=\"true\">";
              $resp .= "<input type=\"hidden\" name=\"thankYouURL\" value=\"http://laurenskids.org/curriculum/\"> <input type=\"hidden\" name=\"campaign_name\" value=\"Safer Smarter Kids Teacher Institute Application\">";

              $resp .= "<div class=\"slds-grid\">";
                $resp .= "<div class=\"slds-col\">";
                  $resp .= "<div class=\"slds-form-element slds-is-required field\">";
                    $resp .= "<label class=\"slds-form-element__label\" for=\"firstname\">First Name:</label> <input class=\"slds-input\" id=\"firstname\" type=\"text\" name=\"firstname\" required=\"required\" placeholder=\"Required information\" maxlength=\"40\">";
                  $resp .= "</div>";
                $resp .= "</div>";

                $resp .= "<div class=\"slds-col\">";
                  $resp .= "<div class=\"slds-form-element slds-is-required field\">";
                    $resp .= "<label class=\"slds-form-element__label\" for=\"lastname\">Last Name:</label> <input class=\"slds-input\" id=\"lastname\" type=\"text\" name=\"lastname\" required=\"required\" placeholder=\"Required information\" maxlength=\"80\">";
                  $resp .= "</div>";
                $resp .= "</div>";
              $resp .= "</div>";

              $resp .= "<div class=\"slds-grid\">";
                $resp .= "<div class=\"slds-col\">";
                  $resp .= "<div class=\"slds-form-element slds-is-required field\">";
                    $resp .= "<label class=\"slds-form-element__label\" for=\"selectCountry\">County:</label>";

                    $resp .= "<div class=\"slds-form-element__control field\">";
                      $resp .= "<select id=\"selectCountry\" class=\"slds-select\" name=\"county\">";
                        $resp .= "</select>";
                    $resp .= "</div>";
                  $resp .= "</div>";
                $resp .= "</div>";
              $resp .= "</div><br>";

              $resp .= "<div id=\"school_info\" class=\"slds-box\">";
                $resp .= "<div class=\"slds-form-element slds-is-required field\">";
                  $resp .= "<label class=\"slds-form-element__label\" for=\"selectSchool\">School:</label>";

                  $resp .= "<div class=\"slds-form-element__control field field\">";
                    $resp .= "<select name=\"school_id\" id=\"selectSchool\" class=\"slds-select\">";
                      $resp .= "</select>";
                  $resp .= "</div>";

                  $resp .= "<div class=\"slds-grid slds-wrap\">";
                    $resp .= "<div class=\"slds-col slds-size--1-of-4\">";
                      $resp .= "<div class=\"slds-form-element  field\">";
                        $resp .= "<label class=\"slds-form-element__label\" for=\"school_code\">School Code:</label> <input class=\"slds-input\" id=\"school_code\" type=\"text\" name=\"school_code\" placeholder=\"Required information\" maxlength=\"120\">";
                      $resp .= "</div>";
                    $resp .= "</div>";

                    $resp .= "<div class=\"slds-col slds-size--3-of-4\">";
                      $resp .= "<div class=\"slds-form-element slds-is-required field\">";
                        $resp .= "<label class=\"slds-form-element__label\" for=\"school_name\">School Name:</label> <input class=\"slds-input\" id=\"school_name\" type=\"text\" name=\"school_name\" required=\"required\" placeholder=\"Required information\" maxlength=\"120\">";
                      $resp .= "</div>";
                    $resp .= "</div>";
                  $resp .= "</div>";

                  $resp .= "<div class=\"slds-form-element slds-is-required field\">";
                    $resp .= "<label class=\"slds-form-element__label\" for=\"school_address\">School Street:</label>";
                    $resp .= "<textarea class=\"slds-textarea\" id=\"school_address\" name=\"school_address\" required=\"required\" placeholder=\"Required information\" maxlength=\"255\"></textarea>";
                  $resp .= "</div>";

                  $resp .= "<div class=\"slds-grid\">";
                    $resp .= "<div class=\"slds-col\">";
                      $resp .= "<div class=\"slds-form-element slds-is-required field\">";
                        $resp .= "<label class=\"slds-form-element__label\" for=\"school_city\">School City:</label> <input class=\"slds-input\" id=\"school_city\" type=\"text\" name=\"school_city\" required=\"required\" placeholder=\"Required information\" maxlength=\"40\">";
                      $resp .= "</div>";
                    $resp .= "</div>";

                    $resp .= "<div class=\"slds-col\">";
                      $resp .= "<div class=\"slds-form-element slds-is-required field\">";
                        $resp .= "<label class=\"slds-form-element__label\" for=\"school_zip\">School Zip/Postal Code:</label> <input class=\"slds-input\" id=\"school_zip\" type=\"text\" name=\"school_zip\" required=\"required\" pattern=\"[0-9]{5}(-?[0-9]{4})?\" placeholder=\"e.g. 90210\">";
                      $resp .= "</div>";
                    $resp .= "</div>";
                  $resp .= "</div>";

                  $resp .= "<div class=\"slds-grid\">";
                    $resp .= "<div class=\"slds-col\">";
                      $resp .= "<div class=\"slds-form-element slds-is-required field\">";
                        $resp .= "<label class=\"slds-form-element__label\" for=\"phone\">School Phone:</label> <input class=\"slds-input\" id=\"phone\" name=\"school_phone\" type=\"tel\" pattern=\"[0-9]{3}-?[0-9]{3}-?[0-9]{4}\" required=\"\" placeholder=\"e.g. 416-769-7093\" maxlength=\"12\">";
                      $resp .= "</div>";
                    $resp .= "</div>";

                    $resp .= "<div class=\"slds-col\">";
                      $resp .= "<div class=\"slds-form-element slds-is-required field\">";
                        $resp .= "<label class=\"slds-form-element__label\" for=\"school_email_address\">School Email Address:</label> <input class=\"slds-input\" id=\"school_email_address\" type=\"email\" name=\"school_email_address\" required=\"required\" placeholder=\"e.g. myuser@myschool.com\">";
                      $resp .= "</div>";
                    $resp .= "</div>";
                  $resp .= "</div>";

                  $resp .= "<div class=\"slds-form-element slds-is-required field\">";
                    $resp .= "<label class=\"slds-form-element__label\" for=\"phonecontact\">Contact Phone:</label> <input class=\"slds-input\" id=\"phonecontact\" name=\"contact_phone\" type=\"tel\" pattern=\"[0-9]{3}-?[0-9]{3}-?[0-9]{4}\" required=\"\" placeholder=\"e.g. 416-769-7093\" maxlength=\"12\">";
                  $resp .= "</div>";
                $resp .= "</div>";
              $resp .= "</div><br>";

              $resp .= "<div class=\"slds-form-element slds-is-required field\">";
                $resp .= "<label class=\"slds-form-element__label\" for=\"teaching_field\">Teaching Field/ Current Assignment:</label> <input class=\"slds-input\" id=\"teaching_field\" type=\"text\" name=\"teaching_field\" required=\"required\" placeholder=\"Required information\" maxlength=\"120\">";
              $resp .= "</div><br>";

              $resp .= "<div class=\"slds-form-element slds-is-required field\" style=\"float:none\">";
                $resp .= "<label class=\"slds-form-element__label\" for=\"curriculum_before\">Have you ever taught the Safer, Smarter Kids/Teens Curriculum before?</label><br>";
                $resp .= "<textarea class=\"slds-textarea\" id=\"curriculum_before\" name=\"curriculum_before\" required=\"required\" placeholder=\"Required information\" maxlength=\"255\"></textarea>";
              $resp .= "</div><br>";

              $resp .= "<fieldset class=\"slds-form--compound\">";
                $resp .= "<legend class=\"slds-form-element__label\">Safer, Smarter Schools Conference Dates:<br />Please choose which dates you would like to attend</legend>";

                $resp .= "<div class=\"form-element__group\">";
                  $resp .= "<div class=\"slds-form-element__row\">";
                    $resp .= "<label class=\"slds-checkbox slds-size--1-of-3\" for=\"feb16\"><input name=\"feb16\" type=\"checkbox\" id=\"feb16\" value=\"true\"> <span class=\"slds-form-element__label\"><strong>Feb. 16th</strong></span></label>";

                    $resp .= "<div id=\"div16\" class=\"slds-box\">";
                      $resp .= "<p>Choose one Afternoon Curriculum Session to attend:</p><label class=\"slds-radio slds-size--1-of-1\" for=\"Kindergarten16\"><input name=\"feb16_afternoon\" type=\"radio\" id=\"Kindergarten16\" value=\"Kindergarten\"> <span class=\"slds-form-element__label\">Kindergarten</span></label> <label class=\"slds-radio slds-size--1-of-1\" for=\"1Grade16\"><input name=\"feb16_afternoon\" type=\"radio\" id=\"1Grade16\" value=\"1st Grade\"> <span class=\"slds-form-element__label\">1st Grade</span></label> <label class=\"slds-radio slds-size--1-of-1\" for=\"2Grade16\"><input name=\"feb16_afternoon\" type=\"radio\" id=\"2Grade16\" value=\"2nd Grade\"> <span class=\"slds-form-element__label\">2nd Grade</span></label> <label class=\"slds-radio slds-size--1-of-1\" for=\"3Grade16\"><input name=\"feb16_afternoon\" type=\"radio\" id=\"3Grade16\" value=\"3rd Grade\"> <span class=\"slds-form-element__label\">3rd Grade</span></label> <label class=\"slds-radio slds-size--1-of-1\" for=\"4Grade16\"><input name=\"feb16_afternoon\" type=\"radio\" id=\"4Grade16\" value=\"4th Grade\"> <span class=\"slds-form-element__label\">4th Grade</span></label> <label class=\"slds-radio slds-size--1-of-1\" for=\"5Grade16\"><input name=\"feb16_afternoon\" type=\"radio\" id=\"5Grade16\" value=\"5th Grade\"> <span class=\"slds-form-element__label\">5th Grade</span></label> <label class=\"slds-radio slds-size--1-of-1\" for=\"MiddleSchool16\"><input name=\"feb16_afternoon\" type=\"radio\" id=\"MiddleSchool16\" value=\"Middle School\"> <span class=\"slds-form-element__label\">Middle School</span></label> <label class=\"slds-radio slds-size--1-of-1\" for=\"HighSchool16\"><input name=\"feb16_afternoon\" type=\"radio\" id=\"HighSchool16\" value=\"High School\"> <span class=\"slds-form-element__label\">High School</span></label>";
                    $resp .= "</div><label class=\"slds-checkbox slds-size--1-of-3\" for=\"feb17\"><input name=\"feb17\" type=\"checkbox\" id=\"feb17\" value=\"true\"> <span class=\"slds-form-element__label\"><strong>Feb. 17th</strong></span></label>";

                    $resp .= "<div id=\"div17\" class=\"slds-box\">";
                      $resp .= "<p>Choose two Morning Sessions to attend unless you choose a 2 hour session</p><label class=\"slds-checkbox slds-size--1-of-1\" for=\"ChildrenFamilies17\"><input name=\"ChildrenFamilies17\" type=\"checkbox\" id=\"ChildrenFamilies17\" value=\"true\"> <span class=\"slds-form-element__label\">Department of Children & Families</span></label> <label class=\"slds-checkbox slds-size--1-of-1\" for=\"Education17\"><input name=\"Education17\" type=\"checkbox\" id=\"Education17\" value=\"true\"> <span class=\"slds-form-element__label\">Department of Education</span></label> <label class=\"slds-checkbox slds-size--1-of-1\" for=\"Officers17\"><input name=\"Officers17\" type=\"checkbox\" id=\"Officers17\" value=\"true\"> <span class=\"slds-form-element__label\">School Resource Officers</span></label> <label class=\"slds-checkbox slds-size--1-of-1\" for=\"TraumaInformed17\"><input name=\"TraumaInformed17\" type=\"checkbox\" id=\"TraumaInformed17\" value=\"true\"> <span class=\"slds-form-element__label\">Trauma Informed Care (2 hours)</span></label> <label class=\"slds-checkbox slds-size--1-of-1\" for=\"Developmental17\"><input name=\"Developmental17\" type=\"checkbox\" id=\"Developmental17\" value=\"true\"> <span class=\"slds-form-element__label\">Developmental Delay Training</span></label> <label class=\"slds-checkbox slds-size--1-of-1\" for=\"Protection17\"><input name=\"Protection17\" type=\"checkbox\" id=\"Protection17\" value=\"true\"> <span class=\"slds-form-element__label\">Child Protection Team</span></label>";

                      $resp .= "<p>Choose one Afternoon Curriculum Session to attend:</p><label class=\"slds-radio slds-size--1-of-1\" for=\"Kindergarten17\"><input name=\"feb17_afternoon\" type=\"radio\" id=\"Kindergarten17\" value=\"Kindergarten\"> <span class=\"slds-form-element__label\">Kindergarten</span></label> <label class=\"slds-radio slds-size--1-of-1\" for=\"1Grade17\"><input name=\"feb17_afternoon\" type=\"radio\" id=\"1Grade17\" value=\"1st Grade\"> <span class=\"slds-form-element__label\">1st Grade</span></label> <label class=\"slds-radio slds-size--1-of-1\" for=\"2Grade17\"><input name=\"feb17_afternoon\" type=\"radio\" id=\"2Grade17\" value=\"2nd Grade\"> <span class=\"slds-form-element__label\">2nd Grade</span></label> <label class=\"slds-radio slds-size--1-of-1\" for=\"3Grade17\"><input name=\"feb17_afternoon\" type=\"radio\" id=\"3Grade17\" value=\"3rd Grade\"> <span class=\"slds-form-element__label\">3rd Grade</span></label> <label class=\"slds-radio slds-size--1-of-1\" for=\"4Grade17\"><input name=\"feb17_afternoon\" type=\"radio\" id=\"4Grade17\" value=\"4th Grade\"> <span class=\"slds-form-element__label\">4th Grade</span></label> <label class=\"slds-radio slds-size--1-of-1\" for=\"5Grade17\"><input name=\"feb17_afternoon\" type=\"radio\" id=\"5Grade17\" value=\"5th Grade\"> <span class=\"slds-form-element__label\">5th Grade</span></label> <label class=\"slds-radio slds-size--1-of-1\" for=\"MiddleSchool17\"><input name=\"feb17_afternoon\" type=\"radio\" id=\"MiddleSchool17\" value=\"Middle School\"> <span class=\"slds-form-element__label\">Middle School</span></label> <label class=\"slds-radio slds-size--1-of-1\" for=\"HighSchool17\"><input name=\"feb17_afternoon\" type=\"radio\" id=\"HighSchool17\" value=\"High School\"> <span class=\"slds-form-element__label\">High School</span></label>";
                    $resp .= "</div><label class=\"slds-checkbox slds-size--1-of-3\" for=\"feb18\"><input name=\"feb18\" type=\"checkbox\" id=\"feb18\" value=\"true\"> <span class=\"slds-form-element__label\"><strong>Feb. 18th</strong></span></label>";

                    $resp .= "<div id=\"div18\" class=\"slds-box\">";
                      $resp .= "<p>Choose two Morning Sessions to attend unless you choose a 2 hour session</p><label class=\"slds-checkbox slds-size--1-of-1\" for=\"ChildrenFamilies18\"><input name=\"ChildrenFamilies18\" type=\"checkbox\" id=\"ChildrenFamilies18\" value=\"true\"> <span class=\"slds-form-element__label\">Department of Children & Families</span></label> <label class=\"slds-checkbox slds-size--1-of-1\" for=\"Education18\"><input name=\"Education18\" type=\"checkbox\" id=\"Education18\" value=\"true\"> <span class=\"slds-form-element__label\">Department of Education</span></label> <label class=\"slds-checkbox slds-size--1-of-1\" for=\"Officers18\"><input name=\"Officers18\" type=\"checkbox\" id=\"Officers18\" value=\"true\"> <span class=\"slds-form-element__label\">School Resource Officers</span></label> <label class=\"slds-checkbox slds-size--1-of-1\" for=\"TraumaInformed18\"><input name=\"TraumaInformed18\" type=\"checkbox\" id=\"TraumaInformed18\" value=\"true\"> <span class=\"slds-form-element__label\">Trauma Informed Care (2 hours)</span></label> <label class=\"slds-checkbox slds-size--1-of-1\" for=\"Developmental18\"><input name=\"Developmental18\" type=\"checkbox\" id=\"Developmental18\" value=\"true\"> <span class=\"slds-form-element__label\">Developmental Delay Training</span></label> <label class=\"slds-checkbox slds-size--1-of-1\" for=\"Protection18\"><input name=\"Protection18\" type=\"checkbox\" id=\"Protection18\" value=\"true\"> <span class=\"slds-form-element__label\">Child Protection Team</span></label>";
                    $resp .= "</div>";
                  $resp .= "</div>";
                $resp .= "</div>";
              $resp .= "</fieldset><br>";

              $resp .= "<div class=\"slds-form-element slds-is-required field\">";
                $resp .= "<label class=\"slds-checkbox\" for=\"i_understand\"><input id=\"i_understand\" type=\"checkbox\" name=\"i_understand\" required=\"required\" value=\"true\"> <span class=\"slds-form-element__label\">I understand that by submitting an application to attend the Safer, Smarter Schools Conference that it does not guarantee my enrollment. Enrollment in the Conference will be completed after I receive and return the completed enrollment forms to the Lauren's Kids organization.</span></label>";
              $resp .= "</div><br>";
              $resp .= "<br>";

              $resp .= "<div class=\"slds-form-element field\" style=\"text-align:center;\">";
                $resp .= "<button class=\"slds-button slds-button--brand slds-m-top--medium\" type=\"submit\" style=\"color: #FFF;\">Submit</button>";
              $resp .= "</div>";
            $resp .= "</form>";
          $resp .= "</fieldset>";
        $resp .= "</div>";
      $resp .= "</div>";
    $resp .= "</div>";
  $resp .= "</div>";

/*
  $resp .= "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>";
  $resp .= "<script type=\"text/javascript\" src=\"".get_stylesheet_directory_uri()."/sf-form/new_application.js\"></script>";
  $resp .= "<script src=\"//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js\"></script>";
*/

	$resp .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>';
	$resp .= '<script type="text/javascript" src="'.get_stylesheet_directory_uri().'/sf-form2/new_application.js"></script>';
	$resp .= '<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>';
	$resp .= '<script type="text/javascript" src="'.get_stylesheet_directory_uri().'/sf-form2/nwxforms.js"></script>';
	$resp .= '<script type="text/javascript">window.onload = Function("nwxforms(this)");</script>';
	$resp .= '<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />';

  return $resp;
}
add_shortcode( 'application_form', 'application_form_func' );

?>