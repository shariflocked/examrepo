<?php 
add_action( 'cmb2_admin_init', 'newtheme_register_page_metabox' );

function newtheme_register_page_metabox() {
	$prefix = 'wpbs_';

	$cmb_page = new_cmb2_box( array(
		'id'            => $prefix . 'page_metabox',
		'title'         => __( 'Additional informations', 'cmb2' ),
		'object_types'  => array( 'page', ), // page type
	) );

	$cmb_page->add_field( array(
		'name'       => __( 'Image Link', 'cmb2' ),
		'desc'       => __( 'Put your image url here', 'cmb2' ),
		'id'         => $prefix . 'image_link',
		'type'       => 'text',
	) );

	$cmb_page->add_field( array(
		'name'       => __( 'Mobile', 'cmb2' ),
		'desc'       => __( 'Put your image url here', 'cmb2' ),
		'id'         => $prefix . 'mobile_number',
		'type'       => 'text',
	) );

}