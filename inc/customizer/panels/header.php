<?php

// ---------------------------------------------
// Header Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_header_section',  array(
    'title'         => __( 'Header', 'felix-landing-page', 'felix-landing-page' ),
    'description'   => __( 'Customize the Header block.', 'felix-landing-page' ),
    'panel'         => 'felix_landing_page'
) );
    
    // Header Style (Logo or Title)
    $wp_customize->add_setting( 'felix_landing_page_template[header_title_or_logo]', array(
        'type'              => 'option',
        'default'           => 'logo',
        'transport'         => 'refresh',
        'sanitize_callback' => 'felix_sanitize_select'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[header_title_or_logo]', array(
        'type'              => 'radio',
        'label'             => __( 'Header Branding Style', 'felix-landing-page' ),
        'section'           => 'felix_header_section',
        'choices'           => array(
            'logo'             => __( 'Logo', 'felix-landing-page' ),
            'title'            => __( 'Title', 'felix-landing-page' ),
            'both'             => __( 'Both', 'felix-landing-page' ),
    ) ) );
    
    
    // Value to use as title
    $wp_customize->add_setting( 'felix_landing_page_template[header_title]', array(
        'type'              => 'option',
        'transport'         => __( 'refresh', 'felix-landing-page' ),
        'sanitize_callback' => 'sanitize_text_field'
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[header_title]', array(
        'type'              => 'text',
        'section'           => 'felix_header_section',
        'label'             => __( 'Header Block Title', 'felix-landing-page' )
    ) );
    
    
    // Image to use as logo
    $wp_customize->add_setting( 'felix_landing_page_template[header_logo]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
        'default'           => FELIX_LAND_URL . 'inc/templates/landing_page/images/header-logo.png'    
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'felix_header_logo', array(
        'mime_type'         => 'image',
        'settings'          => 'felix_landing_page_template[header_logo]',
        'section'           => 'felix_header_section',
        'label'             => __( 'Logo', 'felix-landing-page' )
    ) ) );
    
    
    // Size of the logo image
    $wp_customize->add_setting( 'felix_landing_page_template[header_logo_size]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'felix_sanitize_num'
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[header_logo_size]', array(
        'type'              => 'number',
        'section'           => 'felix_header_section',
        'label'             =>  __( 'Logo Height', 'felix-landing-page' ),
        'description'       =>  __( 'Logo width will be adjusted automatically to maintain aspect ratio', 'felix-landing-page' ),
        'input_attrs'           => array(
            'min'   => 10,
            'max'   => 100,
            'step'  => 5,
    ) ) );
    