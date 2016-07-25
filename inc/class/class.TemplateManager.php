<?php

/**
 * Manages the creation and loading of the landing page.
 * 
 * @author Eric Green <eric@smartcat.ca>
 * @since 0.0.1
 * 
 */
class TemplateManager {
    
    /**
     * Configure WordPress hooks.
     * 
     * @since 0.0.1
     * 
     */
    public function add_hooks() {
        
        add_filter( 'template_include', array( $this, 'load_template' ) );

    }
    
    /**
     * Selects the appropriate template to load when the landing page is visited. 
     * If the theme has a Felix directory, it is checked for a template file, else
     * the default template is loaded.
     * 
     * @param string $template
     * @return string
     * @since 0.0.1
     * 
     */
    public function load_template( $template ) {
        
        $options = get_option( 'felix_landing_page_options' );
        
        if( get_the_ID() == is_page( $options['landing_page_id'] ) ) :
            
            $override_path = locate_template( array( 'Felix/template-1.php' ) );
            $template = $override_path != '' ? $override_path : $options['default_template'];
            
        endif;

        return $template;
        
    }
    
    /**
     * Adds a new post that will supply the ID to reference when the template should be loaded.
     * 
     * @since 0.0.1
     * 
     */
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
            
            if ( $id ) :
                
                $options['landing_page_id'] = $id;
                update_option( 'felix_landing_page_options', $options );
            
            endif;
            
        endif;
        
    } 
}

?>
