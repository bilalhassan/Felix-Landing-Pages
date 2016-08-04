<?php

/**
 * @package landing_page
 * 
 */

?>
<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <body>
        <?php 
        
        $options = get_option( 'felix_landing_page_template' );

        foreach( $options['blockorder'] as $block) :

            switch( $block ) :

                case 'header':
                    require_once( 'parts/part-header.php' );
                    break;

                case 'hero': 
                    require_once( 'parts/part-jumbotron.php' );
                    break;

                case 'navbar': 
                    require_once( 'parts/part-navbar.php' );
                    break;

                case 'products':
                    require_once( 'parts/part-products.php' );
                    break;

                case 'content':
                    require_once( 'parts/part-content.php' );
                    break;

                case 'articles':
                    require_once( 'parts/part-articles.php' );
                    break;

                case 'footer':
                    require_once( 'parts/part-footer.php' );
                    break;

            endswitch;

        endforeach;
        
        wp_footer();
        ?>
    </body>      
</html>
