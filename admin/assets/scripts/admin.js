jQuery( document ).ready( function( $ ) {
    
    // Setup the admin page
    function init() { 
        
        $( '#plugin-details' ).hide();  
        
    } init();
    
    
    var hide = true;
    
    // Hide or show extra details
    $( '#details-toggle' ).click( function( e ) {
        
        e.preventDefault();
        
        $( '#plugin-details' ).slideToggle();
        
        $( '#details-toggle' ).text( hide ? 'Show less' : 'Show more' );

        hide = !hide;
        
    } );

});
