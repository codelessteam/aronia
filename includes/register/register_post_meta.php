<?php

Cl_Post_Meta::map(array(
    'post_type' => array('page', 'post'),
    'priority' => 2,
    'id' => 'layout',
    'type' => 'select',
    'name' => esc_attr__( 'Page Layout', 'aronia' ),
    'desc' => esc_attr__( '', 'aronia' ),
    'group_in' => 'layout_sect',
    'std' => 'default',
    'default' => 'default',
    'options'     => array(
        'default' => esc_attr__( '--Site Default--', 'aronia' ),
        'fullwidth' => esc_attr__( 'Fullwidth', 'aronia' ),
        'left_sidebar'  => esc_attr__( 'Left Sidebar', 'aronia' ),
        'right_sidebar'  => esc_attr__( 'Right Sidebar', 'aronia' ),
     ),
 ));

 Cl_Post_Meta::map(array(
   
    'post_type' => array('page', 'post'),
    'priority' => 2,
    'id' => 'fullwidth_content',
    'type' => 'select',
    'name' => 'Fullwidth Content',
    'desc' => 'Remove container from page and show page content from left of the screen to the right',
    'options'     => array(
       'default' => esc_attr__( '--Site Default--', 'aronia' ),
       0 => esc_attr__( 'Off', 'aronia' ),
       1  => esc_attr__( 'On', 'aronia' ),
    ),
    'group_in' => 'layout_sect',
    'std' => 'default'
    
 ));

 Cl_Post_Meta::map(array(
   
    'post_type' => array('page', 'post'),
    'priority' => 2,
    'id' => 'wrapper_content',
    'type' => 'select',
    'name' => 'Wrapper Content',
    'desc' => 'Add a wrapper on page content, create a modern styling of page.',
    'options'     => array(
       'default' => esc_attr__( '--Site Default--', 'aronia' ),
       0 => esc_attr__( 'Off', 'aronia' ),
       1  => esc_attr__( 'On', 'aronia' ),
    ),
    'group_in' => 'layout_sect',
    'std' => 'default'
    
 ));

 Cl_Post_Meta::map(array(
   
    'post_type' => array('page', 'post'),
    'priority' => 2,
    'id' => 'header_color',
    'type' => 'select',
    'name' => 'Header Color',
    'options'     => array(
       'default' => esc_attr__( '--Site Default--', 'aronia' ),
       'dark' => esc_attr__( 'Dark', 'aronia' ),
       'light'  => esc_attr__( 'Light', 'aronia' ),
    ),
    'group_in' => 'layout_sect',
    'std' => 'default'
    
 ));
 Cl_Post_Meta::map(array(
   
    'post_type' => array('page', 'post'),
    'priority' => 2,
    'id' => 'header_transparent',
    'type' => 'select',
    'name' => 'Header Transparent',
    'options'     => array(
       'default' => esc_attr__( '--Site Default--', 'aronia' ),
       0 => esc_attr__( 'Off', 'aronia' ),
       1  => esc_attr__( 'On', 'aronia' ),
    ),
    'group_in' => 'layout_sect',
    'std' => 'default'
    
 ));



// ---------- One Page -------------

Cl_Post_Meta::map(array(
   'post_type' => 'page',
   'priority' => 2,
   'id' => 'select_slider',
   'type' => 'post',
   'name' => esc_attr__( 'Select Codeless Slider', 'aronia' ),
   'group_in' => 'general',
   'post_type' => array( 'codeless_slider' ),
   'field_type' => 'select_advanced',
   'std' => '',
));

Cl_Post_Meta::map(array(
   
   'post_type' => 'page',
   'feature' => 'one_page',
   'priority' => 3,
   'id' => 'one_page',
   'type' => 'select',
   'name' => 'Page as One Page',
   'desc' => 'Make this page acts as a one page. Please add a custom id for each section and connect it with a menu item.',
   'options'     => array(
      'off' => esc_attr__( 'Off', 'aronia' ),
      'on'  => esc_attr__( 'On', 'aronia' ),
      
   ),
   'group_in' => 'general',
   'inline_control' => true,
   'id' => 'one_page',
   'transport' => 'auto', 
   'std' => 0
   
));


// ---------- Page Layout ------------- //

