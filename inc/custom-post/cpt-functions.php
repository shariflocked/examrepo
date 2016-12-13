<?php
if ( !function_exists( 'newtheme_register_custom_post' ) ) : 

	// Function 'newtheme_register_custom_post' starts
	function newtheme_register_custom_post() {

		require get_template_directory().'/inc/custom-post/cpt-service.php';
		//require get_template_directory().'/inc/custom-post/cpt-portfolio.php';
		//require get_template_directory().'/inc/custom-post/cpt-slide.php';
		//require get_template_directory().'/inc/custom-post/cpt-brand.php';

	} 
	// Function 'newtheme_register_custom_post' ends


	add_action( 'init', 'newtheme_register_custom_post');
	// Hook into the 'init' action
	
	
endif;
// end of newtheme_register_custom_post function_exists