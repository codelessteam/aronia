<?php

Kirki::add_panel( 'cl_layout', array(
	    'priority'    => 7,
	    'type' => '',
	    'title'       => esc_attr__( 'Layout', 'aronia' ),
	    'tooltip' => esc_attr__( 'Overall site layout options', 'aronia' ),
	) );


	require_once 'layout/site_layout.php';
	require_once 'layout/defaults.php';
	require_once 'layout/defaults_pages.php';
	require_once 'layout/defaults_posts.php';
	require_once 'layout/defaults_archives.php';


?>