Cl_Post_Meta::map(array(
    'post_type' => 'page',
    'priority' => 2,
    'id' => 'page_header_bool',
    'type' => 'select',
    'name' => esc_attr__( 'Page Header Active', 'aronia' ),
    'desc' => esc_attr__( 'Switch On to add page header to this page.', 'aronia' ),
    'group_in' => 'general',
    'options'     => array(
        'default' => esc_attr__( '--Site Default--', 'aronia' ),
        0  => esc_attr__( 'Off', 'aronia' ),
        1  => esc_attr__( 'On', 'aronia' ),
     ),
    'std' => 'default',
    'style' => 'rounded',
    'yes_label' => '<i class="dashicons dashicons-yes"></i>'
 ));

Cl_Post_Meta::map(array(
    'post_type' => 'page',
    'priority' => 2,
    'id' => 'page_header_title',
    'type' => 'text',
    'name' => esc_attr__( 'Title', 'aronia' ),
    'desc' => esc_attr__( 'Add if you need a page header title different from the actual page title', 'aronia' ),
    'group_in' => 'general',
    'std' => '',
    'placeholder' => esc_attr__( 'Leave empty to use same as Page Title', 'aronia' ),
    'size' => 60,
 ));

 Cl_Post_Meta::map(array(
    'post_type' => 'page',
    'priority' => 2,
    'id' => 'page_header_desc',
    'type' => 'textarea',
    'name' => esc_attr__( 'Description', 'aronia' ),
    'desc' => esc_attr__( 'Add some description to the page header', 'aronia' ),
    'group_in' => 'general',
    'std' => '',
    'placeholder' => esc_attr__( 'Leave empty if you dont need description', 'aronia' ),
    'size' => 60,
 ));

 Cl_Post_Meta::map(array(
   
    'post_type' => 'page',
    'priority' => 2,
    'id' => 'page_header_default',
    'type' => 'select',
    'name' => 'Page Header Values',
    'desc' => 'The default page header is set on Customizer -> Layout -> Site Defaults',
    'options'     => array(
       'default' => esc_attr__( '--Site Default--', 'aronia' ),
       'custom'  => esc_attr__( 'Custom', 'aronia' ),
    ),
    'group_in' => 'general',
    'inline_control' => true,
    'transport' => 'postMessage', 
    'std' => 0,

    
 ));

 Cl_Post_Meta::map(array(
    'post_type' => 'page',
    'priority' => 2,
    'id' => 'page_header_bg_color',
    'type' => 'color',
    'name' => esc_attr__( 'Background Color', 'aronia' ),
    'desc' => esc_attr__( 'Page Header Background Color, in case that you use image too, this color will be used as overlay color', 'aronia' ),
    'group_in' => 'general',
    'std' => '#fafafa',
    'alpha_channel' => true,
    'required' => array(
        'page_header_default',
        '=',
        'custom'
    )
 ));

 Cl_Post_Meta::map(array(
    'post_type' => 'page',
    'priority' => 2,
    'id' => 'page_header_bg_image',
    'type' => 'single_image',
    'name' => esc_attr__( 'Background Image', 'aronia' ),
    'desc' => esc_attr__( 'In case you select an image as background, background color will be used as overlay', 'aronia' ),
    'group_in' => 'general',
    'std' => '',
    'required' => array(
        'page_header_default',
        '=',
        'custom'
    )
 ));

 Cl_Post_Meta::map(array(
    'post_type' => 'page',
    'priority' => 2,
    'id' => 'page_header_style',
    'type' => 'select',
    'name' => esc_attr__( 'Style', 'aronia' ),
    'desc' => esc_attr__( 'Select one of the predefined styles of page header', 'aronia' ),
    'group_in' => 'general',
    'options' => array(
        'all_center' => esc_attr__( 'All Center', 'aronia' ),
        'with_breadcrumbs' => esc_attr__( 'With Breadcrumbs', 'aronia' )
    ),
    'std' => 'with_breadcrumbs',
    'required' => array(
        'page_header_default',
        '=',
        'custom'
    )
 ));

 Cl_Post_Meta::map(array(
    'post_type' => 'page',
    'priority' => 2,
    'id' => 'page_header_color',
    'type' => 'select',
    'name' => esc_attr__( 'Text Color', 'aronia' ),
    'desc' => esc_attr__( 'Select light when using a dark color/background page header', 'aronia' ),
    'group_in' => 'general',
    'options' => array(
        'dark' => esc_attr__( 'Dark', 'aronia' ),
        'light' => esc_attr__( 'Light', 'aronia' )
    ),
    'std' => 'dark',
    'required' => array(
        'page_header_default',
        '=',
        'custom'
    )
 ));

 Cl_Post_Meta::map(array(
    'post_type' => 'page',
    'priority' => 2,
    'id' => 'page_header_height',
    'type' => 'number',
    'name' => esc_attr__( 'Height', 'aronia' ),
    'desc' => esc_attr__( 'Suggested heights: 500px for Centered Style & 280px for Classic Breadcrumbs', 'aronia' ),
    'group_in' => 'general',
    'min' => 90,
    'max' => 1000,
    'step' => 1,
    'std' => 280,
    'required' => array(
        'page_header_default',
        '=',
        'custom'
    )
 ));

 Cl_Post_Meta::map(array(
   'post_type' => 'page',
   'priority' => 2,
   'id' => 'page_background_color',
   'type' => 'color',
   'name' => esc_attr__( 'Page Custom BG Color', 'aronia' ),
   'group_in' => 'general',
   'std' => '',
));


