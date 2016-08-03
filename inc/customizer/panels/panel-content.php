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
    $wp_customize->add_setting( 'felix_landing_page_template[content_title]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[content_title]', array(
        'type'              => 'text',
        'section'           => 'felix_content_section',
        'label'             => __( 'Title', 'felix-landing-page' ),
    ) );

    
    // Subtitle
    $wp_customize->add_setting( 'felix_landing_page_template[content_subtitle]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[content_subtitle]', array(
        'type'              => 'text',
        'section'           => 'felix_content_section',
        'label'             => __( 'Subitle', 'felix-landing-page' ),
    ) );
    
    
    // Content Area
    $wp_customize->add_setting( 'felix_landing_page_template[content_content]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_content_content', array(
        'type'              => 'textarea',
        'section'           => 'felix_content_section',
        'label'             => __( 'Content', 'felix-landing-page' ),
    ) );
    
    
    // Button 1 text
    $wp_customize->add_setting( 'felix_landing_page_template[content_buttons][0][text]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[content_buttons][0][text]', array(
        'type'              => 'text',
        'section'           => 'felix_content_section',
        'label'             => __( 'Button 1', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-page' )
    ) );
    
    // Button 1 url
    $wp_customize->add_setting( 'felix_landing_page_template[content_buttons][0][url]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[content_buttons][0][url]', array(
        'type'              => 'text',
        'section'           => 'felix_content_section',
        'label'             => __( 'Content', 'felix-landing-page' ),
        'description'       => __( 'URL', 'felix-landing-page' )
    ) );
    
    
    // Button 2 text
    $wp_customize->add_setting( 'felix_landing_page_template[content_buttons][1][text]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[content_buttons][1][text]', array(
        'type'              => 'text',
        'section'           => 'felix_content_section',
        'label'             => __( 'Button 2', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-page' )
    ) );
    
    // Button 2 url
    $wp_customize->add_setting( 'felix_landing_page_template[content_buttons][1][url]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[content_buttons][1][url]', array(
        'type'              => 'text',
        'section'           => 'felix_content_section',
        'description'       => __( 'URL', 'felix-landing-page' )
    ) );
    