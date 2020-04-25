<?php

Kirki::add_section('cl_blog_single', array(
	'title' => esc_attr__('Single Post', 'aronia') ,
	'panel' => 'cl_blog',
	'type' => '',
	'priority' => 11,
	'capability' => 'edit_theme_options'
));


        Kirki::add_field( 'cl_aronia', array(
			'settings' => 'single_blog_share',
			'label'    => esc_attr__( 'Single Blog Shares', 'aronia' ),
			
			'section'  => 'cl_blog_single',
			'type'     => 'switch',
			'priority' => 10,
			'default'  => 0,
			'choices'     => array(
				1  => esc_attr__( 'On', 'aronia' ),
				0 => esc_attr__( 'Off', 'aronia' ),
			),
		) );

		Kirki::add_field( 'cl_aronia', array(
			'settings' => 'single_blog_tags',
			'label'    => esc_attr__( 'Single Blog Tags', 'aronia' ),
			
			'section'  => 'cl_blog_single',
			'type'     => 'switch',
			'priority' => 10,
			'default'  => 1,
			'choices'     => array(
				1  => esc_attr__( 'On', 'aronia' ),
				0 => esc_attr__( 'Off', 'aronia' ),
			),
		) );
		
		Kirki::add_field( 'cl_aronia', array(
			'settings' => 'single_blog_author_box',
			'label'    => esc_attr__( 'Single Blog Author Info', 'aronia' ),
			
			'section'  => 'cl_blog_single',
			'type'     => 'switch',
			'priority' => 10,
			'default'  => 0,
			'choices'     => array(
				1  => esc_attr__( 'On', 'aronia' ),
				0 => esc_attr__( 'Off', 'aronia' ),
			),
		) );

		

		Kirki::add_field( 'cl_aronia', array(
			'settings' => 'single_blog_related',
			'label'    => esc_attr__( 'Single Blog Related Posts', 'aronia' ),
			
			'section'  => 'cl_blog_single',
			'type'     => 'switch',
			'priority' => 10,
			'default'  => 0,
			'choices'     => array(
				1  => esc_attr__( 'On', 'aronia' ),
				0 => esc_attr__( 'Off', 'aronia' ),
			),
		) );

		Kirki::add_field( 'cl_aronia', array(
			'settings' => 'single_blog_pagination',
			'label'    => esc_attr__( 'Single Blog Pagination', 'aronia' ),
			
			'section'  => 'cl_blog_single',
			'type'     => 'switch',
			'priority' => 10,
			'default'  => 1,
			'choices'     => array(
				1  => esc_attr__( 'On', 'aronia' ),
				0 => esc_attr__( 'Off', 'aronia' ),
			),
		) );
		