// --------------------- Other Page dividers --------------------------------





// Post


Cl_Post_Meta::map(array(
    'type' => 'select',
    'name' => 'Post Header Text Color',
    'options'     => array(
       'default'  => esc_attr__( '-- Site Default --', 'aronia' ),
       'dark'  => esc_attr__( 'Dark', 'aronia' ),
       'light'  => esc_attr__( 'Light', 'aronia' ),
    ),
    'inline_control' => true,
    'group_in' => 'post_data',
    'id' => 'post_header_color',
    'transport' => 'auto', 
    'std' => 'default',
 ));

 Cl_Post_Meta::map(array(
   'type' => 'select',
   'name' => 'Post Header Layout',
   'options'     => array(
      'default'  => esc_attr__( '-- Site Default --', 'aronia' ),
      'container'  => esc_attr__( 'In Container', 'aronia' ),
      'fullwidth'  => esc_attr__( 'Fullwidth', 'aronia' ),
   ),
   'inline_control' => true,
   'group_in' => 'post_data',
   'id' => 'post_header_layout',
   'transport' => 'auto', 
   'std' => 'default',
));

Cl_Post_Meta::map(array(
   
   'post_type' => 'post',
   'feature' => 'post_masonry_layout',
   'id' => 'post_masonry_layout',
   'type' => 'select',
   'name' => 'Masonry Layout',
   'options'     => array(
      'small'  => esc_attr__( 'Small (1 width / 1 height)', 'aronia' ),
      'wide' => esc_attr__( 'Wide (2/1)', 'aronia' ),
      'large' => esc_attr__( 'Large (2/2)', 'aronia' ),
      'long' => esc_attr__( 'Long (1/2)', 'aronia' ),
   ),
   'inline_control' => true,
   'group_in' => 'post_data',
   'id' => 'post_masonry_layout',
   'transport' => 'auto', 
   'std' => 'default',
));

Cl_Post_Meta::map(array(
   'type' => 'select',
   'name' => 'Hide Post Entry Content',
   'options'     => array(
      'no'  => esc_attr__( 'No', 'aronia' ),
      'yes'  => esc_attr__( 'Yes', 'aronia' ),
   ),
   'inline_control' => true,
   'group_in' => 'post_data',
   'id' => 'hide_post_entry_content',
   'transport' => 'auto', 
   'std' => 'no',
));



Cl_Post_Meta::map(array(
   'type' => 'select',
   'name' => 'Top News (Use on Top News Header Bar)',
   'options'     => array(
      'no'  => esc_attr__( 'No', 'aronia' ),
      'yes'  => esc_attr__( 'Yes', 'aronia' ),
   ),
   'inline_control' => true,
   'group_in' => 'post_data',
   'id' => 'top_news',
   'transport' => 'auto', 
   'std' => 'no',
));


// Single Portfolio



Cl_Post_Meta::map(array(
   
   'post_type' => 'portfolio',
   'feature' => 'portfolio_custom_link',
   'id' => 'portfolio_custom_link',
   'type' => 'text',
   'dynamic' => true,
   'name' => 'Custom Link',
   'priority' => 1,
   'group_in' => 'portfolio_data',
   'id' => 'portfolio_custom_link',
   'transport' => 'postMessage', 
   'std' => '',
   
));




// Single Staff


Cl_Post_Meta::map(array(
   
   'post_type' => 'staff',
   'feature' => 'staff_position',
   'id' => 'staff_position',
   'type' => 'text',
   'dynamic' => true,
   'name' => 'Staff Position',
   'priority' => 1,
   'id' => 'staff_position',
   'group_in' => 'staff_data',
   'transport' => 'postMessage', 
   'std' => 'Developer',
   
));

