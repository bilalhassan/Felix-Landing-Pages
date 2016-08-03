<?php
/*
 * Plugin Name: Felix Landing Pages
 * Plugin URI: http://#/
 * Description: 
 * Version: 0.9.0
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

if( !defined( 'FELIX_LAND' ) ) :
    define( 'FELIX_LAND', plugin_basename( __FILE__ ) );
endif;

// Define plugin version
if( !defined( 'FELIX_LAND_VER' ) ) :
    define( 'FELIX_LAND_VER', '0.9.0' );
endif;

// Define the URL for the plugin
if( !defined( 'FELIX_LAND_URL' ) ) :
    define( 'FELIX_LAND_URL', plugin_dir_url( __FILE__ ) );
endif;

// Define the path for the plugin
if( !defined( 'FELIX_LAND_PATH' ) ) :
    define( 'FELIX_LAND_PATH',  plugin_dir_path( __FILE__ ) );
endif;



// Require all class files
foreach( glob( FELIX_LAND_PATH . 'inc/class/*.php' ) as $file ) :
    require_once $file;
endforeach;

foreach( glob( FELIX_LAND_PATH . 'inc/customizer/class/*.php' ) as $file ) :
    require_once $file;
endforeach;

foreach( glob( FELIX_LAND_PATH . 'admin/class/*.php' ) as $file ) :
    require_once $file;
endforeach;



Felix_LandPlugin::instance()->run();

function felix_do_activation() {
    Felix_LandPlugin::instance()->activate();
}
register_activation_hook( __FILE__, 'felix_do_activation' );

function felix_do_deactivation() {
    Felix_LandPlugin::instance()->deactivate();    
}
register_deactivation_hook( __FILE__, 'felix_do_deactivation' );
