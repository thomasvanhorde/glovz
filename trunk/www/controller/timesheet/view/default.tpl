
<a href="history/"><input type="button" id="buttonHistorique" value="Historique" /></a>

<form action="" method="post">
    <table id="tbTimeSheet">

        <caption>
            Feuille de temps non validé - semaine {$semaine}
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
                {if $isDT }<th>
                    Options
                </th>{/if}
            </tr>
        </thead>
        <tbody>
            {foreach from=$MyDayTache key=tache_id item=tache}
                <tr>
                    <td>
                        {if $tache->type == 0}Maquette{/if}
                        {if $tache->type == 1}Intégration{/if}
                        {if $tache->type == 2}Développement{/if}
                        {if $tache->type == 3}Test{/if}
                    </td>
                    <td>
                        <a href="{$BASE_URL}timesheet/{$tache->_id}/">{$tache->label} ({$tache->projet->nom})</a>
                    </td>
                    <td>
                        {$tache->travail}
                    </td>
                    <td>
                        {$tache->mantis}
                    </td>
                    <td>
                        {$tache->duree}
                    </td>
                    <td>
                        {if $tache->cloture}
                            oui
                        {else}
                            non
                        {/if}
                    </td>
                    <td>
                        {$tache->commentaire}
                    </td>
                    {if $isDT }<td>
                        <a href="{$BASE_URL}project/edit-task/{$tache->_id}/">modifier</a>
                    </td>{/if}
                </tr>
            {/foreach}

            <tr>
                <td colspan="8">
                    <a href="" title="">
                        <button type="button" title="ajouter une tâche" id="nouvelleTache">Nouvelle tâche</button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</form>

<div id="dialFormNewTask" class="ui-dialog" title="Nouvelle tache">{$formNewTache_classic}</div>

<script type="text/javascript">
    {literal}

    $(function() {
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
    });
    {/literal}
</script>
