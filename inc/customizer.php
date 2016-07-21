<?php

function felix_customize_register( $wp_customize ) {
    
    
    
    
    $wp_customize->add_panel( 'felix_landing_page', array(
        'title' => __( 'Felix Landing Page', 'felix-landing-page' ),
        'priority' => 10
    ) );
    
    require_once( 'customizer/panel-general.php' );
    require_once( 'customizer/panel-header.php' );
    require_once( 'customizer/panel-jumbotron.php' );
    require_once( 'customizer/panel-products.php' );
    
}
add_action( 'customize_register', 'felix_customize_register' );

function felix_sanitize_logo_title_toggle( $input ) {
   
    $valid_keys = array(
        'title' => __( 'Use site title', 'felix-landing-page' ),
        'logo'  => __( 'Use logo', 'felix-landing-page' )
    );
    
    return array_key_exists( $input, $valid_keys ) ? $input : '';

}
function felix_sanitize_hide_or_show( $input ) {
   
    $valid_keys = array(
        'hide'  => __( 'Hide', 'felix-landing-page' ),
        'show'  => __( 'Show', 'felix-landing-page' )
    );
    
    return array_key_exists( $input, $valid_keys ) ? $input : '';

}

function felix_get_all_posts_array( $post_type ) {
    
    $posts = get_posts( array(
        'post_type'      => $post_type,
        'numberposts' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'title',
        'order'          => 'ASC'
    ) );
    
   $posts_array = array( -1 => "" );
   
   foreach( $posts as $post ) :
       
       if( !empty( $post->ID ) ) :
           
           $posts_array[ $post->ID ] = $post->post_title;
           
       endif;
       
   endforeach;

   return $posts_array;
   
}

