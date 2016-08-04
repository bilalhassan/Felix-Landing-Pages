<?php
/**
 * Output default Featured Products block.
 * 
 * @since 0.9.0
 * 
 */
?>


<section id="products-block">
   
    <div id="products-container" class="container-fluid">
        
        <div class="row">
            
            <div class="col-sm-12">

                <div class="container">

                    <div class="row">

                        <div id="products-header" class="col-sm-12">

                            <div class="row">

                                <div class="col-xs-12">
                                    
                                    <?php if ( $options[ 'products_header' ] != '' ) : ?> 
                                        <h2><?php echo esc_html( $options[ 'products_header' ] ); ?></h2>
                                        <hr>
                                    <?php endif; ?>
                                        
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                
                <?php foreach ( $options[ 'products' ] as $product_ID ) : ?>

                    <?php $the_product = get_post( $product_ID ); ?>
                
                    
                
                <?php endforeach; ?>

            </div>
            
        </div>
            
    </div>
          
</section>