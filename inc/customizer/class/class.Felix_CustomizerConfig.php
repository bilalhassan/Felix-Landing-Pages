<?php

/**
 * Configure $wp_customize.
 * 
 * @author Eric Green <eric@smartcat.ca>
 * @since 0.9.0
 * 
 */

if( !class_exists( 'Felix_CustomizerConfig' ) ) :

require __DIR__ . './../../functions/sanitize.php';
    
class Felix_CustomizerConfig {
    
    /**
     * Register WordPress hooks.
     * 
     * @return void
     * @since 0.9.0
     * 
     */
    public function add_hooks() {
        
        add_action( 'customize_register', array( $this, 'register_config') );
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_scripts') );
        
    }
    
    /**
     * Enqueue scripts and styles.
     * 
     * @return void
     * @since 0.9.0
     * 
     */
    public function enqueue_scripts() {
        
        $options = get_option( 'felix_landing_page_options' );
        
        $localize = array(
            'page_url'  => get_permalink( $options['landing_page_id'] ),
            'ajax_url'  => admin_url( 'admin-ajax.php' )
        );
        
        wp_enqueue_script( 'felix-customizer-js', FELIX_LAND_URL. 'inc/customizer/assets/scripts/customizer.js', array( 'jquery', 'customize-controls' ), FELIX_LAND_VER, true );
        wp_localize_script( 'felix-customizer-js', 'FelixCustomizer', $localize );
        
    }
    
    /**
     * Setup the customizer.
     * 
     * @param WP_Customize_Manager $wp_customize
     * @return void
     * @since 0.9.0
     * 
     */
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
            'footer'    => __( 'Footer', 'felix-landing-page' )
        );

        return $blocks;

    }

    /**
     * Get the available font choices.
     * 
     * @return array
     * @since 0.9.0
     * 
     */
    private function get_font_choices() {

        include( FELIX_LAND_CONF . 'font_choices.php');

        return $fonts;

    }
    
}

endif;

?>