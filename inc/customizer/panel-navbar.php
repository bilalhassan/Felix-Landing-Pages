<?php

// ---------------------------------------------
// Navbar Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_navbar_section',  array(
    'title'         => __( 'Navigation Bar Links', 'felix-landing-page' ),
    'description'   => __( 'Set the links for the navigation bar', 'felix-landing-page' ),
    'panel'         => 'felix_landing_page'
) );


    // Link 1
    $wp_customize->add_setting( 'felix_nav_link[0][text]', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_nav_link[0][text]', array(
        'type'              => 'text',
        'section'           => 'felix_navbar_section',
        'label'             => __( 'Link 1', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-page' )
    ) );
    $wp_customize->add_setting( 'felix_nav_link[0][url]', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'esc_url_raw'
        
    ) );
    $wp_customize->add_control( 'felix_nav_link[0][url]', array(
        'type'              => 'text',
        'section'           => 'felix_navbar_section',
        'description'       => __( 'URL', 'felix-landing-page' )
    ) );
    
    
    // Link 2
    $wp_customize->add_setting( 'felix_nav_link[1][text]', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_nav_link[1][text]', array(
        'type'              => 'text',
        'section'           => 'felix_navbar_section',
        'label'             => __( 'Link 2', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-page' )
    ) );
    $wp_customize->add_setting( 'felix_nav_link[1][url]', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_nav_link[1][url]', array(
        'type'              => 'text',
        'section'           => 'esc_url_raw',
        'description'       => __( 'URL', 'felix-landing-page' )
    ) );
    
    
    // Link 3
    $wp_customize->add_setting( 'felix_nav_link[2][text]', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_nav_link[2][text]', array(
        'type'              => 'text',
        'section'           => 'felix_navbar_section',
        'label'             => __( 'Link 3', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-page' )
    ) );
    $wp_customize->add_setting( 'felix_nav_link[2][url]', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'esc_url_raw'
        
    ) );
    $wp_customize->add_control( 'felix_nav_link[2][url]', array(
        'type'              => 'text',
        'section'           => 'felix_navbar_section',
        'description'       => __( 'URL', 'felix-landing-page' )
    ) );
    
    
    // Link 4
    $wp_customize->add_setting( 'felix_nav_link[3][text]', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_nav_link[3][text]', array(
        'type'              => 'text',
        'section'           => 'felix_navbar_section',
        'label'             => __( 'Link 4', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-page' )
    ) );
    $wp_customize->add_setting( 'felix_nav_link[3][url]', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'esc_url_raw'
        
    ) );
    $wp_customize->add_control( 'felix_nav_link[3][url]', array(
        'type'              => 'text',
        'section'           => 'felix_navbar_section',
        'description'       => __( 'URL', 'felix-landing-page' )
    ) );
    
    