<?php

// ---------------------------------------------
// Featured Products Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_products_section',  array(
    'title'         => __( 'Featured Products', 'felix-landing-page' ),
    'description'   => __( 'Select up to 6 products to be featured.', 'felix-landing-page' ),
    'panel'         => 'felix_landing_page'
) );


    // Select for Product 1 
    $wp_customize->add_setting( 'felix_landing_page_template[products][0]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[products][0]', array(
        'type'              => 'select',
        'section'           => 'felix_products_section',
        'label'             => __( 'Product 1', 'felix-landing-page' ),
        'choices'           => felix_get_posts_array( 'product' )
     ) );
    
    
    // vProduct 2
    $wp_customize->add_setting( 'felix_landing_page_template[products][1]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[products][1]', array(
        'type'              => 'select',
        'section'           => 'felix_products_section',
        'label'             => __( 'Product 2', 'felix-landing-page' ),
        'choices'           => felix_get_posts_array( 'product' )
     ) );
    
    
    // Select for Product 3
    $wp_customize->add_setting( 'felix_landing_page_template[products][2]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[products][2]', array(
        'type'              => 'select',
        'section'           => 'felix_products_section',
        'label'             => __( 'Product 3', 'felix-landing-page' ),
        'choices'           => felix_get_posts_array( 'product' )
     ) );
    
     
    // Select for Product 4
    $wp_customize->add_setting( 'felix_landing_page_template[products][3]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[products][3]', array(
        'type'              => 'select',
        'section'           => 'felix_products_section',
        'label'             => __( 'Product 4', 'felix-landing-page' ),
        'choices'           => felix_get_posts_array( 'product' )
     ) );
    
    
    // Select for Product 5
    $wp_customize->add_setting( 'felix_landing_page_template[products][4]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[products][4]', array(
        'type'              => 'select',
        'section'           => 'felix_products_section',
        'label'             => __( 'Product 5', 'felix-landing-page' ),
        'choices'           => felix_get_posts_array( 'product' )
     ) );
    
    
    // Select for Product 6
    $wp_customize->add_setting( 'felix_landing_page_template[products][5]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[products][5]', array(
        'type'              => 'select',
        'section'           => 'felix_products_section',
        'label'             => __( 'Product 6', 'felix-landing-page' ),
        'choices'           => felix_get_posts_array( 'product' )
     ) );
    