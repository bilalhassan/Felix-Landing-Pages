<?php

add_action( 'admin_menu', 'admin_page');

function admin_page() {
    
    $page_title = 'Felix Landing Page Settings';
    $menu_title = 'Landing Page';
    $capability = 'manage_options';
    $menu_slug = 'landing-page-options';
    $callback = 'do_options';
    
    add_options_page( $page_title, $menu_title, $capability, $menu_slug, $callback );
    
}

function do_options() { ?>

    <?php $options = get_option( 'felix_landing_page_options' ); ?>

    <div class="wrap">
        <h1>Felix Landing Page</h1>
        <p></p>
        <a href="<?php echo admin_url( 'customize.php?url=' . get_permalink( $options['landing_page_id'] ) ) ?>" 
           class="button-primary button">
               <?php _e( 'Take me to the customizer', 'felix-landing-page' ) ?>
        </a>
    </div>
    
<?php }
 