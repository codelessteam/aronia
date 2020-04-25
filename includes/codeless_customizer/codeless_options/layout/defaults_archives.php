<?php

Kirki::add_section('cl_layout_defaults_archives', array(
	'title' => esc_attr__('Defaults for Archives', 'aronia') ,
	'description' => 'Default Site Layout for all archives on this site. For specific post types you can change them on respective section',
	'panel' => 'cl_layout',
	'type' => '',
	'priority' => 7,
	'capability' => 'edit_theme_options'
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'overwrite_archive_layout',
    'label'    => esc_attr__( 'Defaults for Archives', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults_archives',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'fullwidth',
    'choices'     => array(
        'default'  => esc_attr__( '--- Use Site Defaults ---', 'aronia' ),
        'custom'  => esc_attr__( 'Custom for Archives', 'aronia' )
    ),
    
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'layout_archive',
    'description'    => esc_attr__( 'Layout', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults_archives',
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
			'setting' => 'overwrite_archive_layout',
			'operator' => '==',
			'value' => 'custom',
		) ,
    )
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'fullwidth_content_archive',
    'description'    => esc_attr__( 'Fullwidth Content', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults_archives',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 0,
    'choices'     => array(
        1  => esc_attr__( 'On', 'aronia' ),
        0  => esc_attr__( 'Off', 'aronia' )
    ),
    'required' => array(
        array(
			'setting' => 'overwrite_archive_layout',
			'operator' => '==',
			'value' => 'custom',
		) ,
    )
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'wrapper_content_archive',
    'description'    => esc_attr__( 'Wrapper Content', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults_archives',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 0,
    'choices'     => array(
        1  => esc_attr__( 'On', 'aronia' ),
        0  => esc_attr__( 'Off', 'aronia' )
    ),
    'required' => array(
        array(
			'setting' => 'overwrite_archive_layout',
			'operator' => '==',
			'value' => 'custom',
		) ,
    )
));


Kirki::add_field( 'cl_aronia', array(
    'settings' => 'header_color_archive',
    'description'    => esc_attr__( 'Header Color', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults_archives',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'dark',
    'choices'     => array(
        'dark'  => esc_attr__( 'Dark', 'aronia' ),
        'light'  => esc_attr__( 'Light', 'aronia' )
    ),
    'required' => array(
        array(
			'setting' => 'overwrite_archive_layout',
			'operator' => '==',
			'value' => 'custom',
		) ,
    )
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'header_transparent_archive',
    'description'    => esc_attr__( 'Header Transparent', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults_archives',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 0,
    'choices'     => array(
        1  => esc_attr__( 'On', 'aronia' ),
        0  => esc_attr__( 'Off', 'aronia' )
    ),
    'required' => array(
        array(
			'setting' => 'overwrite_archive_layout',
			'operator' => '==',
			'value' => 'custom',
		) ,
    )
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'page_header_bool_archive',
    'label'    => esc_attr__( 'Page Header Active', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults_archives',
    'type'     => 'switch',
    'priority' => 10,
    'default'  => 1,
    'choices'     => array(
        1  => esc_attr__( 'On', 'aronia' ),
        0  => esc_attr__( 'Off', 'aronia' )
    ),
    'required' => array(
        array(
			'setting' => 'overwrite_archive_layout',
			'operator' => '==',
			'value' => 'custom',
		) ,
    )
));


Kirki::add_field( 'cl_aronia', array(
    'type' => 'image',
    'settings' => 'page_header_bg_image_archive',
    'description' => 'Page Header Image',
    'default' => '',
    'section'  => 'cl_layout_defaults_archives',
    'transport' => 'refresh',
    'required' => array(
        array(
			'setting' => 'overwrite_archive_layout',
			'operator' => '==',
			'value' => 'custom',
		) ,
    )
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'page_header_style_archive',
    'description'    => esc_attr__( 'Page Header Style', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults_archives',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'with_breadcrumbs',
    'choices'     => array(
        'all_center'  => esc_attr__( 'All Center', 'aronia' ),
        'with_breadcrumbs'  => esc_attr__( 'With Breadcrumbs', 'aronia' )
    ),
    'required' => array(
        array(
			'setting' => 'overwrite_archive_layout',
			'operator' => '==',
			'value' => 'custom',
		) ,
    )
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'page_header_color_archive',
    'description'    => esc_attr__( 'Page Header Color', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults_archives',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'dark',
    'choices'     => array(
        'dark'  => esc_attr__( 'Dark', 'aronia' ),
        'light'  => esc_attr__( 'Light', 'aronia' )
    ),
    'required' => array(
        array(
			'setting' => 'overwrite_archive_layout',
			'operator' => '==',
			'value' => 'custom',
		) ,
    )
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'page_header_height_archive',
    'description'    => esc_attr__( 'Page Header Height', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults_archives',
    'type'     => 'slider',
    'choices'     => array(
        'min'  => '100',
        'max'  => '1600',
        'step' => '1',
    ),
    'required' => array(
        array(
			'setting' => 'overwrite_archive_layout',
			'operator' => '==',
			'value' => 'custom',
		) ,
    ),
    'priority' => 10,
    'default'  => '270'
));
