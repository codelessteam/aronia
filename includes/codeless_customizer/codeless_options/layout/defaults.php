<?php

Kirki::add_section('cl_layout_defaults', array(
	'title' => esc_attr__('Site Defaults', 'aronia') ,
	'description' => 'Default Site Layout for all pages/posts/archives etc on this site. For specific post types you can change them on respective section',
	'panel' => 'cl_layout',
	'type' => '',
	'priority' => 7,
	'capability' => 'edit_theme_options'
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'layout',
    'label'    => esc_attr__( 'Layout', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'fullwidth',
    'choices'     => array(
        'fullwidth'  => esc_attr__( 'Fullwidth', 'aronia' ),
        'left_sidebar'  => esc_attr__( 'Left Sidebar', 'aronia' ),
        'right_sidebar'  => esc_attr__( 'Right Sidebar', 'aronia' )
    ),
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'fullwidth_content',
    'label'    => esc_attr__( 'Fullwidth Content', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 0,
    'choices'     => array(
        1  => esc_attr__( 'On', 'aronia' ),
        0  => esc_attr__( 'Off', 'aronia' )
    ),
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'wrapper_content',
    'label'    => esc_attr__( 'Wrapper Content', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 0,
    'choices'     => array(
        1  => esc_attr__( 'On', 'aronia' ),
        0  => esc_attr__( 'Off', 'aronia' )
    ),
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'header_divider_',
    'label'    => '',
    'section'  => 'cl_layout_defaults',
    'type'     => 'groupdivider',
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'header_color',
    'label'    => esc_attr__( 'Header Color', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'dark',
    'choices'     => array(
        'dark'  => esc_attr__( 'Dark', 'aronia' ),
        'light'  => esc_attr__( 'Light', 'aronia' )
    ),
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'header_transparent',
    'label'    => esc_attr__( 'Header Transparent', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 0,
    'choices'     => array(
        1  => esc_attr__( 'On', 'aronia' ),
        0  => esc_attr__( 'Off', 'aronia' )
    ),
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'page_header_divider_',
    'label'    => '',
    'section'  => 'cl_layout_defaults',
    'type'     => 'groupdivider',
));


Kirki::add_field( 'cl_aronia', array(
    'settings' => 'page_header_bool',
    'label'    => esc_attr__( 'Page Header Active', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults',
    'type'     => 'switch',
    'priority' => 10,
    'default'  => 1,
    'choices'     => array(
        1  => esc_attr__( 'On', 'aronia' ),
        0  => esc_attr__( 'Off', 'aronia' )
    ),
));


Kirki::add_field( 'cl_aronia', array(
    'type' => 'image',
    'settings' => 'page_header_bg_image',
    'label' => 'Page Header Image',
    'default' => '',
    'section'  => 'cl_layout_defaults',
    'transport' => 'refresh'
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'page_header_style',
    'label'    => esc_attr__( 'Page Header Style', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'with_breadcrumbs',
    'choices'     => array(
        'all_center'  => esc_attr__( 'All Center', 'aronia' ),
        'with_breadcrumbs'  => esc_attr__( 'With Breadcrumbs', 'aronia' )
    ),
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'page_header_color',
    'label'    => esc_attr__( 'Page Header Color', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults',
    'type'     => 'select',
    'priority' => 10,
    'default'  => 'dark',
    'choices'     => array(
        'dark'  => esc_attr__( 'Dark', 'aronia' ),
        'light'  => esc_attr__( 'Light', 'aronia' )
    ),
));

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'page_header_height',
    'label'    => esc_attr__( 'Page Header Height', 'aronia' ),
    'tooltip' => esc_attr__( '', 'aronia' ),
    'section'  => 'cl_layout_defaults',
    'type'     => 'slider',
    'choices'     => array(
        'min'  => '100',
        'max'  => '1600',
        'step' => '1',
    ),
    'priority' => 10,
    'default'  => '270'
));