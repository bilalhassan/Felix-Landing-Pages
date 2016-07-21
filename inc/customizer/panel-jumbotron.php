<?php

// ---------------------------------------------
// Jumbotron Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_jumbotron_section',  array(
    'title'         => __( 'Jumbotron', 'felix-landing-page' ),
    'description'   => __( 'Jumbotron configuration' ),
    'panel'         => 'felix_landing_page'
) );

    // Jumbotron visibility toggle
    $wp_customize->add_setting( 'felix_hide_or_show_jumbotron', array(
        'default'           => 'show',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_hide_or_show'
        
    ) );
    $wp_customize->add_control( 'felix_hide_or_show_jumbotron', array(
        'type'              => 'radio',
        'section'           => 'felix_jumbotron_section',
        'label'             => __( 'Display the Jumbotron', 'felix-landing-page' ),
        'description'       => __( 'Choose whether the Jumbotron is hidden or shown', 'felix-landing-page' ),
        'choices'           => array(
            'hide'             => __( 'Hide', 'felix-landing-page' ),
            'show'             => __( 'Show', 'felix-landing-page' )
    ) ) );
    