jQuery(document).ready(function() {
    function mapHandler () {
        
        jQuery('.mod-map-gr').each(function () {
        
            var json = jQuery.parseJSON(jQuery(this).find('.js-map-gr-json').val());
            
            ymaps.ready(init);
            
            function init() { 							
                mapGr = new ymaps.Map("page_map_gr"+json.id, {
                    center: [json.mapx, json.mapy],
                    zoom: json.mapzoom,
                    controls: ['zoomControl', 'typeSelector',  'fullscreenControl']
                }); 	

                var mapPlacemark = new ymaps.Placemark([json.mapx,json.mapy], {}, {});		
                                                                    
                mapGr.geoObjects.add(mapPlacemark);              

                
                mapGr.behaviors.disable('scrollZoom');
            }   
        });
    }
    
    mapHandler();
});