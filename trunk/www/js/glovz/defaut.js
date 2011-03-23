/***
 * Fonctions de base
 */

$(document).ready(function () {
    $( ".dialogForm" ).dialog({
        autoOpen: false,
        width: 650,
        modal: true,
        closeOnEscape: true
    });
});

<!-- Typographies -->
Cufon.replace('h2', {fontFamily: 'Harabara'});
Cufon.replace('caption', {fontFamily: 'Harabara'});
Cufon.replace('h3, #menu a, legend, #en_tete p, #en_tete a, .ui-dialog-title', {fontFamily: 'Opificio'});



