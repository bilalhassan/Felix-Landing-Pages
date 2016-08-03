<?php

/**
 * Main Plugin class, configures and initializes plugin.
 * 
 * @author Eric Green <eric@smartcat.ca>
 * @since 0.9.0
 * 
 */

if( !class_exists( 'LandingPagePlugin' ) ) :

class Felix_LandPlugin {
    
    const DEV_MODE = true;
    
    private static $instance;
    
    private $page_creator;
    private $template_manager;
    private $customizer_config;
    private $admin;
    
    
    /**
     * Get the static instance of the main plugin class.
     * 
     * @return Felix_LandPlugin The main class' instance
     * @since 0.9.0
     * 
     */
    public static function instance() {
        
        if( self::$instance == null ) :

            self::$instance = new self();
          
        endif;
        
        return self::$instance;
        
    }
    
    /**
     * Set the TemplateManager.
     * 
     * @param TemplateManager $template_manager
     * @return void
     * @since 0.9.0
     * 
     */
    public function set_template_manager( $template_manager ) {  
        $this->template_manager = $template_manager; 
    }
    
    /**
     * Set the CustomizerConfig.
     * 
     * @param Felix_CustomizerConfig $customizer_config
     * @return void
     * @since 0.9.0
     * 
     */
    public function set_customizer_config( $customizer_config ) {
        $this->customizer_config = $customizer_config;
    }
    
    /**
     * Set the PageCreator.
     * 
     * @param PageCreator $page_creator
     * @return void
     * @since 0.9.0
     * 
     */
    public function set_page_creator( $page_creator ) {
        $this->page_creator = $page_creator;
    }
    
    public function set_admin( $admin_page ) {
        $this->admin = $admin_page;
    }
    
    /**
     * Configure the runnable state of the plugin class.
     * 
     * @param type $template_manager Template manager to manage the landing page
     * @return void 
     * @since 0.9.0
     * 
     */
    public function run() {
        
        $options = get_option( 'felix_landing_page_options' );
        $template_config = get_option( 'felix_landing_page_template' );  
        
        $this->set_customizer_config( new Felix_CustomizerConfig() );
        $this->set_page_creator( new PageCreator() );
        $this->set_admin( new Felix_Admin( 'Landing Page Options', 'Landing Page', 'landing-page-admin', $options ) );
        $this->set_template_manager( new TemplateManager( $options['landing_page_id'], $options, $template_config, 'landing_page' ) );
        
        $this->add_hooks();
        
    }
    
    /**
     * Configure WordPress hooks.
     * 
     * @return void
     * @since 0.9.0
     * 
     */
    private function add_hooks() {
        
        add_action( 'init', array( $this, 'localize' ) );
        add_action( 'admin_init', array( $this, 'first_run_redirect' ) );
        
        $this->admin->add_hooks();
        $this->template_manager->add_hooks();
        $this->customizer_config->add_hooks();
        
    }
    
    /**
     * Load plugin default options on activate.
     * 
     * @return void
     * @since 0.9.0
     * 
     */
    public function activate() {  
        
        if( !get_option( 'felix_landing_page_options' ) ) :
            
            $options = array(
                'templates_dir'         => FELIX_LAND_PATH . 'inc/templates/',
                'templates_dir_url'     => FELIX_LAND_URL . 'inc/templates/',
                'global_res_url'        => FELIX_LAND_URL . 'inc/assets/',
                'theme_templates_dir'   => 'Felix/templates/'
            );
        
            $page_creator = new PageCreator();
            $options['landing_page_id'] = $this->page_creator->create_page();
            
            add_option( 'felix_landing_page_options', $options );
            
        endif; 
        
        if( !get_option( 'felix_landing_page_template' ) ) :
            
            include( __DIR__ . './../configs/template_defaults.php' );
            
            add_option( 'felix_landing_page_template', $template_defaults );
            
        endif;
        
    }
    
    public function first_run_redirect() {
        
        if( get_option( 'felix_template_redirect', false ) ) :
            
            delete_option( 'felix_template_redirect' );
        
            wp_redirect( admin_url( 'options-general.php?page=' . $this->admin->get_menu_slug() ) ); 
     
        endif;
        
    }

    /**
     * Run plugin deactivation routine. If developer mode is enabled, all options
     * will be cleared,
     * 
     * @return void
     * @since 0.9.0
     * 
     */
    public function deactivate() {
        
        if( self::DEV_MODE ) :
            
            $options = get_option( 'felix_landing_page_options' );
            
            $this->page_creator->delete_page( $options['landing_page_id'] );
            
            delete_option( 'felix_landing_page_options' );
            delete_option( 'felix_landing_page_template' );
            
        endif;
        
    }
    
    /**
     * Localize strings.
     * 
     * @return void
     * @since 0.9.0
     */
    public function localize() {
        
        load_plugin_textdomain( 'felix-landing-page', FALSE, FELIX_LAND_PATH . 'languages' );
        
    }

}

endif;

?>