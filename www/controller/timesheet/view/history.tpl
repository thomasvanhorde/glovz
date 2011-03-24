<a href="../"><button type="button" id="buttonHistorique">Non validée</button></a>

<table id="tbTimeSheet">
	<caption>Feuille de temps validée</caption>
	<thead>
		<tr>
			<th>Type de tâche</th>
			<th>Label</th>
			<th>Travaux effectués</th>
			<th>Lien Mantis</th>
			<th>Temps passé</th>
			<th>Terminé</th>
			<th>Commentaires</th>
			{if $isDT }
			<th>Actions</th>
			{/if}
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
				{if $isDT}
				<td><a href="{$BASE_URL}project/edit-task/{$tache->_id}/">Modifier</a></td>
				{/if}
			</tr>
		{/foreach}
	</tbody>
</table>
