<?php

// ---------------------------------------------
// Featured Posts Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_articles_section',  array(
    'title'         => __( 'Featured Articles', 'felix-landing-page' ),
    'description'   => __( 'Select up to 3 articles can be selected to be featured.', 'felix-landing-page' ),
    'panel'         => 'felix_landing_page'
) );

    // Enable or disable Articles
    $wp_customize->add_setting( 'felix_hide_or_show_articles', array(
        'type'              => 'option',
        'default'           => 'show',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_hide_or_show'
        
    ) );
    $wp_customize->add_control( 'felix_hide_or_show_articles', array(
        'type'              => 'radio',
        'section'           => 'felix_articles_section',
        'label'             => __( 'Display Articles', 'felix-landing-page' ),
        'choices'           => array(
            'show'             => __( 'Show', 'felix-landing-page' ),
            'hide'             => __( 'Hide', 'felix-landing-page' )
    ) ) );
    
    
    // Featured Articles to display

    // Article 1
    $wp_customize->add_setting( 'felix_articles[0]', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_articles[0]', array(
        'type'              => 'select',
        'section'           => 'felix_articles_section',
        'label'             => __( 'Article 1', 'felix-landing-page' ),
        'choices'           => felix_get_all_posts_array()
     ) );
    
    
    // Article 2
    $wp_customize->add_setting( 'felix_articles[1]', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_articles[1]', array(
        'type'              => 'select',
        'section'           => 'felix_articles_section',
        'label'             => __( 'Article 2', 'felix-landing-page' ),
        'choices'           => felix_get_all_posts_array()
     ) );
    
    
    // Article 3
    $wp_customize->add_setting( 'felix_articles[2]', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_articles[2]', array(
        'type'              => 'select',
        'section'           => 'felix_articles_section',
        'label'             => __( 'Article 3', 'felix-landing-page' ),
        'choices'           => felix_get_all_posts_array()
     ) );
    
     

