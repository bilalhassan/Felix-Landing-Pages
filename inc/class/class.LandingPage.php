<?php

class LandingPage {
    const DEV_MODE = false;
    const VERSION = '0.0.1';
    
    const OPTIONS = 'felix_landing_page_options';
    
    private static $instance = null;
    
    public static function instance() {
        
        if( self::$instance == null ) :
            
            self::$instance = new self();
            self::$instance->add_hooks();
            
        endif;
        
    }
    
    public static function activate() {
        
        $options = get_option( self::OPTIONS );
        
        if( !$options ) :
            
            $options = array(
                'default_template' => FELIX_LANDING_PAGE_PATH . 'inc/templates/template-1.php'
            );
            
            add_option( self::OPTIONS, $options );
            
        endif; 
        
        //Create the landing page if it doesn't exist
        if( !isset( $options['landing_page_id'] ) || get_post( $options['landing_page_id'] ) == null ) :
            
            $options['landing_page_id'] = self::create_landing_page();
            
            if ( $options['landing_page_id'] ) :
                
                update_option( self::OPTIONS, $options );
            
            endif;
            
        endif;
        
    }
    
    public static function deactivate() {
        
        if( self::DEV_MODE ) :
            
            delete_option( self::OPTIONS );
        
        endif;
        
    }
    
    public function add_hooks() {
        add_filter( 'template_include', array( $this, 'landing_page_template' ) );
    }
    
    public function landing_page_template( $template ) {
        
        $options = get_option( self::OPTIONS );
        
        if( get_the_ID() == is_page( $options['landing_page_id'] ) ) :
            
            $override_path = locate_template( array( 'Felix/template-1.php' ) );
            
            $template = $override_path != '' ? $override_path : $options['default_template'];
            
        endif;

        return $template;
        
    }
    
    public static function create_landing_page() {
        
        $id = wp_insert_post( 
                
            array(
                'post_title' => __( 'Felix Landing Page' ),
                'post_status' => 'publish',
                'post_type' => 'page'
            )
        );
         
        return $id ? $id : false; 
        
    } 
}
