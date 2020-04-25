<?php

Kirki::add_section( 'cl_general_socials', array(
    'title'          => esc_attr__( 'Social Networks Links', 'aronia' ),
    'description'    => esc_attr__( 'Set links of wesite social networks', 'aronia' ),
    'panel'          => 'cl_general',
    'priority'       => 5,
    'type'			 => '',
    'capability'     => 'edit_theme_options'
) );

Kirki::add_field( 'cl_aronia', array(
    'type'        => 'text',
    'settings'    => 'facebook_link',
    'label'       => esc_attr__( 'Facebook', 'aronia' ),
    'section'     => 'cl_general_socials',
    'priority'    => 10,
    'transport' => 'postMessage'
) );

Kirki::add_field( 'cl_aronia', array(
    'type'        => 'text',
    'settings'    => 'twitter_link',
    'label'       => esc_attr__( 'Twitter', 'aronia' ),
    'section'     => 'cl_general_socials',
    'priority'    => 10,
    'transport' => 'postMessage'
) );

Kirki::add_field( 'cl_aronia', array(
    'type'        => 'text',
    'settings'    => 'google_link',
    'label'       => esc_attr__( 'Google', 'aronia' ),
    'section'     => 'cl_general_socials',
    'priority'    => 10,
    'transport' => 'postMessage'
) );

Kirki::add_field( 'cl_aronia', array(
    'type'        => 'text',
    'settings'    => 'dribbble_link',
    'label'       => esc_attr__( 'Dribbble', 'aronia' ),
    'section'     => 'cl_general_socials',
    'priority'    => 10,
    'transport' => 'postMessage'
) );

Kirki::add_field( 'cl_aronia', array(
    'type'        => 'text',
    'settings'    => 'foursquare_link',
    'label'       => esc_attr__( 'Foursquare', 'aronia' ),
    'section'     => 'cl_general_socials',
    'priority'    => 10,
    'transport' => 'postMessage'
) );

Kirki::add_field( 'cl_aronia', array(
    'type'        => 'text',
    'settings'    => 'pinterest_link',
    'label'       => esc_attr__( 'Pinterest', 'aronia' ),
    'section'     => 'cl_general_socials',
    'priority'    => 10,
    'transport' => 'postMessage'
) );

Kirki::add_field( 'cl_aronia', array(
    'type'        => 'text',
    'settings'    => 'youtube_link',
    'label'       => esc_attr__( 'Youtube', 'aronia' ),
    'section'     => 'cl_general_socials',
    'priority'    => 10,
    'transport' => 'postMessage'
) );

Kirki::add_field( 'cl_aronia', array(
    'type'        => 'text',
    'settings'    => 'linkedin_link',
    'label'       => esc_attr__( 'Linkedin', 'aronia' ),
    'section'     => 'cl_general_socials',
    'priority'    => 10,
    'transport' => 'postMessage'
) );

Kirki::add_field( 'cl_aronia', array(
    'type'        => 'text',
    'settings'    => 'email_link',
    'label'       => esc_attr__( 'Email', 'aronia' ),
    'section'     => 'cl_general_socials',
    'priority'    => 10,
    'transport' => 'postMessage'
) );

Kirki::add_field( 'cl_aronia', array(
    'type'        => 'text',
    'settings'    => 'instagram_link',
    'label'       => esc_attr__( 'Instagram', 'aronia' ),
    'section'     => 'cl_general_socials',
    'priority'    => 10,
    'transport' => 'postMessage'
) );
Kirki::add_field( 'cl_aronia', array(
    'type'        => 'text',
    'settings'    => 'github_link',
    'label'       => esc_attr__( 'Github', 'aronia' ),
    'section'     => 'cl_general_socials',
    'priority'    => 10,
    'transport' => 'postMessage'
) );

Kirki::add_field( 'cl_aronia', array(
    'type'        => 'text',
    'settings'    => 'skype_link',
    'label'       => esc_attr__( 'Skype', 'aronia' ),
    'section'     => 'cl_general_socials',
    'priority'    => 10,
    'transport' => 'postMessage'
) );
Kirki::add_field( 'cl_aronia', array(
    'type'        => 'text',
    'settings'    => 'soundcloud_link',
    'label'       => esc_attr__( 'Soundcloud', 'aronia' ),
    'section'     => 'cl_general_socials',
    'priority'    => 10,
    'transport' => 'postMessage'
) );

Kirki::add_field( 'cl_aronia', array(
    'type'        => 'text',
    'settings'    => 'slack_link',
    'label'       => esc_attr__( 'Slack', 'aronia' ),
    'section'     => 'cl_general_socials',
    'priority'    => 10,
    'transport' => 'postMessage'
) );

Kirki::add_field( 'cl_aronia', array(
    'type'        => 'text',
    'settings'    => 'behance_link',
    'label'       => esc_attr__( 'Behance', 'aronia' ),
    'section'     => 'cl_general_socials',
    'priority'    => 10,
    'transport' => 'postMessage'
) );