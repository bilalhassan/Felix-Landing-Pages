<?php

// ---------------------------------------------
// Featured Posts Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_articles_section',  array(
    'title'         => __( 'Featured Articles', 'felix-landing-page' ),
    'description'   => __( 'Select up to 3 articles can be selected to be featured.', 'felix-landing-page' ),
    'panel'         => 'felix_landing_page'
) );


    // Select for Article 1
    $wp_customize->add_setting( 'felix_landing_page_template[articles][0]', array(
        'type'              => 'option',
        'default'           => 'none',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[articles][0]', array(
        'type'              => 'select',
        'section'           => 'felix_articles_section',
        'label'             => __( 'Article 1', 'felix-landing-page' ),
        'choices'           => $this->get_post_choices()
     ) );
    
    
    // Select for Article 2
    $wp_customize->add_setting( 'felix_landing_page_template[articles][1]', array(
        'type'              => 'option',
        'default'           => 'none',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[articles][1]', array(
        'type'              => 'select',
        'section'           => 'felix_articles_section',
        'label'             => __( 'Article 2', 'felix-landing-page' ),
        'choices'           => $this->get_post_choices()
     ) );
    
    
    // Select for Article 3
    $wp_customize->add_setting( 'felix_landing_page_template[articles][2]', array(
        'type'              => 'option',
        'default'           => 'none',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[articles][2]', array(
        'type'              => 'select',
        'section'           => 'felix_articles_section',
        'label'             => __( 'Article 3', 'felix-landing-page' ),
        'choices'           => $this->get_post_choices()
     ) );
    