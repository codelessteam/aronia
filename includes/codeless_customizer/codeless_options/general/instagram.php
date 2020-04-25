<?php

Kirki::add_section( 'cl_general_insta', array(
    'title'          => esc_attr__( 'Instagram', 'aronia' ),
    'description'    => esc_attr__( 'Instagram', 'aronia' ),
    'panel'          => 'cl_general',
    'priority'       => 5,
    'type'			 => '',
    'capability'     => 'edit_theme_options'
) );


Kirki::add_field( 'cl_aronia', array(
    'settings' => 'show_instagram_feed_token',
    'label'    => esc_attr__( 'Instagram Feed Token', 'aronia' ),
    'section'  => 'cl_general_insta',
    'type'     => 'text',
    'priority' => 10,
    'default'  => '',
    'choices'     => array(
        1  => esc_attr__( 'On', 'aronia' ),
        0 => esc_attr__( 'Off', 'aronia' ),
    ),

) );


Kirki::add_field( 'cl_aronia', array(
    'settings' => 'show_instagram_feed_userid',
    'label'    => esc_attr__( 'Instagram Feed User Id', 'aronia' ),
    'section'  => 'cl_general_insta',
    'type'     => 'text',
    'priority' => 10,
    'default'  => '',
    'choices'     => array(
        1  => esc_attr__( 'On', 'aronia' ),
        0 => esc_attr__( 'Off', 'aronia' ),
    ),
) );

?>