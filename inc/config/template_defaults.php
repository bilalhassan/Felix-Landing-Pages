<?php
/**
 * Configuration for the default template options on initial creation
 * 
 */

$template_defaults = array(
    // page id
    // template

    // General configuration
    'primary_color' => '#cbef34',
    'accent_color' => '#efae33',

    'primary_font'  => 'Raleway, sans-serif',
    'secondary_font' => 'Raleway, sans-serif',

    'header_font_size' => 20,
    'body_font_size' => 12,

    'social_icon_facebook_url' => '#',
    'social_icon_google_url' => '#',
    'social_icon_twitter_url' => '#',

    // Order that blocks appear
    'blockorder' => array(
        'header', 
        'jumbotron', 
        'navbar', 
        'products', 
        'content', 
        'articles', 
        'footer' 
    ),

    // Page header
    'header_title_or_logo' => 'both',
    'header_title' => 'Felix Landing Page',
    'header_logo' => '',
    'header_logo_size' => 50,

    // Jumbotron images and controls
    'jumbotron_primary_toggle' => 'show',
    'jumbotron_primary_image' => '',
    'jumbotron_secondary_toggle' => 'show',
    'jumbotron_secondary_image' => '',
    'jumbotron_title' => 'Title',
    'jumbotron_subtitle' => 'Subtitle',
    'jumbotron_buttons' => array(
        array( 'text' => 'Button 1', 'url' => '#' ),
        array( 'text' => 'Button 2', 'url' => '#' )
    ),

    // Navigation bar links
    'navbar_links' => array(
        array( 'text' => 'Link 1', 'url' => '#' ),
        array( 'text' => 'Link 2', 'url' => '#' ),
        array( 'text' => 'Link 3', 'url' => '#' ),
        array( 'text' => 'Link 4', 'url' => '#' )
    ),

    // Featured products
    'products' => array(
        '',
        '',
        '',
        '',
        '',
        ''
    ), //6

    // Static content area
    'content_title' => 'Title',
    'content_subtitle' => 'Subtitle',
    'content_content' => 'Content',
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
    'footer_copyright_text' => 'Copyright',
    'footer_textboxes' => array( 'Text 1', 'Text 2' ),
);
        

