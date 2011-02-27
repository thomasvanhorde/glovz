
function addElement(){
    kE++;
    ElemenList = jQuery('#elementList tr');
    clone = ElemenList.clone();
    jQuery('#StructList').append(clone);
    jQuery('#StructList').find('tr:last-child').fadeIn();
    jQuery.each(jQuery('#StructList').find('tr:last-child').find('input, select'), function(i, item){
        name = jQuery(item).attr('nameTmp').replace("keyId", kE);
        jQuery(item).attr('name', name).removeAttr('nameTmp');
    });
}

function deleteElement(elem){
    jQuery(elem).parents('tr').fadeOut(400, function(){ jQuery(this).remove()});
}

function lockLimit(){
    chmpTxt = jQuery('#StructList tr select');
    jQuery.each(chmpTxt, function(i, item){
       e = jQuery(item).parents('tr').find('.limit');
       val = item.value;
       if(val == 10){
        e.removeAttr('disabled');
       }
        else {
        e.val('').attr('disabled', 'disabled');
       }
     });
}
lockLimit();