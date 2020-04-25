<?php

if( function_exists( 'vc_shortcode_add_param' ) )
    vc_shortcode_add_param( 'image_select', 'codeless_vc_image_select', get_template_directory_uri().'/includes/core/js/image_select.js' );

function codeless_vc_image_select( $settings, $value ) {
    ob_start();
    ?>
    <div class="vc_image_select">
        <input name="<?php echo esc_attr( $settings['param_name'] ) ?>" class="wpb_vc_param_value wpb-textinput <?php echo esc_attr( $settings['param_name'] ) ?> <?php echo esc_attr( $settings['type'] ) ?>_field" type="hidden" value="<?php echo esc_attr( $value )?>" />
        <div class="vc_image_select__wrapper">
            <?php foreach( $settings['value'] as $url => $value_ ): ?>
                <?php $ex_cl = ''; if( $value_ == $value ) $ex_cl = 'selected'; ?>
                <a href="#" class="vc_image_select__button <?php echo esc_attr( $ex_cl ) ?>" style="background-image:url( '<?php echo esc_url( $url ) ?>' );" data-value="<?php echo esc_attr( $value_ ) ?>"></a>
            <?php endforeach; ?>
        </div>
    </div>
    <?php

    $return = ob_get_clean();

    return $return;
}


vc_map(array(
    'name'                    => "Posts",
    'base'                    => "cl_posts",
    'show_settings_on_create' => true,
    'category'                => esc_html__("Aronia",'aronia'),
    'icon'                    => 'icon-blog',
    'description'             => 'Use this element to add blog posts',
    'admin_enqueue_js'        => get_template_directory_uri() . '/includes/core/js/cl_posts_view.js',
    'js_view'                 => 'ClPostsView',
    'params'                  => array(

        array(
            "type" => "textfield",
            "holder" => "h4",
            "heading" => esc_attr__( "Title", "aronia" ),
            "param_name" => "title",
            "value" => esc_attr__( "", "aronia" ),
            "description" => esc_attr__( "Widget Title, leave empty if you don't need one", "aronia" ),
            'group' => esc_attr__( "General", "aronia" )
        ),

        array(
            "type" => "textfield",
            "heading" => esc_attr__( "Unique ID", "aronia" ),
            "param_name" => "unique_id",
            "std" => 'id' . str_replace( ".", '-', uniqid("", true) ),
            "description" => esc_attr__( "If you need to modify this, please add an unique identifier", "aronia" ),
            'group' => esc_attr__( "General", "aronia" )
        ),

        array(
            "type" => "dropdown",
            "holder" => "",
            "heading" => esc_attr__( "Module", "aronia" ),
            "param_name" => "module",
            "value" => array(
                esc_attr__( 'Isotope', 'aronia' ) => 'isotope',
                esc_attr__( 'Carousel', 'aronia' ) => 'carousel',
                esc_attr__( 'Grid Blocks', 'aronia' ) => 'grid-blocks',
            ),
            'edit_field_class' => 'vc_col-xs-4',
            'group' => esc_attr__( "General", "aronia" ),
            'std' => 'isotope',
            'admin_label' => true,
        ),


                array(
                    "type" => "dropdown",
                    "heading" => esc_attr__( "Isotope Type", "aronia" ),
                    "param_name" => "isotope_type",
                    "value" => array(
                        esc_attr__( 'Masonry', 'aronia' ) => 'masonry',
                        esc_attr__( 'Fit Rows', 'aronia' ) => 'fitRows',
                        esc_attr__( 'Vertical', 'aronia' ) => 'vertical',
                        esc_attr__( 'Packery', 'aronia' ) => 'packery',
                    ),
                    'edit_field_class' => 'vc_col-xs-4',
                    'group' => esc_attr__( "General", "aronia" ),
                    'std' => 'masonry',
                    'dependency' => array(
                        'element' => 'module',
                        'value' => array( 'isotope' )
                    ),
                ),

                array(
                    "type" => "image_select",
                    "heading" => esc_attr__( "Grid Blocks", "aronia" ),
                    "param_name" => "grid_block_type",
                    "value" => array(
                        get_template_directory_uri() . '/img/grid/grid-1.png' => 'grid-1',
                        get_template_directory_uri() . '/img/grid/grid-2.png' => 'grid-2',
                        get_template_directory_uri() . '/img/grid/grid-3.png' => 'grid-3',
                        get_template_directory_uri() . '/img/grid/grid-4.png' => 'grid-4',
                        get_template_directory_uri() . '/img/grid/grid-5.png' => 'grid-5',
                        get_template_directory_uri() . '/img/grid/grid-6.png' => 'grid-6',
                        get_template_directory_uri() . '/img/grid/grid-7.png' => 'grid-7',
                        get_template_directory_uri() . '/img/grid/grid-8.png' => 'grid-8',
                        get_template_directory_uri() . '/img/grid/grid-9.png' => 'grid-9',
                        get_template_directory_uri() . '/img/grid/grid-10.png' => 'grid-10',
                    ),
                    'edit_field_class' => 'vc_col-xs-12',
                    'group' => esc_attr__( "General", "aronia" ),
                    'description' => esc_attr__( "grid-1, grid-2, grid-3, grid-6, grid-8, grid-9, grid-10 - works only with Media Style, grid-4, grid-5, grid-7 - works with Media & Simple No Content, grid-6 works only with Deafault Style", "aronia" ),
                    'std' => '',
                    'dependency' => array(
                        'element' => 'module',
                        'value' => array( 'grid-blocks' )
                    ),
                ),


                array(
                    "type" => "dropdown",
                    "holder" => "",
                    "heading" => esc_attr__( "Columns", "aronia" ),
                    "param_name" => "columns",
                    "value" => array(
                        esc_attr__( '1 Column', 'aronia' ) => '1',
                        esc_attr__( '2 Columns', 'aronia' ) => '2',
                        esc_attr__( '3 Columns', 'aronia' ) => '3',
                        esc_attr__( '4 Columns', 'aronia' ) => '4',
                        esc_attr__( '5 Columns', 'aronia' ) => '5',
                    ),
                    'edit_field_class' => 'vc_col-xs-4',
                    'group' => esc_attr__( "General", "aronia" ),
                    'std' => '3',
                    'dependency' => array(
                        'element' => 'module',
                        'value' => array( 'isotope', 'carousel' )
                    ),
                    'admin_label' => true,
                ),

                array(
                    "type" => "dropdown",
                    "holder" => "",
                    "heading" => esc_attr__( "Carousel Nav", "aronia" ),
                    "param_name" => "carousel_nav",
                    "value" => array(
                        esc_attr__( 'Yes', 'aronia' ) => 'yes',
                        esc_attr__( 'No', 'aronia' ) => 'no'
                    ),
                    'edit_field_class' => 'vc_col-xs-4',
                    'group' => esc_attr__( "General", "aronia" ),
                    'std' => 'no',
                    'dependency' => array(
                        'element' => 'module',
                        'value' => array( 'carousel' )
                    ),
                ),


        array(
            "type" => "dropdown",
            "holder" => "",
            "heading" => esc_attr__( "Article Style", "aronia" ),
            'description' => esc_attr__( 'NOTE: Alternate Style is recommended to use with 1 - 2 columns only!', 'aronia' ),
            "param_name" => "style",
            "value" => array(
                esc_attr__( 'Default', 'aronia' ) => 'default',
                esc_attr__( 'Media', 'aronia' ) => 'media',
                esc_attr__( 'Alternate', 'aronia' ) => 'alternate',
                esc_attr__( 'Simple No Content', 'aronia' ) => 'simple-no_content',
                esc_attr__( 'Headlines', 'aronia' ) => 'headlines',
                esc_attr__( 'Headlines 2', 'aronia' ) => 'headlines-2',
                esc_attr__( 'Big', 'aronia' ) => 'big',
            ),
            'edit_field_class' => 'vc_col-xs-6',
            'group' => esc_attr__( "General", "aronia" ),
            'std' => 'default',
            'admin_label' => true,
        ),

        array(
            "type" => "dropdown",
            "holder" => "",
            "heading" => esc_attr__( "Animations", "aronia" ),
            'description' => esc_attr__( 'Animation for items', 'aronia' ),
            "param_name" => "animation",
            "value" => array(
                'None'	=> 'none',
                'Top to Bottom' =>	'top-t-bottom',
                'Bottom to Top' =>	'bottom-t-top',
                'Right to Left' => 'right-t-left',
                'Left to Right' => 'left-t-right',
                'Alpha' => 'alpha-anim',	
                'Zoom In' => 'zoom-in',	
                'Zoom Out' => 'zoom-out',
                'Zoom Reverse' => 'zoom-reverse',
            ),
            'edit_field_class' => 'vc_col-xs-6',
            'group' => esc_attr__( "General", "aronia" ),
            'std' => 'none'
        ),

        /*array(
            "type" => "textfield",
            "holder" => "",
            "heading" => esc_attr__( "Gap between Items", "aronia" ),
            'description' => esc_attr__( "Example values: 20px, 4rem, 20%", "aronia" ),
            "param_name" => "gap_items",
            'group' => esc_attr__( "General", "aronia" ),
            'edit_field_class' => 'vc_col-xs-6',
            'std' => ''
        ),*/

        array(
            "type" => "dropdown",
            "holder" => "",
            "heading" => esc_attr__( "Pagination", "aronia" ),
            "param_name" => "pagination",
            "value" => array(
                esc_attr__( 'Without Pagination', 'aronia' ) => 'none',
                esc_attr__( 'With Numbers', 'aronia' ) => 'numbers',
                esc_attr__( 'Next / Prev Arrows', 'aronia' ) => 'next_prev',
                esc_attr__( 'Next / Prev Ajax', 'aronia' ) => 'next_prev_ajax',
                esc_attr__( 'Load More', 'aronia' ) => 'load_more',
                esc_attr__( 'Infinite Scroll', 'aronia' ) => 'infinite_scroll',
            ),
            'group' => esc_attr__( "General", "aronia" ),
            'std' => 'none',
            'dependency' => array(
                'element' => 'module',
                'value' => array( 'isotope', 'grid-blocks' )
            ),
        ),

        array(
            "type" => "dropdown",
            "holder" => "",
            "heading" => esc_attr__( "Category Filters", "aronia" ),
            "param_name" => "filters",
            "value" => array(
                esc_attr__( 'No Filters', 'aronia' ) => 'disabled',
                esc_attr__( 'Isotope Filter', 'aronia' ) => 'isotope',
                esc_attr__( 'Ajax', 'aronia' ) => 'ajax',
            ),
            'group' => esc_attr__( "General", "aronia" ),
            'std' => 'disabled',
            'dependency' => array(
                'element' => 'module',
                'value' => array( 'isotope', 'grid-blocks' )
            ),
        ),

        array(
            "type" => "textfield",
            "holder" => "",
            "heading" => esc_attr__( "Image Size", "aronia" ),
            'description' => esc_attr__( 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Find theme sizes here: Codeless -> Codeless Image Sizes', 'aronia' ),
            "param_name" => "image_size",
            "value" => '',
            'group' => esc_attr__( "General", "aronia" ),
            'std' => 'theme_default',
        ),

        array(
            "type" => "dropdown",
            "holder" => "",
            "heading" => esc_attr__( "Image Filter", "aronia" ),
            "param_name" => "image_filter",
            "value" => array(
                'normal' => 'normal',
                'darken' => 'darken',
                '_1977' => '_1977',
                'aden' => 'aden',
                'brannan' => 'brannan',
                'brooklyn' => 'brooklyn',
                'clarendon' => 'clarendon',
                'earlybird' => 'earlybird',
                'gingham' => 'gingham',
                'hudson' => 'hudson',
                'inkwell' => 'inkwell',
                'kelvin' => 'kelvin',
                'lark' => 'lark',
                'lofi' => 'lofi',
                'maven' => 'maven',
                'mayfair' => 'mayfair',
                'moon' => 'moon',
                'nashville' => 'nashville',
                'perpetua' => 'perpetua',
                'reyes' => 'reyes',
                'rise' => 'rise',
                'slumber' => 'slumber',
                'stinson' => 'stinson',
                'toaster' => 'toaster',
                'valencia' => 'valencia',
                'walden' => 'walden',
                'willow' => 'willow',
                'xpro2' => 'xpro2',
            ),
            'group' => esc_attr__( "General", "aronia" ),
            'std' => 'normal',
        ),

        array(
            "type" => "textfield",
            "heading" => esc_attr__( "Excerpt Length", "aronia" ),
            "param_name" => "excerpt_length",
            "std" => codeless_get_mod('blog_excerpt_length', 62),
            "description" => esc_attr__( "Excerpt Length", "aronia" ),
            'group' => esc_attr__( "General", "aronia" )
        ),

        



        

        array(
            'type' => 'autocomplete',
            'heading' => esc_attr__( 'Narrow data source', 'aronia' ),
            'param_name' => 'taxonomies',
            'settings' => array(
                'multiple' => true,
                'min_length' => 1,
                'groups' => true,
                // In UI show results grouped by groups, default false
                'unique_values' => true,
                // In UI show results except selected. NB! You should manually check values in backend, default false
                'display_inline' => true,
                // In UI show results inline view, default false (each value in own line)
                'delay' => 500,
                // delay for search. default 500
                'auto_focus' => true,
                // auto focus input, default true
            ),
            'param_holder_class' => 'vc_not-for-custom',
            'description' => esc_attr__( 'Enter categories, tags or custom taxonomies.', 'aronia' ),
            'group' => esc_attr__( "Data Settings", "aronia" ),
            
        ),

        array(
            "type" => "textfield",
            "heading" => esc_attr__( "Post Count", "aronia" ),
            'description' => esc_attr__( "Number of posts to show, if pagination is active, represent number of posts per page", "aronia" ),
            "param_name" => "count",
            'group' => esc_attr__( "Data Settings", "aronia" ),
            'std' => '12'
        ),

        array(
            "type" => "dropdown",
            "holder" => "",
            "heading" => esc_attr__( "Order By", "aronia" ),
            "param_name" => "order_by",
            "value" => array(
                esc_attr__( 'None', 'aronia' ) => 'none',
                esc_attr__( 'Date', 'aronia' ) => 'date',
                esc_attr__( 'Post ID', 'aronia' ) => 'ID',
                esc_attr__( 'Title', 'aronia' ) => 'title',
                esc_attr__( 'Random', 'aronia' ) => 'rand',
                esc_attr__( 'Preserve Include Order', 'aronia' ) => 'post__in'
            ),
            'group' => esc_attr__( "Data Settings", "aronia" ),
            'std' => 'date',
            'edit_field_class' => 'vc_col-xs-6',
        ),

        array(
            "type" => "dropdown",
            "holder" => "",
            "heading" => esc_attr__( "Order", "aronia" ),
            "param_name" => "order",
            "value" => array(
                esc_attr__( 'DESC', 'aronia' ) => 'desc',
                esc_attr__( 'ASC', 'aronia' ) => 'asc'
            ),
            'group' => esc_attr__( "Data Settings", "aronia" ),
            'std' => 'date',
            'edit_field_class' => 'vc_col-xs-6',
        ),

        array(
            'type' => 'autocomplete',
            'heading' => esc_attr__( 'Include only', 'aronia' ),
            'param_name' => 'include',
            'description' => esc_attr__( 'Add posts, pages, etc. by title. Leave empty otherwise', 'aronia' ),
            'settings' => array(
                'multiple' => true,
                'sortable' => true,
                'groups' => true,
            ),
            'group' => esc_attr__( 'Data Settings', 'aronia' ),
        ),

        array(
            'type' => 'autocomplete',
            'heading' => esc_attr__( 'Exclude', 'aronia' ),
            'param_name' => 'exclude',
            'description' => esc_attr__( 'Exclude posts, pages, etc. by title. Leave empty otherwise', 'aronia' ),
            'group' => esc_attr__( 'Data Settings', 'aronia' ),
            'settings' => array(
                'multiple' => true,
            ),
            'param_holder_class' => 'vc_grid-data-type-not-ids',
        ),






        array(
            "type" => "textfield",
            "heading" => esc_attr__( "Custom Width", "aronia" ),
            "param_name" => "custom_width",

            "std" => '',
            "description" => esc_attr__( "Set a custom width for blog items of this element. Leave empty to use the default. For example 600px", "aronia" ),
            'group' => esc_attr__( "Custom Design", "aronia" )
        ),

        array(
            "type" => "textfield",
            "heading" => esc_attr__( "Custom Heading Size", "aronia" ),
            "param_name" => "custom_heading_size",
            "std" => '',
            "description" => esc_attr__( "Set a custom heading size for blog items of this element. Leave empty to use the default. Use example: 24px. This is applicable only on large screens.", "aronia" ),
            'group' => esc_attr__( "Custom Design", "aronia" )
        ),

        array(
            "type" => "textfield",
            "heading" => esc_attr__( "Custom Wrapper Padding", "aronia" ),
            "param_name" => "custom_wrapper_padding",
            "std" => '',
            "description" => esc_attr__( "Set a custom entry wrapper padding for blog items of this element. Leave empty to use the default. Use example: 24px. This is applicable only on large screens.", "aronia" ),
            'group' => esc_attr__( "Custom Design", "aronia" )
        ),

        array(
            "type" => "colorpicker",
            "heading" => esc_attr__( "Custom Wrapper BG Color", "aronia" ),
            "param_name" => "custom_wrapper_color",
            "std" => '',
            "description" => esc_attr__( "Set a custom color for content wrapper on each item of this element", "aronia" ),
            'group' => esc_attr__( "Custom Design", "aronia" )
        ),

        array(
            "type" => "textfield",
            "heading" => esc_attr__( "Custom Grid Gap", "aronia" ),
            "param_name" => "custom_grid_gap",

            "std" => '',
            "description" => esc_attr__( "Set custom grid gap between grid-blocks or isotope items, ex: 5px", "aronia" ),
            'group' => esc_attr__( "Custom Design", "aronia" ),
            'dependency' => array(
                'element' => 'module',
                'value' => array( 'grid-blocks', 'isotope' ) 
            ),
        ),

        array(
            "type" => "dropdown",
            "heading" => esc_attr__( "Title Design", "aronia" ),
            "param_name" => "title_design",
            "value" => array(
                esc_attr__( 'Only Text', 'aronia' ) => 'only_text',
                esc_attr__( 'With BG and Border', 'aronia' ) => 'with_bg',
            ),
            'group' => esc_attr__( "Custom Design", "aronia" ),
            'std' => 'only_text'
        ),

        array(
            "type" => "dropdown",
            "heading" => esc_attr__( "Custom Posts Text Color", "aronia" ),
            "param_name" => "post_text_color",
            "value" => array(
                esc_attr__( 'Dark', 'aronia' ) => 'dark',
                esc_attr__( 'Light', 'aronia' ) => 'light',
            ),
            'group' => esc_attr__( "Custom Design", "aronia" ),
            'std' => 'dark'
        ),

        array(
            "type" => "dropdown",
            "heading" => esc_attr__( "Carousel Nav Position", "aronia" ),
            "param_name" => "carousel_nav_position",
            "value" => array(
                esc_attr__( 'Left', 'aronia' ) => 'left',
                esc_attr__( 'Center', 'aronia' ) => 'center',
            ),
            'group' => esc_attr__( "Custom Design", "aronia" ),
            'std' => 'left'
        ),

    )
));


class WPBakeryShortCode_cl_posts extends WPBakeryShortCode {}



vc_map(array(
    'name'                    => "Video Posts Gallery",
    'base'                    => "cl_video_gallery",
    'show_settings_on_create' => true,
    'category'                => esc_html__("Aronia",'aronia'),
    'icon'                    => 'icon-blog',
    'description'             => 'Use this element to add video post gallery',
    'js_view'                 => '',
    'params'                  => array(
    
        array(
            "type" => "textfield",
            "holder" => "h3",
            "heading" => esc_attr__( "Title", "aronia" ),
            "param_name" => "title",
            "value" => esc_attr__( "", "aronia" ),
            "description" => esc_attr__( "Widget Title, leave empty if you don't need one", "aronia" )
        ),

        array(
            'type' => 'autocomplete',
            'heading' => esc_attr__( 'Data Source', 'aronia' ),
            'param_name' => 'taxonomies',
            'settings' => array(
                'multiple' => true,
                'min_length' => 1,
                'groups' => true,
                // In UI show results grouped by groups, default false
                'unique_values' => true,
                // In UI show results except selected. NB! You should manually check values in backend, default false
                'display_inline' => true,
                // In UI show results inline view, default false (each value in own line)
                'delay' => 500,
                // delay for search. default 500
                'auto_focus' => true,
                // auto focus input, default true
            ),
            'param_holder_class' => 'vc_not-for-custom',
            'description' => esc_attr__( 'Enter categories, tags or custom taxonomies.', 'aronia' ),
        ),

        array(
            'type' => 'autocomplete',
            'heading' => esc_attr__( 'Featured Video Post', 'aronia' ),
            'param_name' => 'featured',
            'description' => esc_attr__( 'Select the Featured Video that will display as default', 'aronia' ),
            'settings' => array(
                'multiple' => false,
                'sortable' => false,
                'groups' => true,
            )
        ),

        array(
            "type" => "textfield",
            "heading" => esc_attr__( "Video Post Count", "aronia" ),
            'description' => esc_attr__( "Number of video posts to show.", "aronia" ),
            "param_name" => "count",
            'std' => '12'
        ),
    )
));
class WPBakeryShortCode_cl_video_gallery extends WPBakeryShortCode {}




vc_map(array(
    'name'                    => "Codeless Button",
    'base'                    => "cl_button",
    'show_settings_on_create' => true,
    'category'                => esc_html__("Aronia",'aronia'),
    'icon'                    => 'icon-blog',
    'description'             => 'Use this element to add codeless button. Different from visual composer button',
    'js_view'                 => '',
    'params'                  => array(
        array(
            "type" => "textfield",
            "heading" => esc_attr__( "Text", "aronia" ),
            'description' => esc_attr__( "Text of the button", "aronia" ),
            "param_name" => "text",
            'std' => 'Click Me'
        ),
        array(
            "type" => "textfield",
            "heading" => esc_attr__( "Link", "aronia" ),
            "param_name" => "link",
            'std' => '#'
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_attr__( "Button Color", "aronia" ),
            "param_name" => "button_color",
            "value" => array(
                esc_attr__( 'Default', 'aronia' ) => 'default',
                esc_attr__( 'Normal', 'aronia' ) => 'normal',
                esc_attr__( 'Alternate', 'aronia' ) => 'alternate',
            ),
            'std' => 'default'
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_attr__( "Button Size", "aronia" ),
            "param_name" => "button_size",
            "value" => array(
                esc_attr__( 'Default', 'aronia' ) => 'default',
                esc_attr__( 'Small', 'aronia' ) => 'small',
                esc_attr__( 'Medium', 'aronia' ) => 'medium',
                esc_attr__( 'Large', 'aronia' ) => 'large',
            ),
            'std' => 'default'
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_attr__( "Button Style", "aronia" ),
            "param_name" => "button_style",
            "value" => array(
                esc_attr__( 'Default', 'aronia' ) => 'default',
                esc_attr__( 'Square', 'aronia' ) => 'square',
                esc_attr__( 'Small Radius', 'aronia' ) => 'small-radius',
                esc_attr__( 'Rounded', 'aronia' ) => 'rounded',
            ),
            'std' => 'default'
        ),

        array(
            "type" => "dropdown",
            "heading" => esc_attr__( "Align", "aronia" ),
            "param_name" => "align",
            "value" => array(
                esc_attr__( 'Left', 'aronia' ) => 'left',
                esc_attr__( 'Center', 'aronia' ) => 'center',
                esc_attr__( 'Right', 'aronia' ) => 'right',
            ),
            'std' => 'center'
        ),
    )
));

class WPBakeryShortCode_cl_button extends WPBakeryShortCode {}



    vc_map(array(
        'name'                    => "Featured Box",
        'base'                    => "cl_featured_box",
        'show_settings_on_create' => true,
        'category'                => esc_html__("Aronia",'aronia'),
        'icon'                    => 'icon-blog',
        'description'             => 'Add a featured box with Image and Link',
        'js_view'                 => '',
        'params'                  => array(
            array(
                "type" => "textfield",
                "heading" => esc_attr__( "Text", "aronia" ),
                'description' => esc_attr__( "Text of the box", "aronia" ),
                "param_name" => "text",
                'std' => 'Click Me'
            ),
            array(
                "type" => "textfield",
                "heading" => esc_attr__( "Description", "aronia" ),
                'description' => esc_attr__( "Description (available only in some styles)", "aronia" ),
                "param_name" => "description",
                'std' => 'Click Me'
            ),
            array(
                "type" => "textfield",
                "heading" => esc_attr__( "Link", "aronia" ),
                "param_name" => "link",
                'std' => '#'
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_attr__( "Box Style", "aronia" ),
                "param_name" => "style",
                "value" => array(
                    esc_attr__( 'Style 1', 'aronia' ) => 'style-1',
                ),
                'std' => 'style-1'
            ),

            array(
                "type" => "attach_image",
                "heading" => esc_attr__( "Image", "aronia" ),
                "param_name" => "image",
            ),

            array(
                "type" => "textfield",
                "holder" => "",
                "heading" => esc_attr__( "Image Size", "aronia" ),
                'description' => esc_attr__( 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Find theme sizes here: Codeless -> Codeless Image Sizes', 'aronia' ),
                "param_name" => "image_size",
                "value" => '',
                'std' => 'theme_default',
            ),
        )
    ));
    
    class WPBakeryShortCode_cl_featured_box extends WPBakeryShortCode {}


    /*vc_map(array(
        'name'                    => "Portfolio",
        'base'                    => "cl_portfolio",
        'show_settings_on_create' => true,
        'category'                => esc_html__("Aronia",'aronia'),
        'icon'                    => 'icon-blog',
        'description'             => '',
        'js_view'                 => '',
        'params'                  => array(
        )
    ));

    class WPBakeryShortCode_cl_portfolio extends WPBakeryShortCode {}*/



vc_add_param( 'vc_widget_sidebar', array(
    "type" => "textfield",
    "heading" => esc_attr__( "Sticky Widgets from Bottom", "aronia" ),
    'description' => esc_attr__( "Number of widgets to make sticky on this sidebar.", "aronia" ),
    "param_name" => "sticky_widgets",
    'std' => 0
));


add_filter( 'vc_autocomplete_cl_posts_taxonomies_callback', 'cl_autocomplete_taxonomies_field_search', 10, 1 );
add_filter( 'vc_autocomplete_cl_posts_taxonomies_render', 'cl_autocomplete_taxonomies_field_render', 10, 1 );
add_filter( 'vc_autocomplete_cl_video_gallery_taxonomies_callback', 'cl_autocomplete_taxonomies_field_search', 10, 1 );
add_filter( 'vc_autocomplete_cl_video_gallery_taxonomies_render', 'cl_autocomplete_taxonomies_field_render', 10, 1 );    

add_filter( 'vc_autocomplete_cl_posts_exclude_callback', 'cl_exclude_field_search', 10, 1 ); // Get suggestion(find). Must return an array
add_filter( 'vc_autocomplete_cl_posts_exclude_render', 'cl_exclude_field_render', 10, 1 );

add_filter( 'vc_autocomplete_cl_posts_include_callback', 'cl_include_field_search', 10, 1 ); // Get suggestion(find). Must return an array
add_filter( 'vc_autocomplete_cl_posts_include_render', 'cl_include_field_render', 10, 1 );
add_filter( 'vc_autocomplete_cl_video_gallery_featured_callback', 'cl_include_field_search', 10, 1 ); // Get suggestion(find). Must return an array
add_filter( 'vc_autocomplete_cl_video_gallery_featured_render', 'cl_include_field_render', 10, 1 );



function cl_autocomplete_taxonomies_field_render( $term ) {
	$terms = get_terms( array('category', 'post_tag'), array(
		'include' => array( $term['value'] ),
		'hide_empty' => false,
	) );
	$data = false;
	if ( is_array( $terms ) && 1 === count( $terms ) ) {
		$term = $terms[0];
		$data = vc_get_term_object( $term );
	}

	return $data;
}


function cl_autocomplete_taxonomies_field_search( $search_string ) {
	$data = array();
	$vc_filter_by = vc_post_param( 'vc_filter_by', '' );
	$vc_taxonomies = get_terms( array('category', 'post_tag'), array(
		'hide_empty' => false,
		'search' => $search_string,
	) );
	if ( is_array( $vc_taxonomies ) && ! empty( $vc_taxonomies ) ) {
		foreach ( $vc_taxonomies as $t ) {
			if ( is_object( $t ) ) {
				$data[] = vc_get_term_object( $t );
			}
		}
	}

	return $data;
}


function cl_include_field_search( $search_string ) {
	$query = $search_string;
	$data = array();
	$args = array(
		's' => $query,
		'post_type' => 'post',
	);
	$args['vc_search_by_title_only'] = true;
	$args['numberposts'] = - 1;
	if ( 0 === strlen( $args['s'] ) ) {
		unset( $args['s'] );
	}
	add_filter( 'posts_search', 'vc_search_by_title_only', 500, 2 );
	$posts = get_posts( $args );
	if ( is_array( $posts ) && ! empty( $posts ) ) {
		foreach ( $posts as $post ) {
			$data[] = array(
				'value' => $post->ID,
				'label' => $post->post_title,
				'group' => $post->post_type,
			);
		}
	}

	return $data;
}


function cl_include_field_render( $value ) {
	$post = get_post( $value['value'] );

	return is_null( $post ) ? false : array(
		'label' => $post->post_title,
		'value' => $post->ID,
		'group' => $post->post_type,
	);
}


function cl_exclude_field_search( $data_arr ) {
	$query = isset( $data_arr['query'] ) ? $data_arr['query'] : null;
	$term = isset( $data_arr['term'] ) ? $data_arr['term'] : '';
	$data = array();
	$args = ! empty( $query ) ? array(
		's' => $term,
		'post_type' => 'post',
	) : array(
		's' => $term,
		'post_type' => 'post',
	);
	$args['vc_search_by_title_only'] = true;
	$args['numberposts'] = - 1;
	if ( 0 === strlen( $args['s'] ) ) {
		unset( $args['s'] );
	}
	add_filter( 'posts_search', 'vc_search_by_title_only', 500, 2 );
	$posts = get_posts( $args );
	if ( is_array( $posts ) && ! empty( $posts ) ) {
		foreach ( $posts as $post ) {
			$data[] = array(
				'value' => $post->ID,
				'label' => $post->post_title,
				'group' => $post->post_type,
			);
		}
	}

	return $data;
}


function cl_exclude_field_render( $value ) {
	$post = get_post( $value['value'] );

	return is_null( $post ) ? false : array(
		'label' => $post->post_title,
		'value' => $post->ID,
		'group' => $post->post_type,
	);
}

remove_action( 'vc_activation_hook', 'vc_page_welcome_set_redirect' );
remove_action( 'admin_init', 'vc_page_welcome_redirect' );


add_filter( 'vc_get_all_templates', 'codeless_modify_default_template_name', 999 );
function codeless_modify_default_template_name($data){
    $data[1]['category_name'] = esc_attr__('Aronia Templates', 'aronia');
    $data[1]['category_description'] = esc_attr__( 'Append predefined Aronia Templates to the actual layout', 'aronia' );
    $default_templates = visual_composer()->templatesPanelEditor()->getDefaultTemplates();

    foreach( $data[1]['templates'] as $index => $template_data ){
        if( isset( $template_data['unique_id'] ) && isset( $default_templates[ $template_data['unique_id'] ] ) ){
            
            $data[1]['templates'][$index]['cat_display_name'] = isset( $default_templates[ $template_data['unique_id'] ]['cat_display_name'] ) ? $default_templates[$template_data['unique_id']]['cat_display_name'] : '';
        }
    }
    $data[1]['category_weight'] = 5;

    return $data;
    
}


add_filter( 'vc_templates_render_category', 'codeless_templates_render_category', 999 );
function codeless_templates_render_category($category){
    if( $category['category'] == 'default_templates' ){
        $output = $category['output'];
        $category['output'] = '<div class="library_categories">';
            $category['output'] .= '<ul>';
            $codeless_library_cats = codeless_vc_cat_list();
            $category['output'] .=  '<li data-sort="all" class="active">'.esc_attr__('All', 'aronia').'</li>';
            foreach($codeless_library_cats as $cat_id => $cat_name) {
                $category['output'] .=  '<li data-sort="'.$cat_id.'">'.$cat_name.'</li>';
            }
            $category['output'] .= '</ul>';

        $category['output'] .= '</div>';
        $category['output'] .= '<div class="cl-templates-wrap">';
        $category['output'] .= $output;
        $category['output'] .= '</div>';
    }

    return $category;
}


add_filter( 'vc_templates_render_template', 'codeless_templates_render_template', 99, 2 );
function codeless_templates_render_template($name, $template){
    $name = $template['name'];
    $cat_display_name = isset( $template['cat_display_name'] ) ? $template['cat_display_name'] : '';

    $output = '';
    $output .= '<div class="cl-template-wrap">';
        if( isset( $template['image'] ) && !empty(  $template['image'] ) )
            $output .= '<div class="img-wrap"><img class="lazy" data-src="'.$template['image'].'" alt="'.$name.'" width="300" height="200"></div>';
        $output .= '<div class="title-wrap">';
            $output .= '<div class="display_cat">'.$cat_display_name.'</div>';
            $output .= $name;
        $output .= '</div>';
        $output .= '<a type="button" class="vc_ui-list-bar-item-trigger" title="$add_template_title"
    data-template-handler=""
    data-vc-ui-element="template-title"></a>';
    $output .= '</div>';
    return $output;
}


add_action( 'vc_load_default_templates_action','codeless_templates_for_vc' ); 

function codeless_vc_cat_list(){
    $cat_display_names = array(
        'ajax' => __('Ajax', 'aronia'),
        'blog' => __('Blog', 'aronia'),
        'block' => __('Posts Block', 'aronia'),
        'carousel' => __('Carousel', 'aronia'),
        'featured' => __('Featured', 'aronia'),
        'grid' => __('Grid', 'aronia'),
        'masonry' => __('Masonry', 'aronia'),
        'magazine' => __('Magazine', 'aronia'),
    );

    return $cat_display_names;
}


function codeless_templates_for_vc() {

$cat_display_names = codeless_vc_cat_list();


// Blog Masonry 2 Columns
$data = array();
$data['name'] = __( 'Blog Masonry 2 Columns', 'aronia' );
$data['cat_display_name'] = $cat_display_names['blog']  .', '. $cat_display_names['masonry'];
$data['custom_class'] = 'blog masonry';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/blog-masonry-two-columns.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column css=".vc_custom_1544263389548{margin-top: -10px !important;}"][cl_posts unique_id="id5c0ab4de21b321-88688305" columns="2" animation="bottom-t-top" pagination="load_more" excerpt_length="30" count="4" order="desc" taxonomies="204, 206, 205"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


// Blog Alternate Ajax Pagination
$data = array();
$data['name'] = __( 'Blog Alternate Ajax Pagination', 'aronia' );
$data['cat_display_name'] = $cat_display_names['blog']  .', '. $cat_display_names['ajax'];
$data['custom_class'] = 'blog ajax';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/blog-alternate-ajax-pagination.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column css=".vc_custom_1544263389548{margin-top: -10px !important;}"][cl_posts title="Popular Posts" unique_id="id5c0ab4e173eac7-66403554" columns="1" style="alternate" animation="bottom-t-top" pagination="next_prev_ajax" excerpt_length="10" count="2" order="desc" taxonomies="207"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


// Blog Carousel Alternate 2 Columns
$data = array();
$data['name'] = __( 'Blog Carousel Alternate 2 Columns', 'aronia' );
$data['cat_display_name'] = $cat_display_names['blog']  .', '. $cat_display_names['carousel'];
$data['custom_class'] = 'blog carousel';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/blog-carousel-alternate-two-columns.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column][cl_posts title="Popular Posts" unique_id="id5c0bf2ce0efca1-35792436" module="carousel" columns="2" carousel_nav="yes" style="alternate" excerpt_length="62" order="desc" include="2644, 2520, 2557, 2626"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


// Blog Masonry Infinite Scroll 3 Columns
$data = array();
$data['name'] = __( 'Blog Masonry Infinite Scroll 3 Columns', 'aronia' );
$data['cat_display_name'] = $cat_display_names['blog']  .', '. $cat_display_names['masonry'];
$data['custom_class'] = 'blog masonry';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/blog-masonry-infinite-scroll-3-columns.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row content_placement="middle" css=".vc_custom_1545581376967{margin-top: 0px !important;padding-top: 170px !important;}"][vc_column][cl_posts unique_id="id5c18fa06dc7916-48171606" animation="bottom-t-top" pagination="infinite_scroll" excerpt_length="19" count="9" order_by="post__in" order="desc" custom_wrapper_color="#ffffff"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );



// Blog Carousel Gradient
$data = array();
$data['name'] = __( 'Blog Carousel Gradient', 'aronia' );
$data['cat_display_name'] = $cat_display_names['blog']  .', '. $cat_display_names['carousel'];
$data['custom_class'] = 'blog carousel';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/blog-carousel-gradient.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1546961787602{padding-top: 0px !important;}" el_id="gradient_row"][vc_column css=".vc_custom_1546961686275{padding-top: 40px !important;padding-right: 20px !important;padding-bottom: 30px !important;padding-left: 20px !important;background-image: url(https://codeless.co/aronia/blog/wp-content/uploads/2019/01/gradient.png?id=2962) !important;background-position: 0 0 !important;background-repeat: repeat !important;}"][cl_posts unique_id="id5c34b82ad0eea4-53147074" module="carousel" columns="2" style="alternate" animation="bottom-t-top" excerpt_length="62" count="3" order_by="post__in" order="desc" custom_heading_size="26px" post_text_color="light" include="2600, 2557, 2590"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );



// Blog Featured 3 Columns Image
$data = array();
$data['name'] = __( 'Blog Featured 3 Columns Image', 'aronia' );
$data['cat_display_name'] = $cat_display_names['blog']  .', '. $cat_display_names['featured'];
$data['custom_class'] = 'blog featured';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/blog-featured-3-columns-image.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row content_placement="middle" css=".vc_custom_1545143022884{margin-top: -17px !important;}"][vc_column][vc_custom_heading text="Featured Posts" font_container="tag:h2|font_size:26px|text_align:center|color:%23191e23|line_height:1.5" use_theme_fonts="yes" css=".vc_custom_1545923244231{margin-bottom: 10px !important;}"][vc_separator color="black" style="double" el_width="10" css=".vc_custom_1545923303311{margin-bottom: 20px !important;}"][cl_posts unique_id="id5c18fa06dc7916-48171606" style="media" animation="bottom-t-top" excerpt_length="67" count="3" order_by="post__in" order="desc" include="2520, 2557, 2593"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );



// Blog Grid 3 Columns Image
$data = array();
$data['name'] = __( 'Blog Grid 3 Columns Image', 'aronia' );
$data['cat_display_name'] = $cat_display_names['blog']  .', '. $cat_display_names['grid'];
$data['custom_class'] = 'blog grid';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/blog-grid-3-columns-image.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_custom_heading text="What's New" font_container="tag:h2|font_size:26px|text_align:center|color:%23191e23|line_height:1.5" use_theme_fonts="yes" css=".vc_custom_1545923333857{margin-bottom: 10px !important;}"][vc_separator color="black" style="double" el_width="10" css=".vc_custom_1545923303311{margin-bottom: 20px !important;}"][cl_posts unique_id="id5c1a103e0353b6-46716569" isotope_type="fitRows" style="simple-no_content" pagination="load_more" excerpt_length="62" count="7" order="desc" exclude="2569"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


// Magazine Grid 1
$data = array();
$data['name'] = __( 'Magazine Grid 1', 'aronia' );
$data['cat_display_name'] = $cat_display_names['magazine']  .', '. $cat_display_names['grid']. ', '.  $cat_display_names['featured'];
$data['custom_class'] = 'magazine grid featured';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/magazine-grid-1.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1544637370209{padding-top: 0px !important;}"][vc_column][cl_posts unique_id="id5c10d4da51db99-13812925" module="grid-blocks" grid_block_type="grid-2" style="media" animation="alpha-anim" excerpt_length="62" count="3" order="asc" include="2698, 2702, 2707, 2813, 2741"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


// Magazine Grid 2
$data = array();
$data['name'] = __( 'Magazine Grid 2', 'aronia' );
$data['cat_display_name'] = $cat_display_names['magazine']  .', '. $cat_display_names['grid']. ', '.  $cat_display_names['featured'];
$data['custom_class'] = 'magazine grid featured';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/magazine-grid-2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1546792697093{margin-top: 0px !important;padding-top: 0px !important;}"][vc_column css=".vc_custom_1546792704236{padding-top: 0px !important;}"][cl_posts unique_id="id5c322eb50f9c05-42780382" module="grid-blocks" grid_block_type="grid-9" style="media" excerpt_length="62" count="4" order_by="post__in" order="desc" include="2698, 2702, 2707, 2734"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );



// Magazine Grid Fullwidth
$data = array();
$data['name'] = __( 'Magazine Grid Fullwidth', 'aronia' );
$data['cat_display_name'] = $cat_display_names['magazine']  .', '. $cat_display_names['grid'];
$data['custom_class'] = 'magazine grid featured';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/magazine-grid-fullwidth.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1546859928722{margin-top: 0px !important;padding-top: 5px !important;}"][vc_column css=".vc_custom_1546792704236{padding-top: 0px !important;}"][cl_posts unique_id="id5c322eb50f9c05-42780382" module="grid-blocks" grid_block_type="grid-8" style="media" excerpt_length="62" count="5" order_by="post__in" order="desc" custom_grid_gap="5px" include="2698, 2702, 2707, 2734, 2737"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


// Magazine Grid 4
$data = array();
$data['name'] = __( 'Magazine Grid 4', 'aronia' );
$data['cat_display_name'] = $cat_display_names['magazine']  .', '. $cat_display_names['grid']. ', '.  $cat_display_names['featured'];
$data['custom_class'] = 'magazine grid featured';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/magazine-grid-4.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1546880958165{margin-top: 0px !important;padding-top: 0px !important;}"][vc_column css=".vc_custom_1546792704236{padding-top: 0px !important;}"][cl_posts unique_id="id5c322eb50f9c05-42780382" module="grid-blocks" grid_block_type="grid-10" style="media" excerpt_length="0" count="5" order_by="post__in" order="desc" include="2698, 2702, 2707, 2734, 2737"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


// Magazine Grid 5
$data = array();
$data['name'] = __( 'Magazine Grid 5', 'aronia' );
$data['cat_display_name'] = $cat_display_names['magazine']  .', '. $cat_display_names['grid']. ', '.  $cat_display_names['featured'];
$data['custom_class'] = 'magazine grid featured';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/magazine-grid-5.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_154688095814545{margin-top: 0px !important;padding-top: 0px !important;}"][vc_column css=".vc_custom_1546792704236{padding-top: 0px !important;}"][cl_posts unique_id="id5c322eb50f9c05-427845454545" module="grid-blocks" grid_block_type="grid-8" style="media" excerpt_length="0" count="5" order_by="post__in" order="desc" include="2698, 2702, 2707, 2734, 2737"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


// Magazine Block 1
$data = array();
$data['name'] = __( 'Magazine Block 1', 'aronia' );
$data['cat_display_name'] = $cat_display_names['magazine']  .', '. $cat_display_names['block'];
$data['custom_class'] = 'magazine block';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/magazine-block-1.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column][cl_posts title="Latest News" unique_id="id5c0ab4de21b321-88688305" module="grid-blocks" grid_block_type="grid-4" style="simple-no_content" animation="alpha-anim" filters="ajax" image_size="news_grid" excerpt_length="26" count="10" order="desc" taxonomies="204, 206, 205"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );



// Magazine Block 2
$data = array();
$data['name'] = __( 'Magazine Block 2', 'aronia' );
$data['cat_display_name'] = $cat_display_names['magazine']  .', '. $cat_display_names['block'];
$data['custom_class'] = 'magazine block';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/magazine-block-2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column][cl_posts unique_id="id5c114eacce5b65-36272521" module="grid-blocks" grid_block_type="grid-5" style="simple-no_content" animation="alpha-anim" image_size="news_grid" excerpt_length="62" count="6" order="asc" taxonomies="204, 1, 206"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


// Magazine Block 3
$data = array();
$data['name'] = __( 'Magazine Block 3', 'aronia' );
$data['cat_display_name'] = $cat_display_names['magazine']  .', '. $cat_display_names['block'];
$data['custom_class'] = 'magazine block';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/magazine-block-3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column width="1/2"][cl_posts title="Popular" unique_id="id5c32308a28b716-69944257" module="grid-blocks" grid_block_type="grid-7" style="simple-no_content" excerpt_length="30" count="4" order="desc" title_design="with_bg" taxonomies="207"][/vc_column_inner][vc_column_inner width="1/2"][cl_posts title="Tech" unique_id="id5c32308a28b716-69944257" module="grid-blocks" grid_block_type="grid-7" style="simple-no_content" excerpt_length="30" count="4" order="desc" title_design="with_bg" taxonomies="206"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


// Magazine Video Block
$data = array();
$data['name'] = __( 'Magazine Video Block', 'aronia' );
$data['cat_display_name'] = $cat_display_names['magazine']  .', '. $cat_display_names['block'];
$data['custom_class'] = 'magazine block';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/magazine-video-block.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column][cl_posts title="Video Gallery" unique_id="id5c32308a28b716-69944257" columns="2" style="media" excerpt_length="30" count="4" order="desc" custom_grid_gap="10px" title_design="with_bg"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


// Magazine Big Posts
$data = array();
$data['name'] = __( 'Magazine Big Posts', 'aronia' );
$data['cat_display_name'] = $cat_display_names['magazine']  .', '. $cat_display_names['grid'];
$data['custom_class'] = 'magazine grid';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/magazine-big-posts.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column][cl_posts title="Design" unique_id="id5c322edd075bb0-38328068" columns="2" style="simple-no_content" image_size="news_grid" excerpt_length="30" count="4" order_by="post__in" order="desc" title_design="with_bg" taxonomies="205"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


// Magazine Headlines
$data = array();
$data['name'] = __( 'Magazine Headlines', 'aronia' );
$data['cat_display_name'] = $cat_display_names['magazine']  .', '. $cat_display_names['block'];
$data['custom_class'] = 'magazine block';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/magazine-headlines.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column][cl_posts title="Latest Headlines" unique_id="id5c335d83250794-05255137" columns="1" style="headlines" filters="isotope" excerpt_length="62" count="7" order="desc" custom_heading_size="24px" title_design="with_bg" taxonomies="207, 204, 206"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


// Magazine Block Media
$data = array();
$data['name'] = __( 'Magazine Block Media', 'aronia' );
$data['cat_display_name'] = $cat_display_names['magazine']  .', '. $cat_display_names['block'];
$data['custom_class'] = 'magazine block';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/magazine-block-media.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column][cl_posts title="Popular" unique_id="id5c322edd075bb0-38328068" columns="2" style="media" image_size="news_grid" image_filter="darken" excerpt_length="30" count="4" order_by="post__in" order="desc" custom_grid_gap="3px" title_design="with_bg" include="2741, 2740, 2739, 2738, 2737, 2628"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


// Magazine Carousel Posts
$data = array();
$data['name'] = __( 'Magazine Carousel Posts', 'aronia' );
$data['cat_display_name'] = $cat_display_names['magazine']  .', '. $cat_display_names['carousel'];
$data['custom_class'] = 'magazine carousel';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/img/templates/magazine-carousel-posts.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column][cl_posts title="Top of Month" unique_id="id5c322edd075bb0-38328068" module="carousel" style="simple-no_content" image_size="news_grid" image_filter="darken" excerpt_length="30" count="4" order_by="post__in" order="asc" title_design="with_bg"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );



}


?>