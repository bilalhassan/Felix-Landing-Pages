<?php

/**
 * Handles creation and deletion of pages.
 * 
 * @author Eric Green <eric@smartcat.ca>
 * @since 0.9.0
 * 
 */

if( !class_exists( 'PageCreator' ) ) :

class PageCreator {
    
    /**
     * Adds a new post that will supply the ID to reference when the template 
     * should be loaded.
     * 
     * @return int The ID of the page that was created, false on failure.
     * @since 0.9.0
     * 
     */
    public function create_page() {

        $id = wp_insert_post( 
             array(
                'post_title' => __( 'Felix Landing Page' ),
                'post_status' => 'publish',
                'post_type' => 'page'
            )
        );

        return is_int( $id ) && $id > 0 ? $id : false;

} 

    /**
     * Deletes the page with the ID passed in.
     * 
     * @return Whether or not the page was deleted.
     * @since 0.9.0
     * 
     */
    public function delete_page( $page_id ) { 

        return wp_delete_post( $page_id, true ) ? true : false;
        
    }
}

endif;

?>