<?php

class TemplateManager {
    
    public function add_hooks() {
        
        add_filter( 'template_include', array( $this, 'load_template' ) );

    }
    
    public function load_template( $template ) {
        
        $options = get_option( 'felix_landing_page_options' );
        
        if( get_the_ID() == is_page( $options['landing_page_id'] ) ) {
            
            $override_path = locate_template( array( 'Felix/template-1.php' ) );
            $template = $override_path != '' ? $override_path : $options['default_template'];
            
        }

        return $template;
        
    }
    
    public static function create_page() {
        
        $options = get_option( 'felix_landing_page_options' );
        
        //Create the landing page if it doesn't exist
        if( !isset( $options['landing_page_id'] ) || get_post( $options['landing_page_id'] ) == null ) :
            
            $id = wp_insert_post( 
                 array(
                    'post_title' => __( 'Felix Landing Page' ),
                    'post_status' => 'publish',
                    'post_type' => 'page'
                )
            );
            
            if ( $id ) {
                
                $options['landing_page_id'] = $id;
                update_option( 'felix_landing_page_options', $options );
            
            }
            
        endif;
        
    } 
}

?>