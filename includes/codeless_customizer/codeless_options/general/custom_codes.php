<?php

/* Custom Codes */
Kirki::add_section( 'cl_general_custom_codes', array(
    'title'          => esc_attr__( 'Custom Codes', 'aronia' ),
    'description'    => esc_attr__( 'HTML, JS, CSS custom codes. Add Google Analytics or anything else.', 'aronia' ),
    'panel'          => 'cl_general',
    'priority'       => 5,
    'type'			 => '',
    'capability'     => 'edit_theme_options'
) );


    Kirki::add_field( 'cl_aronia', array(
        'type'        => 'code',
        'settings'    => 'custom_css',
        'label'       => esc_attr__( 'Custom CSS', 'aronia' ),
        'section'     => 'cl_general_custom_codes',
        'default'     => '',
        'priority'    => 10,
        'choices'     => array(
            'language' => 'css',
            'theme'    => 'monokai',
            'height'   => 250,
        ),
        'transport' => 'postMessage'
    ) );

    Kirki::add_field( 'cl_aronia', array(
        'type'        => 'code',
        'settings'    => 'custom_html',
        'label'       => esc_attr__( 'Custom HTML', 'aronia' ),
        'section'     => 'cl_general_custom_codes',
        'default'     => '',
        'priority'    => 10,
        'choices'     => array(
            'language' => 'html',
            'theme'    => 'monokai',
            'height'   => 250,
        ),
        'transport' => 'postMessage'
    ) );

?>