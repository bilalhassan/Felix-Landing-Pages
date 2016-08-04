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
                
                <!-- <div id="pre-header">
        
                    <span>HELLO, DAVID</span>
                    <a href="#" class="accent-button">CART</a>
                    <a href="#" class="accent-button">ACCOUNT</a>

                </div>-->

                <div id="header-block">
                    
                    <div id="branding-block">

                        <?php if ( $options[ 'header_title_or_logo' ] == 'both' ) : ?>
                        
                            <img src="<?php echo esc_url( $options[ 'header_logo' ] ); ?>" alt="<?php echo esc_attr( $options[ 'header_title' ] ); ?>" />
                            <h1><?php echo esc_html( $options[ 'header_title' ] ); ?></h1>
                            
                        <?php elseif ( $options[ 'header_title_or_logo' ] == 'logo' ) : ?>
                            
                            <img src="<?php echo esc_url( $options[ 'header_logo' ] ); ?>" alt="<?php echo esc_attr( $options[ 'header_title' ] ); ?>" />
                            
                        <?php else : ?>
                            
                            <h1><?php echo esc_html( $options[ 'header_title' ] ); ?></h1>
                            
                        <?php endif; ?>

                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    
</header>


        