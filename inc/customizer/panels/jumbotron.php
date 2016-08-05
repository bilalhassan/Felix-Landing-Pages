<?php

// ---------------------------------------------
// Jumbotron Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_jumbotron_section',  array(
    'title'         => __( 'Jumbotron', 'felix-landing-page' ),
    'description'   => __( 'Customize the Jumbotron block.', 'felix-landing-page' ),
    'panel'         => 'felix_landing_page'
) );


    // Toggle primary Jumbotron image
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_primary_toggle]', array(
        'type'              => 'option',
        'default'           => 'show',
        'transport'         => 'refresh',
        'sanitize_callback' => 'felix_sanitize_select'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_primary_toggle]', array(
        'type'              => 'radio',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Use a background image for the Jumbotron?', 'felix-landing-page' ),
        'choices'           => array(
            'show'             => __( 'Show', 'felix-landing-page' ),
            'hide'             => __( 'Hide', 'felix-landing-page' )       
    ) ) );
    
        
    // Primary image
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_primary_image]', array(
        'type'              => 'option',
        'default'           => FELIX_LAND_URL . 'inc/templates/landing_page/images/jumboat.jpg',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'felix_landing_page_template[jumbotron_primary_image]', array(
        'mime_type'         => 'image',
        'settings'          => 'felix_landing_page_template[jumbotron_primary_image]',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Jumbotron Background Image', 'felix-landing-page' ),
    ) ) );
    
    // Toggle secondary Jumbotron image
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_secondary_toggle]', array(
        'type'              => 'option',
        'default'           => 'show',
        'transport'         => 'refresh',
        'sanitize_callback' => 'felix_sanitize_select'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_secondary_toggle]', array(
        'type'              => 'radio',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Use a Secondary Jumbotron Image?', 'felix-landing-page' ),
        'choices'           => array(
            'show'             => __( 'Show', 'felix-landing-page' ),
            'hide'             => __( 'Hide', 'felix-landing-page' )       
    ) ) );
    
    // Secondary image
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_secondary_image]', array(
        'type'              => 'option',
        'default'           => FELIX_LAND_URL . 'inc/templates/landing_page/images/jumbotron-logo.png',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'felix_landing_page_template[jumbotron_secondary_image]', array(
        'mime_type'         => 'image',
        'settings'          => 'felix_landing_page_template[jumbotron_secondary_image]',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Jumbotron Secondary Image', 'felix-landing-page' ),
        'description'       => __( 'Appears within the centered Jumbotron overlay container', 'felix-landing-page' ),
    ) ) );
    
    
    // Title
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_title]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_title]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Overlay Title', 'felix-landing-page' ),
    ) );

    
    // Subtitle
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_subtitle]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_subtitle]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Overlay Subtitle', 'felix-landing-page' ),
    ) );
    
    
    // Button 1 text
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_buttons][0][text]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        
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
        'sanitize_callback' => 'esc_url_raw'
        
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
        'sanitize_callback' => 'sanitize_text_field'
        
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
        'sanitize_callback' => 'esc_url_raw'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_buttons][1][url]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'description'       => __( 'URL', 'felix-landing-pages' )
    ) );
    
    
    // Toggle Jumbotron Footer Area
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_footer_toggle]', array(
        'type'              => 'option',
        'default'           => 'show',
        'transport'         => 'refresh',
        'sanitize_callback' => 'felix_sanitize_select'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_footer_toggle]', array(
        'type'              => 'radio',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Include the Jumbotron Footer sections?', 'felix-landing-page' ),
        'choices'           => array(
            'show'             => __( 'Show', 'felix-landing-page' ),
            'hide'             => __( 'Hide', 'felix-landing-page' )       
    ) ) );
    
    // Jumbotron Footer CTA 1 Text
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_footer_ctas][0][text]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_footer_ctas][0][text]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'CTA 1', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-page' )
    ) );
    
    // Jumbotron Footer CTA 1 URL
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_footer_ctas][0][url]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_footer_ctas][0][url]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'description'       => __( 'URL', 'felix-landing-page' )
    ) );
 
    // Jumbotron Footer CTA 2 Text
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_footer_ctas][1][text]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_footer_ctas][1][text]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'CTA 2', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-page' )
    ) );
    
    // Jumbotron Footer CTA 2 URL
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_footer_ctas][1][url]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_footer_ctas][1][url]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'description'       => __( 'URL', 'felix-landing-page' )
    ) );

    // Jumbotron Footer CTA 3 Text
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_footer_ctas][2][text]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_footer_ctas][2][text]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'CTA 3', 'felix-landing-page' ),
        'description'       => __( 'Text', 'felix-landing-page' )
    ) );
    
    // Jumbotron Footer CTA 3 URL
    $wp_customize->add_setting( 'felix_landing_page_template[jumbotron_footer_ctas][2][url]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[jumbotron_footer_ctas][2][url]', array(
        'type'              => 'text',
        'section'           => 'felix_jumbotron_section',
        'description'       => __( 'URL', 'felix-landing-page' )
    ) );