Cl_Post_Meta::map(array(
   
   'post_type' => 'staff',
   'feature' => 'staff_link',
   'id' => 'staff_link',
   'type' => 'text',
   'dynamic' => true,
   'name' => 'Custom Link',
   'priority' => 1,
   'id' => 'staff_link',
   'group_in' => 'staff_data',
   'transport' => 'postMessage', 
   'std' => '',
   
));


$socials = codeless_get_team_social_list();
if( ! empty($socials) ):

   foreach($socials as $social):

      Cl_Post_Meta::map(array(
         
         'post_type' => 'staff',
         'feature' => $social['id'].'_link',
         'id' => $social['id'].'_link',
         'type' => 'text',
         'name' => ucfirst($social['id']),
         'priority' => 1,
         'dynamic' => true,
         'group_in' => 'staff_social',
         'id' => $social['id'].'_link',
         'transport' => 'auto', 
         'std' => '',
         
      ));

   endforeach;

endif;




/* Slider */

Cl_Post_Meta::map(array(
   'post_type' => 'codeless_slider',
   'priority' => 2,
   'id' => 'slider_style',
   'type' => 'select',
   'name' => esc_attr__( 'Slider Style', 'aronia' ),
   'group_in' => 'slider_layout',
   'options' => array(
       'simple' => esc_attr__( 'Simple', 'aronia' ),
       'semicarousel' => esc_attr__( 'Semi Carousel Centered', 'aronia' ),
       'carousel' => esc_attr__( 'Carousel', 'aronia' ),
       'modern' => esc_attr__( 'Modern', 'aronia' )
   ),
   'std' => 'simple',

));

Cl_Post_Meta::map(array(
   'post_type' => 'codeless_slider',
   'priority' => 2,
   'id' => 'simple_slider_align',
   'type' => 'select',
   'name' => esc_attr__( 'Simple Slider Post Align', 'aronia' ),
   'group_in' => 'slider_layout',
   'options' => array(
       'left' => esc_attr__( 'Left', 'aronia' ),
       'center' => esc_attr__( 'Center', 'aronia' )
   ),
   'std' => 'left',
   'required' => array(
      'slider_style',
      '=',
      'simple'
   )
));

Cl_Post_Meta::map(array(
   'post_type' => 'codeless_slider',
   'priority' => 2,
   'id' => 'simple_slider_image',
   'type' => 'select',
   'name' => esc_attr__( 'Simple Slider Image', 'aronia' ),
   'group_in' => 'slider_layout',
   'options' => array(
       'no' => esc_attr__( 'Without Image', 'aronia' ),
       'yes' => esc_attr__( 'With Image', 'aronia' )
   ),
   'std' => 'no',
   'required' => array(
      'slider_style',
      '=',
      'simple'
   )
));

Cl_Post_Meta::map(array(
   'post_type' => 'codeless_slider',
   'priority' => 2,
   'id' => 'semi_carousel_box_color',
   'type' => 'select',
   'name' => esc_attr__( 'Semi Carousel Slider Box color', 'aronia' ),
   'group_in' => 'slider_layout',
   'options' => array(
       'dark' => esc_attr__( 'Dark Box', 'aronia' ),
       'white' => esc_attr__( 'White Box', 'aronia' )
   ),
   'std' => 'white',
   'required' => array(
      'slider_style',
      '=',
      'semicarousel'
   )
));

Cl_Post_Meta::map(array(
   'post_type' => 'codeless_slider',
   'priority' => 2,
   'id' => 'carousel_slider_columns',
   'type' => 'select',
   'name' => esc_attr__( 'Carousel Slider Columns', 'aronia' ),
   'group_in' => 'slider_layout',
   'options' => array(
       '2' => esc_attr__( 'Two Columns', 'aronia' ),
       '3' => esc_attr__( 'Three Columns', 'aronia' ),
       '4' => esc_attr__( 'Four Columns', 'aronia' )
   ),
   'std' => '3',
   'required' => array(
      'slider_style',
      '=',
      'carousel'
   )
));



Cl_Post_Meta::map(array(
   'post_type' => 'codeless_slider',
   'priority' => 2,
   'id' => 'modern_slider_color',
   'type' => 'select',
   'name' => esc_attr__( 'Modern Slider Color', 'aronia' ),
   'group_in' => 'slider_layout',
   'options' => array(
       'dark' => esc_attr__( 'Dark Text', 'aronia' ),
       'light' => esc_attr__( 'Light Text', 'aronia' )
   ),
   'std' => 'dark',
   'required' => array(
      'slider_style',
      '=',
      'modern'
   )
));

