<?php
/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://flauntsites.com
 * @since      1.0.0
 *
 * @package    Flaunt_Your_Studio
 * @subpackage Flaunt_Your_Studio/includes
 */

/**
 * Creates Client role in Users.
 */
function fyc_define_client_user() {
	add_role( 'client', __( 'Client' ),
		array(
			'read'       => true,
			'edit_posts' => false,
		)
	);
}
add_action( 'init', 'fyc_define_client_user', 0 );

