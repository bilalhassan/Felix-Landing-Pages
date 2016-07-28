<?php

/**
 * Manages the creation and loading of the landing page.
 * 
 * @author Eric Green <eric@smartcat.ca>
 * @since 0.1.0
 * 
 */
class TemplateManager {
    
    private $template_package;
    
    private $default_path;
    private $override_path;
    
    private $resource_uri;
    
    private $page_id;
    private $options;
    
    /**
     * @param array $options Options for configuring the template
     * @param string $template_file The file for the template
     * @param int $page_id The ID of the page to be managed
     * @since 0.1.0
     */
    public function __construct( $options = null, $template_package = null, $page_id = null ) {
        
        $this->options = $options;
        $this->template_package = $template_package;
        $this->page_id = $page_id;
        
    }
    
    /**
     * Set the ID of the page to be managed.
     * 
     * @param int $page_id The ID of the page to be managed
     * @return void
     * @since 0.1.0
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
     * @since 0.1.0
     * 
     */
    public function set_template( $template_package ) {
        
        $this->template_package = $template_package;
        
        $this->default_path = FELIX_DEFAULT_TEMPLATES . $this->template_package;
        $this->override_path = 'Felix/templates/' . $this->template_package;
        
        $this->resource_uri = FELIX_LANDING_PAGE_URL . 'inc/default_templates/' . $this->template_package;
        
    }
    
    /**
     * Set the configuration for the template.
     * 
     * @param array $options The configuration for the template
     * @return void
     * @since 0.1.0
     * 
     */
    public function set_options( $options ) {
        $this->options = $options;
    }

    /**
     * Configure WordPress hooks.
     * 
     * @return void
     * @since 0.1.0
     * 
     */
    public function add_hooks() {
        
        add_filter( 'template_include', array( $this, 'load_template' ) );
        
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_plugin_scripts') );
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_template_scripts') );
        
    }
    
    /**
     * Enqueue scripts and styles if we're on the landing page.
     * 
     * @since 0.1.0
     * @return void
     * 
     */
    public function enqueue_plugin_scripts() {
    
        if( $this->is_page() ) :
            
            include( __DIR__ . './../configs/font_choices.php');
            
            if( isset( $this->options['primary_font'] ) ) :
                wp_enqueue_style('felix-font-primary', '//fonts.googleapis.com/css?family=' . $fonts[ $this->options['primary_font'] ], array(), FELIX_LAND_VER );
            endif;
            
            if( isset( $this->options['secondary_font'] ) ) :
                wp_enqueue_style('felix-font-secondary', '//fonts.googleapis.com/css?family=' . $fonts[ $this->options['secondary_font'] ], array(), FELIX_LAND_VER );
            endif;
            
            wp_enqueue_style( 'font-awesome', FELIX_LANDING_PAGE_URL . 'inc/assets/styles/font-awesome.min.css', array(), FELIX_LAND_VER );
            wp_enqueue_style( 'bootstrap-theme', FELIX_LANDING_PAGE_URL . 'inc/assets/styles/bootstrap-theme.min.css', array(), FELIX_LAND_VER );
            wp_enqueue_style( 'bootstrap', FELIX_LANDING_PAGE_URL . 'inc/assets/styles/bootstrap.min.css', array(), FELIX_LAND_VER );          
            
        endif;
 
    }
    
    public function enqueue_template_scripts() {
        
        if( $this->is_page() ) :          

            foreach( glob( $this->default_path . '/styles/*.css' ) as $file ) :

                wp_enqueue_style( 
                    sanitize_title( basename( $file, '.css' ) ), 
                    $this->resource_uri . '/styles/' . basename( $file ),
                    array(), 
                    FELIX_LAND_VER 
                );

            endforeach;

            foreach( glob( $this->default_path  . '/scripts/*.js' ) as $file ) :
                
                $jquery = $this->parse_file( $file, 'jQuery' );
            
                wp_enqueue_script( 
                    sanitize_title( basename( $file, '.js' ) ), 
                    $this->resource_uri . '/scripts/' . basename( $file ), 
                    ( $jquery ? array( 'jquery' ) : array() ), 
                    FELIX_LAND_VER 
                );

            endforeach;   
                
        endif;
            
    }
    
    /**
     * Parse a file for a string.
     * 
     * @param string $file
     * @param type $strings
     * @return boolean Whether the string was found.
     * @since 0.1.0
     */
    private function parse_file( $file, $search ) {
        
        $lines = file( $file );
        $found = false;       

        foreach( $lines as $line ) :

            if( strpos( $line, $search ) !== false ) :
                 $found = true;       
            endif;

        endforeach;
        
        return $found;
        
    }
    
    /**
     * Check to see if we're on the landing page.
     * 
     * @return bool Whether or not we're loading the page to apply the template.
     * @since 0.1.0
     * 
     */
    private function is_page() {
        
        return get_the_ID() == is_page( $this->page_id );
        
    }
    
    /**
     * Selects the appropriate template to load when the landing page is visited. 
     * If the theme has a Felix directory, it is checked for a template file, else
     * the default template is loaded.
     * 
     * @param string $template
     * @return string
     * @since 0.1.0
     * 
     */
    public function load_template( $current_template ) {
        
        if( $this->is_page() ) :
            
            $theme_override = locate_template( array( $this->override_path . '/template.php' ) );
        
            $current_template = $theme_override != '' ? $theme_override : $this->default_path . '/template.php';
            
        endif;

        return $current_template;
        
    }
    
    /**
     * Adds a new post that will supply the ID to reference when the template 
     * should be loaded. If a page already exists, the ID for that page is
     * returned instead.
     * 
     * @return int The ID of the page that TemplateManager is currently managing.
     * @since 0.1.0
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
     * @since 0.1.0
     * 
     */
    public function delete_page() { 
        
        if( wp_delete_post( $this->page_id, true ) ) :
            
            $this->page_id = null;
        
        endif;
        
    }
}

?>