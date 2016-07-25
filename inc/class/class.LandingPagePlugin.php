<?php

/**
 * Main Plugin class, configures and initializes plugin.
 * 
 * @author Eric Green <eric@smartcat.ca>
 * @since 0.0.1
 * 
 */
class LandingPagePlugin {
    
    //Plugin constants
    const DEV_MODE = true;
    
    private static $instance = null;
    
    private $template_manager = null; 
    
    /**
     * @param TemplateManager $template_manager
     * @since 0.0.1
     * 
     */
    public static function instance() {
        
        if( self::$instance == null ) :
            
            self::$instance = new self();
            
        endif;
        
        return self::$instance;
        
    }
    
    public function configure( $template_manager ) {
        
        $this->template_manager = $template_manager;
        
        $this->add_hooks();
        
    }
    
    /**
     * Configure WordPress hooks.
     * 
     * @since 0.0.1
     * 
     */
    private function add_hooks() {
        
        $this->template_manager->add_hooks();
        
    }
    
    /**
     * Load plugin default options on activate.
     * 
     * @since 0.0.1
     * 
     */
    public function activate() {
        
        $options = get_option( 'felix_landing_page_options' );
        
        if( !$options ) :
            
            $options = array(
                'default_template' => FELIX_LANDING_PAGE_PATH . 'inc/templates/template-1.php'
            );
        
            $options['landing_page_id'] = $this->template_manager->create_page();
            
            add_option( 'felix_landing_page_options', $options );
            
        endif; 
        
    }
    
    /**
     * @since 0.0.1
     * 
     */
    public function deactivate() {
        
        // Delete options if dev mode is enabled
        if( self::DEV_MODE ) :
            
            $options = get_option( 'felix_landing_page_options' );
            
            wp_delete_post( $options['landing_page_id'] );
            $this->template_manager->delete_page();
            
            delete_option( 'felix_landing_page_options' );
            delete_option( 'felix_landing_page_template' );
            
        endif;
        
    }

}

?>
