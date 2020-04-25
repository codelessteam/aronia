<?php

Kirki::add_panel( 'cl_blog', array(
	    'priority'    => 11,
	    'type' => '',
	    'title'       => esc_attr__( 'Blog', 'aronia' ),
	    'tooltip' => esc_attr__( 'All Blog Styles and options', 'aronia' ),
	) );


	require_once 'blog/archives.php';
	require_once 'blog/single.php';


?>