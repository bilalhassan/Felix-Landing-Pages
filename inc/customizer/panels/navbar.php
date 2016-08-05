<?php

// ---------------------------------------------
// Navbar Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_navbar_section',  array(
    'title'         => __( 'Navigation Bar', 'felix-landing-page' ),
    'description'   => __( 'Configure the links for the navigation bar.', 'felix-landing-page' ),
    'panel'         => 'felix_landing_page'
) );


    // Link 1 text
    $wp_customize->add_setting( 'felix_landing_page_template[navbar_links][0][text]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[navbar_links][0][text]', array(
        'type'              => 'text',
        'section'           => 'felix_navbar_section',
        'label'             => __( 'Link 1', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-page' )
    ) );
    
    // Link 1 url
    $wp_customize->add_setting( 'felix_landing_page_template[navbar_links][0][url]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[navbar_links][0][url]', array(
        'type'              => 'text',
        'section'           => 'felix_navbar_section',
        'description'       => __( 'URL', 'felix-landing-page' )
    ) );
    
    
    // Link 2 text
    $wp_customize->add_setting( 'felix_landing_page_template[navbar_links][1][text]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[navbar_links][1][text]', array(
        'type'              => 'text',
        'section'           => 'felix_navbar_section',
        'label'             => __( 'Link 2', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-page' )
    ) );
    
    // Link 2 url
    $wp_customize->add_setting( 'felix_landing_page_template[navbar_links][1][url]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[navbar_links][1][url]', array(
        'type'              => 'text',
        'section'           => 'felix_navbar_section',
        'description'       => __( 'URL', 'felix-landing-page' )
    ) );
    
    
    // Link 3 text
    $wp_customize->add_setting( 'felix_landing_page_template[navbar_links][2][text]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[navbar_links][2][text]', array(
        'type'              => 'text',
        'section'           => 'felix_navbar_section',
        'label'             => __( 'Link 3', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-page' )
    ) );
    
    // Link 3 url
    $wp_customize->add_setting( 'felix_landing_page_template[navbar_links][2][url]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[navbar_links][2][url]', array(
        'type'              => 'text',
        'section'           => 'felix_navbar_section',
        'description'       => __( 'URL', 'felix-landing-page' )
    ) );
    
    
    // Link 4 text
    $wp_customize->add_setting( 'felix_landing_page_template[navbar_links][3][text]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[navbar_links][3][text]', array(
        'type'              => 'text',
        'section'           => 'felix_navbar_section',
        'label'             => __( 'Link 4', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-page' )
    ) );
    
    // Link 4 url
    $wp_customize->add_setting( 'felix_landing_page_template[navbar_links][3][url]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[navbar_links][3][url]', array(
        'type'              => 'text',
        'section'           => 'felix_navbar_section',
        'description'       => __( 'URL', 'felix-landing-page' )
    ) );
    