

<form action="" method="post">
    <table id="tbTimeSheet">
        <input type="button" id="buttonHistorique" value="Historique" />
        <caption>
            Feuille de temps

            <select name="projects">
                {foreach from=$projects key=id item=project}
                <option value="{$id}"{$project.nom|utf8_decode}>{$project.nom|utf8_decode}</option>
                {/foreach}
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
                    <a href="" title="">
                        <button type="button" title="ajouter une tâche" id="nouvelleTache">Nouvelle tâche</button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</form>

<div id="dialFormNewTask" class="ui-dialog" title="Nouvelle tache">{$formNewTache}</div>
<script type="text/javascript">
    {literal}

    $( "#dialog:ui-dialog" ).dialog( "destroy" );
    $( "#dialFormNewTask" ).dialog( "destroy" );
    $( "#dialFormNewTask" ).dialog({
        autoOpen: false,
        width: 750,
        modal: true
    });
    $("#nouvelleTache").click(function(){
        $( "#dialFormNewTask" ).dialog( "open" );
            return false;
    });
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

