<?php
/**
 * coulrophobia functions and definitions
 *
 * @package coulrophobia
 */

if ( ! function_exists( 'coulrophobia_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function coulrophobia_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on coulrophobia, use a find and replace
	 * to change 'coulrophobia' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'coulrophobia', get_template_directory() . '/languages' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	//Supports thumbnails in posts
	add_theme_support( 'post-thumbnails' );

	//Change the default length of an post excerpt
	function coulrophobia_excerpt_length($length) {
		return 150;
	}
	add_filter('excerpt_length', 'coulrophobia_excerpt_length', 999);

	//Menus
	add_theme_support('menus');
	function register_theme_menus() {

		register_nav_menus(
			array('primary-menu' => "Primary Menu")
		);

	}

	add_action('init', 'register_theme_menus');

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'coulrophobia_custom_background_args', array(
		'default-color' => '#000000',
		'default-image' => get_template_directory_uri() . '/images/1600x1200.png',
		'default-repeat'         => 'no-repeat',
		'default-position-x'     => 'center',
		'default-position-y'     => 'top',
		'default-attachment'     => 'fixed',
	) ) );

	// Set up the WordPress core custom header feature.
	add_theme_support( 'custom-header', apply_filters( 'coulrophobia_custom_header_args', array(
		'default-image'          => get_template_directory_uri() . '/images/420x119.png',
		'random-default'         => false,
		'width'                  => 0,
		'height'                 => 0,
		'flex-height'            => false,
		'flex-width'             => false,
		'default-text-color'     => '',
		'header-text'            => true,
		'uploads'                => true,
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	) ) );

}
endif; // coulrophobia_setup
add_action( 'after_setup_theme', 'coulrophobia_setup' );




function coulrophobia_styles() {

	//oswald font
	wp_enqueue_style('googlefonts-oswald', 'http://fonts.googleapis.com/css?family=Oswald:400,300,700');

	//font-awesome
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/lib/font-awesome/css/font-awesome.min.css');

	//file create via gruntfile.js
	wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css');


}

add_action( 'wp_enqueue_scripts', 'coulrophobia_styles' );


function coulrophobia_scripts() {

	//jq ui, not needed currently
	// wp_enqueue_script('jquery-ui-js', get_template_directory_uri() . '/lib/jquery-ui/jquery-ui.js', array('jquery'), '', true);

	//lightbox
	wp_enqueue_script('lightbox-js', get_template_directory_uri() . '/lib/lightbox/js/lightbox.js', array('jquery'), '', true);

	//bootsrap
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js', array('jquery'), '', true);

	//imagesloaded
	wp_enqueue_script('imagesloaded-js', get_template_directory_uri() . '/js/imagesloaded.js', array('jquery'), '', true);

	//own scripts, dependend on jquery so document ready is not nesc.
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery','imagesloaded-js'), '', true);

}

add_action( 'wp_enqueue_scripts', 'coulrophobia_scripts' );


//Includes everything necessary for afc maps to work
function include_afc_maps() {

	wp_enqueue_script('gmaps-jsafc-js', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', true);
	wp_enqueue_script('afc-js', get_template_directory_uri() . '/js/afc-map.js', '', '', true);

	wp_enqueue_style('afc-css', get_template_directory_uri() . '/css/afc-map.css');

	add_action( 'wp_enqueue_scripts', 'afc_scripts_and_styles' );

}
//Only add if admin, caused problems in backend
if (!is_admin()) {
	//adds the possibilty, to just run the scrip at the start of the page
	add_action( 'wp_print_scripts', 'include_afc_maps');
}


// Register custom navigation walker fot bootstrap navigation
require_once('wp_bootstrap_navwalker.php');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function coulrophobia_widgets_init() {

	register_sidebar( array(
		'name'          => 'Shop right sidbar',
		'id'            => 'shop_sidebar_right',
		'before_widget' => '<div class="shop-sidebar-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div class="frontpage-sidebar-item text-center">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'News right sidebar',
		'id'            => 'news_right_1',
		'before_widget' => '<div class="news-sidebar-item text-center">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Footer bottom full',
		'id'            => 'footer_bottom_full',
		'before_widget' => '<div class="col-12">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Footer bottom',
		'id'            => 'footer_bottom',
		'before_widget' => '<div class="col-lg-4 col-sm-6">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'coulrophobia_widgets_init' );



//Woocommerce integration
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
echo '		<div class="col-xs-12">
				<h1 class="page-title no-top-margin">Shop</h1>
			</div>
		</div>
		<div class="row">
		<div class="col-md-8">';
}

function my_theme_wrapper_end() {
	echo '</div>';
}

add_action( 'woocommerce_before_shop_loop', 'wc_print_notices', 10 );
add_action( 'woocommerce_before_single_product', 'wc_print_notices', 10);
add_action( 'after_setup_theme', 'woocommerce_support' );

function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}


add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

/**
 * Removes a few unnecessary fields
 * @param  [type] $fields [description]
 * @return [type]         [description]
 */
function custom_override_checkout_fields( $fields ) {
	unset($fields['billing']['billing_address_2']);
	unset($fields['billing']['billing_company']);
	unset($fields['billing']['billing_phone']);
	$fields['billing']['billing_email']["class"] = array("form-row-wide");

	return $fields;
}

function IE8Support() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

}
add_action( 'wp_enqueue_scripts', 'IE8Support' );

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 24;' ), 20 );
