<?php
/**
 * pawsgang functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pawsgang
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pawsgang_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on pawsgang, use a find and replace
		* to change 'pawsgang' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'pawsgang', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'pawsgang' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'pawsgang_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'pawsgang_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pawsgang_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pawsgang_content_width', 640 );
}
add_action( 'after_setup_theme', 'pawsgang_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
 * Enqueue scripts and styles.
 */
function pawsgang_scripts() {
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css' );
	wp_enqueue_style( 'pawsgang', get_stylesheet_uri(), array(), _S_VERSION );
	//wp_enqueue_style( 'main', get_theme_file_uri( 'css/main.css' ) );
	wp_style_add_data( 'pawsgang-style', 'rtl', 'replace' );
	wp_enqueue_style( 'fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' );


	

	wp_enqueue_script( 'pawsgang-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' , array(), '', true);
}
add_action( 'wp_enqueue_scripts', 'pawsgang_scripts' );

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

function ecompress_footer_widget_one(){
	$args = array(
		'name'          => __( 'Footer Column One', 'textdomain' ),
		'id'            => 'footer-widget-one',
		'description'   => __( 'column one', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="title">',
		'after_title'   => '</h2>',
	);

	register_sidebar( $args );
}

add_action( 'widgets_init', 'ecompress_footer_widget_one' );

function ecompress_footer_widget_two(){
	$args = array(
		'name'          => __( 'Footer Column two', 'textdomain' ),
		'id'            => 'footer-widget-two',
		'description'   => __( 'column two', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="title">',
		'after_title'   => '</h2>',
	);

	register_sidebar( $args );
}

add_action( 'widgets_init', 'ecompress_footer_widget_two' );

function ecompress_footer_widget_three(){
	$args = array(
		'name'          => __( 'Footer Column three', 'textdomain' ),
		'id'            => 'footer-widget-three',
		'description'   => __( 'column three', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="title">',
		'after_title'   => '</h2>',
	);

	register_sidebar( $args );
}

add_action( 'widgets_init', 'ecompress_footer_widget_three' );

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
//remove_filter('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
remove_filter( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_filter( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
remove_filter( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 10 );

function simpleshop_product_add_to_cart_text( $text ) {
	return '<i class="fa fa-shopping-basket"></i>';
}

add_filter( 'woocommerce_product_add_to_cart_text', 'simpleshop_product_add_to_cart_text' );

function simpleshop_before_shop_loop_item() {
	echo '<div class="product-wrap">';
}

add_action( 'woocommerce_before_shop_loop_item', 'simpleshop_before_shop_loop_item' );

function simpleshop_before_shop_loop_item_title() {
	echo '</div><div class="woocommerce-product-title-wrap">';
}

add_action( 'woocommerce_before_shop_loop_item_title', 'simpleshop_before_shop_loop_item_title' );

add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 11 );
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price' );

function simpleshop_after_shop_loop_item_title() {
	echo '<a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a></div>';
}

add_action( 'woocommerce_after_shop_loop_item_title', 'simpleshop_after_shop_loop_item_title' );
