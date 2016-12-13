<?php 
add_action( 'cmb2_admin_init', 'newtheme_register_service_metabox' );

function newtheme_register_service_metabox() {
	$prefix = 'wpbs_';

	$cmb_service = new_cmb2_box( array(
		'id'            => $prefix . 'service_metabox',
		'title'         => __( 'Additional informations', 'cmb2' ),
		'object_types'  => array( 'wpbs_service', ), // service type
	) );

	$cmb_service->add_field( array(
		'name'       => __( 'service-icon', 'cmb2' ),
		'desc'       => __( 'Put your image url here', 'cmb2' ),
		'id'         => $prefix . 'service_icon',
		'type'       => 'text',
	) );

	$cmb_service->add_field( array(
		'name'       => __( 'Mobile', 'cmb2' ),
		'desc'       => __( 'Put your image url here', 'cmb2' ),
		'id'         => $prefix . 'mobile_number',
		'type'       => 'text',
	) );

}