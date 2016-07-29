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
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
        add_filter( 'plugin_action_links_' . FELIX_LAND, array( $this, 'add_settings_link' ) );
        
    }
    
    public function enqueue_scripts() {
        wp_enqueue_script( 'admin', FELIX_LANDING_PAGE_URL . 'admin/assets/admin.js', array(), FELIX_LAND_VER );
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
            <a href="<?php echo admin_url( 'customize.php?url=' . get_permalink( $options['landing_page_id'] ) ) ?>" class="page-title-action"><?php _e( 'Customize', 'felix-landing-page' ) ?></a>
        </h1>
        <h2 class="screen-reader-text"><?php _e( 'Felix Landing Page', 'felix-landing-page' ); ?></h2>
        <div class="card">
            <h3><?php _e( 'Create landing pages with ease!', 'felix-landing-page' ); ?></h3>
            <p><?php _e( 'With Felix landing Page you can effortlessly create a custom landing page for your website in just a few simple clicks using the WordPress customizer.', 'felix-landing-page' ); ?></p>    
            <h4><?php _e( 'Getting Started', 'felix-landing-page' ); ?></h4>    
            <p><?php _e( 'Simply click the "Customize" button and select the "Felix Landing Page" panel to begin customizing.', 'felix-landing-page' ); ?></p>

            <div id="plugin-details">
                <table>
                    <tr>
                        <td>
                            <h3><?php _e( 'Customization Overview', 'felix-landing-page' ); ?></h3>
                            <h4><?php _e( 'Modular Template Structure', 'felix-landing-page' ); ?></h4>
                            <p><?php _e( 'The landing page is made up of 7 sections called blocks. '
                                        . 'You can configure, reorder, or completely disable each block '
                                        . 'to tailor your page\'s experience.', 'felix-landing-page' ); ?>
                            </p>
                            <h4><?php _e( 'Hero Images', 'felix-landing-page' ); ?></h4>
                            <p>
                                <?php _e( 'In the Hero section you can set a full width banner to really draw attention.', 'felix-landing-page' ); ?>
                            </p>
                            <h4><?php _e( 'Featured Articles and Products', 'felix-landing-page' ); ?></h4>
                            <p>
                                <?php _e( 'Show of your best, select up to 6 products and 3 articles to bea featured on your page.', 'felix-landing-page' ); ?>
                            </p>
                            <h4><?php _e( 'Call To Action', 'felix-landing-page' ); ?></h4>
                            <p>
                                <?php _e( 'Write about your product.', 'felix-landing-page' ); ?>
                            </p>
                        </td>
                        
                    </tr>
                </table>
            </div>
            <a href="#" id="details-toggle" class="button-primary"><?php _e( 'Show more', 'felix-landing-page' ); ?></a>
        </div>
    </div>
    
    <?php }
    
}

?>