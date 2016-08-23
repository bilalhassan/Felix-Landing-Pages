<?php
/**
 * View for main admin page
 * 
 * @since 0.9.0
 * 
 */

?>

<div class="wrap">
    <h1><?php _e( 'Felix Landing Page', 'felix-landing-page' ); ?>
        <a class="button button-secondary" href="<?php echo admin_url( 'customize.php?url=' . get_permalink( $this->options['landing_page_id'] ) ) ?>" class="page-title-action"><?php _e( 'Customize', 'felix-landing-page' ) ?></a>
        <a target="_BLANK" class="button button-primary" href="<?php echo get_permalink( $this->options['landing_page_id'] ); ?>" class="page-title-action"><?php _e( 'View Landing Page', 'felix-landing-page' ) ?></a>
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
                        <h4><?php _e( 'Modular Page Layout', 'felix-landing-page' ); ?></h4>
                        <p><?php _e( 'The landing page is made up of 7 sections called blocks. You can configure, reorder, or completely disable each block to tailor your page\'s experience.', 'felix-landing-page' ); ?>
                        </p>
                        <h4><?php _e( 'Hero Images', 'felix-landing-page' ); ?></h4>
                        <p>
                            <?php _e( 'In the Hero section you can set an eye catching full-width banner and optionally, a detail image to display what you\'re all about.', 'felix-landing-page' ); ?>
                        </p>
                        <h4><?php _e( 'Featured Articles and Products', 'felix-landing-page' ); ?></h4>
                        <p>
                            <?php _e( 'Show off your best, select up to 6 products and 3 articles to be featured for your visitors to browse when they visit your page.', 'felix-landing-page' ); ?>
                        </p>
                        <h4><?php _e( 'Call To Action', 'felix-landing-page' ); ?></h4>
                        
                    </td>

                </tr>
            </table>
        </div>
        <a href="#" id="details-toggle" class="button-"><?php _e( 'More', 'felix-landing-page' ); ?></a>
    </div>
</div>