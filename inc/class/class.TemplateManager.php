<?php

/**
 * Manages the creation and loading of the landing page.
 * 
 * @author Eric Green <eric@smartcat.ca>
 * @since 0.0.1
 * 
 */
class TemplateManager {
    
    private $template_file;
    private $page_id;
    private $options;
    
    /**
     * 
     * @param string $template_file The file for the template
     * @param int $page_id The ID of the page to be managed
     * @since 0.0.1
     * @todo set template options
     */
    public function __construct( array $options = null, $template_file = null, $page_id = null ) {
        
        $this->options = $options;
        $this->template_file = $template_file;
        $this->page_id = $page_id;
        
    }
    
    /**
     * Set the ID of the page to be managed.
     * 
     * @param int $page_id The ID of the page to be managed
     * @return void
     * @since 0.0.1
     * 
     */
    public function set_page_id( $page_id ) {
        $this->page_id = $page_id;
    }
    
    /**
     * Set the template file for the page.
     * 
     * @param string $template_file The file for the template
     * @return void
     * @since 0.0.1
     * 
     */
    public function set_template_file( $template_file ) {
        $this->template_file = $template_file;
    }
    
    /**
     * Set the configuration for the template.
     * 
     * @param array $options The configuration for the template
     * @return void
     * @since 0.0.1
     * 
     */
    public function set_options( array $options ) {
        $this->options = $options;
    }

    /**
     * Configure WordPress hooks.
     * 
     * @return void
     * @since 0.0.1
     * 
     */
    public function add_hooks() {
        
        add_filter( 'template_include', array( $this, 'load_template' ) );
        
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts') );
    }
    
    /**
     * Enqueue scripts and styles if we're on the landing page.
     * 
     * @since 0.0.1
     * @return void
     * 
     */
    public function enqueue_scripts() {
    
        if( $this->is_page_template() ) :
            
            $fonts = felix_fonts();
            
            if( isset( $this->options['primary_font'] ) ) :
                wp_enqueue_style('felix-font-primary', '//fonts.googleapis.com/css?family=' . $fonts[ $this->options['primary_font'] ], array(), FELIX_LAND_VER );
            endif;
            
            if( isset( $this->options['secondary_font'] ) ) :
                wp_enqueue_style('felix-font-secondary', '//fonts.googleapis.com/css?family=' . $fonts[ $this->options['secondary_font'] ], array(), FELIX_LAND_VER );
            endif;
            
            wp_enqueue_style( 'bootstrap-theme', FELIX_LANDING_PAGE_URL . 'inc/assets/styles/bootstrap-theme.min.css', array(), FELIX_LAND_VER );
            wp_enqueue_style( 'bootstrap', FELIX_LANDING_PAGE_URL . 'inc/assets/styles/bootstrap.min.css', array(), FELIX_LAND_VER );
            
            wp_enqueue_style( 'font-awesome', FELIX_LANDING_PAGE_URL . 'inc/assets/styles/font-awesome.min.css', array(), FELIX_LAND_VER );
            
        endif;
 
    }
    
    /**
     * Check to see if we're on the landing page.
     * 
     * @return bool Whether or not we're loading the page to apply the template.
     * @since 0.0.1
     * 
     */
    private function is_page_template() {
        
        return get_the_ID() == is_page( $this->page_id );
        
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
        
        if( $this->is_page_template() ) :
            
            $override_path = locate_template( array( 'Felix/templates/' . $this->template_file ) );
            $template = $override_path != '' ? $override_path : FELIX_LANDING_PAGE_TEMPLATES . $this->template_file;
            
        endif;

        return $template;
        
    }
    
    /**
     * Adds a new post that will supply the ID to reference when the template 
     * should be loaded. If a page already exists, the ID for that page is
     * returned instead.
     * 
     * @return int The ID of the page that TemplateManager is currently managing.
     * @since 0.0.1
     * 
     */
    public function create_page() {
        
        if( $this->page_id == null ) :

            $id = wp_insert_post( 
                 array(
                    'post_title' => __( 'Felix Landing Page' ),
                    'post_status' => 'publish',
                    'post_type' => 'page'
                )
            );

            if( $id ) :

                $this->page_id = $id;

            endif;
            
        endif;

        return $this->page_id;
        
    } 
    
    /**
     * Deletes the page currently being managed.
     * 
     * @return void
     * @since 0.0.1
     * 
     */
    public function delete_page() { 
        
        if( wp_delete_post( $this->page_id, true ) ) :
            
            $this->page_id = null;
        
        endif;
        
    }
}

?>
