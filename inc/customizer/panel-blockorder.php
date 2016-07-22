<?php

// ---------------------------------------------
// Block Order Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_blockorder_section',  array(
    'title'         => __( 'Block Order', 'felix-landing-page' ),
    'description'   => __( 'The 7 blocks that make up the landing page are able to be rearranged. ', 'felix-landing-page' ),
    'panel'         => 'felix_landing_page'
) );


    // Section 1
    $wp_customize->add_setting( 'felix_blockorder[0]', array(
        'type'              => 'option',
        'default'           => 'disabled',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'
        
    ) );
    $wp_customize->add_control( 'felix_blockorder[0]', array(
        'type'              => 'select',
        'section'           => 'felix_blockorder_section',
        'label'             => __( 'Block 1', 'felix-landing-page' ),
        'choices'           => felix_block_names()
    ) );
    
    
    // Section 2
    $wp_customize->add_setting( 'felix_blockorder[1]', array(
        'type'              => 'option',
        'default'           => 'disabled',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'

    ) );
    $wp_customize->add_control( 'felix_blockorder[1]', array(
        'type'              => 'select',
        'section'           => 'felix_blockorder_section',
        'label'             => __( 'Block 2', 'felix-landing-page' ),
        'choices'           => felix_block_names()
    ) );


    // Section 3
    $wp_customize->add_setting( 'felix_blockorder[2]', array(
        'type'              => 'option',
        'default'           => 'disabled',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'

    ) );
    $wp_customize->add_control( 'felix_blockorder[2]', array(
        'type'              => 'select',
        'section'           => 'felix_blockorder_section',
        'label'             => __( 'Block 3', 'felix-landing-page' ),
        'choices'           => felix_block_names()
    ) );


    // Section 4
    $wp_customize->add_setting( 'felix_blockorder[3]', array(
        'type'              => 'option',
        'default'           => 'disabled',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'

    ) );
    $wp_customize->add_control( 'felix_blockorder[3]', array(
        'type'              => 'select',
        'section'           => 'felix_blockorder_section',
        'label'             => __( 'Block 4', 'felix-landing-page' ),
        'choices'           => felix_block_names()
    ) );


    // Section 5
    $wp_customize->add_setting( 'felix_blockorder[4]', array(
        'type'              => 'option',
        'default'           => 'disabled',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'
    ) );
    $wp_customize->add_control( 'felix_blockorder[4]', array(
        'type'              => 'select',
        'section'           => 'felix_blockorder_section',
        'label'             => __( 'Block 5', 'felix-landing-page' ),
        'choices'           => felix_block_names()
    ) );
    
    
    // Section 6
    $wp_customize->add_setting( 'felix_blockorder[5]', array(
        'type'              => 'option',
        'default'           => 'disabled',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'
    ) );
    $wp_customize->add_control( 'felix_blockorder[5]', array(
        'type'              => 'select',
        'section'           => 'felix_blockorder_section',
        'label'             => __( 'Block 6', 'felix-landing-page' ),
        'choices'           => felix_block_names()
    ) );
    
    
    // Section 7
    $wp_customize->add_setting( 'felix_blockorder[6]', array(
        'type'              => 'option',
        'default'           => 'disabled',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'
    ) );
    $wp_customize->add_control( 'felix_blockorder[6]', array(
        'type'              => 'select',
        'section'           => 'felix_blockorder_section',
        'label'             => __( 'Block 7', 'felix-landing-page' ),
        'choices'           => felix_block_names()
    ) );