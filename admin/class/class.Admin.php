<?php

class AdminPage {
    
    private $admin_title;
    private $menu_title;
    private $menu_slug;
    private $capability;
    private $options;
    
    public function __construct( $admin_title, $menu_title, $menu_slug, $options ) {
        
        $this->admin_title = $admin_title;
        $this->menu_title = $menu_title;
        $this->menu_slug = $menu_slug;
        $this->capability = 'manage_options';
        
        $this->options = $options;
        
    }
    
    public function get_menu_slug() {
        return $this->menu_slug;
    }


    public function add_hooks() {
        
        add_action( 'admin_menu', array( $this, 'register' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
        add_filter( 'plugin_action_links_' . FELIX_LAND, array( $this, 'add_settings_link' ) );
        
    }
    
    public function enqueue_scripts() {
        wp_enqueue_script( 'admin', FELIX_LAND_URL . 'admin/assets/admin.js', array(), FELIX_LAND_VER );
    }
    
    public function register() {
        
        add_options_page( 
            $this->admin_title, 
            $this->menu_title, 
            $this->capability, 
            $this->menu_slug, 
            array( $this, 'options_page' ) 
        );
        
    }
    
    public function add_settings_link( $links ) { 
        
        $url = get_admin_url() .'options-general.php?page=' . $this->menu_slug;

        $settings_link = '<a href="' . $url . '">' . __( 'Settings', 'felix-landing-page' ) .'</a>'; 

        array_push( $links, $settings_link ); 

        return $links; 
    }

    public function options_page() { 
        require( __DIR__ . './../views/main.php' );
    }
    
}

?>