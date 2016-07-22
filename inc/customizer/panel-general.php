<?php

// ---------------------------------------------
// General Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_general_section',  array(
    'title'         => __( 'General', 'felix-landing-page' ),
    'description'   => __( 'General configuration options.' ),
    'panel'         => 'felix_landing_page'
) );
    

   // Facebook URL
    $wp_customize->add_setting( 'felix_social_icon_facebook_url', array (
        'type'              => 'option',
        'default'           => '#',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'felix_social_icon_facebook_url', array(
        'type'              => 'text',
        'section'           => 'felix_general_section',
        'label'             => __( 'Facebook URL', 'felix-landing-page' ),
    ) );
    
    
    // Twitter URL
    $wp_customize->add_setting( 'felix_social_icon_twitter_url', array (
        'type'              => 'option',
        'default'           => '#',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'felix_social_icon_twitter_url', array(
        'type'              => 'text',
        'section'           => 'felix_general_section',
        'label'             => __( 'Twitter URL', 'felix-landing-page' ),
    ) );
    
    
    // Google+ URL
    $wp_customize->add_setting( 'felix_social_icon_google_url', array (
        'type'              => 'option',
        'default'           => '#',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'felix_social_icon_google_url', array(
        'type'              => 'text',
        'section'           => 'felix_general_section',
        'label'             => __( 'Google+ URL', 'felix-landing-page' ),
    ) );