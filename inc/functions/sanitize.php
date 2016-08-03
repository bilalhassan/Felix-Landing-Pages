<?php

function felix_sanitize_select( $value, $setting ) {
    global $wp_customize;
 
    $control = $wp_customize->get_control( $setting->id );
 
    if ( !array_key_exists( $value, $control->choices ) ) :
        $value = $setting->default;
    endif;

    return $value;
}

function felix_sanitize_num( $value ) {
    
    if( is_int( $value ) ) :
        
        $new_value = inval( $value );
        
    elseif( is_float( $value ) ) :
       
        $new_value = floatval( $value );
    
    else :
        
        $new_value = 0;
    
    endif;
    
    return intval( $value );
}
