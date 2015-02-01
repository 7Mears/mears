<?php
/**
 * Mears functions and definitions
 *
 * @package Mears
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'mears_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mears_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Mears, use a find and replace
	 * to change 'mears' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'mears', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	// register_nav_menus( array(
	// 	'primary' => __( 'Primary Menu', 'mears' ),
	// ) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'mears_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // mears_setup
add_action( 'after_setup_theme', 'mears_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function mears_widgets_init() {
	//Sidebar
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'mears' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Navigation
	register_sidebar( array(
		'name'          => __( 'Navigation', 'mears' ),
		'id'            => 'navigation',
		'description'   => 'This section is displayed in the navigation area.',
		'before_widget' => '<div id="%1$s" class="navigation-section %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="nav-title">',
		'after_title'   => '</h5>',
		) );

	//Home Top
	register_sidebar( array(
		'name'          => __( 'Home Top', 'mears' ),
		'id'            => 'hometop',
		'description'   => 'This section is displayed at the top of the home page.',
		'before_widget' => '<div class="home-top-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1>',
		'after_title'   => '</h1>',
		) );

	//Home Middle
	register_sidebar( array(
		'name'          => __( 'Home Middle', 'mears' ),
		'id'            => 'homemiddle',
		'description'   => 'This section is displayed at the middle of the home page.',
		'before_widget' => '<div class="home-middle-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
		) );

	//Home Bottom
	register_sidebar( array(
		'name'          => __( 'Home Bottom', 'mears' ),
		'id'            => 'homebottom',
		'description'   => 'This section is displayed at the bottom of the home page.',
		'before_widget' => '<div class="home-bottom-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
		) );

	//Footer
	register_sidebar( array(
		'name'          => __( 'Footer', 'mears' ),
		'id'            => 'footer',
		'description'   => 'This section is displayed at the bottom of every page and post.',
		'before_widget' => '<div class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
		) );
}
add_action( 'widgets_init', 'mears_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mears_scripts() {
	wp_enqueue_style( 'mears-style', get_stylesheet_uri() );

	wp_enqueue_script( 'mears-javascript', get_template_directory_uri() . '/js/script.min.js', array('jquery'), '20130115', true );

	wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Varela+Round|Fjalla+One');
	wp_enqueue_style( 'googleFonts');

	wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', array(), '4.0.3' );

}
add_action( 'wp_enqueue_scripts', 'mears_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
* Clean up wp_nav_menu
*/
//Deletes all CSS classes and id's, except for those listed in the array below
function custom_wp_nav_menu($var) {
	return is_array($var) ? array_intersect($var, array(
		//List of allowed menu classes
		'current_page_item',
		'current_page_parent',
		'current_page_ancestor',
		'first',
		'last',
		'vertical',
		'horizontal',
		'menu-item-has-children'
	)
	) : '';
}
add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
add_filter('page_css_class', 'custom_wp_nav_menu');
//Replaces "current-menu-item" with "active"
function current_to_active($text){
	$replace = array(
		//List of menu item classes that should be changed to "active"
		'current_page_item' => 'active',
		'current_page_parent' => 'active',
		'current_page_ancestor' => 'active',
	);
	$text = str_replace(array_keys($replace), $replace, $text);
	return $text;
}
add_filter ('wp_nav_menu','current_to_active');


add_action( 'after_setup_theme', 'lexicon_setup' );

// Remove meta links at header
remove_action( 'wp_head', 'wp_generator' ) ;
remove_action( 'wp_head', 'wlwmanifest_link' ) ;
remove_action( 'wp_head', 'rsd_link' ) ;
// Remove RSS feeds
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );


/**
* Load Enqueued Scripts in the Footer
*
* Automatically move JavaScript code to page footer, speeding up page loading time.
*/
function footer_enqueue_scripts() {
	remove_action('wp_head', 'wp_print_scripts');
		remove_action('wp_head', 'wp_print_head_scripts', 9);
		// remove_action('wp_head', 'wp_enqueue_scripts', 1);
		add_action('wp_footer', 'wp_print_scripts', 5);
		add_action('wp_footer', 'wp_enqueue_scripts', 5);
		add_action('wp_footer', 'wp_print_head_scripts', 5);
}
add_action('after_setup_theme', 'footer_enqueue_scripts');

/**
* Move admin bar to bottom on front-end only
*/

function fb_move_admin_bar() {
		echo '
		<style type="text/css">
		body {
		margin-top: -28px;
		padding-bottom: 28px;
		}
		body.admin-bar #wphead {
			padding-top: 0;
		}
		body.admin-bar #footer {
			padding-bottom: 28px;
		}
		#wpadminbar {
				top: auto !important;
				bottom: 0;
		}
		#wpadminbar .quicklinks .menupop ul {
				bottom: 28px;
		}
		</style>';
}

// on frontend area
add_action( 'wp_head', 'fb_move_admin_bar' );
