jQuery( document ).ready( function( $ ) {
    
    ( function ( api ) {
        
        api.panel( 'felix_landing_page', function( panel ) {
            
            panel.expanded.bind( function( isExpanded ) {
                
                api.previewer.previewUrl.set( isExpanded ? FelixCustomizer.page_url : api.settings.url.home );
                
            } );
            
        } );
        
    } ( wp.customize ) );
    
});
