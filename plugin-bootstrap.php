<?php
/*
 * Plugin Name: Felix Landing Pages
 * Plugin URI: http://#/
 * Description: 
 * Version: 0.0.1
 * Author: Smartcat
 * Author URI: https://smartcatdesign.net
 * License: GPL v2
 * Text Domain: felix-landing-pages 
 * Domain Path: /languages 
 * 
 * @author          Bilal Hassan    <bilal@smartcat.ca>
 * @author          Zack Mitchell   <zack@smartcat.ca>
 * @author          Eric Green      <eric@smartcat.ca>
 * @date            July 20, 2016
 * @copyright       Smartcat Design <https://smartcatdesign.net/
 * 
 */

// Die if accessed directly
if( !defined( 'ABSPATH' ) ) :
    die( "Error: Unable to access URL directly." );
endif;

// Define plugin version
if( !defined( 'FELIX_LAND_VER' ) ) :
    define( 'FELIX_LAND_VER', '0.0.1' );
endif;

// Define the URL for the plugin
if( !defined( 'FELIX_LANDING_PAGE_URL' ) ) :
    define( 'FELIX_LANDING_PAGE_URL', plugin_dir_url( __FILE__ ) );
endif;

// Define the path for the plugin
if( !defined( 'FELIX_LANDING_PAGE_PATH' ) ) :
    define( 'FELIX_LANDING_PAGE_PATH',  plugin_dir_path( __FILE__ ) );
endif;

// Define default template directory
if( !defined( 'FELIX_LANDING_PAGE_TEMPLATES' ) ) :
    define( 'FELIX_LANDING_PAGE_TEMPLATES',  plugin_dir_path( __FILE__ ) . 'inc/templates/' );
endif;

// Define default template-parts directory
if( !defined( 'FELIX_LANDING_PAGE_TEMPLATE_PARTS' ) ) :
    define( 'FELIX_LANDING_PAGE_TEMPLATE_PARTS',  plugin_dir_path( __FILE__ ) . 'inc/template-parts/' );
endif;

// Require all class files
foreach( glob( FELIX_LANDING_PAGE_PATH . 'inc/class/*.php' ) as $file ) :
    require_once $file;
endforeach;


$plugin = LandingPagePlugin::instance();
$plugin->configure( new TemplateManager() );


function felix_do_activation() {
    LandingPagePlugin::instance()->activate();
}
register_activation_hook( __FILE__, 'felix_do_activation' );

function felix_do_deactivation() {
    LandingPagePlugin::instance()->deactivate();    
}
register_deactivation_hook( __FILE__, 'felix_do_deactivation' );


require( FELIX_LANDING_PAGE_PATH . 'inc/customizer.php' );


//Localize text
function felix_landing_page_localize() {
    load_plugin_textdomain( 'felix-landing-page', FALSE, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
add_action( 'init', 'felix_landing_page_localize' );
