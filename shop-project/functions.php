<?php

/**
 * Fancy Lab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fancy Lab
 */
/**
 * Enqueue scripts and styles.
 */
function fancy_lab_scripts()
{
	//Bootstrap javascript and CSS files
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '4.3.1', true);
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.3.1', 'all');


	// Theme's main stylesheet
	wp_enqueue_style('fancy-lab-style', get_template_directory_uri() . '/css/style.css', 'all');
	wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/css/owl.carousel.css', array(), '', 'all');
	wp_enqueue_style('owl-default-css', get_template_directory_uri() . '/css/owl.theme.default.css', array(), '', 'all');

	// Google Fonts
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script');

	// Flexslider Javascript and CSS files
	wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/js/owl.carousel.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'fancy_lab_scripts');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fancy_lab_config()
{

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'fancy_lab_main_menu' 	=> 'Fancy Lab Main Menu',
			'fancy_lab_footer_menu' => 'Fancy Lab Footer Menu',
		)
	);

	// This theme is WooCommerce compatible, so we're adding support to WooCommerce
	add_theme_support('woocommerce', array(
		'thumbnail_image_width' => 255,
		'single_image_width'	=> 255,
		'product_grid' 			=> array(
			'default_rows'    => 10,
			'min_rows'        => 5,
			'max_rows'        => 10,
			'default_columns' => 3,
			'min_columns'     => 3,
			'max_columns'     => 3,
		)
	));
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');
	add_theme_support('post_thumbnails');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support('custom-logo', array(
		'height' 		=> 85,
		'width'			=> 160,
		'flex_height'	=> true,
		'flex_width'	=> true,
	));

	add_image_size('fancy-lab-slider', 1920, 800, array('center', 'center'));

	if (!isset($content_width)) {
		$content_width = 600;
	}
}
add_action('after_setup_theme', 'fancy_lab_config', 0);




/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 */
add_action('widgets_init', 'fancy_lab_sidebars');
function fancy_lab_sidebars()
{
	register_sidebar(array(
		'name'			=> 'Fancy Lab Main Sidebar',
		'id'			=> 'fancy-lab-sidebar-1',
		'description'	=> 'Drag and drop your widgets here',
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	));
	register_sidebar(array(
		'name'			=> 'Sidebar Shop',
		'id'			=> 'fancy-lab-sidebar-shop',
		'description'	=> 'Drag and drop your WooCommerce widgets here',
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	));
	register_sidebar(array(
		'name'			=> 'Sidebar 1',
		'id'			=> 'sidebar-footer1',
		'description'	=> 'Drag and drop your widgets here',
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	));
	register_sidebar(array(
		'name'			=> 'Sidebar 2',
		'id'			=> 'sidebar-footer2',
		'description'	=> 'Drag and drop your widgets here',
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	));
	register_sidebar(array(
		'name'			=> 'Sidebar 3',
		'id'			=> 'sidebar-footer3',
		'description'	=> 'Drag and drop your widgets here',
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	));
}


// First, remove Add to Cart Button and price
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 ); 
/**
 * Remove product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    // unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;
}

//  Output: removes woocommerce tabs
// remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

//removes sku section
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_filter( 'wc_product_sku_enabled', '__return_false' );

/* Woocommerce Remove excerpt from single product */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'the_content', 20 );
  
// Second, add View Product Button
add_action( 'woocommerce_after_shop_loop_item', 'bbloomer_view_product_button', 10 );
  
function bbloomer_view_product_button() {
global $product;
$link = $product->get_permalink();
echo '<a href="' . $link . '" class="button addtocartbutton">View Product</a>';
}