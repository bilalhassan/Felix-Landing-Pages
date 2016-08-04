jQuery( document ).ready( function( $ ) {
    
    function init() { 
        
        $( '#plugin-details' ).hide();  
        
    } init();
    
    
    var hide = true;
    
    $( '#details-toggle' ).click( function( e ) {
        
        e.preventDefault();
        
        $( '#plugin-details' ).slideToggle();
        
        $( '#details-toggle' ).text( hide ? 'Show less' : 'Show more' );

        hide = !hide;
        
    } );

});
