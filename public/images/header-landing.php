<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/style.css?ver=21231231222229" type="text/css" media="all">
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

</head>

<body <?php body_class(); ?>>