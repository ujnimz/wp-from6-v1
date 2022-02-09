<?php
/**
 * The main template file function-admin.php
 *
 * This is a custom WordPress theme developed by Ujith Nimantha
 * Developed for From6 Communications W.L.L. - Kingdom of Bahrain.
 * HTML Design and development by Ujith Nimantha
 * 2018
 * @link https://from6.com/
 *
 * @package WordPress (Version 4.9.8)
 * @subpackage fromsix
 * @since 1.0
 * @version 1.0
 */


/**
*	===========================
*	Head fucntions
*	===========================
**/
// Remove WP version from meta tags in header
function fromsix_remove_wp_version() {
	return '';
}

add_filter('the_generator', 'fromsix_remove_wp_version');


/**
*	===========================
*	Add options page
*	===========================
**/
if( function_exists('acf_add_options_page') ) {

	// add parent
	$parent = acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title' 	=> 'Theme Settings',
			'redirect' 		=> false
	));

	acf_add_options_sub_page(array(
			'page_title' 	=> 'Header Settings',
			'menu_title' 	=> 'Header',
			'parent_slug' 	=> $parent['menu_slug'],
	));
	acf_add_options_sub_page(array(
			'page_title' 	=> 'Social Settings',
			'menu_title' 	=> 'Social',
			'parent_slug' 	=> $parent['menu_slug'],
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Contacts Settings',
		'menu_title' 	=> 'Contacts',
		'parent_slug' 	=> $parent['menu_slug'],
));
	acf_add_options_sub_page(array(
			'page_title' 	=> 'Footer Settings',
			'menu_title' 	=> 'Footer',
			'parent_slug' 	=> $parent['menu_slug'],
	));
}