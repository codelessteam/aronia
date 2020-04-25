<?php
/**
 * Template part for displaying page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aronia
 * @subpackage Templates
 * @since 1.0.0
 *
 */

$content 	= get_the_content();



$content    = str_replace(']]>', ']]&gt;', apply_filters( 'codeless_the_content' , $content ));

the_content();

wp_link_pages( array(
    'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'aronia' ),
    'after'       => '</div>',
    'link_before' => '<span class="page-number">',
    'link_after'  => '</span>',
));

?>
