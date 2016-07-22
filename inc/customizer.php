<?php

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

function felix_sanitize_logo_title_toggle( $input ) {
   
    $valid_keys = array(
        'logo'  => __( 'Logo', 'felix-landing-page' ),
        'title' => __( 'Title', 'felix-landing-page' ),
        'both'  => __( 'Both', 'felix-landing-page' )
    );
    
    return array_key_exists( $input, $valid_keys ) ? $input : '';

}
function felix_sanitize_hide_or_show( $input ) {
   
    $valid_keys = array(
        'hide'  => __( 'Hide', 'felix-landing-page' ),
        'show'  => __( 'Show', 'felix-landing-page' ),
    );
    
    return array_key_exists( $input, $valid_keys ) ? $input : '';

}

function felix_sanitize_text( $input ) {
    return sanitize_text_field( $input );
}
 
function felix_sanitize_integer( $input ) {
    return intval( $input );
}

function felix_sanitize( $input ) {
    return $input;
}

function felix_get_all_posts_array( $post_type = "post" ) {
    
    $posts = get_posts( array(
        'post_type'      => $post_type,
        'numberposts' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'title',
        'order'          => 'ASC'
    ) );
    
   $posts_array = array( 'none' => __( 'None' ) );
   
   foreach( $posts as $post ) :
       
       if( !empty( $post->ID ) ) :
           
           $posts_array[ $post->ID ] = $post->post_title;
           
       endif;
       
   endforeach;

   return $posts_array;
   
}

function felix_block_names() {
    
    $blocks = array(
        'disabled'  => __( 'Disabled', 'felix-landing-page' ),
        'header'    => __( 'Header', 'felix-landing-page' ),
        'hero'      => __( 'Hero', 'felix-landing-page' ),
        'navbar'    => __( 'Navigation Bar', 'felix-landing-page' ),
        'products'  => __( 'Featured Products', 'felix-landing-page' ),
        'content'   => __( 'Content', 'felix-landing-page' ),
        'articles'  => __( 'Featured Articles', 'felix-landing-page' ),
        'Footer'    => __( 'Footer' )
    );
    
    return $blocks;
    
}

function felix_customizer_scripts_enqueue() {
    wp_enqueue_script( 'felix-customizer-js', FELIX_LANDING_PAGE_URL . 'inc/assets/scripts/customizer.js', array( 'jquery' ), false, true );
}
add_action( 'customize_controls_enqueue_scripts', 'felix_customizer_scripts_enqueue');