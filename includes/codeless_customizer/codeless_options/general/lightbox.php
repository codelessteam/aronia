<?php

Kirki::add_section( 'cl_general_lightbox', array(
    'title'          => esc_attr__( 'Lightbox', 'aronia' ),
    'description'    => esc_attr__( 'Lightbox Options', 'aronia' ),
    'panel'          => 'cl_general',
    'priority'       => 160,
    'type'			 => '',
    'capability'     => 'edit_theme_options'
) );
    

    Kirki::add_field( 'cl_aronia', array(
        'type'        => 'select',
        'settings'    => 'lightbox_skin',
        'label'       => esc_attr__( 'Lightbox Skin', 'aronia' ),
        'section'     => 'cl_general_lightbox',
        'default'     => 'dark',
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => array(
            'dark' => 'Dark',
            'light' => 'Light',
            'parade' => 'Parade',
            'smooth' => 'Smooth',
            'metro-black' => 'Metro-Black',
            'metro-white' => 'Metro-White',
            'mac' => 'Mac'
        ),
    
    ));

    Kirki::add_field( 'cl_aronia', array(
        'type'        => 'select',
        'settings'    => 'lightbox_path',
        'label'       => esc_attr__( 'Lightbox Path', 'aronia' ),
        'section'     => 'cl_general_lightbox',
        'default'     => 'vertical',
        'priority'    => 5,
        'multiple'    => 1,
        'choices'     => array(
            'vertical' => 'Vertical',
            'horizontal' => 'Horizontal',
        ),
    
    ));
    
    Kirki::add_field( 'cl_aronia', array(
        'settings' => 'lightbox_mousewheel',
        'label'    => esc_attr__( 'Lightbox Mousewheel', 'aronia' ),
        'section'  => 'cl_general_lightbox',
        'type'     => 'switch',
        'priority' => 10,
        'default'  => 0,
        'choices'     => array(
            1  => esc_attr__( 'Enable', 'aronia' ),
            0 => esc_attr__( 'Disable', 'aronia' ),
        ),
    ) );

    Kirki::add_field( 'cl_aronia', array(
        'settings' => 'lightbox_toolbar',
        'label'    => esc_attr__( 'Lightbox Toolbar', 'aronia' ),
        'section'  => 'cl_general_lightbox',
        'type'     => 'switch',
        'priority' => 10,
        'default'  => 1,
        'choices'     => array(
            1  => esc_attr__( 'Enable', 'aronia' ),
            0 => esc_attr__( 'Disable', 'aronia' ),
        ),
    ) );

    Kirki::add_field( 'cl_aronia', array(
        'settings' => 'lightbox_arrows',
        'label'    => esc_attr__( 'Lightbox Arrows', 'aronia' ),
        'section'  => 'cl_general_lightbox',
        'type'     => 'switch',
        'priority' => 10,
        'default'  => 1,
        'choices'     => array(
            1  => esc_attr__( 'Enable', 'aronia' ),
            0 => esc_attr__( 'Disable', 'aronia' ),
        ),
    ) );

    Kirki::add_field( 'cl_aronia', array(
        'settings' => 'lightbox_slideshow',
        'label'    => esc_attr__( 'Lightbox Slideshow', 'aronia' ),
        'section'  => 'cl_general_lightbox',
        'type'     => 'switch',
        'priority' => 10,
        'default'  => 0,
        'choices'     => array(
            1  => esc_attr__( 'Enable', 'aronia' ),
            0 => esc_attr__( 'Disable', 'aronia' ),
        ),
    ) );

    Kirki::add_field( 'cl_aronia', array(
        'settings' => 'lightbox_fullscreen',
        'label'    => esc_attr__( 'Lightbox Fullscreen', 'aronia' ),
        'section'  => 'cl_general_lightbox',
        'type'     => 'switch',
        'priority' => 10,
        'default'  => 1,
        'choices'     => array(
            1  => esc_attr__( 'Enable', 'aronia' ),
            0 => esc_attr__( 'Disable', 'aronia' ),
        ),
    ) );

    Kirki::add_field( 'cl_aronia', array(
        'settings' => 'lightbox_thumbnail',
        'label'    => esc_attr__( 'Lightbox Thumbnail', 'aronia' ),
        'section'  => 'cl_general_lightbox',
        'type'     => 'switch',
        'priority' => 10,
        'default'  => 1,
        'choices'     => array(
            1  => esc_attr__( 'Enable', 'aronia' ),
            0 => esc_attr__( 'Disable', 'aronia' ),
        ),
    ) );

    Kirki::add_field( 'cl_aronia', array(
        'settings' => 'lightbox_swipe',
        'label'    => esc_attr__( 'Lightbox Swipe', 'aronia' ),
        'section'  => 'cl_general_lightbox',
        'type'     => 'switch',
        'priority' => 10,
        'default'  => 1,
        'choices'     => array(
            1  => esc_attr__( 'Enable', 'aronia' ),
            0 => esc_attr__( 'Disable', 'aronia' ),
        ),
    ) );

    Kirki::add_field( 'cl_aronia', array(
        'settings' => 'lightbox_contextmenu',
        'label'    => esc_attr__( 'Lightbox Context Menu (Right click on image)', 'aronia' ),
        'section'  => 'cl_general_lightbox',
        'type'     => 'switch',
        'priority' => 10,
        'default'  => 1,
        'choices'     => array(
            1  => esc_attr__( 'Enable', 'aronia' ),
            0 => esc_attr__( 'Disable', 'aronia' ),
        ),
    ) );

    ?>