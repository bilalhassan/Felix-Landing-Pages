<?php

/**
 * Manages the loading and configuration of the landing page.
 * 
 * @author Eric Green <eric@smartcat.ca>
 * @since 0.1.0
 * 
 */
class TemplateManager {
    
    private $template_package;
    private $template_config;
    private $options;
    private $page_id;
    
    private $default_path;
    private $override_path;

    /**
     * @param int $page_id ID of page to manage.
     * @param array $options Options to use.
     * @param array $template_config Configuration for the template.
     * @param string $template_package The package name for the template.
     * @since 0.1.0
     * 
     */
    public function __construct( $page_id, $options, $template_config, $template_package ) {
        
        $this->set_page_id( $page_id );
        $this->set_options( $options );
        $this->set_template_config( $template_config );
        $this->set_template( $template_package );
        
    }
    
    /**
     * Set the ID for the page to manage.
     * 
     * @param string $page_id
     * @return void
     * @since 0.1.0
     * 
     */
    public function set_page_id( $page_id ) {
        $this->page_id = $page_id;
    }
    
    /**
     * Plugin-wide options for the template.
     * 
     * @param array $options
     * @return void
     * @since 0.1.0
     * 
     */
    public function set_options( $options ) {
        $this->options = $options;
    }
    
    /**
     * Parameters for configuring the template.
     * 
     * @param array $template_config
     * @return void
     * @since 0.1.0
     * 
     */
    public function set_template_config( $template_config ) {
        $this->template_config = $template_config;
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
        
        $this->default_path = $this->options['templates_dir'] . $this->template_package;
        $this->override_path = $this->options['theme_templates_dir'] . $this->template_package;
        
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
                wp_enqueue_style('felix-font-primary', '//fonts.googleapis.com/css?family=' . $fonts[ $this->template_config['primary_font'] ], array(), FELIX_LAND_VER );
            endif;
            
            if( isset( $this->options['secondary_font'] ) ) :
                wp_enqueue_style('felix-font-secondary', '//fonts.googleapis.com/css?family=' . $fonts[ $this->template_config['secondary_font'] ], array(), FELIX_LAND_VER );
            endif;
            
            wp_enqueue_style( 'font-awesome', $this->options['global_res_url'] .'styles/font-awesome.min.css', array(), FELIX_LAND_VER );
            wp_enqueue_style( 'bootstrap-theme', $this->options['global_res_url'] . 'styles/bootstrap-theme.min.css', array(), FELIX_LAND_VER );
            wp_enqueue_style( 'bootstrap', $this->options['global_res_url'] . 'styles/bootstrap.min.css', array(), FELIX_LAND_VER );          
            
        endif;
 
    }
    
    /**
     * Enqueue scripts and styles from default template package.
     * 
     * @return void
     * @since 0.1.0
     *  
     */
    public function enqueue_template_scripts() {
        
        if( $this->is_page() ) :          

            foreach( glob( $this->default_path . '/styles/*.css' ) as $file ) :

                wp_enqueue_style( 
                    sanitize_title( basename( $file, '.css' ) ), 
                    $this->options['templates_dir_url'] . $this->template_package . '/styles/' . basename( $file ),
                    array(), 
                    FELIX_LAND_VER 
                );

            endforeach;

            foreach( glob( $this->default_path  . '/scripts/*.js' ) as $file ) :
                
                $jquery = $this->parse_file( $file, 'jQuery' );
            
                wp_enqueue_script( 
                    sanitize_title( basename( $file, '.js' ) ), 
                    $this->options['templates_dir_url'] . $this->template_package . '/scripts/' . basename( $file ), 
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
     * 
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

}

?>