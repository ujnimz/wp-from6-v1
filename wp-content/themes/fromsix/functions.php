<?php
/**
 * fromsix functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fromsix
 */
define( 'TEMPLATE_DIR_URI', get_template_directory_uri() );
define( 'IS_PLL_ENABLE', function_exists( 'pll_the_languages' ) );

if ( ! function_exists( 'fromsix_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fromsix_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fromsix, use a find and replace
		 * to change 'fromsix' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fromsix', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_theme_support('custom-background');

		// This theme uses wp_nav_menu() in one location.
		// Activate Custom Menus
		function fromsix_theme_support() {
			add_theme_support('menus');
			
			register_nav_menu('primary', 'Primary Header Navigation');
			register_nav_menu('footer', 'Footer Navigation');
		}
		add_action('init', 'fromsix_theme_support');

		// Add active class to nav
		function special_nav_class ($classes, $item) {
			if (in_array('current-menu-item', $classes) ){
					$classes[] = 'active ';
			}
			return $classes;
		}
		add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'fromsix_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'fromsix_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fromsix_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'fromsix_content_width', 640 );
}
add_action( 'after_setup_theme', 'fromsix_content_width', 0 );

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/template-widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/function-admin.php';

/**
 * Implement the Polylang feature.
 */
require get_parent_theme_file_path( '/inc/polylang/polylang-slug.php' );

/**
 * Register PLL Strings for Polylang.
 */
require get_parent_theme_file_path( '/inc/polylang/register-pll-strings.php' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Add Custom post types
*/
require get_template_directory().'/inc/post_types.php';

/**
 * Add Custom blocks to builder
*/
require get_template_directory().'/vc-elements/vc_int.php';


remove_filter('the_content', 'wpautop');
//add_filter('the_content', 'removeEmptyParagraphs',99999);

