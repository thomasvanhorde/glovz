<a href="history/"><button type="button" id="buttonHistorique">Historique</button></a>

<table id="tbTimeSheet">
	<caption>
		Feuille de temps non validée - Semaine {$semaine}
	</caption>
	<thead>
		<tr>
			<th>Type de tâche</th>
			<th>Label</th>
			<th>Travaux effectués</th>
			<th>Lien Mantis</th>
			<th>Temps passé</th>
			<th>Terminé</th>
			<th>Commentaires</th>
			{if $isDT }<th>
				Actions
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
				<td><a href="{$BASE_URL}timesheet/{$tache->_id}/">{$tache->label} ({$tache->projet->nom})</a></td>
				<td>{$tache->travail}</td>
				<td>{$tache->mantis}</td>
				<td>{$tache->duree}</td>
				<td>
					{if $tache->cloture}
						Oui
					{else}
						Non
					{/if}
				</td>
				<td>{$tache->commentaire}</td>
				{if $isDT }
				<td><a href="{$BASE_URL}project/edit-task/{$tache->_id}/">Modifier</a></td>
				{/if}
			</tr>
		{/foreach}
		<tr>
			<td colspan="8">
				<button type="button" id="nouvelleTache">Nouvelle tâche</button>
			</td>
		</tr>
	</tbody>
</table>

<div id="dialFormNewTask" class="ui-dialog display-none">{$formNewTache_classic}</div>

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
