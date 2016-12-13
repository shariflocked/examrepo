<?php
/****************************************************
* Register wpbs_service post type
*****************************************************/
$labels = array(
	'name'                => _x( 'Services', 'Post Type General Name', 'newtheme' ),
	'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'newtheme' ),
	'all_items'           => __( 'All Services', 'newtheme' ),
	'view_item'           => __( 'View Service', 'newtheme' ),
	'add_new_item'        => __( 'Add New Service', 'newtheme' ),
	'add_new'             => __( 'Add New Service ', 'newtheme' ),
	'edit_item'           => __( 'Edit Service', 'newtheme' ),
	'update_item'         => __( 'Update Service', 'newtheme' ),
	'search_items'        => __( 'Search Services', 'newtheme' ),
	'not_found'           => __( 'Service Not found', 'newtheme' ),
	'not_found_in_trash'  => __( 'Service Not found in Trash', 'newtheme' ),
);
$args = array(
	'label'               => __( 'Service', 'newtheme' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
	'public'              => true,
	'show_in_menu'        => true,
	'menu_position'       => 21,
	'menu_icon'           => 'dashicons-smiley',
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'rewrite'             => array( 'slug' => 'service' ),
);
register_post_type( 'wpbs_service', $args );

/****************************************************
* Register custom taxonomy for faqs post type
*****************************************************/

$labels = array(
	'name'					=> _x( 'Service Categories', 'Taxonomy General Name', 'newtheme' ),
	'singular_name'			=> _x( 'Service Category', 'Taxonomy Singular Name', 'newtheme' ),
	'add_new_item'			=> __( 'Add New Service Category', 'newtheme' ),
	'edit_item'				=> __( 'Edit Service Category', 'newtheme' ),
	'update_item'			=> __( 'Update Service Category', 'newtheme' ),
	'add_or_remove_items'	=> __( 'Add or remove Service Category', 'newtheme' ),
);

$args = array(
	'labels'            => $labels,
	'public'            => true,
	'hierarchical'      => true,
	'rewrite'             => array( 'slug' => 'service_cat' ),
);

register_taxonomy( 'wpbs_service_cat', array( 'wpbs_service' ), $args );