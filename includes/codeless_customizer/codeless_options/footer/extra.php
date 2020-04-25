<?php

Kirki::add_section('cl_footer_extra', array(
	'title' => esc_attr__('Extra', 'aronia') ,
	'tooltip' => esc_attr__('Main Footer Options', 'aronia') ,
	'panel' => 'cl_footer',
	'type' => '',
	'priority' => 12,
	'capability' => 'edit_theme_options'
));


Kirki::add_field( 'cl_aronia', array(
    'settings' => 'topfooter_section',
    'label'    => esc_attr__( 'Top Footer Section', 'aronia' ),
    'tooltip' => esc_attr__( 'Add subscribe (stay in touch) section on footer', 'aronia' ),
    'section'  => 'cl_footer_extra',
    'type'     => 'switch',
    'priority' => 10,
    'default'  => 0,
    'choices'     => array(
        1  => esc_attr__( 'On', 'aronia' ),
        0 => esc_attr__( 'Off', 'aronia' ),
    ),
    'transport' => 'refresh',

) );

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'topfooter_section_image',
    'description'    => esc_attr__( 'Top Footer Section Image', 'aronia' ),

    'section'  => 'cl_footer_extra',
    'type'     => 'image',
    'priority' => 10,
    'default' => get_template_directory_uri() . '/img/subscribe-section.jpg',
    'choices'     => array(
        1  => esc_attr__( 'On', 'aronia' ),
        0 => esc_attr__( 'Off', 'aronia' ),
    ),
    'transport' => 'refresh',
    'required'    => array(
        array(
            'setting'  => 'topfooter_section',
            'operator' => '==',
            'value'    => true,
            'transport' => 'postMessage'
        ),
                    
    ),
) );

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'topfooter_section_container',
    'description'    => esc_attr__( 'Top Footer Section Container', 'aronia' ),

    'section'  => 'cl_footer_extra',
    'type'     => 'select',
    'priority' => 10,
    'default' => 'container',
    'choices'     => array(
        'container'  => esc_attr__( 'Container', 'aronia' ),
        'container-fluid' => esc_attr__( 'Fullwidth', 'aronia' ),
    ),
    'transport' => 'refresh',
    'required'    => array(
        array(
            'setting'  => 'topfooter_section',
            'operator' => '==',
            'value'    => true,
            'transport' => 'postMessage'
        ),
                    
    ),
) );


Kirki::add_field( 'cl_aronia', array(
    'settings' => 'footer_instafeed',
    'label'    => esc_attr__( 'Footer Instafeed Row', 'aronia' ),
    'tooltip' => esc_attr__( 'Add Instagram Row', 'aronia' ),
    'section'  => 'cl_footer_extra',
    'type'     => 'switch',
    'priority' => 10,
    'default'  => 0,
    'choices'     => array(
        1  => esc_attr__( 'On', 'aronia' ),
        0 => esc_attr__( 'Off', 'aronia' ),
    ),
    'transport' => 'refresh',

) );

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'footer_instafeed_container',
    'description'    => esc_attr__( 'Footer Instafeed Container', 'aronia' ),

    'section'  => 'cl_footer_extra',
    'type'     => 'select',
    'priority' => 10,
    'default' => 'container',
    'choices'     => array(
        'container'  => esc_attr__( 'Container', 'aronia' ),
        'container-fluid' => esc_attr__( 'Fullwidth', 'aronia' ),
    ),
    'transport' => 'refresh',
    'required'    => array(
        array(
            'setting'  => 'footer_instafeed',
            'operator' => '==',
            'value'    => true,
            'transport' => 'postMessage'
        ),
                    
    ),
) );

Kirki::add_field( 'cl_aronia', array(
    'settings' => 'footer_instafeed_title',
    'description'    => esc_attr__( 'Footer Instafeed Title', 'aronia' ),

    'section'  => 'cl_footer_extra',
    'type'     => 'text',
    'priority' => 10,
    'default' => 'Instafeed @aronia',
    
    'transport' => 'refresh',
    'required'    => array(
        array(
            'setting'  => 'footer_instafeed',
            'operator' => '==',
            'value'    => true,
            'transport' => 'postMessage'
        ),
                    
    ),
) );