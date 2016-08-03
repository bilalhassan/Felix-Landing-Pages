<?php

/**
 * Plugin admin page.
 * 
 * @author Eric Green <eric@smartcat.ca>
 * @since 0.9.0
 */

if( !class_exists( 'Admin' ) ) :

class Felix_Admin {
    
    private $admin_title;
    private $menu_title;
    private $menu_slug;
    private $capability;
    private $options;
    
    /**
     * @param string $admin_title
     * @param string $menu_title
     * @param string $menu_slug
     * @param array $options
     * @since 0.9.0
     */
    public function __construct( $admin_title, $menu_title, $menu_slug, $options ) {
        
        $this->options = $options;
        
        $this->admin_title = $admin_title;
        $this->menu_title = $menu_title;
        $this->menu_slug = $menu_slug;
        $this->capability = 'manage_options';
        
    }
    
    /**
     * Get the slug for the admin page.
     * 
     * @return string
     */
    public function get_menu_slug() {
        return $this->menu_slug;
    }

    /**
     * Register WP hooks.
     * 
     * @since 0.9.0
     * @return void
     * 
     */
    public function add_hooks() {
        add_action( 'admin_menu', array( $this, 'register' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
        add_filter( 'plugin_action_links_' . FELIX_LAND, array( $this, 'add_settings_link' ) );
        
    }
    
    /**
     * Enqueue scripts and styles.
     * 
     * @return void
     * @since 0.9.0
     * 
     */
    public function enqueue_scripts() {
        wp_enqueue_script( 'admin', FELIX_LAND_URL . 'admin/assets/scripts/admin.js', array(), FELIX_LAND_VER );
    }
    
    /**
     * Register the admin page in the settings menu.
     * 
     * @return void
     * @since 0.9.0
     * 
     */
    public function register() {
        
        add_options_page( 
            $this->admin_title, 
            $this->menu_title, 
            $this->capability, 
            $this->menu_slug, 
            array( $this, 'options_page' ) 
        );
        
    }
    
    /**
     * Add a link to admin page in plugins page.
     * 
     * @param array $links
     * @return array
     * @since 0.9.0
     * 
     */
    public function add_settings_link( $links ) { 
        
        $url = get_admin_url() .'options-general.php?page=' . $this->menu_slug;

        $settings_link = '<a href="' . $url . '">' . __( 'Settings', 'felix-landing-page' ) .'</a>'; 

        array_push( $links, $settings_link ); 

        return $links; 
    }

    /**
     * Render the admin page.
     * 
     * @return void
     * @since 0.9.0
     * 
     */
    public function options_page() { 
        require( __DIR__ . './../views/main.php' );
    }
    
}

endif;

?>