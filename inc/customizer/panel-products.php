<?php

// ---------------------------------------------
// Featured Products Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_products_section',  array(
    'title'         => __( 'Featured Products', 'felix-landing-page' ),
    'description'   => __( 'Select Featured Products to display on the landing page' ),
    'panel'         => 'felix_landing_page'
) );

    // Enable or disable products
    $wp_customize->add_setting( 'felix_hide_or_show_products', array(
        'default'           => 'show',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_hide_or_show'
        
    ) );
    $wp_customize->add_control( 'felix_hide_or_show_products', array(
        'type'              => 'radio',
        'section'           => 'felix_products_section',
        'label'             => __( 'Display products', 'felix-landing-page' ),
        'description'       => __( 'Choose whether the products are to be hidden or shown', 'felix-landing-page' ),
        'choices'           => array(
            'hide'             => __( 'Hide', 'felix-landing-page' ),
            'show'             => __( 'Show', 'felix-landing-page' )
    ) ) );
    
    
    // Featured products to display

    // 1
    $wp_customize->add_setting( 'felix_products[0]', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_products[0]', array(
        'type'              => 'select',
        'section'           => 'felix_products_section',
        'label'             => __( 'Product 1', 'felix-landing-page' ),
        'choices'           => felix_get_all_posts_array( 'product' )
     ) );
    
    
    // 2
    $wp_customize->add_setting( 'felix_products[1]', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_products[1]', array(
        'type'              => 'select',
        'section'           => 'felix_products_section',
        'label'             => __( 'Product 2', 'felix-landing-page' ),
        'choices'           => felix_get_all_posts_array( 'product' )
     ) );
    
    
    // 3
    $wp_customize->add_setting( 'felix_products[2]', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_products[2]', array(
        'type'              => 'select',
        'section'           => 'felix_products_section',
        'label'             => __( 'Product 3', 'felix-landing-page' ),
        'choices'           => felix_get_all_posts_array( 'product' )
     ) );
    
     
    // 4
    $wp_customize->add_setting( 'felix_products[3]', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_products[3]', array(
        'type'              => 'select',
        'section'           => 'felix_products_section',
        'label'             => __( 'Product 4', 'felix-landing-page' ),
        'choices'           => felix_get_all_posts_array( 'product' )
     ) );
    
    
    // 5
    $wp_customize->add_setting( 'felix_products[4]', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_products[4]', array(
        'type'              => 'select',
        'section'           => 'felix_products_section',
        'label'             => __( 'Product 5', 'felix-landing-page' ),
        'choices'           => felix_get_all_posts_array( 'product' )
     ) );
    
    
    // 6
    $wp_customize->add_setting( 'felix_products[5]', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => ''
        
    ) );
    $wp_customize->add_control( 'felix_products[5]', array(
        'type'              => 'select',
        'section'           => 'felix_products_section',
        'label'             => __( 'Product 6', 'felix-landing-page' ),
        'choices'           => felix_get_all_posts_array( 'product' )
     ) );