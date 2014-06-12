<?php 
/**
 * Theme Header for SSK landing page 
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class('landing-main'); ?>>