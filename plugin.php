<?php
/*
 * Plugin Name: Felix Landing Pages
 * Plugin URI: http://#/
 * Description: 
 * Version: 0.0.1
 * Author: Smartcat
 * Author URI: https://smartcatdesign.net
 * License: GPL v2
 * Text Domain: felix-landing 
 * Domain Path: /languages 
 * 
 * @author          Bilal Hassan    <bilal@smartcat.ca>
 * @author          Zack Mitchell   <zack@smartcat.ca>
 * @author          Eric Green      <eric@smartcat.ca>
 * @date            July 20, 2016
 * @copyright       Smartcat Design <https://smartcatdesign.net/
 * 
 */

if( !defined( 'ABSPATH' ) ) {
    die( "You cannot access this resource directly" );
}

if( !defined( 'FELIX_LANDING_PAGES_URL' ) ) {
    define( 'FELIX_LANDING_PAGES_URL', plugin_dir_url( __FILE__ ) );
}

if( !defined( 'FELIX_LANDING_PAGES_PATH' ) ) {
    define( 'FELIX_LANDING_PAGES_PATH',  plugin_dir_path( __FILE__ ) );
}

foreach( glob( FELIX_LANDING_PAGES_PATH . 'inc/class/*.php' ) as $file ) {
    require_once $file;
}


register_activation_hook( __FILE__, array( 'LandingPages', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'LandingPages', 'deactivate' ) );

 
function felix_landing_pages_localize() {
    load_plugin_textdomain( 'felix-landing', FALSE, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}

add_action( 'init', 'felix_landing_pages_localize' );

LandingPages::instance();