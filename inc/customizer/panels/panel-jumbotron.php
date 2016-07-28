<?php

// ---------------------------------------------
// Jumbotron Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_jumbotron_section',  array(
    'title'         => __( 'Hero Image', 'felix-landing-page' ),
    'description'   => __( 'The Hero image section can have both a primary background image and a secondary ' .
                           'foreground image. Optionally, up to 2 buttons and titles can be configured.', 'felix-landing-page' ),
    'panel'         => 'felix_landing_page'
) );


    // Toggle primary Jumbotron image
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_primary_toggle]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_primary_toggle]', array(
        'type'              => 'radio',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Display the primary Hero Image', 'felix-landing-page' ),
        'choices'           => array(
            'show'             => __( 'Show', 'felix-landing-page' ),
            'hide'             => __( 'Hide', 'felix-landing-page' )       
    ) ) );
    
        
    // Primary image
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_primary_image]', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'felix_landing_page_template[jumbotron_primary_image]', array(
        'mime_type'         => 'image',
        'settings'          => 'felix_landing_page_template[jumbotron_primary_image]',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Hero primary image', 'felix-landing-page' ),
    ) ) );
    
    
    // Toggle secondary Jumbotron image
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_secondary_toggle]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_secondary_toggle]', array(
        'type'              => 'radio',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Display the secondary Hero Image', 'felix-landing-page' ),
        'choices'           => array(
            'show'             => __( 'Show', 'felix-landing-page' ),
            'hide'             => __( 'Hide', 'felix-landing-page' )       
    ) ) );
    
    
    // Secondary image
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_secondary_image]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'felix_landing_page_template[jumbotron_secondary_image]', array(
        'mime_type'         => 'image',
        'settings'          => 'felix_landing_page_template[jumbotron_secondary_toggle]',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Hero secondary image', 'felix-landing-page' ),
    ) ) );
    
    
    // Title
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_title]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_title]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Title', 'felix-landing-page' ),
    ) );

    
    // Subtitle
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_subtitle]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_subtitle]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Subtitle', 'felix-landing-page' ),
    ) );
    
    
    // Button 1 text
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_buttons][0][text]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_buttons][0][text]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Button 1', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-page' )
    ) );
    
    // Button 1 url
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_buttons][0][url]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_buttons][0][url]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'description'       => __( 'URL', 'felix-landing-page' )
    ) );
    
    
    // Button 2 text
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_buttons][1][text]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_buttons][1][text]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Button 2', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-pages' )
    ) );
    
    // Button 2 url
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_buttons][1][url]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_buttons][1][url]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'description'       => __( 'URL', 'felix-landing-pages' )
    ) );
    