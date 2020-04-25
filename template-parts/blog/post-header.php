<?php

$classes = '';

$color = codeless_get_meta( 'post_header_color', 'default', get_the_ID() );
if( $color == 'default' ){
    $color = codeless_get_mod( 'post_header_color', 'light' );
    if( !has_post_thumbnail() )
        $color = 'dark';
}


$layout = codeless_get_meta( 'post_header_layout', 'default', get_the_ID() );
if( $layout == 'default' )
    $layout = codeless_get_mod( 'post_header_layout', 'fullwidth' );

$classes .= 'cl-post-header--'.$color;

if( !has_post_thumbnail() )
    $classes .= ' cl-post-header--without-image ';

if( $layout == 'container' )
    $classes .= ' container';

$post = get_post( get_the_ID() );

$bg_image = codeless_get_layout_option( 'page_header_bg_image', false );

$image_style = '';
if( $url = get_the_post_thumbnail_url( $post, 'full' ) ){
    $image_style = 'background-image: url(\''.$url.'\'); ';
}
?>

<div class="cl-post-header <?php echo esc_attr( $classes ) ?>">
    <div class="cl-post-header__overlay"></div>
    <div class="cl-post-header__image" style="<?php echo esc_attr( $image_style ) ?>"></div>

    <div class="cl-post-header__content d-flex align-items-center h-100">
        <div class="cl-post-header__container">
            <div class="cl-post-header__row align-items-center row justify-content-center">
                <div class="cl-post-header__text col-md-12">
                    <div class="cl-entry__header">

                  <?php if( codeless_get_mod( 'blog_entry_meta_date', true ) ): ?>
                <div class="cl-entry__date">
                    <?php $format = 'M j, Y';

                        echo codeless_get_entry_meta_date($format);?>
                </div>
                <?php endif; ?>
                            
                        <h1 class="cl-post-header__title cl-custom-font"><?php echo get_the_title() ?></h1>

                        <div class="cl-entry__details">
                            <?php get_template_part( 'template-parts/blog/parts/entry', 'meta' ); ?>
                            <?php get_template_part( 'template-parts/blog/parts/entry', 'tools' ); ?>
                        </div><!-- .cl-entry__details -->

                    </div><!-- .cl-entry__header -->
                </div>
            </div>
        </div>
    </div>
</div>