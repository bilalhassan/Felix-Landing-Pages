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
        
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts') );
    }
    
    /**
     * Check to see if we're on the landing page.
     * 
     * @return bool
     * @since 0.0.1
     * 
     */
    private function is_page_template() {
        
        $options = get_option( 'felix_landing_page_options' );
        
        return get_the_ID() == is_page( $options['landing_page_id'] );
        
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
        
        if( $this->is_page_template() ) :
            
            $override_path = locate_template( array( 'Felix/template-1.php' ) );
            $template = $override_path != '' ? $override_path : $options['default_template'];
            
        endif;

        return $template;
        
    }
    
    /**
     * Enqueue scripts and styles if we're on the landing page.
     * 
     * @since 0.0.1
     * 
     */
    public function enqueue_scripts() {
    
        if( $this->is_page_template() ) :
            
            $options = get_option( 'felix_landing_page_template' );
            $fonts = felix_fonts();
            
            wp_enqueue_style('felix-font-primary', '//fonts.googleapis.com/css?family=' . $fonts[ $options['primary_font'] ], array(), FELIX_LAND_VER );
            wp_enqueue_style('felix-font-secondary', '//fonts.googleapis.com/css?family=' . $fonts[ $options['secondary_font'] ], array(), FELIX_LAND_VER );
            
            wp_enqueue_style( 'bootstrap-theme', FELIX_LANDING_PAGE_URL . 'inc/assets/styles/bootstrap-theme.min.css', array(), FELIX_LAND_VER );
            wp_enqueue_style( 'bootstrap', FELIX_LANDING_PAGE_URL . 'inc/assets/styles/bootstrap.min.css', array(), FELIX_LAND_VER );
            
            wp_enqueue_style( 'font-awesome', FELIX_LANDING_PAGE_URL . 'inc/assets/styles/font-awesome.min.css', array(), FELIX_LAND_VER );
            
        endif;
 
    }
    
    /**
     * Adds a new post that will supply the ID to reference when the template should be loaded.
     * 
     * @since 0.0.1
     * 
     */
    public function create_page() {
            
        $id = wp_insert_post( 
             array(
                'post_title' => __( 'Felix Landing Page' ),
                'post_status' => 'publish',
                'post_type' => 'page'
            )
        );

        return $id ? $id : null;
        
    } 
    
    public function delete_page() {
        
        return wp_delete_post( $this->page_id, true ) ? true : false;
        
    }
}

?>
