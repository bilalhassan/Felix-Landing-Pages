<?php

// ---------------------------------------------
// Content Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_content_section',  array(
    'title'         => __( 'Content Area', 'felix-landing-page' ),
    'description'   => __( 'Content area displayed on the landing page', 'felix-landing-page' ),
    'panel'         => 'felix_landing_page'
) );

    // Title
    $wp_customize->add_setting( 'felix_content_title', array(
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
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_content_subtitle', array(
        'type'              => 'text',
        'section'           => 'felix_content_section',
        'label'             => __( 'Subitle', 'felix-landing-page' ),
    ) );
    
    
     // Content
    $wp_customize->add_setting( 'felix_content_content', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_content_content', array(
        'type'              => 'textarea',
        'section'           => 'felix_content_section',
        'label'             => __( 'Content', 'felix-landing-page' ),
    ) );
