<?php

function felix_land_autloader( $class ) {

    $root = FELIX_LAND_PATH;

    $iter = new RecursiveIteratorIterator( new RecursiveDirectoryIterator( 
        $root, RecursiveDirectoryIterator::SKIP_DOTS), 
        RecursiveIteratorIterator::SELF_FIRST, 
        RecursiveIteratorIterator::CATCH_GET_CHILD 
    );

    $paths = array();

    foreach ( $iter as $path => $dir ) :
        
        if ( $dir->isDir() && basename( $dir ) == 'class' ) :

            $path = $dir->getPathname();
        
            foreach( glob( $path . '/class.**.php' ) as $file ) :
            
                if(basename(str_replace('class.', '', $file), '.php') == $class ) :
                   
                    require_once( $file );
                
                endif;
            
            endforeach;

        endif;
        
    endforeach;
    
}
spl_autoload_register( 'felix_land_autloader' );