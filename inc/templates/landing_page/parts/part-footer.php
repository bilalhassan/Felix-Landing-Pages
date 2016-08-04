<?php
/**
 * Output default Footer block.
 * 
 * @since 0.9.0
 * 
 */
?>

<footer>
                        
    <?php if( $options['footer_copyright_text'] != '' ) : ?>

        <div><?php echo esc_html( $options['footer_copyright_text'] ) ?></div>

    <?php endif;

    foreach( $options['footer_textboxes'] as $textbox ) :

        if( $textbox != '' ) : ?>

            <div><?php echo esc_html( $textbox ) ?></div>

        <?php endif;

    endforeach; ?>

</footer>