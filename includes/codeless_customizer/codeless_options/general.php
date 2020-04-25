<?php



	Kirki::add_panel( 'cl_general', array(
	    'priority'    => 5,
	    'type' => '',
	    'title'       => esc_attr__( 'General', 'aronia' ),
	    'tooltip' => esc_attr__( 'All General Options of theme', 'aronia' ),
	) );


	require_once 'general/site_options.php';
	require_once 'general/page_transitions.php';
	require_once 'general/instagram.php';
	require_once 'general/custom_codes.php';
	require_once 'general/lightbox.php';
	require_once 'general/socials.php';

	

		

	




	

	/* Custom Codes */
	

		
		global $cl_theme_mod_defaults;
		/*Kirki::add_field( 'cl_aronia', array(
			'type'        => 'codelessheader',
			'settings'    => 'header_builder',
			'label'       => esc_attr__( 'Header Builder', 'aronia' ),
			'section'     => 'cl_general_custom_codes',
			'default'     => $cl_theme_mod_defaults['header_builder'],
			'priority'    => 10,
			'choices'     => array(
				'language' => 'html',
				'theme'    => 'monokai',
				'height'   => 250,
			),
			'transport' => 'postMessage'
	
			
		) );*/
		
		
		

		





?>