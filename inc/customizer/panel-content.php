<?php

// ---------------------------------------------
// Content Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_content_section',  array(
    'title'         => __( 'Call To Action', 'felix-landing-page' ),
    'description'   => __( 'Add static content to be displayed. ', 'felix-landing-page' ),
    'panel'         => 'felix_landing_page'
) );


    // Title
    $wp_customize->add_setting( 'felix_content_title', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_content_title', array(
        'type'              => 'text',
        'section'           => 'felix_content_section',
        'label'             => __( 'Title', 'felix-landing-page' ),
    ) );

    
    // Subtitle
    $wp_customize->add_setting( 'felix_content_subtitle', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_content_subtitle', array(
        'type'              => 'text',
        'section'           => 'felix_content_section',
        'label'             => __( 'Subitle', 'felix-landing-page' ),
    ) );
    
    
    // Content Area
    $wp_customize->add_setting( 'felix_content_content', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_content_content', array(
        'type'              => 'textarea',
        'section'           => 'felix_content_section',
        'label'             => __( 'Content', 'felix-landing-page' ),
    ) );
    
    
    // Button 1
    $wp_customize->add_setting( 'felix_content_button[0][text]', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_content_button[0][text]', array(
        'type'              => 'text',
        'section'           => 'felix_content_section',
        'label'             => __( 'Button 1', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-page' )
    ) );
    $wp_customize->add_setting( 'felix_content_button[0][url]', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'esc_url_raw'
        
    ) );
    $wp_customize->add_control( 'felix_content_button[0][url]', array(
        'type'              => 'text',
        'section'           => 'felix_content_section',
        'label'             => __( 'Content', 'felix-landing-page' ),
        'description'       => __( 'URL', 'felix-landing-page' )
    ) );
    
    
    // Button 2
    $wp_customize->add_setting( 'felix_content_button[1][text]', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_content_button[1][text]', array(
        'type'              => 'text',
        'section'           => 'felix_content_section',
        'label'             => __( 'Button 2', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-page' )
    ) );
    $wp_customize->add_setting( 'felix_content_button[1][url]', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'esc_url_raw'
        
    ) );
    $wp_customize->add_control( 'felix_content_button[1][url]', array(
        'type'              => 'text',
        'section'           => 'felix_content_section',
        'description'       => __( 'URL', 'felix-landing-page' )
    ) );