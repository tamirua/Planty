<?php
/**
 * OceanWP Child Theme Functions
 *
 * When running a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions will be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {

	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update the theme).
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );

	// Load the stylesheet.
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
	
}

add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

function my_oceanwp_child_theme_setup() {
    register_nav_menus(array(
        'main_menu' => __('Main Menu', 'oceanwp-child'),
		'footer_menu' => __('Footer Menu', 'oceanwp-child')
    ));
}
add_action('after_setup_theme', 'my_oceanwp_child_theme_setup');




function add_admin_link_to_menu($items, $args) {
    // Check if the user is logged in
    if (is_user_logged_in()) {
        // Define the Admin link
        $admin_link = '<li id="menu-item-622"><a href="' . admin_url() . '">Admin</a></li>';
        // Append the Admin link to the existing menu items
        $items .= $admin_link;
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);

?>




