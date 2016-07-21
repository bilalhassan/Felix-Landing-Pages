<?php

class LandingPages {
    const DEV_MODE = false;
    const VERSION = '0.0.1';
    
    const OPTIONS = 'felix_landing_pages_options';
    
    private static $instance = null;
    
    public static function instance() {
        
        if( self::$instance == null ) {
            
            self::$instance = new self();
            self::$instance->add_hooks();
        }
    }
    
    public static function activate() {
        
        $options = get_option( self::OPTIONS );
        
        if( !$options ) {
            $options = array(
                'default_template' => FELIX_LANDING_PAGES_PATH . 'inc/templates/template-1.php'
            );
            
            add_option( self::OPTIONS, $options );
        }  
        
        //Create or update the landing page
        $options['template_id'] = self::create_landing_page( $options['template_id'] );
        update_option( self::OPTIONS, $options );
        
    }
    
    public static function deactivate() {
        if( DEV_MODE ) {
            delete_option( 'felix_landing_pages_options' );
        }
    }
    
    public function add_hooks() {
        
        add_filter( 'template_include', array( $this, 'landing_page_template'), 99 );
    }
    
    public function landing_page_template( $template ) {
        $options = get_option( self::OPTIONS );
        
        if( is_page( $options['template_id'] ) ) {
            
            $override_path = locate_template( array( 'Felix/template-1.php' ) );;
            
            if( $override_path != '' ) {
                $template = $override_path;
            } else {
                $template = $options['default_template'];
            }
        }

        return $template;
    }
    
    public static function create_landing_page( $page_id = null ) {
        if( !isset( $page_id ) || /* If deleted */ get_post( $page_id ) == null ) {
            
            $id = wp_insert_post( 
                array(
                    'post_title' => __( 'Felix Landing Page' ),
                    'post_status' => 'publish',
                    'post_type' => 'page'
                )
            );

            if( $id ) {
                $page_id = $id;  
            }
         }
         
        return $page_id; 
       
    } 
}
