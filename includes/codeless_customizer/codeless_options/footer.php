<?php

Kirki::add_panel( 'cl_footer', array(
		'priority' => 12,
	    'type' => '',
	    'title'       => esc_attr__( 'Footer', 'aronia' ),
	    'tooltip' => esc_attr__( 'Footer Options and Layout', 'aronia' ),
	) );


	require_once 'footer/main.php';
	require_once 'footer/copyright.php';
	require_once 'footer/extra.php';

?>