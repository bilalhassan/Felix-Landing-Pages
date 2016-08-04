<?php
/**
 * Output default Jumbotron block.
 * 
 * @since 0.9.0
 * 
 */
?>

<section id="jumbotron-block">
   
    <div id="jumbotron-container" class="container-fluid" style="background-image: url(<?php echo $options[ 'jumbotron_primary_toggle' ] == 'show' ? esc_url( $options[ 'jumbotron_primary_image' ] ) : ''; ?>);">
        
        <div class="row">
            
            <div class="col-sm-12">
                
                <div class="wrapper">
                    
                    <div class="inner">

                        <div id="jumbotron-cta">

                            <div class="inner">
                                
                                <?php if ( $options[ 'jumbotron_secondary_toggle' ] == 'show' && $options[ 'jumbotron_secondary_image' ] ) : ?>
                                    <img src="<?php echo esc_url( $options[ 'jumbotron_secondary_image' ] ); ?>" alt="<?php echo esc_attr( $options[ 'jumbotron_title' ] ); ?>" />
                                <?php endif; ?>
                                    
                                <?php if ( $options[ 'jumbotron_title' ] != '' ) : ?>
                                    <h2><?php echo esc_html( $options[ 'jumbotron_title' ] ); ?></h2>
                                <?php endif; ?>
                                
                                <?php if ( $options[ 'jumbotron_subtitle' ] != '' ) : ?>
                                    <p><?php echo esc_html( $options[ 'jumbotron_subtitle' ] ); ?></p>
                                <?php endif; ?>
                                    
                                <?php foreach ( $options['jumbotron_buttons'] as $button ) : ?>
                                
                                    <?php if ( $button[ 'text' ] ) : ?>
                                        <a href="<?php echo esc_url( $button[ 'url' ] ); ?>" class="accent-button"><?php echo esc_html( $button[ 'text' ] ); ?></a>
                                    <?php endif; ?>
                                        
                                <?php endforeach; ?>
                                    
                            </div>

                        </div>

                    </div>

                </div>

                <?php 
                $cta_count = 0;
                foreach ( $options[ 'jumbotron_footer_ctas' ] as $cta ) :
                    if ( $cta[ 'text' ] != '' ) :
                        $cta_count++;
                    endif;
                endforeach; 
                ?>
                
                <?php if ( $options[ 'jumbotron_footer_toggle' ] == 'show' && $cta_count > 0 ) : ?>
                
                    <div id="jumbotron-footer-wrapper">

                        <div class="container">

                            <div class="row">

                                <div id="jumbotron-footer" class="col-sm-12">

                                    <div class="row">

                                        <?php foreach ( $options[ 'jumbotron_footer_ctas' ] as $cta ) : ?>
                                        
                                            <div class="jumbotron-footer-cta col-xs-<?php echo 12 / $cta_count; ?>">
                                                <a href="<?php echo esc_url( $cta[ 'url' ] ); ?>"><?php echo esc_html( $cta[ 'text' ] ); ?></a>
                                            </div>
                                        
                                        <?php endforeach; ?>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                
                <?php endif; ?>
                
            </div>
            
        </div>
        
        
        
    </div>
    
</section>