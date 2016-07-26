<?php

/**
 * Register plugin with customizer.
 * 
 * @param WP_Customize_Manager $wp_customize
 * @since 0.0.1
 * 
 */
function felix_customize_register( $wp_customize ) {
    
    $wp_customize->add_panel( 'felix_landing_page', array(
        'title' => __( 'Felix Landing Page', 'felix-landing-page' ),
        'priority' => 10
    ) );
    
    require_once( 'customizer/panel-general.php' );
    require_once( 'customizer/panel-blockorder.php' );
    require_once( 'customizer/panel-header.php' );
    require_once( 'customizer/panel-jumbotron.php' );
    require_once( 'customizer/panel-navbar.php' );
    require_once( 'customizer/panel-products.php' );
    require_once( 'customizer/panel-content.php' );
    require_once( 'customizer/panel-articles.php' );
    require_once( 'customizer/panel-footer.php' );
     
}
add_action( 'customize_register', 'felix_customize_register' );

/**
 * Ensure logo/title toggle is valid.
 * 
 * @param array $input
 * @return bool
 * @since 0.0.1
 * 
 */
function felix_sanitize_logo_title_toggle( $input ) {
   
    $valid_keys = array(
        'logo'  => __( 'Logo', 'felix-landing-page' ),
        'title' => __( 'Title', 'felix-landing-page' ),
        'both'  => __( 'Both', 'felix-landing-page' )
    );
    
    return array_key_exists( $input, $valid_keys ) ? $input : '';

}

/**
 * Ensure hide or show toggle is valid.
 * 
 * @param type $input
 * @return type
 * @since 0.0.1
 * 
 */
function felix_sanitize_hide_or_show( $input ) {
   
    $valid_keys = array(
        'hide'  => __( 'Hide', 'felix-landing-page' ),
        'show'  => __( 'Show', 'felix-landing-page' ),
    );
    
    return array_key_exists( $input, $valid_keys ) ? $input : '';

}

/**
 * Sanitize text input.
 * 
 * @param type $input
 * @return type
 * @since 0.0.1
 * 
 */
function felix_sanitize_text( $input ) {
    return sanitize_text_field( $input );
}
 
/**
 * Sanitize integer input.
 * 
 * @param type $input
 * @return type
 * @since 0.0.1
 * 
 */
function felix_sanitize_integer( $input ) {
    return intval( $input );
}

/**
 * Sanitize general inputs.
 * 
 * @param type $input
 * @return type
 * @since 0.0.1
 * 
 */
function felix_sanitize( $input ) {
    return $input;
}

/**
 * Get an array of a given type of posts.
 * 
 * @param string $post_type
 * @param int $limit
 * @return array
 * @since 0.0.1
 * 
 */
function felix_get_posts_array( $post_type = "post", $limit = -1 ) {
    
    $posts = get_posts( array(
        'post_type'     => $post_type,
        'numberposts'   => $limit,
        'post_status'   => 'publish',
        'orderby'       => 'title',
        'order'         => 'ASC'
    ) );
    
   $posts_array = array( 'none' => __( 'None' ) );
   
   foreach( $posts as $post ) :
       
       if( !empty( $post->ID ) ) :
           
           $posts_array[ $post->ID ] = $post->post_title;
           
       endif;
       
   endforeach;

   return $posts_array;
   
}

/**
 * Options for the block selection.
 * 
 * @return array
 * @since 0.0.1
 * 
 */
function felix_block_names() {
    
    $blocks = array(
        'disabled'  => __( 'Disabled', 'felix-landing-page' ),
        'header'    => __( 'Header', 'felix-landing-page' ),
        'jumbotron'      => __( 'Hero', 'felix-landing-page' ),
        'navbar'    => __( 'Navigation Bar', 'felix-landing-page' ),
        'products'  => __( 'Featured Products', 'felix-landing-page' ),
        'content'   => __( 'Content', 'felix-landing-page' ),
        'articles'  => __( 'Featured Articles', 'felix-landing-page' ),
        'footer'    => __( 'Footer' )
    );
    
    return $blocks;
    
}

