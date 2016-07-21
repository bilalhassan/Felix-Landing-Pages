<?php

// ---------------------------------------------
// Header Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_header_section',  array(
    'title'         => __( 'Header', 'felix-landing-page' ),
    'description'   => __( 'Header configuration' ),
    'panel'         => 'felix_landing_page'
) );
    
    // Logo or Title toggle
    $wp_customize->add_setting( 'felix_logo_or_title', array(
        'default'           => 'logo',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_logo_title_toggle'
        
    ) );
    $wp_customize->add_control( 'felix_logo_or_title', array(
        'type'              => 'radio',
        'section'           => 'felix_header_section',
        'label'             => __( 'Display logo or title', 'felix-landing-page' ),
        'description'       => __( 'Choose whether to display a logo or title in header', 'felix-landing-page' ),
        'choices'           => array(
            'title'             => __( 'Use site title', 'felix-landing-page' ),
            'logo'              => __( 'Use logo', 'felix-landing-page' )
    ) ) );
    
    
    // Value to use as title
    $wp_customize->add_setting( 'felix_title', array(
        'default'           => __( 'Felix Landing Page' ),
        'transport'         => __( 'refresh' ),
        'sanatize_callback' => ''
    ) );
    $wp_customize->add_control( 'felix_title', array(
        'type'              => 'text',
        'section'           => 'felix_header_section',
        'label'             => __( 'Landing Page title', 'felix-landing-page' )
    ) );
    
    
    // Image to use as logo
    $wp_customize->add_setting( 'felix_header_logo', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'felix_header_logo', array(
        'mime_type'         => 'image',
        'settings'          => 'felix_header_logo',
        'section'           => 'felix_header_section',
        'label'             => __( 'Logo image', 'felix-landing-page' ),
        'description'       => __( 'Upload the image to use as a logo', 'felix-landing-page' )
    ) ) );
    
    
    // Size of the logo image
    $wp_customize->add_setting( 'felix_header_logo_size', array(
        'default'           => 50,
        'transport'         => 'refresh',
        'sanatize_callback' => ''
    ) );
    $wp_customize->add_control( 'felix_header_logo_size', array(
        'type'              => 'number',
        'section'           => 'felix_header_section',
        'label'             =>  _( 'Logo size' ),
        'input_attrs'           => array(
            'min'   => 10,
            'max'   => 50,
            'step'  => 2,
    ) ) );