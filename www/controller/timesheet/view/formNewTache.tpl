<p><input type="text" name="inputSlider" id="inputSlider" value="" /></p>

<div id="slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"></div>

<script type="text/javascript">
    {literal}

    $(function() {
        $( "#slider" ).slider({
            range: "min",
            value: 15,
            min: 15,
            max: 1440,
            step: 15,
            slide: function( event, ui ) {
                var heures = Math.floor(ui.value/60);
                var minutes = ui.value%60;
                var inputTexte = "";

                jQuery('#formTask_duree').val(ui.value / 60);

                if (heures != 0) {
                    inputTexte += heures +" heure";
                    if (heures != 1) {
                        inputTexte += "s";
                    }
                    if(minutes != 0) {
                        inputTexte += " et "+ minutes +" minutes";
                    }
                } else if(minutes != 0) {
                    inputTexte += minutes +" minutes";
                }
                $( "#inputSlider" ).val( inputTexte );
            }
        });
        var inputStartTexte = "";
        var startHeures = Math.floor( $( "#slider" ).slider( "value" ) /60 );
        var startMinutes = $( "#slider" ).slider( "value" )%60;

        jQuery('#formTask_duree').parents('dd').find('img').hide();
        jQuery('#inputSlider').parents('p').find('img').hide();
        jQuery('#inputSlider').parents('p').find('.NFTextCenter').css('background','none');

        
        if (startHeures != 0 ) {
            inputStartTexte = startHeures +" heure";
            if (startHeures != 1) {
                inputStartTexte += "s";
            }
            if(startMinutes != 0) {
                inputStartTexte += " et "+ startMinutes +" minutes";
            }
        } else if(startMinutes != 0) {
            inputStartTexte += startMinutes +" minutes";
        }
        $( "#inputSlider" ).val(  inputStartTexte  );
    });
    {/literal}
</script>
