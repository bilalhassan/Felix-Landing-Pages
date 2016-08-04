jQuery(document).ready( function($) {
    

    (function ( api ) {
        api.panel( 'felix_landing_page', function( panel ) {
            panel.expanded.bind( function( isExpanded ) {
                var url;
                if ( isExpanded ) {
                    url = FelixCustomizer.page_url;
                }else{
                    url = api.settings.url.home;
                }
                
                api.previewer.previewUrl.set( url );
                
            } );
        } );
    } ( wp.customize ) );
    
});