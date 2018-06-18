<?php 

$labels = array(
		'name'                  => _x( 'Orders', 'Post Type General Name', 'fyc' ),
		'singular_name'         => _x( 'Order', 'Post Type Singular Name', 'fyc' ),
		'menu_name'             => __( 'Orders', 'fyc' ),
		'name_admin_bar'        => __( 'Order', 'fyc' ),
		'archives'              => __( 'Order Archives', 'fyc' ),
		'attributes'            => __( 'Order Attributes', 'fyc' ),
		'parent_item_colon'     => __( 'Parent Item:', 'fyc' ),
		'all_items'             => __( 'All Orders', 'fyc' ),
		'add_new_item'          => __( 'Add New Order', 'fyc' ),
		'add_new'               => __( 'Add New', 'fyc' ),
		'new_item'              => __( 'New Order', 'fyc' ),
		'edit_item'             => __( 'Edit Order', 'fyc' ),
		'update_item'           => __( 'Update Order', 'fyc' ),
		'view_item'             => __( 'View Order', 'fyc' ),
		'view_items'            => __( 'View Order', 'fyc' ),
		'search_items'          => __( 'Search Order', 'fyc' ),
		'not_found'             => __( 'Not found', 'fyc' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'fyc' ),
		'featured_image'        => __( 'Featured Image', 'fyc' ),
		'set_featured_image'    => __( 'Set featured image', 'fyc' ),
		'remove_featured_image' => __( 'Remove featured image', 'fyc' ),
		'use_featured_image'    => __( 'Use as featured image', 'fyc' ),
		'insert_into_item'      => __( 'Insert into Order', 'fyc' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Order', 'fyc' ),
		'items_list'            => __( 'Orders list', 'fyc' ),
		'items_list_navigation' => __( 'Orders list navigation', 'fyc' ),
		'filter_items_list'     => __( 'Filter Orders list', 'fyc' ),
	);
	$args = array(
		'label'                 => __( 'Order', 'fyc' ),
		'description'           => __( 'Your orders. Duh!', 'fyc' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		// 'public'                => true,   //Causes bugs when enabled. Pages post type do not show in Admin. ??Huh??
		'show_ui'               => true,
		'show_in_menu'          => $show_in_menu,
		'menu_position'         => 14,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		// 'publicly_queryable'    => true,   //Causes bugs when enabled. Pages post type do not show in Admin. ??Huh??
		'rewrite'               => false,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'rest_base'             => 'order',
	);
	register_post_type( 'order', $args );