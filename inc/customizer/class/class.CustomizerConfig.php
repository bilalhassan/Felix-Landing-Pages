<?php

/**
 * Description of CustomizerConfig
 *
 * @author eric
 */

if( !class_exists( 'CustomizerConfig' ) ) :

class Felix_CustomizerConfig {
    
    public function add_hooks() {
        
        add_action( 'customize_register', array( $this, 'register_config') );
         
    }

    public function register_config( $wp_customize ) {

        $wp_customize->add_panel( 'felix_landing_page', array(
            'title' => __( 'Felix Landing Page', 'felix-landing-page' ),
            'priority' => 10
        ) );

        require( __DIR__ . './../panels/general.php' );
        require( __DIR__ . './../panels/blockorder.php' );
        require( __DIR__ . './../panels/header.php' );
        require( __DIR__ . './../panels/jumbotron.php' );
        require( __DIR__ . './../panels/navbar.php' );
        require( __DIR__ . './../panels/products.php' );
        require( __DIR__ . './../panels/content.php' );
        require( __DIR__ . './../panels/articles.php' );
        require( __DIR__ . './../panels/footer.php' );

        $this->enqueue_scripts();
    }
    
    public function enqueue_scripts() {
         wp_enqueue_script( 'felix-land-customizer', FELIX_LAND_URL . 'inc/customizer/assets/scripts/customize.js', array( 'jquery'), FELIX_LAND_VER );
    }

    /**
     * Get an array of a given type of posts.
     * 
     * @param string $post_type
     * @param int $limit
     * @return array
     * @since 0.9.0
     * 
     */
    private function get_post_choices( $post_type = "post", $limit = -1 ) {

        $posts = get_posts( array(
            'post_type'     => $post_type,
            'numberposts'   => $limit,
            'post_status'   => 'publish',
            'orderby'       => 'title',
            'order'         => 'ASC'
        ) );

       $posts_array = array( 'none' => __( 'None' ) );

       foreach( $posts as $post ) :

           if( !empty( $post->ID ) ) :

               $posts_array[ $post->ID ] = $post->post_title;

           endif;

       endforeach;

       return $posts_array;

    }

    /**
     * Options for the block selection.
     * 
     * @return array
     * @since 0.9.0
     * 
     */
    private function get_block_choices() {

        $blocks = array(
            'disabled'  => __( 'Disabled', 'felix-landing-page' ),
            'header'    => __( 'Header', 'felix-landing-page' ),
            'jumbotron' => __( 'Hero', 'felix-landing-page' ),
            'navbar'    => __( 'Navigation Bar', 'felix-landing-page' ),
            'products'  => __( 'Featured Products', 'felix-landing-page' ),
            'content'   => __( 'Content', 'felix-landing-page' ),
            'articles'  => __( 'Featured Articles', 'felix-landing-page' ),
            'footer'    => __( 'Footer' )
        );

        return $blocks;

    }

    private function get_font_choices() {

        include( __DIR__ . './../../configs/font_choices.php');

        return $fonts;

    }
    
}

endif;

?>