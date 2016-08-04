<?php

/**
 * Description of CustomizerConfig
 *
 * @author eric
 */
class CustomizerConfig {
    
    public function add_hooks() {
        
        add_action( 'customize_register', array( $this, 'register_config') );
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_scripts') );
        
    }
    
    public function enqueue_scripts() {
        
        $options = get_option( 'felix_landing_page_options' );
        
        $localize = array(
            'page_url'  => get_permalink( $options['landing_page_id'] ),
            'ajax_url'  => admin_url( 'admin-ajax.php' )
        );
        
        wp_enqueue_script( 'felix-customizer-js', FELIX_LAND_URL. 'inc/customizer/assets/scripts/customizer.js', array( 'jquery', 'customize-controls' ), FELIX_LAND_VER, true );
        wp_localize_script( 'felix-customizer-js', 'FelixCustomizer', $localize );
        
    }
    
    public function register_config( $wp_customize ) {

        $wp_customize->add_panel( 'felix_landing_page', array(
            'title' => __( 'Felix Landing Page', 'felix-landing-page' ),
            'priority' => 10
        ) );

        require( __DIR__ . './../panels/panel-general.php' );
        require( __DIR__ . './../panels/panel-blockorder.php' );
        require( __DIR__ . './../panels/panel-header.php' );
        require( __DIR__ . './../panels/panel-jumbotron.php' );
        require( __DIR__ . './../panels/panel-navbar.php' );
        require( __DIR__ . './../panels/panel-products.php' );
        require( __DIR__ . './../panels/panel-content.php' );
        require( __DIR__ . './../panels/panel-articles.php' );
        require( __DIR__ . './../panels/panel-footer.php' );
        
    }

    /**
     * Get an array of a given type of posts.
     * 
     * @param string $post_type
     * @param int $limit
     * @return array
     * @since 0.1.0
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
     * @since 0.1.0
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

?>