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

                        <?php if ( $options[ 'products_header' ] != '' ) : ?> 
                        
                            <div id="products-header" class="col-sm-12">

                                <div class="row">

                                    <div class="col-xs-12">

                                        <h2><?php echo esc_html( $options[ 'products_header' ] ); ?></h2>
                                        <hr>

                                    </div>

                                </div>

                            </div>

                        <?php endif; ?>

                    </div>

                </div>
                
                <div class="container" id="products">
               
                    <div class="row">
                
                        <?php if ( ! empty( $options[ 'products' ] ) ) : ?>
                        
                            <?php $has_products = false; ?>
                        
                            <?php foreach ( $options[ 'products' ] as $product_ID ) : ?>
                        
                                <?php if ( $product_ID != '' && $product_ID != 'none' ) : ?>
                        
                                    <?php $has_products = true; ?>
                                    <?php $the_product = get_post( $product_ID ); ?>

                                    <div class="col-sm-4">

                                        <?php if ( has_post_thumbnail( $the_product->ID ) ) : ?>
                                            <a href="<?php echo esc_url( get_permalink( $the_product->ID ) ); ?>">
                                                <img alt="<?php echo esc_attr( $the_product->post_title ); ?>" src="<?php echo esc_url( get_the_post_thumbnail_url( $the_product->ID ) ); ?>" />
                                            </a>
                                        <?php endif; ?>

                                        <div class="prod-body">

                                            <h4><a href="<?php echo esc_url( get_permalink( $the_product->ID ) ); ?>"><?php echo esc_html( $the_product->post_title ); ?></a></h4>
                                            <h3><?php echo esc_html( get_post_meta( $the_product->ID, '_regular_price', true ) . __( ' USD', 'felix-landing-page' ) ); ?></h3>
                                            <p>
                                                <?php echo esc_html( $the_product->post_content ); ?>
                                            </p>

                                        </div>

                                    </div>

                                <?php endif; ?>
                        
                            <?php endforeach; ?>
                        
                            <?php if ( ! $has_products ) : ?>
                        
                                <div id="no-products" class="col-sm-12">
                                
                                    <h2><?php _e( 'There are no products to display.', 'felix-landing-page') ?></h2>

                                </div>
                        
                            <?php endif; ?>
                        
                        <?php else : ?>
                        
                            <div id="no-products" class="col-sm-12">
                                
                                <h2><?php _e( 'There are no products to display.', 'felix-landing-page') ?></h2>
                                
                            </div>
                        
                        <?php endif; ?>
                        
                    </div>
                    
                </div>

            </div>
            
        </div>
            
    </div>
          
</section>