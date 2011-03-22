

<form action="" method="post">
    <table id="tbTimeSheet">
        <input type="button" id="buttonHistorique" value="Historique" />
        <caption>
            Feuille de temps

            <select>
                <option>Napster</option>
            </select>


        </caption>
        <thead>
            <tr>
                <th>
                    Type de tâche
                </th>
                <th>
                    label
                </th>
                <th>
                    Travaux effectués
                </th>
                <th>
                    Lien mantis
                </th>
                <th>
                    Temps passé
                </th>
                <th>
                    Tâche terminée
                </th>
                <th>
                    Commentaires
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Integration
                </td>
                <td>
                    Menu latéral qui n'est pas au centre
                </td>
                <td>
                    rajouter des boutons, corriger les margin et remis en forme la pop-in
                </td>
                <td>
                    http://matis.glovz.fr/napster
                </td>
                <td>
                    3 heures et 45 minutes
                </td>
                <td>
                    <input type="checkbox" id="" name=""/>

                </td>
                <td>
                    une incompatibilité des float m'a fait prendre beaucoup de retard
                </td>
            </tr>
            <tr>
                <td colspan="7">
                    <button type="button" title="ajouter une tâche" id="nouvelleTache">Nouvelle tâche</button>
                </td>
            </tr>
        </tbody>
    </table>
</form>
<div id="dialogFormNouvelleTache" class="dialogForm ui-dialog" title="Nouvelle tâche">{$formNewTache}</div>
<script type="text/javascript">
    
    {literal}
    $( ".dialogFormNouvelleTache" ).dialog({
        autoOpen: false,
        width: 650,
        modal: true,
        closeOnEscape: true
    });
    $("#nouvelleTache").click(function(){
        $( "#dialogFormNouvelleTache" ).dialog( "open" );
    });
    $(function() {
        $( "#slider" ).slider({
            value:15,
            min: 15,
            max: 1440,
            step: 15,
            slide: function( event, ui ) {
                var heures = Math.round(ui.value/60);
                var minutes = ui.value%60;
                var inputTexte = heures +"heures";
                if(minutes != 0) {
                    inputTexte += " et "+ minutes +" minutes";
                }
                $( "#inputSlider" ).val( inputTexte );
            }
        });
        var inputStartTexte = Math.round($( "#slider" ).slider( "value" )/60);
        if($( "#slider" ).slider( "value" )%60 != 0) {
            inputStartTexte += " et "+ $( "#slider" ).slider( "value" )%60 +" minutes";
        }
        $( "#inputSlider" ).val(  inputStartTexte  );
    });
        {/literal}
    
</script>

