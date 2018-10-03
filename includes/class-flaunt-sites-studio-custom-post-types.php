<?php
/**
 * Loads the Custom Post Types
 *
 * @package    Flaunt_Your_Studio
 * @subpackage Flaunt_Your_Studio/includes
 */

/**
 * Flush your rewrite rules.
 */
function fyc_flush_rewrite_rules() {
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'fyc_flush_rewrite_rules' );
add_action( 'wpmu_new_blog', 'fyc_flush_rewrite_rules' );


/**
 * Loads all Post Types
 */
function fyc_post_types() {

	// If current site is NOT main site, display the CPTs.
	if ( get_current_blog_id() === 1 ) {
		$show_in_menu = false;
	}

	global $show_in_menu;
	require_once 'cpts/projects.php';
	require_once 'cpts/orders.php';
}
add_action( 'init', 'fyc_post_types', 0 );
