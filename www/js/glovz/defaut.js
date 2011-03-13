/***
 * Fonctions de base
 */

var Base = {
    SelectMenu: function (){
        URL_en_cour = document.location.href;
        $.each(jQuery('#menu a'), function(index, value) {
            element = jQuery(value);
            url = element.attr('href');
            if(url == URL_en_cour)
                element.addClass('actif');
        });
    }
}


/***
 * On document loaded
 */
jQuery(document).ready(function() {
    Base.SelectMenu();
});
