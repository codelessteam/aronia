<?php

/* ----------------------------- Extra Row --------------------------------------- */

Kirki::add_section('cl_header_top_news', array(
	'title' => esc_attr__('Top News', 'aronia') ,
	'tooltip' => '',
	'panel' => 'cl_header',
	'type' => '',
	'priority' => 6,
	'capability' => 'edit_theme_options'
));

Kirki::add_field('cl_aronia', array(
	'settings' => 'header_top_news',
	'label' => esc_attr__('Activate Top News Bar', 'aronia') ,
	'tooltip' => esc_attr__('Switch on to active Top News Bar', 'aronia') ,
	'section' => 'cl_header_top_news',
	'type' => 'switch',
	'default' => 0,
	'choices' => array(
		1 => esc_attr__('On', 'aronia') ,
		0 => esc_attr__('Off', 'aronia') ,
	) ,
	'transport' => 'refresh'
));

Kirki::add_field('cl_aronia', array(
	'settings' => 'header_top_news_title',
    'label' => esc_attr__('Bar Title', 'aronia') ,
	'section' => 'cl_header_top_news',
	'type' => 'text',
	'default' => esc_attr__('Top News', 'aronia'),
	'choices' => array(
		1 => esc_attr__('On', 'aronia') ,
		0 => esc_attr__('Off', 'aronia') ,
	) ,
	'transport' => 'refresh'
));