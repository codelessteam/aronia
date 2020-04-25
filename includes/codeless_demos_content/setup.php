<?php
/**
 * Functions to provide support for the One Click Demo Import plugin (wordpress.org/plugins/one-click-demo-import)
 *
 * @package Aronia
 */


/**
 * Set import files
 */
function aronia_set_import_files() {
    return array(

        array(
            'import_file_name'           => 'Default',
            'import_file_url'            => 'https://codeless.co/aronia/default/wp-content/demo-content/content.xml',
            'import_widget_file_url'     => 'https://codeless.co/aronia/default/wp-content/demo-content/widgets.wie',
            'import_customizer_file_url' => 'https://codeless.co/aronia/default/wp-content/demo-content/customizer.dat',
            'import_preview_image_url'   => 'https://codeless.co/aronia/default/wp-content/demo-content/image.png',
            'preview_url'                => 'https://codeless.co/aronia/default',
        ),
        array(
            'import_file_name'           => 'Business',
            'import_file_url'            => 'https://codeless.co/aronia/business/wp-content/demo-content/content.xml',
            'import_widget_file_url'     => 'https://codeless.co/aronia/business/wp-content/demo-content/widgets.wie',
            'import_customizer_file_url' => 'https://codeless.co/aronia/business/wp-content/demo-content/customizer.dat',
            'import_preview_image_url'   => 'https://codeless.co/aronia/business/wp-content/demo-content/image.png',
            'preview_url'                => 'https://codeless.co/aronia/business',
        ),
        array(
            'import_file_name'           => 'Startup',
            'import_file_url'            => 'https://codeless.co/aronia/startup/wp-content/demo-content/content.xml',
            'import_widget_file_url'     => 'https://codeless.co/aronia/startup/wp-content/demo-content/widgets.wie',
            'import_customizer_file_url' => 'https://codeless.co/aronia/startup/wp-content/demo-content/customizer.dat',
            'import_preview_image_url'   => 'https://codeless.co/aronia/startup/wp-content/demo-content/image.png',
            'preview_url'                => 'https://codeless.co/aronia/startup',
        ),            
     
    );
}
add_filter( 'pt-ocdi/import_files', 'aronia_set_import_files' );

/**
 * Define actions that happen after import
 */
function aronia_set_after_import_mods() {

	//Assign the menu
    $main_menu = get_term_by( 'name', 'Main', 'nav_menu' );
    set_theme_mod( 'nav_menu_locations', array(
            'Aronia Main Navigation' => $main_menu->term_id,
        )
    );

    //Asign the static front page and the blog page
    $front_page = get_page_by_title( 'Home' );
    $blog_page  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page -> ID );
    update_option( 'page_for_posts', $blog_page -> ID );

    //Assign the Front Page template
    //update_post_meta( $front_page -> ID, '_wp_page_template', 'page-templates/template_page-builder.php' );

}
add_action( 'pt-ocdi/after_import', 'aronia_set_after_import_mods' );

/**
* Remove branding
*/
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );