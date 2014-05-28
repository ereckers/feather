<?php
/**
 * Header Template
 *
 * The header template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the top of the file. It is used mostly as an opening
 * wrapper, which is closed with the footer.php file. It also executes key functions needed
 * by the theme, child themes, and plugins.
 *
 * @package Feather
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="shortcut icon" href="<?php echo site_url(); ?>/favicon.ico?v=1.0.1" type="image/x-icon">
<link rel="icon" href="<?php echo site_url(); ?>/favicon.ico?v=1.0.1" type="image/x-icon">
<?php wp_head(); ?>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries for Bootstrap -->
<!--[if lt IE 9]>
<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>

<?php get_template_part( 'templates/header' ); ?>

