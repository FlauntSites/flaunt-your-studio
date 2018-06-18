<?php

// Flush your rewrite rules
function fyc_flush_rewrite_rules() {
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'fyc_flush_rewrite_rules' );


/**
 * Sets up the Services Post Type
 * 
 */

if(get_current_blog_id() === 1){
	$show_in_menu = false;
}

// Register Custom Post Type
function fyc_custom_post_types() {

	global $show_in_menu;

	// Gets Client Post Type
	// require_once 'cpts/clients.php';
	// Gets Projects Post Type	
	require_once 'cpts/projects.php';
	// Gets Orders Post Type	
	require_once 'cpts/orders.php';

}
add_action( 'init', 'fyc_custom_post_types', 0 );




// Creates Client role in Users.
function fyc_define_client_user(){
	add_role(
		'client',
		__( 'Client' ),
		array(
			'read'         => true,  // true allows this capability
			'edit_posts'   => false,
		)
	);
}
add_action( 'init', 'fyc_define_client_user', 0 );