Cl_Post_Meta::map(array(
   'post_type' => 'codeless_slider',
   'priority' => 2,
   'id' => 'slider_bg_color',
   'type' => 'color',
   'name' => esc_attr__( 'Slider BG Color', 'aronia' ),
   'group_in' => 'slider_layout',
   'std' => '',
));

Cl_Post_Meta::map(array(
   'post_type' => 'codeless_slider',
   'priority' => 2,
   'id' => 'slider_padding_top',
   'type' => 'text',
   'name' => esc_attr__( 'Slider Padding Top', 'aronia' ),
   'group_in' => 'slider_layout',
   'std' => '0px',
   'step' => '1',
));

Cl_Post_Meta::map(array(
   'post_type' => 'codeless_slider',
   'priority' => 2,
   'id' => 'slider_padding_bottom',
   'type' => 'text',
   'name' => esc_attr__( 'Slider Padding Bottom', 'aronia' ),
   'group_in' => 'slider_layout',
   'std' => '0px',
   'step' => '1',
   
));

Cl_Post_Meta::map(array(
   'post_type' => 'codeless_slider',
   'priority' => 2,
   'id' => 'slider_container',
   'type' => 'select',
   'name' => esc_attr__( 'Slider Container', 'aronia' ),
   'group_in' => 'slider_layout',
   'options' => array(
       'fullwidth' => esc_attr__( 'Fullwidth', 'aronia' ),
       'boxed' => esc_attr__( 'Boxed', 'aronia' )
   ),
   'std' => 'fullwidth', 

));

// Slider Query
Cl_Post_Meta::map(array(
   'post_type' => 'codeless_slider',
   'priority' => 2,
   'id' => 'slider_categories',
   'type' => 'taxonomy_advanced',
   'name' => esc_attr__( 'Post Categories', 'aronia' ),
   'group_in' => 'slider_query',
   'field_type' => 'select_advanced',
   'multiple' => true
));

Cl_Post_Meta::map(array(
   'post_type' => 'codeless_slider',
   'priority' => 2,
   'id' => 'slider_count',
   'type' => 'number',
   'name' => esc_attr__( 'Post Count', 'aronia' ),
   'group_in' => 'slider_query',
   'step'        => '1',
				// Minimum value
   'min'         => 0,
   'placeholder' => 'Enter number of posts to show'
));

Cl_Post_Meta::map(array(
   'post_type' => 'codeless_slider',
   'priority' => 2,
   'id' => 'slider_orderby',
   'type' => 'select',
   'name' => esc_attr__( 'Order By', 'aronia' ),
   'group_in' => 'slider_query',
   'options'     => array(
      'none' =>  esc_attr__( 'None', 'aronia' ),
      'date' =>  esc_attr__( 'Date', 'aronia' ),
      'ID'   =>  esc_attr__( 'Post ID', 'aronia' ),
      'title' =>  esc_attr__( 'Title', 'aronia' ),
      'rand'  =>  esc_attr__( 'Random', 'aronia' ),
      'post__in' => esc_attr__( 'Preserve Include Order', 'aronia' )
   ),
));

Cl_Post_Meta::map(array(
   'post_type' => 'codeless_slider',
   'priority' => 2,
   'id' => 'slider_order',
   'type' => 'select',
   'name' => esc_attr__( 'Order', 'aronia' ),
   'group_in' => 'slider_query',
   'options'     => array(
      'desc' =>  esc_attr__( 'DESC', 'aronia' ),
      'asc' =>  esc_attr__( 'ASC', 'aronia' ),
   ),
));

Cl_Post_Meta::map(array(
   'post_type' => 'codeless_slider',
   'priority' => 2,
   'id' => 'slider_include_only',
   'type' => 'post',
   'name' => esc_attr__( 'Include Only', 'aronia' ),
   'group_in' => 'slider_query',
   'field_type' => 'select_advanced',
   'multiple' => true,
   'post_type'   => array( 'post' ),
));

Cl_Post_Meta::map(array(
   'post_type' => 'codeless_slider',
   'priority' => 2,
   'id' => 'slider_exclude',
   'type' => 'post',
   'name' => esc_attr__( 'Exclude', 'aronia' ),
   'group_in' => 'slider_query',
   'field_type' => 'select_advanced',
   'multiple' => true,
   'post_type'   => array( 'post' ),
));

?>
