<?php

Kirki::add_section('cl_layout_defaults_posts', array(
	'title' => esc_attr__('Defaults for Posts', 'aronia') ,
	'description' => 'Default Site Layout for all pages on this site.',
	'panel' => 'cl_layout',
	'type' => '',
	'priority' => 7,
	'capability' => 'edit_theme_options'
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'overwrite_post_layout',
    'label'    => esc_attr__( 'Defaults for Posts', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults_posts',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'fullwidth',
    'choices'     => array(
        'default'  => esc_attr__( '--- Use Site Defaults ---', 'aronia' ),
        'custom'  => esc_attr__( 'Custom for Posts', 'aronia' )
    ),
    
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'layout_post',
    'description'    => esc_attr__( 'Layout', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults_posts',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'fullwidth',
    'choices'     => array(
        'fullwidth'  => esc_attr__( 'Fullwidth', 'aronia' ),
        'left_sidebar'  => esc_attr__( 'Left Sidebar', 'aronia' ),
        'right_sidebar'  => esc_attr__( 'Right Sidebar', 'aronia' )
    ),
    'required' => array(
        array(
			'setting' => 'overwrite_post_layout',
			'operator' => '==',
			'value' => 'custom',
		) ,
    )
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'fullwidth_content_post',
    'description'    => esc_attr__( 'Fullwidth Content', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults_posts',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 0,
    'choices'     => array(
        1  => esc_attr__( 'On', 'aronia' ),
        0  => esc_attr__( 'Off', 'aronia' )
    ),
    'required' => array(
        array(
			'setting' => 'overwrite_post_layout',
			'operator' => '==',
			'value' => 'custom',
		) ,
    )
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'wrapper_content_post',
    'description'    => esc_attr__( 'Wrapper Content', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults_posts',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 0,
    'choices'     => array(
        1  => esc_attr__( 'On', 'aronia' ),
        0  => esc_attr__( 'Off', 'aronia' )
    ),
    'required' => array(
        array(
			'setting' => 'overwrite_post_layout',
			'operator' => '==',
			'value' => 'custom',
		) ,
    )
));


Kirki::add_field( 'cl_aronia', array(
    'settings' => 'header_color_post',
    'description'    => esc_attr__( 'Header Color', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults_posts',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'dark',
    'choices'     => array(
        'dark'  => esc_attr__( 'Dark', 'aronia' ),
        'light'  => esc_attr__( 'Light', 'aronia' )
    ),
    'required' => array(
        array(
			'setting' => 'overwrite_post_layout',
			'operator' => '==',
			'value' => 'custom',
		) ,
    )
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'header_transparent_post',
    'description'    => esc_attr__( 'Header Transparent', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults_posts',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 0,
    'choices'     => array(
        1  => esc_attr__( 'On', 'aronia' ),
        0  => esc_attr__( 'Off', 'aronia' )
    ),
    'required' => array(
        array(
			'setting' => 'overwrite_post_layout',
			'operator' => '==',
			'value' => 'custom',
		) ,
    )
));


Kirki::add_field( 'cl_aronia', array(
    'settings' => 'post_header_color',
    'label'    => esc_attr__( 'Post Header Color', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults_posts',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'light',
    'choices'     => array(
        'dark'  => esc_attr__( 'Dark', 'aronia' ),
        'light'  => esc_attr__( 'Light', 'aronia' )
    ),
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'post_header_layout',
    'label'    => esc_attr__( 'Post Header Layout', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults_posts',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'fullwidth',
    'choices'     => array(
        'container'  => esc_attr__( 'Container', 'aronia' ),
        'fullwidth'  => esc_attr__( 'Fullwidth', 'aronia' )
    ),
));