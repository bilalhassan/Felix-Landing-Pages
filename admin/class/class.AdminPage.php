<?php

class AdminPage {
    
    private $admin_title;
    private $menu_title;
    private $menu_slug;
    private $capability;
    
    public function __construct( $admin_title, $menu_title, $menu_slug ) {
        
        $this->admin_title = $admin_title;
        $this->menu_title = $menu_title;
        $this->menu_slug = $menu_slug;
        $this->capability = 'manage_options';
        
    }
    
    public function add_hooks() {
        
        add_action( 'admin_menu', array( $this, 'register' ) );
        add_filter( 'plugin_action_links_' . FELIX_LAND, array( $this, 'add_settings_link' ) );
        
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
        
        $url = get_admin_url() .'options-general.php?page=landing-page-options';

        $settings_link = '<a href="' . $url . '">' . __( 'Settings', 'felix-landing-page' ) .'</a>'; 

        array_push( $links, $settings_link ); 

        return $links; 
    }

    public function options_page() { 

     $options = get_option( 'felix_landing_page_options' ); ?>

        <div class="wrap">
            <h1><?php _e( 'Felix Landing Page', 'felix-landing-page' ); ?>
                <a href="<?php echo admin_url( 'customize.php?url=' . get_permalink( $options['landing_page_id'] ) ) ?>" class="button-primary button"><?php _e( 'Customize', 'felix-landing-page' ) ?></a>
            </h1>
            <h2 class="screen-reader-text"><?php _e( 'Felix Landing Page', 'felix-landing-page' ); ?></h2>
            <table class="card large-text">
                <tr>
                    <td scope="row">
                        <h2><?php _e( 'Create landing pages with ease!', 'felix-landing-page' ); ?></h2>
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        <p><?php _e( 'Felix landing Page lets you effortlessly create a custom landing page for your website using the WordPress customizer.', 'felix-landing-page' ); ?></p>    
                    </td> 
                </tr>
                <tr>
                    <td scope="row">
                        <h3><?php _e( 'Getting Started', 'felix-landing-page' ); ?></h3>    
                    </td> 
                </tr>
                <tr>
                    <td scope="row">
                        <p><?php _e( 'Simply click the "Customize" button and select the "Felix Landing Page" panel to begin customizing.', 'felix-landing-page' ); ?></p>
                    </td> 
                </tr>
                <tr>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><a href="#" id="show-more"><?php _e( 'Show more', 'felix-landing-page' ); ?></a></p>
                    </td>
                </tr>
            </table>
        </div>
    
    <?php }
    
}

?>