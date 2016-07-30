jQuery(document).ready( function($) {
    
    
    var button = '<li class="control-section">\n\
                    <h3 class="accordion-section-title">\n\
                        <a href="">View Landing Page</a>\n\
                    </h3>\n\
                </li>';
    
    var selector = $('#accordion-panel-felix_landing_page .control-panel-content');
    
    $('.panel-meta', selector).after(button);
    
});