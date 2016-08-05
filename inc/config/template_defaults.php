<?php
/**
 * Configuration for the default template options on initial creation
 * 
 */

$template_defaults = array(
    // page id
    // template

    // General configuration
    'primary_color' => '#07142b',
    'accent_color' => '#0099e5',

    'primary_font'  => 'Montserrat, sans-serif',
    'secondary_font' => 'Abel, sans-serif',

    'header_font_size' => 22,
    'body_font_size' => 14,

    'social_icon_facebook_url' => '#',
    'social_icon_google_url' => '#',
    'social_icon_twitter_url' => '#',

    // Order that blocks appear
    'blockorder' => array(
        'header', 
        'navbar', 
        'jumbotron', 
        'products', 
        'content', 
        'articles', 
        'footer' 
    ),

    // Page header
    'header_title_or_logo' => 'both',
    'header_title' => __( 'Felix Landing Page', 'felix-landing-page' ),
    'header_logo' => FELIX_LAND_URL . 'inc/templates/landing_page/images/header-logo.png',
    'header_logo_size' => 50,

    // Jumbotron images and controls
    'jumbotron_primary_toggle' => 'show',
    'jumbotron_primary_image' => FELIX_LAND_URL . 'inc/templates/landing_page/images/jumboat.jpg',
    'jumbotron_secondary_toggle' => 'show',
    'jumbotron_secondary_image' => FELIX_LAND_URL . 'inc/templates/landing_page/images/jumbotron-logo.png',
    'jumbotron_title' => __( 'Title', 'felix-landing-page' ),
    'jumbotron_subtitle' => __( 'Subtitle', 'felix-landing-page' ),
    'jumbotron_buttons' => array(
        array( 'text' => __( 'Button 1', 'felix-landing-page' ), 'url' => '#' ),
        array( 'text' => __( 'Button 2', 'felix-landing-page' ), 'url' => '#' )
    ),
    'jumbotron_footer_toggle' => 'show',
    'jumbotron_footer_ctas' => array(
        array( 'text' => __( 'CTA 1', 'felix-landing-page' ), 'url' => '#' ),
        array( 'text' => __( 'CTA 2', 'felix-landing-page' ), 'url' => '#' ),
        array( 'text' => __( 'CTA 3', 'felix-landing-page' ), 'url' => '#' )
    ),

    // Navigation bar links
    'navbar_links' => array(
        array( 'text' => __( 'Link 1', 'felix-landing-page' ), 'url' => '#' ),
        array( 'text' => __( 'Link 2', 'felix-landing-page' ), 'url' => '#' ),
        array( 'text' => __( 'Link 3', 'felix-landing-page' ), 'url' => '#' ),
        array( 'text' => __( 'Link 4', 'felix-landing-page' ), 'url' => '#' )
    ),

    // Featured products
    'products_header' => __( 'Store', 'felix-landing-page' ),
    'products' => array(
        '',
        '',
        '',
        '',
        '',
        ''
    ), //6

    // Static content area
    'content_title' => __( 'Sign up now for our mailing list!', 'felix-landing-page' ),
    'content_subtitle' => __( 'We promise to only send important updates and promotional offers', 'felix-landing-page' ),
    'content_content' => '',
    'content_buttons' => array(
        array( 'text' => 'Button 1', 'url' => '#' ),
        array( 'text' => 'Button 2', 'url' => '#' )
    ),

    // Featured articles
    'articles' => array(
        '',
        '',
        ''
    ), //3

    // Page footer
    'footer_copyright_text' => __( 'Company Name', 'felix-landing-page'),
    'footer_textboxes' => array( __( 'Footer Text One', 'felix-landing-page'), __( 'Footer Text Two', 'felix-landing-page') ),
);
        

