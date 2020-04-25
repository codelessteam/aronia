<?php

    global $cl_theme_mod_defaults;

 	if( !class_exists('Kirki') )
		return;
	
	Kirki::add_section( 'cl_codeless_header_builder', array(
	    'title'          => esc_attr__( 'Header Builder', 'aronia' ),
	    'description'    => esc_attr__( 'Options for adding an additional element on header', 'aronia' ),
	    'panel'          => '',
	    'type'			 => '',
	    'priority'       => 160,
	    'capability'     => 'edit_theme_options'
	) );
	
	
		cl_builder_map(array(
			'type'        => 'clelement',
			'label'       => esc_attr__( 'Menu', 'aronia' ),
			'section'     => 'cl_codeless_header_builder',
			'priority'    => 10,
			'icon'		  => 'icon-basic-todo-txt',
			'settings'    => 'menu',
			'open_section' => 'header_menu_id'
		));
		
		cl_builder_map(array(
			'type'        => 'clelement',
			'label'       => esc_attr__( 'Logo', 'aronia' ),
			'section'     => 'cl_codeless_header_builder',
			'priority'    => 10,
			'transport'   => 'refresh',
			'icon'		  => 'icon-basic-star',
			'settings'    => 'logo',
			'open_section' => 'logo_type',
			''
		));


		cl_builder_map(array(
			'type'        => 'clelement',
			'label'       => esc_attr__( 'Image', 'aronia' ),
			'section'     => 'cl_codeless_header_builder',
			'priority'    => 10,
			'transport'   => 'refresh',
			'icon'		  => 'icon-basic-star',
			'settings'    => 'image',
			'fields'	  => array(
				'image' => array(
					'type'        => 'image',
					'label'       => esc_attr__( '', 'aronia' ),
					'default'     => '',
					'priority'    => 10,
					'choices' => array(),
					'reloadTemplate' => true,
				),

				'width' => array(
					'type'     => 'slider',
					'priority' => 10,
					'label'       => esc_attr__( 'Image Width', 'aronia' ),
					'default'     => '728',
					'choices'     => array(
						'min'  => '0',
						'max'  => '1000',
						'step' => '10',
						'suffix' => 'px'
					),
					'suffix' => 'px',
					'selector' => '.cl-header__element-container',
					'css_property' => 'width',
	
				),

				'height' => array(
					'type'     => 'slider',
					'priority' => 10,
					'label'       => esc_attr__( 'Image Height', 'aronia' ),
					'default'     => '90',
					'choices'     => array(
						'min'  => '0',
						'max'  => '1000',
						'step' => '10',
						'suffix' => 'px'
					),
					'suffix' => 'px',
					'selector' => '.cl-header__element-container',
					'css_property' => 'height',
	
				),

				'device_visibility' => array(
					'type'     => 'multicheck',
					'priority' => 10,
					'label'       => esc_attr__( 'Devices Visibility', 'aronia' ),
					'default'     => '',
					'choices' => array(
						'hidden-xs' => esc_attr__( 'Hide on Extra Small Devices (<576px)', 'aronia' ),
						'hidden-sm' => esc_attr__( 'Hide on Small Devices (576px-767px)', 'aronia' ),
						'hidden-md' => esc_attr__( 'Hide on Tablets (768px-991px)', 'aronia' ),
						'hidden-lg' => esc_attr__( 'Hide on Medium (large-then-992px) ', 'aronia' ),
						'hidden-xl' => esc_attr__( 'Hide on Large (large-then-1200px)', 'aronia' ),
					),
					'reloadTemplate' => true
				),
			)
		));
		
		
		cl_builder_map(array(
			'type'        => 'clelement',
			'label'       => esc_attr__( 'Tools', 'aronia' ),
			'section'     => 'cl_codeless_header_builder',
			'priority'    => 10,
			'transport'   => 'postMessage',
			'icon'		  => 'icon-basic-settings',
			'settings'    => 'tools',
			'fields'	  => array(
					
						'search_group' => array(
							'type' => 'group_start',
							'label' => 'Search',
							'groupid' => 'search'
						), 
						
							'search_button' => array(
								'type'        => 'switch',
								'label'       => esc_attr__( 'Search button', 'aronia' ),
								'tooltip' => 'Activate to show search button',
								'default'     => 1,
								'priority'    => 10,
								'choices'     => array(
									'on'  => esc_attr__( 'On', 'aronia' ),
									'off' => esc_attr__( 'Off', 'aronia' ),
								),
								'reloadTemplate' => true
							),

							'search_type' => array(
								'type'     => 'inline_select',
								'priority' => 10,
								'label'       => esc_attr__( 'Search Style', 'aronia' ),
								'default'     => 'inline',
								'choices' => array(
									'inline' => 'Inline',
									'box' => 'Box'
								),
								'reloadTemplate' => true
							),
							
						'search_group_end' => array(
							'type' => 'group_end',
							'label' => 'Search Tool',
							'groupid' => 'search'
						),
						
						
						
						'side_nav_group' => array(
							'type' => 'group_start',
							'label' => 'Side Navigation',
							'groupid' => 'side_nav'
						),
						
							'side_nav_button' => array(
								'type'        => 'switch',
								'label'       => esc_attr__( 'Active Side Nav', 'aronia' ),
								'tooltip' => 'Activate to add an extra side navigation',
								'default'     => 0,
								'priority'    => 10,
								'choices'     => array(
									'on'  => esc_attr__( 'On', 'aronia' ),
									'off' => esc_attr__( 'Off', 'aronia' ),
								),
								'reloadTemplate' => true
							), 
							
						'side_nav_group_end' => array(
							'type' => 'group_end',
							'label' => 'Side Navigation',
							'groupid' => 'side_nav'
						),
			),
			
		));


		cl_builder_map(array(
			'type'        => 'clelement',
			'label'       => esc_attr__( 'Button', 'aronia' ),
			'section'     => 'cl_codeless_header_builder',
			'priority'    => 10,
			'transport'   => 'postMessage',
			'icon'		  => 'icon-basic-signs',
			'settings'    => 'button',
			'fields'	  => array(
					
					'btn_title' => array(
						'type'     => 'inline_text',
						'priority' => 10,
						'selector' => '.cl-btn span',
						'label'       => esc_attr__( 'Text', 'aronia' ),
						'tooltip' => esc_attr__( 'This will be the label for your link', 'aronia' ),
						'default'     => 'View More',
						'only_text' => true
					),

					'link' => array(
						'type'     => 'text',
						'priority' => 10,
						'label'       => esc_attr__( 'Link', 'aronia' ),
						'default'     => '#'
					),

					'button_color' => array(
						'type'     => 'inline_select',
						'priority' => 10,
						'label'       => esc_attr__( 'Button Color', 'aronia' ),
						'default'     => 'default',
						'choices' => array(
							'default' => 'Default',
							'normal' => 'Normal',
							'alt' => 'Alternate',
						),
						'reloadTemplate' => true
					),

					'button_size' => array(
						'type'     => 'inline_select',
						'priority' => 10,
						'label'       => esc_attr__( 'Button Size', 'aronia' ),
						'default'     => 'default',
						'choices' => array(
							'default' => 'Default',
							'small' => 'Small',
							'medium' => 'Medium',
							'large' => 'Large'
						),
						'reloadTemplate' => true
					),

					'button_style' => array(
						'type'     => 'inline_select',
						'priority' => 10,
						'label'       => esc_attr__( 'Button Style', 'aronia' ),
						'default'     => 'default',
						'choices' => array(
							'default' => 'Default',
							'square' => 'Sqaure',
							'small-radius' => 'Small Radius',
							'rounded' => 'Rounded'
						),
						'reloadTemplate' => true
					),

					'device_visibility' => array(
						'type'     => 'multicheck',
						'priority' => 10,
						'label'       => esc_attr__( 'Devices Visibility', 'aronia' ),
						'default'     => '',
						'choices' => array(
							'hidden-xs' => esc_attr__( 'Hide on Extra Small Devices (<576px)', 'aronia' ),
							'hidden-sm' => esc_attr__( 'Hide on Small Devices (576px-767px)', 'aronia' ),
							'hidden-md' => esc_attr__( 'Hide on Tablets (768px-991px)', 'aronia' ),
							'hidden-lg' => esc_attr__( 'Hide on Medium (large-then-992px) ', 'aronia' ),
							'hidden-xl' => esc_attr__( 'Hide on Large (large-then-1200px)', 'aronia' ),
						),
						'reloadTemplate' => true
					),

					'css_style' => array(
							'type' => 'css_tool',
							'label' => 'Tool',
							'selector' => '.cl-header__element-container',
							'css_property' => '',
							'default' => array('margin-top' => '0px')
					),
			),
			
		)); 

		cl_builder_map(array(
			'type'        => 'clelement',
			'label'       => esc_attr__( 'Socials', 'aronia' ),
			'section'     => 'cl_codeless_header_builder',
			'priority'    => 10,
			'transport'   => 'postMessage',
			'icon'		  => 'icon-basic-share',
			'settings'    => 'socials',
			'fields'	  => array(
					

				'socials' => array(
					'type'     => 'multicheck',
					'priority' => 10,
					'default'     => '',
					'choices' => array(
						'facebook' => esc_attr__( 'Facebook', 'aronia' ),
						'instagram' => esc_attr__( 'Instagram', 'aronia' ),
						'twitter' => esc_attr__( 'Twitter', 'aronia' ),
						'email' => esc_attr__( 'Email', 'aronia' ),
						'linkedin' => esc_attr__( 'Linkedin', 'aronia' ),
						'pinterest' => esc_attr__( 'Pinterest', 'aronia' ),
						'youtube' => esc_attr__( 'Youtube', 'aronia' ),
						'vimeo' => esc_attr__( 'Vimeo', 'aronia' ),
						'soundcloud' => esc_attr__( 'Soundcloud', 'aronia' ),
						'slack' => esc_attr__( 'Slack', 'aronia' ),
						'skype' => esc_attr__( 'Skype', 'aronia' ),
						'google_plus' => esc_attr__( 'Google Plus', 'aronia' ),
						'github' => esc_attr__( 'Github', 'aronia' ),
						'dribbble' => esc_attr__( 'Dribbble', 'aronia' ),
						'behance' => esc_attr__( 'Behance', 'aronia' ),
					),
					'reloadTemplate' => true
				),


				'size' => array(
					'type'     => 'inline_select',
					'priority' => 10,
					'label'       => esc_attr__( 'Size', 'aronia' ),
					'default'     => 'medium',
					'choices' => array(
						'small' => 'Small',
						'medium' => 'Medium',
						'large' => 'Large'
					),
					'selector' => '.cl-header__element-container',
					'selectClass' => 'cl-header__socials--size-',
					'reloadTemplate' => true
				),

				'style' => array(
					'type'     => 'inline_select',
					'priority' => 10,
					'label'       => esc_attr__( 'Style', 'aronia' ),
					'default'     => 'simple',
					'choices' => array(
						'simple' => 'Simple',
						'circle-border' => 'Circle Border',
						'circle-bg' => 'Circle BG'
					),
					'selector' => '.cl-header__element-container',
					'selectClass' => 'cl-header__socials--style-',
					'reloadTemplate' => true
				),

					'device_visibility' => array(
						'type'     => 'multicheck',
						'priority' => 10,
						'label'       => esc_attr__( 'Devices Visibility', 'aronia' ),
						'default'     => '',
						'choices' => array(
							'hidden-xs' => esc_attr__( 'Hide on Extra Small Devices (<576px)', 'aronia' ),
							'hidden-sm' => esc_attr__( 'Hide on Small Devices (576px-767px)', 'aronia' ),
							'hidden-md' => esc_attr__( 'Hide on Tablets (768px-991px)', 'aronia' ),
							'hidden-lg' => esc_attr__( 'Hide on Medium (large-then-992px) ', 'aronia' ),
							'hidden-xl' => esc_attr__( 'Hide on Large (large-then-1200px)', 'aronia' ),
						),
						'reloadTemplate' => true
					),

					'css_style' => array(
							'type' => 'css_tool',
							'label' => 'Tool',
							'selector' => '.cl-header__element-container',
							'css_property' => '',
							'default' => array('margin-top' => '0px')
					),
			),
			
		)); 

		cl_builder_map(array(
			'type'        => 'clelement',
			'label'       => esc_attr__( 'Icon Text', 'aronia' ),
			'section'     => 'cl_codeless_header_builder',
			'priority'    => 10,
			'transport'   => 'postMessage',
			'icon'		  => 'icon-basic-signs',
			'settings'    => 'icon_text',
			'fields'	  => array(
					
					'text_title' => array(
						'type'     => 'inline_text',
						'priority' => 10,
						'selector' => '.cl-header__icontext-title',
						'label'       => esc_attr__( 'Text', 'aronia' ),
						'tooltip' => esc_attr__( 'This will be the label for your link', 'aronia' ),
						'default'     => 'Text for this element. Click to Edit.'
					),

					'icon' => array(
						'type'     => 'select_icon',
						'priority' => 10,
						'label'       => esc_attr__( 'Select Icon', 'aronia' ),
						'default'     => 'cl-icon-camera',
						'selector' => '.cl-header__icontext-icon',
						'selectClass' => ' ',
					),

					'device_visibility' => array(
						'type'     => 'multicheck',
						'priority' => 10,
						'label'       => esc_attr__( 'Devices Visibility', 'aronia' ),
						'default'     => '',
						'choices' => array(
							'hidden-xs' => esc_attr__( 'Hide on Extra Small Devices (<576px)', 'aronia' ),
							'hidden-sm' => esc_attr__( 'Hide on Small Devices (576px-767px)', 'aronia' ),
							'hidden-md' => esc_attr__( 'Hide on Tablets (768px-991px)', 'aronia' ),
							'hidden-lg' => esc_attr__( 'Hide on Medium (large-then-992px) ', 'aronia' ),
							'hidden-xl' => esc_attr__( 'Hide on Large (large-then-1200px)', 'aronia' ),
						),
						'reloadTemplate' => true
					),

					'css_style' => array(
							'type' => 'css_tool',
							'label' => 'Tool',
							'selector' => '.cl-header__element-container',
							'css_property' => '',
							'default' => array('margin-top' => '0px')
					),


			),
			
		));

		/* Text */
		cl_builder_map(array(
			'type'        => 'clelement',
			'label'       => esc_attr__( 'Text', 'aronia' ),
			'section'     => 'cl_codeless_header_builder',
			//'priority'    => 10,
			'icon'		  => 'icon-software-font-smallcaps',
			'transport'   => 'postMessage',
			'settings'    => 'text',

			'fields' => array(
				'content' => array(
					'type'     => 'inline_text',
					'priority' => 10,
					'selector' => '.cl-header__text',
					'label'       => esc_attr__( 'Text', 'aronia' ),
					'tooltip' => esc_attr__( 'This will be the label for your link', 'aronia' ),
					'default'     => 'Welcome to Aronia WP Theme',
				),

				'device_visibility' => array(
					'type'     => 'multicheck',
					'priority' => 10,
					'label'       => esc_attr__( 'Devices Visibility', 'aronia' ),
					'default'     => '',
					'choices' => array(
						'hidden-xs' => esc_attr__( 'Hide on Extra Small Devices (<576px)', 'aronia' ),
						'hidden-sm' => esc_attr__( 'Hide on Small Devices (576px-767px)', 'aronia' ),
						'hidden-md' => esc_attr__( 'Hide on Tablets (768px-991px)', 'aronia' ),
						'hidden-lg' => esc_attr__( 'Hide on Medium (large-then-992px) ', 'aronia' ),
						'hidden-xl' => esc_attr__( 'Hide on Large (large-then-1200px)', 'aronia' ),
					),
					'reloadTemplate' => true
				),

				'css_style' => array(
						'type' => 'css_tool',
						'label' => 'Tool',
						'selector' => '.cl-header__element-container',
						'css_property' => '',
						'default' => array('margin-top' => '0px')
				),
			),
			
		) );


		cl_builder_map(array(
			'type'        => 'clelement',
			'label'       => esc_attr__( 'Widget', 'aronia' ),
			'section'     => 'cl_codeless_header_builder',
			'priority'    => 10,
			'transport'   => 'postMessage',
			'icon'		  => 'icon-basic-gear',
			'settings'    => 'widget',
			'fields'	  => array(
					
					'widget_sidebar' => array(
							'type'     => 'inline_select',
							'priority' => 10,
							'label'       => esc_attr__( 'Widgetized Area', 'aronia' ),
							'tooltip' => esc_attr__( 'Select the widgetized area that you want to add', 'aronia' ),
							'default'     => '',
							'choices' => codeless_get_registered_sidebars(),
							'reloadTemplate' => true,
						),

						'device_visibility' => array(
							'type'     => 'multicheck',
							'priority' => 10,
							'label'       => esc_attr__( 'Devices Visibility', 'aronia' ),
							'default'     => '',
							'choices' => array(
								'hidden-xs' => esc_attr__( 'Hide on Extra Small Devices (<576px)', 'aronia' ),
								'hidden-sm' => esc_attr__( 'Hide on Small Devices (576px-767px)', 'aronia' ),
								'hidden-md' => esc_attr__( 'Hide on Tablets (768px-991px)', 'aronia' ),
								'hidden-lg' => esc_attr__( 'Hide on Medium (large-then-992px) ', 'aronia' ),
								'hidden-xl' => esc_attr__( 'Hide on Large (large-then-1200px)', 'aronia' ),
							),
							'reloadTemplate' => true
						),
		
						'css_style' => array(
								'type' => 'css_tool',
								'label' => 'Tool',
								'selector' => '.cl-header__element-container',
								'css_property' => '',
								'default' => array('margin-top' => '0px')
						),

			),
			
		));
?>