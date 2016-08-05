<?php
/**
 * Output default Content block.
 * 
 * @since 0.9.0
 * 
 */
?>

<section id="action-call-block">
    
    <div class="container">

        <div class="row">
            
            <div id="call-outs" class="col-sm-7">
                        
                <?php if( $options[ 'content_title' ] != '' ) : ?>

                    <h3 class="title"><?php echo esc_html( $options[ 'content_title' ] ); ?></h3>

                <?php endif; ?>

                <?php if( $options[ 'content_subtitle' ] != '' ) : ?>

                    <h5 class="subtitle"><?php echo esc_html( $options[ 'content_subtitle' ] ); ?></h5>

                <?php endif; ?>

                <?php if( $options['content_content'] != '' ) : ?>

                    <div id="cta-content">

                        <p><?php echo esc_html( $options['content_content'] ); ?></p>

                    </div>

                <?php endif; ?>

            </div>

            <div id="buttons" class="col-sm-5">
            
                <?php foreach( $options[ 'content_buttons' ] as $button ) : ?>

                    <?php if( $button[ 'text' ] != '' && $button[ 'url' ] ) : ?>

                        <a class="cta-button" href="<?php echo esc_url( $button[ 'url' ] ); ?>"><?php echo esc_html( $button[ 'text' ] );  ?></a>

                    <?php endif; ?>

                <?php endforeach; ?>

            </div>
            
        </div>
        
    </div>
                        
</section>