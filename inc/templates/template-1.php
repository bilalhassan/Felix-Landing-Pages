<?php

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
                    require_once( FELIX_LANDING_PAGE_TEMPLATE_PARTS . 'block-header.php' );
                    break;

                case 'hero': 
                    require_once( FELIX_LANDING_PAGE_TEMPLATE_PARTS . 'block-jumbotron.php' );
                    break;

                case 'navbar': 
                    require_once( FELIX_LANDING_PAGE_TEMPLATE_PARTS . 'block-navbar.php' );
                    break;

                case 'products':
                    require_once( FELIX_LANDING_PAGE_TEMPLATE_PARTS . 'block-products.php' );
                    break;

                case 'content':
                    require_once( FELIX_LANDING_PAGE_TEMPLATE_PARTS . 'block-content.php' );
                    break;

                case 'articles':
                    require_once( FELIX_LANDING_PAGE_TEMPLATE_PARTS . 'block-articles.php' );
                    break;

                case 'footer':
                    require_once( FELIX_LANDING_PAGE_TEMPLATE_PARTS . 'block-footer.php' );
                    break;

            endswitch;

        endforeach;
        
        ?>
    </body>      
</html>
