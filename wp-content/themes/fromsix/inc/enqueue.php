<?php
/**
 * The main template file enqueue.php
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

// Admin CSS
function from6_load_admin_scripts( $hook ) {
  wp_register_style( 'from6-admin', get_template_directory_uri() . '/assets/css/admin.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'from6-admin' );
}

add_action( 'admin_enqueue_scripts', 'from6_load_admin_scripts' );

// Public  Scripts
function fromsix_load_scripts() {
	// css
	wp_enqueue_style( 'fromsix-reset-css', get_template_directory_uri() . '/assets/css/html5reset-1.6.1.css', array(), '1.6.1' );
	wp_enqueue_style( 'fromsix-en-fonts-css', get_template_directory_uri() . '/assets/css/en-fonts.css', array(), '1.0' );
	wp_enqueue_style( 'fromsix-slick-carousel-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.0' );
	wp_enqueue_style( 'fromsix-nav-css', get_template_directory_uri() . '/assets/css/style-nav.css', array(), '1.0' );
	wp_enqueue_style( 'fromsix-style', get_stylesheet_uri() );
	
	
	// header query
	// wp_enqueue_script( 'fromsix-modernizr-js', get_template_directory_uri() . '/js/modernizr.js', array(), '1.0' );
	
	// footer query
	//wp_enqueue_script( 'fromsix-jquery-js-321', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array(), '3.2.1' );
	//wp_enqueue_script( 'fromsix-jquery-js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.11.2', 'true' );

	if( is_front_page() ) :
		//wp_enqueue_script( 'fromsix-bcswipe-js', get_template_directory_uri() . '/assets/js/jquery.bcSwipe.min.js', array(), '1.0', 'true' );
	endif;

	//wp_enqueue_script( 'fromsix-jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js', array(), '1.0' );
	//wp_enqueue_script( 'fromsix-jquery-migrate-js', 'https://code.jquery.com/jquery-migrate-2.2.2.js', array(), '1.0', 'true' );
	wp_enqueue_script( 'fromsix-slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '3.0.2', 'true' );
	//wp_enqueue_script( 'fromsix-slick-carousel-js', get_template_directory_uri() . '/assets/js/slick.js', array(), '1.0', 'true' );
	wp_enqueue_script( 'fromsix-classie-js', get_template_directory_uri() . '/assets/js/classie.js', array(), '1.0', 'true' );
	wp_enqueue_script( 'fromsix-isotope-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), '1.0', 'true' );
	wp_enqueue_script( 'fromsix-isotope-imagesloaded-js', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.js', array(), '1.0', 'true' );
	//wp_enqueue_script( 'fromsix-isotope-columns-js', get_template_directory_uri() . '/assets/js/isotope.fit-columns.js', array(), '1.0', 'true' );
	wp_enqueue_script( 'fromsix-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0', 'true' );

	if ( ! is_admin() ) {
    //wp_enqueue_script( 'fromsix-main', TEMPLATE_DIR_URI . '/assets/js/main.min.js', [], "1.1.6", true );

    global $post;
    if ( ! empty( $post ) ) {
      if ( $post->post_type === 'works' ) {
				//wp_enqueue_script( 'from6-fancybox', TEMPLATE_DIR_URI . '/assets/js/fancybox.min.js', [ 'jquery' ], "1.0.0", true );
				
      }
    }
	}

}

add_action( 'wp_enqueue_scripts', 'fromsix_load_scripts' );


// Admin  Scripts
function fromsix_load_admin_scripts( $hook ) {
	if( 'toplevel_page_fromsix_options' != $hook ) {
		return;
	}
	wp_register_style( 'fromsix_admin', get_template_directory_uri() . '/assets/css/admin.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'fromsix_admin' );
}

add_action( 'admin_enqueue_scripts', 'fromsix_load_admin_scripts' );



// custom js for footer
function custom_script_footer(){ 
	//if ( is_page_template('page-works.php') ) :	?>
	<script>
		jQuery(document).ready(function( $ ) {
			/* Loading Page */
			$(window).on('load', function() { // makes sure the whole site is loaded 
					$('#status').fadeOut(); // will first fade out the loading animation 
					$('#preloader').delay(400).fadeOut('slow'); // will fade out the white DIV that covers the website. 
					$('body').delay(400).css({'overflow':'visible'});
			});


		});
	</script>
	<?php //endif; 
} 

add_action('wp_footer', 'custom_script_footer', 20);