<?php

if( function_exists( 'register_sidebar' ) ) {
    
    function codeless_register_sidebars_init() {
        global $cl_redata;
        
        register_sidebar( array(
             'name' => esc_attr__( 'Sidebar Blog', 'aronia' ),
            'id' => 'sidebar-blog',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="cl-widget-title-wrapper"><h3 class="widget-title cl-custom-font">',
            'after_title' => '</h3></div>' 
        ) );
        
        register_sidebar( array(
             'name' => esc_attr__( 'Sidebar Pages', 'aronia' ),
            'id' => 'sidebar-pages',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="cl-widget-title-wrapper"><h3 class="widget-title cl-custom-font">',
            'after_title' => '</h3></div>' 
        ) );
        
        
        $cols = codeless_layout_to_array( codeless_get_mod( 'footer_layout', '14_14_14_14' ) );
        
        for( $i = 1; $i <= count( $cols ); $i++ ) {
            register_sidebar( array(
                 'name' => esc_attr__( 'Footer Column ' . $i, 'aronia' ),
                'id' => 'footer-column-' . $i,
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title cl-custom-font">',
                'after_title' => '</h3>' 
            ) );
        }
        
        
        register_sidebar( array(
             'name' => esc_attr__( 'Copyright Left', 'aronia' ),
            'id' => 'copyright-left',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title cl-custom-font">',
            'after_title' => '</h3>' 
        ) );
        
        register_sidebar( array(
             'name' => esc_attr__( 'Copyright Right', 'aronia' ),
            'id' => 'copyright-right',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title cl-custom-font">',
            'after_title' => '</h3>' 
        ) );
        
        register_sidebar( array(
            'name' => esc_attr__( 'Footer Toparea', 'aronia' ),
           'id' => 'footer-toparea',
           'before_widget' => '<div id="%1$s" class="widget %2$s">',
           'after_widget' => '</div>',
           'before_title' => '<h3 class="widget-title cl-custom-font">',
           'after_title' => '</h3>' 
       ) );
        
        $custom_pages_sidebars = codeless_get_custom_sidebar_pages();


        if( ! empty( $custom_pages_sidebars ) ):
                foreach( $custom_pages_sidebars as $page_id => $page_name ) {
                    
                    if( $page_id != "" )
                        register_sidebar( array(
                             'name' => esc_attr__( 'Page', 'aronia' ) . ': ' . get_the_title( $page_id ) . '',
                            'id' => 'sidebar-custom-page-' . $page_id,
                            'before_widget' => '<div id="%1$s" class="widget %2$s">',
                            'after_widget' => '</div>',
                            'before_title' => '<div class="cl-widget-title-wrapper"><h3 class="widget-title cl-custom-font">',
                            'after_title' => '</h3></div>' 
                        ) );
                    
                    
                }
        endif;
        
        
        
        $custom_categories_sidebars = codeless_get_custom_sidebar_categories();


        if( ! empty( $custom_categories_sidebars ) ):
                foreach( $custom_categories_sidebars as $category_id => $category_name ) {
                    
                    if( $page_id != "" )
                        register_sidebar( array(
                             'name' => esc_attr__( 'Category', 'aronia' ) . ': ' . $category_name . '',
                            'id' => 'sidebar-custom-category-' . $category_id,
                            'before_widget' => '<div id="%1$s" class="widget %2$s">',
                            'after_widget' => '</div>',
                            'before_title' => '<div class="cl-widget-title-wrapper"><h3 class="widget-title cl-custom-font">',
                            'after_title' => '</h3></div>' 
                        ) );
                    
                    
                }
        endif;
        
        
        
        register_sidebar( array(
             'name' => esc_attr__( 'Search Page', 'aronia' ),
            'id' => 'search-dynamic',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="cl-widget-title-wrapper"><h3 class="widget-title cl-custom-font">',
            'after_title' => '</h3></div>' 
        ) );

        register_sidebar( array(
            'name' => esc_attr__( 'Sidenav Widgets', 'aronia' ),
           'id' => 'sidenav',
           'before_widget' => '<div id="%1$s" class="widget %2$s">',
           'after_widget' => '</div>',
           'before_title' => '<div class="cl-widget-title-wrapper"><h3 class="widget-title cl-custom-font">',
            'after_title' => '</h3></div>' 
       ) );

       register_sidebar( array(
        'name' => esc_attr__( 'Custom Widgetized Area', 'aronia' ),
       'id' => 'custom',
       'before_widget' => '<div id="%1$s" class="widget %2$s">',
       'after_widget' => '</div>',
       'before_title' => '<h3 class="widget-title cl-custom-font">',
       'after_title' => '</h3>' 
   ) );

   register_sidebar( array(
    'name' => esc_attr__( 'Custom Widgetized 2', 'aronia' ),
   'id' => 'custom2',
   'before_widget' => '<div id="%1$s" class="widget %2$s">',
   'after_widget' => '</div>',
   'before_title' => '<h3 class="widget-title cl-custom-font">',
   'after_title' => '</h3>' 
) );

if( codeless_get_mod( 'header_menu_style', 'simple' ) == 'fullscreen-overlay' ){
    register_sidebar( array(
        'name' => esc_attr__( 'Fullscreen Overlay Menu', 'aronia' ),
       'id' => 'fullscreen-overlay',
       'before_widget' => '<div id="%1$s" class="widget %2$s">',
       'after_widget' => '</div>',
       'before_title' => '<h3 class="widget-title cl-custom-font">',
       'after_title' => '</h3>' 
    ) );
}

        
        
    }
    add_action( 'widgets_init', 'codeless_register_sidebars_init' );
    
}

?>