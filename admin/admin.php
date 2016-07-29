<?php

add_action( 'admin_menu', 'admin_page');
        
add_filter( 'plugin_action_links_' . FELIX_LAND, 'add_settings_link' );

function admin_page() {
    
    $page_title = 'Felix Landing Page Settings';
    $menu_title = 'Landing Page';
    $capability = 'manage_options';
    $menu_slug = 'landing-page-options';
    $callback = 'do_options';
    
    add_options_page( $page_title, $menu_title, $capability, $menu_slug, $callback );
    
}

function add_settings_link( $links ) { 
        
        $url = get_admin_url() .'options-general.php?page=landing-page-options';
        
        $settings_link = '<a href="' . $url . '">' . __( 'Settings', 'felix-landing-page' ) .'</a>'; 
        
        array_push( $links, $settings_link ); 

        return $links; 
    }

function do_options() { ?>

    <?php $options = get_option( 'felix_landing_page_options' ); ?>

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
 