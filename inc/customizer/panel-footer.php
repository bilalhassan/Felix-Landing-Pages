<?php

// ---------------------------------------------
// Footer Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_footer_section',  array(
    'title'         => __( 'Footer', 'felix-landing-page' ),
    'description'   => __( 'Page footer configuration.', 'felix-landing-page' ),
    'panel'         => 'felix_landing_page'
) );


    // Copyright text
    $wp_customize->add_setting( 'felix_footer_copyright_text', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_footer_copyright_text', array(
        'type'              => 'text',
        'section'           => 'felix_footer_section',
        'label'             => __( 'Copyright text', 'felix-landing-page' )
    ) );
    
    
    // Text 1
    $wp_customize->add_setting( 'felix_footer_text_1', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_footer_text_1', array(
        'type'              => 'text',
        'section'           => 'felix_footer_section',
        'label'             => __( 'Text 1', 'felix-landing-page' )
    ) );
    
    
    // Text 2
    $wp_customize->add_setting( 'felix_footer_text_2', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_text'
        
    ) );
    $wp_customize->add_control( 'felix_footer_text_2', array(
        'type'              => 'text',
        'section'           => 'felix_footer_section',
        'label'             => __( 'Text 2', 'felix-landing-page' )
    ) );
