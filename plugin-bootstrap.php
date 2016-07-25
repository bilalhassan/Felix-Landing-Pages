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
    
    die( "You cannot access this resource directly" );

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

// Require all class files
foreach( glob( FELIX_LANDING_PAGE_PATH . 'inc/class/*.php' ) as $file ) :
    
    require_once $file;

endforeach;

// Instantiate the main plugin class
LandingPagePlugin::instance( new TemplateManager() );

// Register activation and deactivation functions
register_activation_hook( __FILE__, array( 'LandingPagePlugin', 'activate' ) );
register_activation_hook( __FILE__, array( 'TemplateManager', 'create_page' ) );
register_deactivation_hook( __FILE__, array( 'LandingPagePlugin', 'deactivate' ) );


require( FELIX_LANDING_PAGE_PATH . 'inc/customizer.php' );


//Localize text
function felix_landing_page_localize() {
    load_plugin_textdomain( 'felix-landing-page', FALSE, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
add_action( 'init', 'felix_landing_page_localize' );