function felix_fonts() {
    
        $font_family_array = array(
            
            'Lobster Two, cursive' => 'Lobster+Two',
            'Impact, Charcoal, sans-serif' => 'Impact',
            'Josefin Sans, sans-serif' => 'Josefin',
            'Lucida Console, Monaco, monospace' => 'Lucida Console',
            'Lucida Sans Unicode, Lucida Grande, sans-serif' => 'Lucida Sans Unicode',
            'MS Sans Serif, Geneva, sans-serif' => 'MS Sans Serif',
            'MS Serif, New York, serif' => 'MS Serif',
            'Open Sans, sans-serif' => 'Open Sans',
            'Palatino Linotype, Book Antiqua, Palatino, serif' => 'Palatino Linotype',
            'Source Sans Pro, sans-serif' => 'Source Sans Pro',
            'Lato, sans-serif' => 'Lato',
            'Abel, sans-serif' => 'Abel',
            'Bangers, cursive' => 'Bangers',
            'Lobster Two, cursive' => 'Lobster+Two',
            'Josefin Sans, sans-serif' => 'Josefin+Sans:300,400,600,700',
            'Montserrat, sans-serif' => 'Montserrat:400,700',
            'Poiret One, cursive' => 'Poiret+One',
            'Source Sans Pro, sans-serif' => 'Source+Sans+Pro:200,400,600',
            'Lato, sans-serif' => 'Lato:100,300,400,700,900,300italic,400italic',
            'Raleway, sans-serif' => 'Raleway:400,300,500,700',
            'Shadows Into Light, cursive' => 'Shadows+Into+Light',
            'Orbitron, sans-serif' => 'Orbitron',
            'PT Sans Narrow, sans-serif' => 'PT+Sans+Narrow',
            'Lora, serif' => 'Lora',
            'Oswald, sans-serif' => 'Oswald:300',
            'Titillium Web, sans-serif' => 'Titillium+Web:400,200,300,600,700,200italic,300italic,400italic,600italic,700italic'
    );
    
    return $font_family_array;
    
}


/**
 * Load customizer defaults.
 * 
 * @since 0.0.1
 * 
 */
function felix_create_template_defaults() {
    
    //If first run
    if( !get_option( 'felix_landing_page_template' ) ) :
        
        $products = felix_get_posts_array( 'product' );
        
        // If posts are available fast forward to the first product
        if( count( $products ) > 1 ) :
            
            next( $products ); 
            $product = current( $products );
            
        endif;
        
        $product_id = array_search($product, $products);
        
        
        $articles = felix_get_posts_array();
      
        // If posts are available fast forward to the first article
        if( count( $articles ) > 1 ) :
            
            next( $articles ); 
            $article = current( $articles );
        
        endif;
        
        $article_id = array_search($article, $articles);

        // Default template configuration for the plugin
        $options = array(
            
            // General configuration
            'primary_color' => '#cbef34',
            'accent_color' => '#efae33',
            
            'primary_font'  => 'Raleway, sans-serif',
            'secondary_font' => 'Raleway, sans-serif',
            
            'header_font_size' => 20,
            'body_font_size' => 12,
            
            'social_icon_facebook_url' => '#',
            'social_icon_google_url' => '#',
            'social_icon_twitter_url' => '#',
            
            // Order that blocks appear
            'blockorder' => array(
                'header', 
                'jumbotron', 
                'navbar', 
                'products', 
                'content', 
                'articles', 
                'footer' 
            ),
            
            // Page header
            'header_title_or_logo' => 'both',
            'header_title' => 'Felix Landing Page',
            'header_logo' => '',
            'header_logo_size' => 50,
            
            // Jumbotron images and controls
            'jumbotron_primary_toggle' => 'show',
            'jumbotron_primary_image' => '',
            'jumbotron_secondary_toggle' => 'show',
            'jumbotron_secondary_image' => '',
            'jumbotron_title' => 'Title',
            'jumbotron_subtitle' => 'Subtitle',
            'jumbotron_buttons' => array(
                array( 'text' => 'Button 1', 'url' => '#' ),
                array( 'text' => 'Button 2', 'url' => '#' )
            ),
            
            // Navigation bar links
            'navbar_links' => array(
                array( 'text' => 'Link 1', 'url' => '#' ),
                array( 'text' => 'Link 2', 'url' => '#' ),
                array( 'text' => 'Link 3', 'url' => '#' ),
                array( 'text' => 'Link 4', 'url' => '#' )
            ),
            
            // Featured products
            'products' => array(
                $product_id,
                $product_id,
                $product_id,
                $product_id,
                $product_id,
                $product_id
            ), //6
            
            // Static content area
            'content_title' => 'Title',
            'content_subtitle' => 'Subtitle',
            'content_content' => 'Content',
            'content_buttons' => array(
                array( 'text' => 'Button 1', 'url' => '#' ),
                array( 'text' => 'Button 2', 'url' => '#' )
            ),

            // Featured articles
            'articles' => array(
                $article_id,
                $article_id,
                $article_id
            ), //3
            
            // Page footer
            'footer_copyright_text' => 'Copyright',
            'footer_textboxes' => array( 'Text 1', 'Text 2' ),
        );
        
        add_option( 'felix_landing_page_template', $options );
        
    endif;
}
felix_create_template_defaults();
