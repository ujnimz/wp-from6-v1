<?php

/**
*	===========================
*	Add Custom Post Type
*	===========================
**/

// Add Testimonials
function fromsix_testimonials() {
	register_post_type( 'testimonial', array(
	  'labels' => array(
		'name' => 'Testimonials',
		'singular_name' => 'Testimonial',
	   ),
	  'description' => 'Testimonials from clients.',
	  'public' => true,
	  'menu_position' => 20,
	  'menu_icon' => 'dashicons-format-quote',
	  'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail' )
	));
}

add_action( 'init', 'fromsix_testimonials' );

// Add Services
function fromsix_services() {
	register_post_type( 'service', array(
	  'labels' => array(
		'name' => 'Services',
		'singular_name' => 'Service',
	   ),
	  'description' => 'Add services.',
	  'public' => true,
	  'menu_position' => 21,
	  'menu_icon' => 'dashicons-share-alt',
	  'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail' )
	));
}

add_action( 'init', 'fromsix_services' );

// Add Works
function fromsix_works() {
	register_post_type( 'work', array(
	  'labels' => array(
		'name' => 'Works',
		'singular_name' => 'Work',
	   ),
	  'description' => 'Add works.',
	  'public' => true,
	  'menu_position' => 22,
	  'menu_icon' => 'dashicons-portfolio',
	  'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail' )
	));
}
add_action( 'init', 'fromsix_works' );

// Ad Works Category Support
function fromsix_works_taxonomy() {
    register_taxonomy(
        'work-category',
        'work',
        array(
            'label' => __( 'Category' ),
            'rewrite' => array( 'slug' => 'work-category' ),
						'hierarchical' => true,
						'supports' => array( 'thumbnail' ),
        )
    );
}
add_action( 'init', 'fromsix_works_taxonomy' );


// Add Clientele
function fromsix_clientele() {
	register_post_type( 'clientele', array(
	  'labels' => array(
		'name' => 'Clientele',
		'singular_name' => 'Clientele',
	   ),
	  'description' => 'Add clientele.',
	  'public' => true,
	  'menu_position' => 23,
	  'menu_icon' => 'dashicons-screenoptions',
	  'supports' => array( 'title', 'custom-fields' )
	));
}
add_action( 'init', 'fromsix_clientele' );

// Add Team
function fromsix_team() {
	register_post_type( 'team', array(
	  'labels' => array(
			'name' => 'Team',
			'singular_name' => 'Team',
	   ),
	  'description' => 'Add team member.',
	  'public' => true,
	  'menu_position' => 20,
	  'menu_icon' => 'dashicons-businessman',
	  'supports' => array( 'title', 'custom-fields', 'thumbnail' )
	));
}
add_action( 'init', 'fromsix_team' );