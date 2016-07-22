<?php

// ---------------------------------------------
// Jumbotron Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_jumbotron_section',  array(
    'title'         => __( 'Hero Image', 'felix-landing-page' ),
    'description'   => __( 'Hero Image configuration', 'felix-landing-page' ),
    'panel'         => 'felix_landing_page'
) );


    // Jumbotron visibility toggle
    $wp_customize->add_setting( 'felix_hide_or_show_jumbotron', array(
        'default'           => 'show',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_hide_or_show'
        
    ) );
    $wp_customize->add_control( 'felix_hide_or_show_jumbotron', array(
        'type'              => 'radio',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Display the Hero Image', 'felix-landing-page' ),
        'choices'           => array(
            'show'             => __( 'Show', 'felix-landing-page' ),
            'hide'             => __( 'Hide', 'felix-landing-page' )       
    ) ) );
    
    
    // Primary image
    $wp_customize->add_setting( 'felix_jumbotron_primary_image', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'esc_url_raw'
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'felix_jumbotron_primary_image', array(
        'mime_type'         => 'image',
        'settings'          => 'felix_jumbotron_primary_image',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Hero primary image', 'felix-landing-page' ),
    ) ) );
    
    
    // Secondary image
    $wp_customize->add_setting( 'felix_jumbotron_secondary_image', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'esc_url_raw'
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'felix_jumbotron_secondary_image', array(
        'mime_type'         => 'image',
        'settings'          => 'felix_jumbotron_secondary_image',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Hero secondary image', 'felix-landing-page' ),
    ) ) );
    
    // Title
    $wp_customize->add_setting( 'felix_jumbotron_title', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_jumbotron_title', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Title', 'felix-landing-page' ),
    ) );

    
    // Subtitle
    $wp_customize->add_setting( 'felix_jumbotron_subtitle', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_jumbotron_subtitle', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Subtitle', 'felix-landing-page' ),
    ) );
    
    
    
    // Button 1
    $wp_customize->add_setting( 'felix_jumbotron_button[0][text]', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_jumbotron_button[0][text]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Button 1', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-page' )
    ) );
    $wp_customize->add_setting( 'felix_jumbotron_button[0][url]', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'get_url_raw'
        
    ) );
    $wp_customize->add_control( 'felix_jumbotron_button[0][url]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'description'       => __( 'URL', 'felix-landing-page' )
    ) );
    
    
    // Button 2
    $wp_customize->add_setting( 'felix_jumbotron_button[1][text]', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_jumbotron_button[1][text]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Button 2', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-pages' )
    ) );
    $wp_customize->add_setting( 'felix_jumbotron_button[1][url]', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'get_url_raw'
        
    ) );
    $wp_customize->add_control( 'felix_jumbotron_button[1][url]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'description'       => __( 'URL', 'felix-landing-pages' )
    ) );
    
    