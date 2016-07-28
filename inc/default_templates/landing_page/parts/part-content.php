<?php
/**
 * Output default Content block.
 * 
 * @since 0.1.0
 * 
 */
?>

<section>
                        
    <?php if( $options['content_title'] != '' ) : ?>

        <h1><?php echo esc_html( $options['content_title'] ); ?></h1>

    <?php endif;

    
    if( $options['content_subtitle'] != '' ) : ?>

        <h2><?php echo esc_html( $options['content_subtitle'] ); ?></h2>

    <?php endif; 

    
    if( $options['content_content'] != '' ) : ?>

        <p><?php echo esc_html( $options['content_content'] ); ?></p>

    <?php endif;

    
    foreach( $options['content_buttons'] as $button ) : 

        if( $button['text'] != '' && $button['url'] ) : ?>

            <button href="<?php echo esc_url( $button['url'] ); ?>"><?php echo esc_html( $button['text'] );  ?></button>

        <?php endif;

    endforeach; ?>

</section>