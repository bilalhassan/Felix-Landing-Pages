jQuery(document).ready( function($) {
    
    var selector = $('#accordion-panel-felix_landing_page .control-panel-content');
    var button = '<li class="control-section">\n\
                    <h3 class="accordion-section-title">\n\
                        <a class="clicker" href="' + FelixCustomizer.page_url + '">View Landing Page</a>\n\
                    </h3>\n\
                </li>';
    
    $( '.panel-meta', selector).after(button);
    
    
    $( selector ).on( 'click', '.clicker', function () {
        
        var data = {
            
            action  : 'reload_customizer'
            
        }
        
        
        $.post( FelixCustomizer.ajax_url, data, function ( response ) {
            alert( response );
        });
        
        return false;
        
    });
    
});