<?php

class LandingPage {
    
    const DEV_MODE = true;
    const VERSION = '0.0.1';
    
    private static $instance = null;
    
    private $tempate_manager = null; 
    
    function __construct( $template_manager ) {
        
        $this->template_manager = $template_manager;
        
    }
    
    public static function instance( $template_manager ) {
        
        if( self::$instance == null ) :
            
            self::$instance = new self( $template_manager );
            self::$instance->add_hooks();
            
        endif;
        
    }
    
    public function add_hooks() {
        
        $this->template_manager->add_hooks();
        
    }
    
    public static function activate() {
        
        $options = get_option( 'felix_landing_page_options' );
        
        if( !$options ) :
            
            $options = array(
                'default_template' => FELIX_LANDING_PAGE_PATH . 'inc/templates/template-1.php'
            );
            
            add_option( 'felix_landing_page_options', $options );
            
        endif; 
 
    }
    
    public static function deactivate() {
        
        if( self::DEV_MODE ) :
            
            $options = get_option( 'felix_landing_page_options' );
            
            wp_delete_post( $options['landing_page_id'] );
            
            delete_option( 'felix_landing_page_options' );
            delete_option( 'felix_landing_page_template' );
            
        endif;
        
    }

}

?>