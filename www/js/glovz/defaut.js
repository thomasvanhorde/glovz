/***
 * Fonctions de base
 */

var Base = {
    SelectMenu: function (){
        URL_en_cour = document.location.href;
        $.each(jQuery('#menu a'), function(index, value) {
            element = jQuery(value);
            url = element.attr('href');
        	url = url.split('/');
            $.each(url), function(indice, valeur) {            
	            if (url[indice] == URL_en_cour)
	                url[valeur].addClass('actif');
	        }
        });
    }
}


/***
 * On document loaded
 */
jQuery(document).ready(function() {
    Base.SelectMenu();
});
