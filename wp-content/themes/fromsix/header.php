<?php $TEMPLATE_DIR_URI = get_template_directory_uri();
session_start(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
  wp_head();
  $theme_options = get_fields('option');
  ?>
	
</head>
<body <?php body_class(); ?>>
<?php
get_template_part( 'template-parts/header/main', 'header' );
get_template_part( 'template-parts/header/part', 'svg-sprite' );