<?php
/**
 * Output default Header block.
 * 
 * @since 0.9.0
 * 
 */
?>

<header id="header-block">
    
    <div id="header-container" class="container-fluid">
        
        <div class="row">
            
            <div class="col-sm-12">
                
                <div id="pre-header">
        
                    <span><?php echo get_option( 'header_title_or_logo', 'both' ); ?></span>
                    <a href="#" class="accent-button">CART</a>
                    <a href="#" class="accent-button">ACCOUNT</a>

                </div>

                <div id="header-block">
                    
                    <div id="branding-block">

                        <?php if ( get_option( 'header_title_or_logo', 'both' ) == 'both' ) : ?>
                        
                            <img src="<?php echo get_option( 'header_logo', FELIX_LAND_URL . 'inc/templates/landing_page/images/header-logo.png' ); ?>" alt="<?php echo get_option( 'header_title', __( 'Felix Landing Page', 'felix-landing-page' ) ); ?>" />
                            <h1><?php echo get_option( 'header_title', __( 'Felix Landing Page', 'felix-landing-page' ) ); ?></h1>
                            
                        <?php elseif ( get_option( 'header_title_or_logo', 'both' ) == 'logo' ) : ?>
                            
                            <img src="<?php echo get_option( 'header_logo', FELIX_LAND_URL . 'inc/templates/landing_page/images/header-logo.png' ); ?>" alt="<?php echo get_option( 'header_title', __( 'Felix Landing Page', 'felix-landing-page' ) ); ?>" />
                            
                        <?php else : ?>
                            
                            <h1><?php echo get_option( 'header_title', __( 'Felix Landing Page', 'felix-landing-page' ) ); ?></h1>
                            
                        <?php endif; ?>

                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    
</header>


        