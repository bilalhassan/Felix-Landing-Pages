<?php

/**
 * @package landing_page
 * 
 */

$options = get_option( 'felix_landing_page_template' );

?>
<html>
    <head>
        <?php wp_head(); ?>
        
        <style type="text/css">
            
            /* PRIMARY COLOR */
            #header-container,
            #pre-header,
            #branding-block,
            #jumbotron-footer,
            .product-roll-cta {
                background-color: <?php echo $options[ 'primary_color' ]; ?>;
            }
        
            #jumbotron-cta h2 {
                color: <?php echo $options[ 'primary_color' ]; ?>;
            }
            
            /* SECONDARY COLOR */
            .accent-button,
            section#nav-bar-block,
            #products-header {
                background-color: <?php echo $options[ 'accent_color' ]; ?>;
            }
            
            .prod-body h4 a {
                color: <?php echo $options[ 'accent_color' ]; ?>;
            }
            
            #products img {
                border-bottom: 10px solid <?php echo $options[ 'accent_color' ]; ?>;
            }
            
            /* FONTS */
            body,
            #pre-header,
            #branding-block h1,
            .accent-button,
            section#nav-bar-block nav a,
            #jumbotron-cta h2,
            #jumbotron-footer a,
            #products-header h2,
            .prod-body h4 {
                font-family: <?php echo $options[ 'primary_font' ]; ?>;
            }
            
            .prod-body h3,
            .prod-body p,
            .product-roll-cta h4,
            #no-products,
            #jumbotron-cta p {
                font-family: <?php echo $options[ 'secondary_font' ]; ?>;
            }
            
            #branding-block h1 {
                font-size: <?php echo $options[ 'header_font_size' ]; ?>px;
            }
        
            body {
                font-size: <?php echo $options[ 'body_font_size' ]; ?>px;
            }
            
            /* DIMENSIONS */
            #branding-block img {
                height: <?php echo $options[ 'header_logo_size' ]; ?>px;
                width: auto;
            }
            
        </style> 
        
    </head>
    <body>
        <?php 
        
        foreach( $options['blockorder'] as $block) :

            switch( $block ) :

                case 'header':
                    require_once( 'parts/part-header.php' );
                    break;

                case 'navbar': 
                    require_once( 'parts/part-navbar.php' );
                    break;
                
                case 'jumbotron': 
                    require_once( 'parts/part-jumbotron.php' );
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
