<?php
/**
 * Output default Navigation Bar block.
 * 
 * @since 0.9.0
 * 
 */
?>

<section id="nav-bar-block">
    
    <div class="container">

        <div class="row">
            
            <div class="col-sm-12">
        
                <nav>

                   <?php foreach( $options['navbar_links'] as $link) : 

                       if( $link['text'] != '' && $link['url'] != '' ) : ?>

                           <a href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_html( $link['text'] ); ?></a>

                       <?php endif;

                    endforeach; ?>

                </nav>

            </div>
            
        </div>
        
    </div>
    
</section>