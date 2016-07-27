<?php

/**
 * Main Plugin class, configures and initializes plugin.
 * 
 * @author Eric Green <eric@smartcat.ca>
 * @since 0.1.0
 * 
 */
class LandingPagePlugin {
    
    //Plugin constants
    const DEV_MODE = true;
    
    private static $instance = null;
    
    private $template_manager = null; 
    private $customizer_config = null;
    
    
    /**
     * Get the static instance of the main plugin class.
     * 
     * @return LandingPagePlugin The main class' instance
     * @since 0.1.0
     * 
     */
    public static function instance() {
        
        if( self::$instance == null ) :
            
            self::$instance = new self();
            
        endif;
        
        return self::$instance;
        
    }
    
    /**
     * Run post-activation configuration of the plugin.
     * 
     * @param type $template_manager Template manager to manage the landing page
     * @return void 
     * @since 0.1.0
     * 
     */
    public function configure( $template_manager, $customizer_config ) {
        
        $options = get_option( 'felix_landing_page_options' );
         
        $template_manager->set_page_id( $options['landing_page_id'] );
        $template_manager->set_template( 'landing_page' );
        $template_manager->set_options( get_option( 'felix_landing_page_template' ) );
        
        $this->template_manager = $template_manager;
        $this->customizer_config = $customizer_config;
        
        $this->add_hooks();
        
    }
    
    /**
     * Configure WordPress hooks.
     * 
     * @return void
     * @since 0.1.0
     * 
     */
    private function add_hooks() {
        
        add_action( 'init', array( $this, 'localize' ) );
        
        $this->template_manager->add_hooks();
        $this->customizer_config->add_hooks();
        
    }
    
    /**
     * Load plugin default options on activate.
     * 
     * @return void
     * @since 0.1.0
     * 
     */
    public function activate() {
        
        if( self::DEV_MODE ) :
            
            error_log( __CLASS__ . "::activate() called" );
        
        endif;
        
        
        if( !get_option( 'felix_landing_page_options' ) ) :
            
            $options = array(
                'default_template' => FELIX_LANDING_PAGE_PATH . 'inc/templates/template-1.php'
            );
        
            $options['landing_page_id'] = $this->template_manager->create_page();
            
            add_option( 'felix_landing_page_options', $options );
            
        endif; 
        
        
        if( !get_option( 'felix_landing_page_template' ) ) :
            
            include( __DIR__ . './../configs/template_defaults.php' );
            
            add_option( 'felix_landing_page_template', $template_defaults );
            
        endif;
        
    }
    
    /**
     * Run plugin deactivation routine. If developer mode is enabled, all options
     * will be cleared,
     * 
     * @return void
     * @since 0.1.0
     * 
     */
    public function deactivate() {
        
        if( self::DEV_MODE ) :
            
            error_log( __CLASS__ . "::deactivate() called" );
            
            $options = get_option( 'felix_landing_page_options' );
            
            $result = $this->template_manager->delete_page();
            
            delete_option( 'felix_landing_page_options' );
            delete_option( 'felix_landing_page_template' );
            
        endif;
        
    }
    
    /**
     * Localize strings.
     * 
     * @return void
     * @since 0.1.0
     */
    public function localize() {
        
        load_plugin_textdomain( 'felix-landing-page', FALSE, FELIX_LANDING_PAGE_PATH . 'languages' );
        
    }

}

?>