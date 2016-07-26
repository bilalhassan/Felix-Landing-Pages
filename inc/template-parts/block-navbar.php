<?php
/**
 * Output default Navigation Bar block.
 * 
 * @since 0.1.0
 * 
 */
?>

<section>
    <nav>

       <?php foreach( $options['navbar_links'] as $link) : 

           if( $link['text'] != '' && $link['url'] != '' ) : ?>

               <a href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_html( $link['text'] ); ?></a>

           <?php endif;

        endforeach; ?>

    </nav>
</section>