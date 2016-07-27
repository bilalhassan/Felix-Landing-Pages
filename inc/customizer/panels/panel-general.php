<?php

// ---------------------------------------------
// General Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_general_section',  array(
    'title'         => __( 'General', 'felix-landing-page' ),
    'description'   => __( 'General configuration options.' ),
    'panel'         => 'felix_landing_page'
) );


    // Primary Color
    $wp_customize->add_setting('felix_landing_page_template[primary_color]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'felix_sanitize',
        'default' => '#eab3fc'
    ));
    $wp_customize->add_control( 
        new WP_Customize_Color_Control( 
            $wp_customize, 
            'felix_landing_page_template[primary_color]',
            array(
                'setting'   => 'felix_landing_page_template[primary_color]',
                'section'   => __( 'felix_general_section', 'felix-landing-page' ),
                'label'     => __( 'Primary color', 'felix-landing-page' )
            )
        )
    );

    // Accent Color
    $wp_customize->add_setting('felix_landing_page_template[accent_color]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'felix_sanitize'
    ));
    $wp_customize->add_control( 
        new WP_Customize_Color_Control( 
            $wp_customize, 
            'felix_landing_page_template[accent_color]',
            array(
                'setting'   => 'felix_landing_page_template[accent_color]',
                'section'   => __( 'felix_general_section', 'felix-landing-page' ),
                'label'     => __( 'Accent color', 'felix-landing-page' )
            )
        )
    );
    
    
    // Select for primary font
    $wp_customize->add_setting( 'felix_landing_page_template[primary_font]', array(
        'type'              => 'option',
        'default'           => 'none',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[primary_font]', array(
        'type'              => 'select',
        'section'           => 'felix_general_section',
        'label'             => __( 'Primary font', 'felix-landing-page' ),
        'choices'           => felix_fonts()
     ) );
    
    // Select for secondary font
    $wp_customize->add_setting( 'felix_landing_page_template[secondary_font]', array(
        'type'              => 'option',
        'default'           => 'none',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[secondary_font]', array(
        'type'              => 'select',
        'section'           => 'felix_general_section',
        'label'             => __( 'Secondary Font', 'felix-landing-page' ),
        'choices'           => felix_fonts()
     ) );

    
    
    // Header font size
    $wp_customize->add_setting( 'felix_landing_page_template[header_font_size]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_integer'
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[header_font_size]', array(
        'type'              => 'number',
        'section'           => 'felix_general_section',
        'label'             =>  __( 'Header font size', 'felix-landing-page' ),
        'input_attrs'       => array(
            'min'   => 10,
            'max'   => 50,
            'step'  => 2,
    ) ) );
    
    // Body font size
    $wp_customize->add_setting( 'felix_landing_page_template[body_font_size]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_integer'
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[body_font_size]', array(
        'type'              => 'number',
        'section'           => 'felix_general_section',
        'label'             =>  __( 'Body font size', 'felix-landing-page' ),
        'input_attrs'       => array(
            'min'   => 10,
            'max'   => 50,
            'step'  => 2,
    ) ) );
    
    
    // Facebook URL
    $wp_customize->add_setting( 'felix_landing_page_template[social_icon_facebook_url]', array (
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[social_icon_facebook_url]', array(
        'type'              => 'text',
        'section'           => 'felix_general_section',
        'label'             => __( 'Facebook URL', 'felix-landing-page' ),
    ) );
    
    // Twitter URL
    $wp_customize->add_setting( 'felix_landing_page_template[social_icon_twitter_url]', array (
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[social_icon_twitter_url]', array(
        'type'              => 'text',
        'section'           => 'felix_general_section',
        'label'             => __( 'Twitter URL', 'felix-landing-page' ),
    ) );
    
    // Google+ URL
    $wp_customize->add_setting( 'felix_landing_page_template[social_icon_google_url]', array (
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[social_icon_google_url]', array(
        'type'              => 'text',
        'section'           => 'felix_general_section',
        'label'             => __( 'Google+ URL', 'felix-landing-page' ),
    ) );
    