<?php
/**
 * Output default Footer block.
 * 
 * @since 0.9.0
 * 
 */
?>

<footer>

    <div id="footer-container" class="container-fluid">
        
        <div class="row">
            
            <div class="col-sm-12">
                
                <div class="container">
                    
                    <div class="row">
                       
                        <?php foreach( $options[ 'footer_textboxes' ] as $textbox ) : ?>

                            <?php if( $textbox != '' ) : ?>
 
                                <div class="footer-text col-sm-6">
                                    <?php echo esc_html( $textbox ); ?>
                                </div>

                            <?php endif; ?>

                        <?php endforeach; ?>
                        
                        <div class="col-sm-12">
                            
                            <?php if( $options[ 'footer_copyright_text' ] != '' ) : ?>

                                <div id="footer-copyright">
                                    <?php echo esc_html( 'Copyright © ' . $options[ 'footer_copyright_text' ] ); ?>
                                </div>

                            <?php endif; ?>

                        </div>
                       
                    </div>
                    
                </div>
    
            </div>
            
        </div>
        
    </div>
                        
</footer>