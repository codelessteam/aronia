<?php

Kirki::add_section( 'cl_buttons', array(
    'title'          => esc_attr__( 'Buttons', 'aronia' ),
    'description'    => esc_attr__( 'Buttons Default Options', 'aronia' ),
    'type'			 => '',
    'priority'		 => 10,
    'capability'     => 'edit_theme_options'
) );


Kirki::add_field('cl_aronia', array(
	'settings' => 'button_color',
	'label' => esc_attr__('Button Colors', 'aronia') ,
	'section' => 'cl_buttons',
	'type' => 'radio-buttonset',
	'default' => 'alt',
	'priority' => 10,
	'choices' => array(
		'normal' => esc_attr__('Normal', 'aronia') ,
        'alt' => esc_attr__('Alternative', 'aronia')
	) ,
	'transport' => 'postMessage',
));


Kirki::add_field('cl_aronia', array(
	'settings' => 'button_size',
	'label' => esc_attr__('Button Size', 'aronia') ,
	'tooltip' => esc_attr__('Select predefined button sizes', 'aronia') ,
	'section' => 'cl_buttons',
	'type' => 'radio-buttonset',
	'default' => 'medium',
	'priority' => 10,
	'choices' => array(
		'small' => esc_attr__('Small', 'aronia') ,
        'medium' => esc_attr__('Medium', 'aronia'),
        'large' => esc_attr__('Large', 'aronia'),
        'custom' => esc_attr__('Custom', 'aronia'),
	) ,
	'transport' => 'postMessage',
));

Kirki::add_field('cl_aronia', array(
	'settings' => 'button_custom_typography',
	'description' => esc_attr__('Typography', 'aronia') ,
	'tooltip' => esc_attr__('Set custom typography for buttons', 'aronia') ,
	'section' => 'cl_buttons',
	'type' => 'typography',
	'priority' => 10,
	'default' => array(
		'font-family' => 'Poppins',
		'variant' => '600',
		'font-size' => '12px',
		'line-height' => '20px',
		'letter-spacing' => '0.5px',
		'text-align' => 'center',
		'text-transform' => 'uppercase',
	) ,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => '.cl-btn--size-custom'
        )
    ),
    'required'    => array(
        array(
            'setting'  => 'button_size',
            'operator' => '==',
            'value'    => 'custom',
            'transport' => 'postMessage'
        ),
                    
    ),
));

Kirki::add_field( 'my_config', array(
    'settings'  => 'button_custom_padding',
    'section'   => 'cl_buttons',
    'description'     => esc_html__( 'Button Padding', 'aronia' ),
    'type'      => 'spacing',
    'default'   => array(
      'top'    => '5px',
      'right'  => '10px',
      'bottom' => '5px',
      'left'   => '10px',
    ),
    'transport' => 'auto',
    'output'    => array(
      array(
        'element'  => '.cl-btn--size-custom',
        'property' => 'padding',
      ),
    ),
    'required'    => array(
        array(
            'setting'  => 'button_size',
            'operator' => '==',
            'value'    => 'custom',
            'transport' => 'postMessage'
        ),
                    
    ),
  ) );

  Kirki::add_field('cl_aronia', array(
	'settings' => 'button_style',
	'label' => esc_attr__('Button Style', 'aronia') ,
	'tooltip' => esc_attr__('Select form of button', 'aronia') ,
	'section' => 'cl_buttons',
	'type' => 'radio-buttonset',
	'default' => 'square',
	'priority' => 10,
	'choices' => array(
        'square' => esc_attr__('Square', 'aronia') ,
		'small-radius' => esc_attr__('Small Radius', 'aronia') ,
        'rounded' => esc_attr__('Rounded', 'aronia')
	) ,
	'transport' => 'postMessage',
));

  Kirki::add_field('cl_aronia', array(
	'settings' => 'button_border',
	'label' => esc_attr__('Button Border', 'aronia') ,
	'tooltip' => esc_attr__('Button Border Width', 'aronia') ,
	'section' => 'cl_buttons',
	'type' => 'slider',
	'default' => '1',
    'priority' => 10,
	'choices' => array(
		'min' => '0',
		'max' => '10',
		'step' => '1',
	) ,
    'transport' => 'auto',
    'output' => array(

        array(
            'element' => 'cl-btn',
            'property' => 'border-width',
            'suffix' => 'px'
        )

    )
));



?>